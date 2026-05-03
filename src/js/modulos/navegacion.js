/*
 * Autor: MarnueLgh
 * Fecha: 02/05/2026
 * Version: 1.0
 * Descripcion: Logica de navegacion — navbar hide/show, smooth scroll anclas, menu movil
 */

/**
 * Navbar hide/show al hacer scroll
 */
export function iniciar_navbar_scroll() {
	const navbar = document.getElementById('navbar');
	if (!navbar) return;

	let ultimo_scroll_y = window.scrollY;

	window.addEventListener('scroll', () => {
		const scroll_actual_y = window.scrollY;

		if (scroll_actual_y > 150) {
			if (scroll_actual_y > ultimo_scroll_y) {
				navbar.classList.add('hidden');
			} else {
				navbar.classList.remove('hidden');
			}
		} else {
			navbar.classList.remove('hidden');
		}

		ultimo_scroll_y = scroll_actual_y;
	});
}

/**
 * Smooth scroll para enlaces con ancla (#) — delegado a Lenis
 * @param {import('lenis').default} lenis Instancia de Lenis
 */
export function iniciar_smooth_scroll_anclas(lenis) {
	document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
		anchor.addEventListener('click', function (e) {
			e.preventDefault();
			const id_destino = this.getAttribute('href');
			if (id_destino === '#') return;

			const elemento_destino = document.querySelector(id_destino);
			if (elemento_destino) {
				lenis.scrollTo(elemento_destino, { offset: -80 });
			}
		});
	});
}

/**
 * Toggle del menu hamburguesa en movil
 */
export function iniciar_menu_movil() {
	const boton_hamburguesa = document.getElementById('navHamburger');
	const menu_movil = document.getElementById('mobileMenu');

	if (!boton_hamburguesa || !menu_movil) return;

	boton_hamburguesa.addEventListener('click', () => {
		boton_hamburguesa.classList.toggle('active');
		menu_movil.classList.toggle('active');
		document.body.style.overflow = menu_movil.classList.contains('active') ? 'hidden' : '';
	});

	menu_movil.querySelectorAll('a').forEach((link) => {
		link.addEventListener('click', () => {
			boton_hamburguesa.classList.remove('active');
			menu_movil.classList.remove('active');
			document.body.style.overflow = '';
		});
	});
}
