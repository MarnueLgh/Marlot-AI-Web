/*
 * Autor: MarnueLgh
 * Fecha: 05/05/2026
 * Version: 1.1
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

			if (esta_abierto) {
				alternar_respuesta(boton, respuesta, false);
				return;
			}

			cerrar_respuestas_faq(botones_faq, boton);
			alternar_respuesta(boton, respuesta, true);
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

function cerrar_respuestas_faq(botones_faq, boton_actual) {
	botones_faq.forEach(function (boton) {
		if (boton === boton_actual) return;

		const respuesta = document.getElementById(boton.getAttribute('aria-controls'));
		if (!respuesta) return;

		alternar_respuesta(boton, respuesta, false);
	});
}

function alternar_respuesta(boton, respuesta, abrir) {
	boton.setAttribute('aria-expanded', abrir ? 'true' : 'false');
	respuesta.classList.toggle('faq-activa', abrir);
	respuesta.style.maxHeight = abrir ? `${respuesta.scrollHeight}px` : '0px';
}
