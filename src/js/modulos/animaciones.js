/*
 * Autor: MarnueLgh
 * Fecha: 02/05/2026
 * Version: 1.0
 * Descripcion: Animaciones GSAP ScrollTrigger para el sitio — reemplaza IntersectionObserver
 */

import { gsap, ScrollTrigger } from './lenis_init.js';

/**
 * Fade-in al hacer scroll en tarjetas y secciones
 */
export function animar_fade_in() {
	const elementos = document.querySelectorAll(
		'.service-card, .oportunidades-contenido, .oportunidades-panel, .value-content, .valor-comparativa, .value-image-placeholder, .stat-item'
	);

	elementos.forEach((elemento, indice) => {
		gsap.fromTo(elemento, 
			{ autoAlpha: 0, y: 30 },
			{
				autoAlpha: 1,
				y: 0,
				duration: 0.6,
				ease: 'power2.out',
				scrollTrigger: {
					trigger: elemento,
					start: 'top 90%',
					toggleActions: 'play none none none',
				},
				delay: indice % 3 * 0.1,
			}
		);
	});
}

/**
 * Parallax sutil en el hero con scroll
 */
export function animar_parallax_hero() {
	const hero = document.querySelector('.hero');
	if (!hero) return;

	gsap.to(hero, {
		backgroundPositionY: '30%',
		ease: 'none',
		scrollTrigger: {
			trigger: hero,
			start: 'top top',
			end: 'bottom top',
			scrub: true,
		},
	});
}

/**
 * Animacion de los numeros estadisticos con ScrollTrigger
 */
export function animar_stats() {
	const seccion_stats = document.querySelector('.stats-section');
	if (!seccion_stats) return;

	const numeros_stat = seccion_stats.querySelectorAll('.stat-number');

	numeros_stat.forEach((stat) => {
		const texto = stat.textContent;
		const tiene_plus = texto.includes('+');
		const tiene_porciento = texto.includes('%');
		const numero_final = parseInt(texto.replace(/[^0-9]/g, ''));

		if (isNaN(numero_final)) return;

		const objeto_valor = { valor: 0 };

		gsap.to(objeto_valor, {
			valor: numero_final,
			duration: 1.5,
			ease: 'power2.out',
			scrollTrigger: {
				trigger: seccion_stats,
				start: 'top 70%',
				toggleActions: 'play none none none',
			},
			onUpdate: () => {
				let display = Math.floor(objeto_valor.valor);
				if (tiene_plus) display = display + '+';
				if (tiene_porciento) display = display + '%';
				stat.textContent = display;
			},
		});
	});
}

/**
 * Hover animado en tarjetas de servicio con GSAP
 */
export function animar_hover_servicios() {
	const tarjetas = document.querySelectorAll('.service-card');

	tarjetas.forEach((tarjeta) => {
		tarjeta.addEventListener('mouseenter', () => {
			gsap.to(tarjeta, {
				y: -8,
				duration: 0.3,
				ease: 'power2.out',
			});
		});

		tarjeta.addEventListener('mouseleave', () => {
			gsap.to(tarjeta, {
				y: 0,
				duration: 0.3,
				ease: 'power2.out',
			});
		});
	});
}

/**
 * Animacion cinematica del titulo hero con Splitting.js
 */
export function animar_titulo_cinematico() {
	const titulo = document.querySelector('.anim-cinematic');
	if (!titulo) return;

	gsap.delayedCall(0.1, () => {
		titulo.classList.add('active');
	});
}
