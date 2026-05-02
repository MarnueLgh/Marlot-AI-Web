/*
 * Autor: MarnueLgh
 * Fecha: 02/05/2026
 * Version: 1.0
 * Descripcion: Inicializacion de Lenis smooth scroll sincronizado con GSAP ScrollTrigger
 */

import Lenis from 'lenis';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

/**
 * Crea e inicializa la instancia de Lenis sincronizada con GSAP
 * @returns {Lenis} Instancia de Lenis
 */
export function iniciar_lenis() {
	const lenis = new Lenis({
		duration: 1.2,
		easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
		orientation: 'vertical',
		gestureOrientation: 'vertical',
		smoothWheel: true,
		touchMultiplier: 2,
	});

	/* Sincronizar Lenis con GSAP ScrollTrigger */
	lenis.on('scroll', ScrollTrigger.update);

	gsap.ticker.add((tiempo) => {
		lenis.raf(tiempo * 1000);
	});

	gsap.ticker.lagSmoothing(0);

	return lenis;
}

export { gsap, ScrollTrigger };
