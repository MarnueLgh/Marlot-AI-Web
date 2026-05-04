/*
 * Autor: MarnueLgh
 * Fecha: 03/05/2026
 * Version: 1.0
 * Descripcion: Gestor de consentimiento de cookies con preferencias persistentes.
 */

const clave_consentimiento = 'marlot_consentimiento_cookies';

const preferencias_base = {
	necesarias: true,
	analitica: false,
	marketing: false,
};

export function iniciar_cookies() {
	document.addEventListener('click', function (evento) {
		const boton_preferencias = evento.target.closest('[data-cookie-preferencias]');
		if (!boton_preferencias) return;

		evento.preventDefault();
		mostrar_panel_cookies(true);
	});

	if (!obtener_consentimiento()) {
		mostrar_panel_cookies(false);
	}
}

function obtener_consentimiento() {
	try {
		const datos_guardados = localStorage.getItem(clave_consentimiento);
		return datos_guardados ? JSON.parse(datos_guardados) : null;
	} catch (error) {
		return null;
	}
}

function guardar_consentimiento(preferencias) {
	const consentimiento = {
		...preferencias_base,
		...preferencias,
		necesarias: true,
		actualizado: new Date().toISOString(),
	};

	localStorage.setItem(clave_consentimiento, JSON.stringify(consentimiento));
	window.dispatchEvent(new CustomEvent('marlot:cookies', { detail: consentimiento }));
	return consentimiento;
}

function mostrar_panel_cookies(es_preferencia_manual) {
	const panel_existente = document.querySelector('.cookies-capa');
	if (panel_existente) {
		panel_existente.querySelector('.cookies-panel').focus();
		return;
	}

	const consentimiento_actual = obtener_consentimiento() || preferencias_base;
	const capa = document.createElement('div');
	capa.className = 'cookies-capa';
	capa.innerHTML = `
		<section class="cookies-panel" role="dialog" aria-modal="true" aria-labelledby="cookies_titulo" tabindex="-1">
			<div class="cookies-contenido">
				<p class="cookies-etiqueta">Preferencias de privacidad</p>
				<h2 class="cookies-titulo" id="cookies_titulo">Gestionar cookies</h2>
				<p class="cookies-texto">Usamos cookies necesarias para que el sitio funcione. Las cookies de analítica y marketing solo se activan si das tu consentimiento.</p>
			</div>

			<div class="cookies-opciones" aria-label="Categorías de cookies">
				<label class="cookies-opcion">
					<input type="checkbox" checked disabled>
					<span>
						<strong>Necesarias</strong>
						<small>Siempre activas para navegación, seguridad y preferencias básicas.</small>
					</span>
				</label>
				<label class="cookies-opcion">
					<input type="checkbox" data-cookie-categoria="analitica"${consentimiento_actual.analitica ? ' checked' : ''}>
					<span>
						<strong>Analítica</strong>
						<small>Nos ayudan a medir rendimiento y mejorar la experiencia del sitio.</small>
					</span>
				</label>
				<label class="cookies-opcion">
					<input type="checkbox" data-cookie-categoria="marketing"${consentimiento_actual.marketing ? ' checked' : ''}>
					<span>
						<strong>Marketing</strong>
						<small>Permiten personalizar comunicaciones y contenido relevante.</small>
					</span>
				</label>
			</div>

			<div class="cookies-acciones">
				<button class="cookies-boton cookies-secundario" type="button" data-cookie-rechazar>Rechazar opcionales</button>
				<button class="cookies-boton cookies-secundario" type="button" data-cookie-guardar>Guardar preferencias</button>
				<button class="cookies-boton cookies-primario" type="button" data-cookie-aceptar>Aceptar todas</button>
			</div>
		</section>
	`;

	document.body.appendChild(capa);
	document.body.classList.add('cookies-activo');
	capa.querySelector('.cookies-panel').focus();

	capa.querySelector('[data-cookie-aceptar]').addEventListener('click', function () {
		guardar_consentimiento({ analitica: true, marketing: true });
		cerrar_panel_cookies(capa);
	});

	capa.querySelector('[data-cookie-rechazar]').addEventListener('click', function () {
		guardar_consentimiento({ analitica: false, marketing: false });
		cerrar_panel_cookies(capa);
	});

	capa.querySelector('[data-cookie-guardar]').addEventListener('click', function () {
		const preferencias = { ...preferencias_base };
		capa.querySelectorAll('[data-cookie-categoria]').forEach(function (campo) {
			preferencias[campo.dataset.cookieCategoria] = campo.checked;
		});

		guardar_consentimiento(preferencias);
		cerrar_panel_cookies(capa);
	});

	if (es_preferencia_manual) {
		capa.addEventListener('keydown', function (evento) {
			if (evento.key === 'Escape') {
				cerrar_panel_cookies(capa);
			}
		});
	}
}

function cerrar_panel_cookies(capa) {
	capa.remove();
	document.body.classList.remove('cookies-activo');
}
