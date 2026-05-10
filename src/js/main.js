/*
 * Autor: MarnueLgh
 * Fecha: 02/05/2026
 * Version: 2.0
 * Descripcion: Entry point principal: orquesta modulos de Lenis, GSAP y navegacion.
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
import { iniciar_acordeon_metricas } from './modulos/acordeon_metricas.js';
import { iniciar_diagnostico_oportunidades } from './modulos/diagnostico_oportunidades.js';
import { iniciar_secuencia_iphone } from './modulos/secuencia_iphone.js';
import { iniciar_cookies } from './modulos/cookies.js';
import { iniciar_faq } from './modulos/faq.js';

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

	/* --- Consentimiento de cookies --- */
	iniciar_cookies();

	/* --- Preguntas frecuentes --- */
	iniciar_faq();

	/* --- Acordeon de metricas --- */
	iniciar_acordeon_metricas();

	/* --- Secuencia visual de iPhone --- */
	iniciar_secuencia_iphone();

	/* --- Diagnostico de oportunidades IA --- */
	iniciar_diagnostico_oportunidades();

	/* --- Animaciones GSAP ScrollTrigger --- */
	animar_fade_in();
	animar_parallax_hero();
	animar_stats();
	animar_hover_servicios();
	inicializar_acordeon_servicios();

	/* --- Newsletter form --- */
	iniciar_newsletter();
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
		const selectores_animados = '.service-card, .oportunidades-contenido, .oportunidades-panel, .value-content, .valor-comparativa, .value-image-placeholder, .stat-item';
		document.querySelectorAll(selectores_animados).forEach(function (el) {
			el.style.removeProperty('visibility');
			el.style.removeProperty('opacity');
			el.style.removeProperty('transform');
			gsap.set(el, { autoAlpha: 1, y: 0 });
		});

		ScrollTrigger.refresh(true);
	}
});


// NEW


/*
 * Autor: MarnueLgh
 * Fecha: 02/05/2026
 * Versión: 1.0
 * Descripción: Lógica del acordeón vertical de servicios con GSAP y Lenis.
 *              Requiere GSAP y Lenis cargados desde includes/scripts.php.
 *              Agregar en js/main.js.
 */

// ── Acordeón de Servicios ────────────────────────────────────

// Descripción: Inicializa el acordeón vertical de servicios con animaciones GSAP.
function inicializar_acordeon_servicios() {
	const lista_items = document.querySelectorAll('.servicios-item');
	const contenedor_servicios = document.getElementById('servicios_contenedor');

	if (!lista_items.length || !contenedor_servicios) return;

	lista_items.forEach(item_actual => {
		const cabecera_actual = item_actual.querySelector('.servicios-cabecera');
		const contenido_actual = item_actual.querySelector('.servicios-contenido');
		const elementos_internos = item_actual.querySelectorAll('.servicios-info > *');

		// Estado inicial oculto para elementos internos
		gsap.set(elementos_internos, { y: 20, opacity: 0 });

		cabecera_actual.addEventListener('click', () => {
			const esta_abierto = item_actual.classList.contains('item-abierto');

			// Cerrar todos los items
			cerrar_todos_items(lista_items);

			// Si el clickeado estaba cerrado, abrirlo
			if (!esta_abierto) {
				abrir_item(item_actual, contenido_actual, elementos_internos, contenedor_servicios);
			} else {
				contenedor_servicios.classList.remove('con-activo');
			}
		});
	});
}

// Descripción: Cierra todos los items del acordeón.
// Parámetros: lista_items (NodeList)
function cerrar_todos_items(lista_items) {
	lista_items.forEach(item => {
		item.classList.remove('item-abierto');

		const contenido = item.querySelector('.servicios-contenido');
		const imagen = item.querySelector('.servicios-imagen');

		gsap.to(contenido, {
			height: 0,
			duration: 0.5,
			ease: 'power3.inOut',
		});

		gsap.to(imagen, {
			scale: 1,
			duration: 0.5,
			ease: 'power3.inOut',
		});
	});
}

// Descripción: Abre un item del acordeón con animación GSAP.
// Parámetros: item (Element), contenido (Element), elementos_internos (NodeList), contenedor (Element)
function abrir_item(item, contenido, elementos_internos, contenedor) {
	item.classList.add('item-abierto');
	contenedor.classList.add('con-activo');

	const imagen = item.querySelector('.servicios-imagen');
	const escala_imagen = window.innerWidth > 768 ? 3 : 1.5;

	// Expandir contenido
	gsap.to(contenido, {
		height: 'auto',
		duration: 0.6,
		ease: 'power3.inOut',
	});

	// Agrandar imagen
	gsap.to(imagen, {
		scale: escala_imagen,
		duration: 0.6,
		ease: 'power3.inOut',
	});

	// Animar elementos internos en cascada
	gsap.set(elementos_internos, { y: 20, opacity: 0 });

	gsap.to(elementos_internos, {
		y: 0,
		opacity: 1,
		duration: 0.5,
		stagger: 0.1,
		ease: 'power2.out',
		delay: 0.2,
	});
}
