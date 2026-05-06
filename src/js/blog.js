/*
 * Autor: MarnueLgh
 * Fecha: 02/05/2026
 * Version: 2.1
 * Descripcion: Entry point del blog con parallax modular, filtros animados y scroll
 */

import { gsap, ScrollTrigger } from './modulos/lenis_init.js';

/* =============================================
   Inicialización del blog
   ============================================= */
document.addEventListener('DOMContentLoaded', function () {

	// =============================================
	// Parallax modular con GSAP ScrollTrigger
	// =============================================
	iniciar_parallax_blog();

	// =============================================
	// Blog Filter con GSAP
	// =============================================
	const botones_filtro = document.querySelectorAll('.filter-btn');
	const tarjetas_blog = document.querySelectorAll('.blog-card');

	botones_filtro.forEach((btn) => {
		btn.addEventListener('click', function () {
			botones_filtro.forEach((b) => b.classList.remove('active'));
			this.classList.add('active');

			const filtro = this.dataset.filter;

			tarjetas_blog.forEach((card) => {
				const categoria = card.dataset.category;

				if (filtro === 'all' || categoria === filtro) {
					card.style.display = 'block';
					gsap.fromTo(card,
						{ opacity: 0, y: 20 },
						{ opacity: 1, y: 0, duration: 0.4, ease: 'power2.out' }
					);
				} else {
					gsap.to(card, {
						opacity: 0,
						duration: 0.3,
						ease: 'power2.in',
						onComplete: () => {
							card.style.display = 'none';
						},
					});
				}
			});
		});
	});

	// =============================================
	// Blog Cards Entrance con ScrollTrigger
	// =============================================
	tarjetas_blog.forEach((card, indice) => {
		gsap.fromTo(card, 
			{ autoAlpha: 0, y: 30 },
			{
				autoAlpha: 1,
				y: 0,
				duration: 0.6,
				ease: 'power2.out',
				delay: indice * 0.1,
				scrollTrigger: {
					trigger: card,
					start: 'top 90%',
					toggleActions: 'play none none none',
				},
			}
		);
	});

	// =============================================
	// Load More Placeholder
	// =============================================
	const boton_cargar_mas = document.querySelector('.load-more-btn');
	if (boton_cargar_mas) {
		boton_cargar_mas.addEventListener('click', function () {
			this.textContent = 'Cargando...';
			setTimeout(() => {
				this.textContent = 'No hay más artículos';
				this.disabled = true;
				gsap.to(this, { opacity: 0.5, duration: 0.3 });
			}, 1500);
		});
	}

});

function iniciar_parallax_blog() {
	const contenedor_parallax = document.getElementById('contenedor-parallax');
	if (!contenedor_parallax) return;

	const capas_parallax = contenedor_parallax.querySelectorAll('.parallax-capa');
	const escalas_iniciales = [4, 5, 6, 5, 6, 8, 9];

	capas_parallax.forEach((capa, indice) => {
		const escala_inicio = escalas_iniciales[indice % escalas_iniciales.length];

		gsap.fromTo(capa,
			{
				scale: escala_inicio,
			},
			{
				scale: 1,
				ease: 'none',
				force3D: true,
				scrollTrigger: {
					trigger: contenedor_parallax,
					start: 'top top',
					end: 'bottom bottom',
					scrub: 1,
				},
			}
		);
	});
}

/* =============================================
   Restauracion desde bfcache (boton atras/adelante)
   ============================================= */
window.addEventListener('pageshow', function (evento) {
	if (evento.persisted) {
		/* Limpiar estilos inline de GSAP en elementos del blog */
		const selectores_blog = '.blog-card, .parallax-capa';
		document.querySelectorAll(selectores_blog).forEach(function (el) {
			el.style.removeProperty('visibility');
			el.style.removeProperty('opacity');
			el.style.removeProperty('transform');
			gsap.set(el, { autoAlpha: 1, y: 0 });
		});

		ScrollTrigger.refresh(true);
	}
});
