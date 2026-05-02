/*
 * Autor: MarnueLgh
 * Fecha: 02/05/2026
 * Version: 1.0
 * Descripcion: Logica del acordeon de metricas con estados GSAP sincronizados.
 */

import { gsap } from './lenis_init.js';

const selector_tarjeta = '.metricas-tarjeta';
const clase_activa = 'metricas-tarjeta-activa';

export function iniciar_acordeon_metricas() {
	const acordeon = document.querySelector('.metricas-acordeon');
	if (!acordeon) return;

	const tarjetas = Array.from(acordeon.querySelectorAll(selector_tarjeta));
	if (!tarjetas.length) return;

	tarjetas.forEach((tarjeta) => {
		tarjeta.addEventListener('click', () => activar_tarjeta(tarjetas, tarjeta));
		tarjeta.addEventListener('keydown', (evento) => manejar_tecla(tarjetas, tarjeta, evento));
	});

	sincronizar_estado(tarjetas);
	iniciar_redimension(tarjetas);
}

function manejar_tecla(tarjetas, tarjeta, evento) {
	if (evento.key !== 'Enter' && evento.key !== ' ') return;

	evento.preventDefault();
	activar_tarjeta(tarjetas, tarjeta);
}

function activar_tarjeta(tarjetas, tarjeta_nueva) {
	if (tarjeta_nueva.classList.contains(clase_activa)) return;

	const valores = obtener_valores_flex(tarjeta_nueva.closest('.metricas-acordeon'));
	const duracion = 0.65;
	const ease_tipo = 'power3.inOut';

	tarjetas.forEach((tarjeta) => {
		const contenido = tarjeta.querySelector('.metricas-contenido');
		const vertical = tarjeta.querySelector('.metricas-vertical');
		const es_nueva = tarjeta === tarjeta_nueva;

		gsap.killTweensOf([tarjeta, contenido, vertical]);

		tarjeta.classList.toggle(clase_activa, es_nueva);
		tarjeta.setAttribute('aria-expanded', es_nueva ? 'true' : 'false');

		gsap.to(tarjeta, {
			flex: es_nueva ? valores.activa : valores.inactiva,
			duration: duracion,
			ease: ease_tipo,
			overwrite: 'auto',
		});

		gsap.to(contenido, {
			autoAlpha: es_nueva ? 1 : 0,
			duration: es_nueva ? 0.36 : 0.16,
			delay: es_nueva ? 0.2 : 0,
			ease: es_nueva ? 'power2.out' : 'power1.in',
			overwrite: 'auto',
			onStart: () => {
				contenido.style.pointerEvents = es_nueva ? 'auto' : 'none';
			},
		});

		gsap.to(vertical, {
			autoAlpha: es_nueva ? 0 : 1,
			duration: es_nueva ? 0.18 : 0.32,
			delay: es_nueva ? 0 : 0.24,
			ease: es_nueva ? 'power1.out' : 'power2.out',
			overwrite: 'auto',
			onStart: () => {
				vertical.style.pointerEvents = es_nueva ? 'none' : 'auto';
			},
		});
	});
}

function sincronizar_estado(tarjetas) {
	const tarjeta_activa = tarjetas.find((tarjeta) => tarjeta.classList.contains(clase_activa)) || tarjetas[0];
	const valores = obtener_valores_flex(tarjeta_activa.closest('.metricas-acordeon'));

	tarjetas.forEach((tarjeta) => {
		const contenido = tarjeta.querySelector('.metricas-contenido');
		const vertical = tarjeta.querySelector('.metricas-vertical');
		const es_activa = tarjeta === tarjeta_activa;

		gsap.killTweensOf([tarjeta, contenido, vertical]);

		tarjeta.classList.toggle(clase_activa, es_activa);
		tarjeta.setAttribute('aria-expanded', es_activa ? 'true' : 'false');

		gsap.set(tarjeta, { flex: es_activa ? valores.activa : valores.inactiva });
		gsap.set(contenido, {
			autoAlpha: es_activa ? 1 : 0,
			pointerEvents: es_activa ? 'auto' : 'none',
		});
		gsap.set(vertical, {
			autoAlpha: es_activa ? 0 : 1,
			pointerEvents: es_activa ? 'none' : 'auto',
		});
	});
}

function obtener_valores_flex(acordeon) {
	const estilos = window.getComputedStyle(acordeon);

	return {
		activa: estilos.getPropertyValue('--metricas-flex-activa').trim() || '1 1 0%',
		inactiva: estilos.getPropertyValue('--metricas-flex-inactiva').trim() || '0 0 5.5rem',
	};
}

function iniciar_redimension(tarjetas) {
	let temporizador_redimension = null;

	window.addEventListener('resize', () => {
		window.clearTimeout(temporizador_redimension);
		temporizador_redimension = window.setTimeout(() => {
			sincronizar_estado(tarjetas);
		}, 120);
	});
}
