/*
 * Autor: MarnueLgh
 * Fecha: 02/05/2026
 * Version: 2.0
 * Descripcion: Entry point principal: orquesta modulos de Lenis, GSAP, navegacion y tema.
 */

/* =============================================
   Imports de estilos
   ============================================= */
import 'splitting/dist/splitting.css';
import 'splitting/dist/splitting-cells.css';
import '../css/styles.css';

/* =============================================
   Imports de librerias
   ============================================= */
import Splitting from 'splitting';
import { gsap, ScrollTrigger } from './modulos/lenis_init.js';

/* =============================================
   Imports de modulos propios
   ============================================= */
import { iniciar_lenis } from './modulos/lenis_init.js';
import {
	animar_fade_in,
	animar_parallax_hero,
	animar_stats,
	animar_hover_servicios,
	animar_titulo_cinematico,
} from './modulos/animaciones.js';
import {
	iniciar_navbar_scroll,
	iniciar_smooth_scroll_anclas,
	iniciar_menu_movil,
} from './modulos/navegacion.js';
import { iniciar_tema } from './modulos/tema.js';
import { iniciar_acordeon_metricas } from './modulos/acordeon_metricas.js';

/* =============================================
   Inicializacion principal
   ============================================= */
document.addEventListener('DOMContentLoaded', function () {

	/* --- Lenis smooth scroll --- */
	const lenis = iniciar_lenis();

	/* --- Splitting.js --- */
	if (typeof Splitting !== 'undefined') {
		Splitting();
		animar_titulo_cinematico();
	}

	/* --- Navegacion --- */
	iniciar_navbar_scroll();
	iniciar_smooth_scroll_anclas(lenis);
	iniciar_menu_movil();

	/* --- Tema claro/oscuro --- */
	iniciar_tema();

	/* --- Acordeon de metricas --- */
	iniciar_acordeon_metricas();

	/* --- Animaciones GSAP ScrollTrigger --- */
	animar_fade_in();
	animar_parallax_hero();
	animar_stats();
	animar_hover_servicios();

	/* --- Newsletter form --- */
	iniciar_newsletter();

	/* --- Chatbot placeholder --- */
	const boton_chatbot = document.getElementById('chatbotBtn');
	if (boton_chatbot) {
		boton_chatbot.addEventListener('click', () => {
			console.log('Chatbot button clicked');
		});
	}
});

/* =============================================
   Newsletter
   ============================================= */
function iniciar_newsletter() {
	const formulario = document.querySelector('.newsletter-form');
	if (!formulario) return;

	formulario.addEventListener('submit', function (e) {
		e.preventDefault();

		const campo_email = this.querySelector('.newsletter-input');
		const email = campo_email.value.trim();

		if (validar_email(email)) {
			const btn = this.querySelector('.newsletter-btn');
			const texto_original = btn.textContent;

			btn.textContent = '¡SUSCRITO!';
			btn.style.backgroundColor = 'var(--color-primary)';
			btn.style.borderColor = 'var(--color-primary)';
			btn.style.color = 'white';
			campo_email.value = '';

			setTimeout(() => {
				btn.textContent = texto_original;
				btn.style.backgroundColor = '';
				btn.style.borderColor = '';
				btn.style.color = '';
			}, 3000);
		} else {
			campo_email.style.borderColor = '#e74c3c';
			setTimeout(() => {
				campo_email.style.borderColor = '';
			}, 2000);
		}
	});
}

function validar_email(email) {
	return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

/* =============================================
   Restauracion desde bfcache
   ============================================= */
window.addEventListener('pageshow', function (evento) {
	if (evento.persisted) {
		const selectores_animados = '.service-card, .value-content, .valor-comparativa, .value-image-placeholder, .stat-item';
		document.querySelectorAll(selectores_animados).forEach(function (el) {
			el.style.removeProperty('visibility');
			el.style.removeProperty('opacity');
			el.style.removeProperty('transform');
			gsap.set(el, { autoAlpha: 1, y: 0 });
		});

		ScrollTrigger.refresh(true);
	}
});
