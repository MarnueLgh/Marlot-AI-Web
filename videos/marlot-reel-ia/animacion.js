/*
 * Autor: MarnueLgh
 * Fecha: 06/05/2026
 * Version: 1.0
 * Descripcion: Timeline GSAP deterministico para reel OpenAI-like de Marlot AI.
 */

window.__timelines = window.__timelines || {};

const linea_tiempo = gsap.timeline({ paused: true });

function animar_transicion(id_transicion, inicio_transicion) {
	const panel_transicion = `#${id_transicion} .transicion-panel`;

	linea_tiempo.fromTo(
		panel_transicion,
		{ yPercent: 100, opacity: 0.98 },
		{
			yPercent: 0,
			opacity: 1,
			duration: 0.26,
			ease: "power3.inOut"
		},
		inicio_transicion
	);

	linea_tiempo.to(
		panel_transicion,
		{
			yPercent: -100,
			opacity: 0.98,
			duration: 0.34,
			ease: "power3.inOut"
		},
		inicio_transicion + 0.28
	);
}

function animar_contador(selector_contador, inicio_contador, duracion_contador) {
	const elemento_contador = document.querySelector(selector_contador);
	const estado_contador = { valor: 0 };

	linea_tiempo.to(
		estado_contador,
		{
			valor: 3,
			duration: duracion_contador,
			ease: "power2.out",
			onUpdate: () => {
				elemento_contador.textContent = `${Math.round(estado_contador.valor)}/5`;
			}
		},
		inicio_contador
	);
}

function animar_typewriter(selector_type, inicio_type, duracion_type) {
	const elemento_type = document.querySelector(selector_type);
	const texto_completo = elemento_type.dataset.textoCompleto;
	const estado_type = { progreso: 0 };

	linea_tiempo.set(elemento_type, { textContent: "" }, inicio_type);
	linea_tiempo.to(
		estado_type,
		{
			progreso: texto_completo.length,
			duration: duracion_type,
			ease: `steps(${texto_completo.length})`,
			onUpdate: () => {
				const total_caracteres = Math.round(estado_type.progreso);
				elemento_type.textContent = texto_completo.slice(0, total_caracteres);
			}
		},
		inicio_type
	);
	linea_tiempo.set(elemento_type, { textContent: texto_completo }, inicio_type + duracion_type);
}

gsap.set(".transicion-panel", { yPercent: 100, opacity: 0 });

linea_tiempo.from("#intro_marca", { y: -26, opacity: 0, duration: 0.38, ease: "power2.out" }, 0.18);
linea_tiempo.from("#cursor_intro", { x: -440, y: 340, rotation: -10, opacity: 0, duration: 0.72, ease: "expo.out" }, 0.26);
linea_tiempo.from(".intro-titulo span", { y: 86, opacity: 0, duration: 0.72, stagger: 0.18, ease: "power3.out" }, 0.42);
linea_tiempo.to("#intro_linea span", { scaleX: 1, duration: 0.58, ease: "power2.out" }, 1.58);
linea_tiempo.to("#cursor_intro", { x: -42, y: 18, rotation: 4, duration: 0.76, ease: "power2.inOut" }, 1.68);
linea_tiempo.to("#cursor_intro", { x: -14, y: 0, scale: 0.94, duration: 0.26, ease: "power1.inOut" }, 2.54);
linea_tiempo.to("#intro_linea span", { backgroundColor: "#F25C69", duration: 0.28, ease: "power2.out" }, 2.58);

animar_transicion("transicion_1", 4.25);

linea_tiempo.from("#escena_dolor .escena-etiqueta", { y: -26, opacity: 0, duration: 0.34, ease: "power2.out" }, 4.82);
linea_tiempo.from("#escena_dolor .escena-titulo", { y: 58, opacity: 0, duration: 0.62, ease: "expo.out" }, 4.98);
linea_tiempo.from("#escena_dolor .dolor-panel", { y: 58, scale: 0.985, opacity: 0, duration: 0.58, ease: "power3.out" }, 5.26);
linea_tiempo.from("#escena_dolor .dolor-item", { y: 34, opacity: 0, duration: 0.34, stagger: 0.09, ease: "power2.out" }, 5.72);
linea_tiempo.to("#escena_dolor .dolor-check", { backgroundColor: "#F25C69", borderColor: "#F25C69", duration: 0.2, stagger: 0.08, ease: "power1.out" }, 6.08);

animar_transicion("transicion_2", 10.25);

linea_tiempo.from("#escena_diagnostico .escena-etiqueta", { y: -22, opacity: 0, duration: 0.34, ease: "power2.out" }, 10.82);
linea_tiempo.from("#escena_diagnostico .escena-titulo", { y: 56, opacity: 0, duration: 0.62, ease: "expo.out" }, 11.0);
linea_tiempo.from("#escena_diagnostico .diagnostico-panel", { y: 64, scale: 0.985, opacity: 0, duration: 0.58, ease: "power3.out" }, 11.3);
linea_tiempo.from("#escena_diagnostico .diagnostico-contador", { y: 26, opacity: 0, duration: 0.4, ease: "power2.out" }, 11.66);
linea_tiempo.from("#escena_diagnostico .diagnostico-estado", { y: 26, opacity: 0, duration: 0.4, ease: "power2.out" }, 11.78);
animar_contador("#diagnostico_contador", 11.96, 1.26);
linea_tiempo.from("#escena_diagnostico .diagnostico-prompt", { y: 28, opacity: 0, duration: 0.42, ease: "power3.out" }, 12.2);
animar_typewriter("#diagnostico_type", 12.52, 1.86);
linea_tiempo.from("#escena_diagnostico .diagnostico-resultado", { y: 30, opacity: 0, duration: 0.5, ease: "power2.out" }, 14.66);

animar_transicion("transicion_3", 16.75);

linea_tiempo.from("#escena_soluciones .escena-etiqueta", { y: -22, opacity: 0, duration: 0.34, ease: "power2.out" }, 17.3);
linea_tiempo.from("#escena_soluciones .escena-titulo", { y: 58, opacity: 0, duration: 0.62, ease: "expo.out" }, 17.48);
linea_tiempo.from("#escena_soluciones .soluciones-panel", { y: 62, scale: 0.985, opacity: 0, duration: 0.58, ease: "power3.out" }, 17.98);
linea_tiempo.from("#escena_soluciones .solucion-item", { y: 34, opacity: 0, duration: 0.38, stagger: 0.12, ease: "power2.out" }, 18.42);
linea_tiempo.from("#escena_soluciones .solucion-numero", { scale: 0.82, opacity: 0, duration: 0.32, stagger: 0.1, ease: "power3.out" }, 18.64);

animar_transicion("transicion_4", 24.75);

linea_tiempo.from("#escena_flujo .escena-etiqueta", { y: -22, opacity: 0, duration: 0.34, ease: "power2.out" }, 25.28);
linea_tiempo.from("#escena_flujo .escena-titulo", { y: 54, opacity: 0, duration: 0.58, ease: "expo.out" }, 25.46);
linea_tiempo.from("#escena_flujo .flujo-panel", { y: 58, scale: 0.985, opacity: 0, duration: 0.58, ease: "power3.out" }, 25.84);
linea_tiempo.from("#escena_flujo .flujo-campo", { y: 26, opacity: 0, duration: 0.38, ease: "power2.out" }, 26.16);
linea_tiempo.from("#escena_flujo .flujo-ruta span", { y: 26, opacity: 0, duration: 0.34, stagger: 0.08, ease: "power2.out" }, 26.48);
linea_tiempo.from("#escena_flujo .flujo-salida", { y: 28, opacity: 0, duration: 0.42, ease: "power3.out" }, 27.0);
linea_tiempo.from("#escena_flujo .flujo-lista span", { y: 26, opacity: 0, duration: 0.32, stagger: 0.07, ease: "power2.out" }, 27.42);

animar_transicion("transicion_5", 31.2);

linea_tiempo.from("#cierre_logo", { y: -28, opacity: 0, duration: 0.44, ease: "power2.out" }, 31.82);
linea_tiempo.from(".cierre-titulo", { y: 64, opacity: 0, duration: 0.66, ease: "expo.out" }, 32.08);
linea_tiempo.from(".cierre-texto", { y: 26, opacity: 0, duration: 0.42, ease: "power2.out" }, 32.74);
linea_tiempo.from(".cierre-boton", { y: 18, opacity: 0, duration: 0.38, ease: "power3.out" }, 33.08);
linea_tiempo.to("#escena_cierre", { opacity: 0, duration: 0.48, ease: "sine.inOut" }, 35.48);

window.__timeline_marlot_reel_ia = linea_tiempo;
window.__timelines["marlot-reel-ia"] = linea_tiempo;
