/*
 * Autor: MarnueLgh
 * Fecha: 10/05/2026
 * Version: 1.0
 * Descripcion: Secuencia de imagenes de iPhone renderizada en canvas con scrubbing por scroll.
 */

const selector_secuencia = '[data-secuencia-iphone]';
const selector_canvas = '[data-secuencia-canvas]';
const ratio_pixel_maximo = 2;
const espera_redimension = 200;
const suavizado_scrub = 0.24;
const umbral_suavizado = 0.03;
const limite_precarga = 4;
const pausa_precarga = 24;
const radio_precarga_activa = 10;

export function iniciar_secuencia_iphone() {
	const secciones = document.querySelectorAll(selector_secuencia);
	if (!secciones.length) return;

	secciones.forEach((seccion) => iniciar_seccion(seccion));
}

function iniciar_seccion(seccion) {
	const canvas = seccion.querySelector(selector_canvas);
	const contexto = canvas ? canvas.getContext('2d') : null;
	const configuracion = obtener_configuracion(seccion);
	const movimiento_reducido = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	if (movimiento_reducido) {
		seccion.classList.add('secuencia-reducida');
		return;
	}

	if (!canvas || !contexto || !configuracion.total_fotogramas) {
		mostrar_error(seccion);
		return;
	}

	const estado = {
		canvas,
		contexto,
		imagenes: [],
		total_fotogramas: configuracion.total_fotogramas,
		indice_actual: 0,
		indice_objetivo: 0,
		indice_suavizado: 0,
		ancho_canvas: 0,
		alto_canvas: 0,
		listo: false,
		render_pendiente: false,
		seccion_visible: false,
		temporizador_redimension: null,
		fotogramas_cargando: new Set(),
	};

	ajustar_canvas(estado);
	iniciar_eventos(seccion, estado);
	precargar_fotograma_inicial(configuracion, seccion, estado);
}

function obtener_configuracion(seccion) {
	const ruta_base = seccion.dataset.rutaBase || '';
	const prefijo_fotograma = seccion.dataset.prefijoFotograma || '';
	const extension = seccion.dataset.extension || '.jpg';
	const total_fotogramas = parseInt(seccion.dataset.totalFotogramas || '0', 10);
	const digitos = parseInt(seccion.dataset.digitos || '3', 10);

	return {
		ruta_base,
		prefijo_fotograma,
		extension,
		total_fotogramas: Number.isFinite(total_fotogramas) ? total_fotogramas : 0,
		digitos: Number.isFinite(digitos) ? digitos : 3,
	};
}

function precargar_fotograma_inicial(configuracion, seccion, estado) {
	const indice_inicial = Math.round(calcular_indice(seccion, estado.total_fotogramas));

	cargar_indice_fotograma(configuracion, estado, indice_inicial)
		.then((resultado) => {
			if (!resultado.imagen && indice_inicial !== 0) {
				return cargar_indice_fotograma(configuracion, estado, 0);
			}

			return resultado;
		})
		.then((resultado) => {
			if (!resultado.imagen) {
				mostrar_error(seccion);
				return;
			}

			estado.imagenes[resultado.indice] = resultado.imagen;
			activar_secuencia(seccion, estado, resultado.indice);
			precargar_fotogramas_cercanos(configuracion, seccion, estado, resultado.indice);
			precargar_fotogramas(configuracion, seccion, estado, resultado.indice);
		});
}

function precargar_fotogramas(configuracion, seccion, estado, indice_inicial) {
	const cola_indices = obtener_orden_precarga(estado.total_fotogramas, indice_inicial)
		.filter((indice) => indice !== indice_inicial);
	let indice_cola = 0;
	let cargas_activas = 0;

	function cargar_siguiente() {
		while (cargas_activas < limite_precarga && indice_cola < cola_indices.length) {
			const indice = cola_indices[indice_cola];
			indice_cola += 1;
			cargas_activas += 1;

			cargar_indice_fotograma(configuracion, estado, indice)
				.then((resultado) => {
					cargas_activas -= 1;

					if (resultado.imagen) {
						estado.imagenes[resultado.indice] = resultado.imagen;
						refrescar_si_es_cercano(seccion, estado, resultado.indice);
					}

					window.setTimeout(cargar_siguiente, pausa_precarga);
				});
		}
	}

	cargar_siguiente();
}

function cargar_indice_fotograma(configuracion, estado, indice) {
	if (estado.imagenes[indice]) {
		return Promise.resolve({
			indice,
			imagen: estado.imagenes[indice],
		});
	}

	if (estado.fotogramas_cargando.has(indice)) {
		return Promise.resolve({
			indice,
			imagen: null,
		});
	}

	estado.fotogramas_cargando.add(indice);
	return cargar_fotograma(construir_ruta_fotograma(configuracion, indice))
		.then((imagen) => ({
			indice,
			imagen,
		}))
		.finally(() => {
			estado.fotogramas_cargando.delete(indice);
		});
}

function obtener_orden_precarga(total_fotogramas, indice_inicial) {
	const indices = [indice_inicial];

	for (let distancia = 1; indices.length < total_fotogramas; distancia += 1) {
		const anterior = indice_inicial - distancia;
		const siguiente = indice_inicial + distancia;

		if (anterior >= 0) {
			indices.push(anterior);
		}

		if (siguiente < total_fotogramas) {
			indices.push(siguiente);
		}
	}

	return indices;
}

function refrescar_si_es_cercano(seccion, estado, indice) {
	const indice_cercano = Math.round(estado.indice_suavizado);
	const indice_objetivo = Math.round(estado.indice_objetivo);

	if (Math.abs(indice - indice_cercano) <= 2 || Math.abs(indice - indice_objetivo) <= 2) {
		solicitar_render(seccion, estado);
	}
}

function construir_ruta_fotograma(configuracion, indice) {
	const numero_fotograma = String(indice + 1).padStart(configuracion.digitos, '0');
	return `${configuracion.ruta_base}${configuracion.prefijo_fotograma}${numero_fotograma}${configuracion.extension}`;
}

function cargar_fotograma(ruta) {
	return new Promise((resolve) => {
		const imagen = new Image();

		imagen.decoding = 'async';
		imagen.onload = () => resolve(imagen);
		imagen.onerror = () => resolve(null);
		imagen.src = ruta;
	});
}

function iniciar_eventos(seccion, estado) {
	window.addEventListener('scroll', () => solicitar_render(seccion, estado), { passive: true });

	window.addEventListener('resize', () => {
		window.clearTimeout(estado.temporizador_redimension);
		estado.temporizador_redimension = window.setTimeout(() => {
			ajustar_canvas(estado);
			renderizar_fotograma(estado, estado.indice_actual);
			solicitar_render(seccion, estado);
		}, espera_redimension);
	});

	solicitar_render(seccion, estado);
}

function activar_secuencia(seccion, estado, indice_inicial) {
	estado.listo = true;
	estado.indice_actual = indice_inicial;
	estado.indice_objetivo = calcular_indice(seccion, estado.total_fotogramas);
	estado.indice_suavizado = estado.indice_objetivo;
	seccion.classList.add('secuencia-lista');
	renderizar_fotograma(estado, estado.indice_objetivo);
	solicitar_render(seccion, estado);
}

function solicitar_render(seccion, estado) {
	if (!estado.listo || estado.render_pendiente) return;

	estado.render_pendiente = true;
	window.requestAnimationFrame(() => {
		estado.render_pendiente = false;
		estado.seccion_visible = verificar_visibilidad(seccion);
		estado.indice_objetivo = calcular_indice(seccion, estado.total_fotogramas);
		precargar_fotogramas_cercanos(null, seccion, estado, Math.round(estado.indice_objetivo));
		actualizar_scrub(seccion, estado);
	});
}

function precargar_fotogramas_cercanos(configuracion, seccion, estado, indice_centro) {
	if (!estado.configuracion && configuracion) {
		estado.configuracion = configuracion;
	}

	const configuracion_actual = configuracion || estado.configuracion;
	if (!configuracion_actual) return;

	for (let distancia = 0; distancia <= radio_precarga_activa; distancia += 1) {
		const indices = distancia === 0
			? [indice_centro]
			: [indice_centro - distancia, indice_centro + distancia];

		indices.forEach((indice) => {
			if (indice < 0 || indice >= estado.total_fotogramas || estado.imagenes[indice]) return;

			cargar_indice_fotograma(configuracion_actual, estado, indice)
				.then((resultado) => {
					if (!resultado.imagen) return;

					estado.imagenes[resultado.indice] = resultado.imagen;
					refrescar_si_es_cercano(seccion, estado, resultado.indice);
				});
		});
	}
}

function actualizar_scrub(seccion, estado) {
	if (!estado.seccion_visible) {
		renderizar_fotograma(estado, estado.indice_objetivo);
		return;
	}

	const diferencia = estado.indice_objetivo - estado.indice_suavizado;
	const debe_animar = Math.abs(diferencia) > umbral_suavizado;

	if (debe_animar) {
		estado.indice_suavizado += diferencia * suavizado_scrub;
	} else {
		estado.indice_suavizado = estado.indice_objetivo;
	}

	renderizar_fotograma(estado, estado.indice_suavizado);

	if (debe_animar) {
		solicitar_render(seccion, estado);
	}
}

function calcular_indice(seccion, total_fotogramas) {
	const scroll_actual = window.scrollY || window.pageYOffset || 0;
	const inicio_seccion = seccion.offsetTop;
	const inicio_animacion = inicio_seccion - window.innerHeight;
	const rango_scroll = Math.max(seccion.scrollHeight, 1);
	const progreso = clampar((scroll_actual - inicio_animacion) / rango_scroll, 0, 1);

	return progreso * (total_fotogramas - 1);
}

function verificar_visibilidad(seccion) {
	const rectangulo = seccion.getBoundingClientRect();
	return rectangulo.top < window.innerHeight && rectangulo.bottom > 0;
}

function clampar(valor, minimo, maximo) {
	return Math.min(Math.max(valor, minimo), maximo);
}

function ajustar_canvas(estado) {
	const ratio_pixel = Math.min(window.devicePixelRatio || 1, ratio_pixel_maximo);

	estado.ancho_canvas = window.innerWidth;
	estado.alto_canvas = window.innerHeight;
	estado.canvas.width = Math.round(estado.ancho_canvas * ratio_pixel);
	estado.canvas.height = Math.round(estado.alto_canvas * ratio_pixel);
	estado.canvas.style.width = `${estado.ancho_canvas}px`;
	estado.canvas.style.height = `${estado.alto_canvas}px`;
	estado.contexto.setTransform(ratio_pixel, 0, 0, ratio_pixel, 0, 0);
}

function renderizar_fotograma(estado, indice_deseado) {
	const indice_entero = Math.round(indice_deseado);
	const imagen = obtener_imagen_disponible(estado.imagenes, indice_entero);
	if (!imagen) return;

	estado.indice_actual = indice_entero;
	estado.contexto.clearRect(0, 0, estado.ancho_canvas, estado.alto_canvas);
	estado.contexto.fillStyle = '#FFFFFF';
	estado.contexto.fillRect(0, 0, estado.ancho_canvas, estado.alto_canvas);

	const escala = Math.min(
		estado.ancho_canvas / imagen.naturalWidth,
		estado.alto_canvas / imagen.naturalHeight
	);
	const ancho_imagen = imagen.naturalWidth * escala;
	const alto_imagen = imagen.naturalHeight * escala;
	const posicion_x = (estado.ancho_canvas - ancho_imagen) / 2;
	const posicion_y = (estado.alto_canvas - alto_imagen) / 2;

	estado.contexto.drawImage(imagen, posicion_x, posicion_y, ancho_imagen, alto_imagen);
}

function obtener_imagen_disponible(imagenes, indice_deseado) {
	if (imagenes[indice_deseado]) return imagenes[indice_deseado];

	for (let distancia = 1; distancia < imagenes.length; distancia += 1) {
		const indice_anterior = indice_deseado - distancia;
		const indice_siguiente = indice_deseado + distancia;

		if (imagenes[indice_anterior]) return imagenes[indice_anterior];
		if (imagenes[indice_siguiente]) return imagenes[indice_siguiente];
	}

	return null;
}

function mostrar_error(seccion) {
	seccion.classList.add('secuencia-error');
}
