/*
 * Autor: MarnueLgh
 * Fecha: 02/05/2026
 * Version: 1.0
 * Descripcion: Entry point del blog — zoom parallax, filtros y animaciones
 */

/* =============================================
   Imports — CSS ya importado en main.js (se comparte)
   ============================================= */

/* =============================================
   Inicializacion del blog
   ============================================= */
document.addEventListener('DOMContentLoaded', function() {

	// =============================================
	// Zoom Parallax Effect (Inverted)
	// =============================================
	const contenedor_parallax = document.getElementById('zoomParallax');

	if (contenedor_parallax) {
		const wrappers_parallax = contenedor_parallax.querySelectorAll('.parallax-image-wrapper');

		function obtener_progreso_scroll() {
			const rect = contenedor_parallax.getBoundingClientRect();
			const altura_contenedor = contenedor_parallax.offsetHeight;
			const altura_viewport = window.innerHeight;

			const inicio_scroll = rect.top + altura_viewport;
			const fin_scroll = rect.bottom;
			const rango_scroll = fin_scroll - inicio_scroll + altura_viewport;
			const scrolled = altura_viewport - rect.top;

			return Math.max(0, Math.min(1, scrolled / rango_scroll));
		}

		function actualizar_parallax() {
			const progreso = obtener_progreso_scroll();

			wrappers_parallax.forEach((wrapper) => {
				const escala_max = parseFloat(wrapper.dataset.scale) || 4;
				const progreso_eased = progreso < 0.5
					? 2 * progreso * progreso
					: 1 - Math.pow(-2 * progreso + 2, 2) / 2;

				const escala_actual = escala_max - (escala_max - 1) * progreso_eased;

				wrapper.style.transform = `scale(${escala_actual})`;
			});
		}

		let ticking = false;
		window.addEventListener('scroll', () => {
			if (!ticking) {
				requestAnimationFrame(() => {
					actualizar_parallax();
					ticking = false;
				});
				ticking = true;
			}
		});

		actualizar_parallax();
	}

	// =============================================
	// Blog Filter Functionality
	// =============================================
	const botones_filtro = document.querySelectorAll('.filter-btn');
	const tarjetas_blog = document.querySelectorAll('.blog-card');

	botones_filtro.forEach(btn => {
		btn.addEventListener('click', function() {
			botones_filtro.forEach(b => b.classList.remove('active'));
			this.classList.add('active');

			const filtro = this.dataset.filter;

			tarjetas_blog.forEach(card => {
				const categoria = card.dataset.category;

				if (filtro === 'all' || categoria === filtro) {
					card.style.opacity = '0';
					card.style.transform = 'translateY(20px)';
					card.style.display = 'block';

					setTimeout(() => {
						card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
						card.style.opacity = '1';
						card.style.transform = 'translateY(0)';
					}, 50);
				} else {
					card.style.transition = 'opacity 0.3s ease';
					card.style.opacity = '0';
					setTimeout(() => {
						card.style.display = 'none';
					}, 300);
				}
			});
		});
	});

	// =============================================
	// Smooth Scroll for Blog CTA
	// =============================================
	const cta_blog = document.querySelector('.blog-hero-cta');

	if (cta_blog) {
		cta_blog.addEventListener('click', function(e) {
			e.preventDefault();
			const destino = document.querySelector(this.getAttribute('href'));

			if (destino) {
				destino.scrollIntoView({
					behavior: 'smooth',
					block: 'start'
				});
			}
		});
	}

	// =============================================
	// Blog Cards Fade-in Animation
	// =============================================
	const opciones_observer = {
		root: null,
		rootMargin: '0px',
		threshold: 0.1
	};

	const card_observer = new IntersectionObserver((entries) => {
		entries.forEach((entry, index) => {
			if (entry.isIntersecting) {
				setTimeout(() => {
					entry.target.style.opacity = '1';
					entry.target.style.transform = 'translateY(0)';
				}, index * 100);
				card_observer.unobserve(entry.target);
			}
		});
	}, opciones_observer);

	tarjetas_blog.forEach(card => {
		card.style.opacity = '0';
		card.style.transform = 'translateY(30px)';
		card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
		card_observer.observe(card);
	});

	// =============================================
	// Load More Button (Placeholder)
	// =============================================
	const boton_cargar_mas = document.querySelector('.load-more-btn');

	if (boton_cargar_mas) {
		boton_cargar_mas.addEventListener('click', function() {
			this.textContent = 'Cargando...';

			setTimeout(() => {
				this.textContent = 'No hay más artículos';
				this.disabled = true;
				this.style.opacity = '0.5';
			}, 1500);
		});
	}

	// =============================================
	// Navbar Scroll Behavior for Blog
	// =============================================
	const navbar = document.getElementById('navbar');

	if (navbar && navbar.classList.contains('navbar-blog')) {
		navbar.classList.add('scrolled');
	}

});
