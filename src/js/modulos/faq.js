/*
 * Autor: MarnueLgh
 * Fecha: 03/05/2026
 * Version: 1.0
 * Descripcion: Acordeon accesible para la pagina de preguntas frecuentes.
 */

export function iniciar_faq() {
	const botones_faq = document.querySelectorAll('.faq-pregunta');
	if (!botones_faq.length) return;

	botones_faq.forEach(function (boton) {
		const respuesta = document.getElementById(boton.getAttribute('aria-controls'));
		if (!respuesta) return;

		respuesta.style.maxHeight = '0px';

		boton.addEventListener('click', function () {
			const esta_abierto = boton.getAttribute('aria-expanded') === 'true';
			alternar_respuesta(boton, respuesta, !esta_abierto);
		});
	});

	window.addEventListener('resize', function () {
		botones_faq.forEach(function (boton) {
			const respuesta = document.getElementById(boton.getAttribute('aria-controls'));
			if (respuesta && boton.getAttribute('aria-expanded') === 'true') {
				respuesta.style.maxHeight = `${respuesta.scrollHeight}px`;
			}
		});
	});
}

function alternar_respuesta(boton, respuesta, abrir) {
	boton.setAttribute('aria-expanded', abrir ? 'true' : 'false');
	respuesta.classList.toggle('faq-activa', abrir);
	respuesta.style.maxHeight = abrir ? `${respuesta.scrollHeight}px` : '0px';
}
