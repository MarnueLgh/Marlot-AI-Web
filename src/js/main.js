/*
 * Autor: MarnueLgh
 * Fecha: 02/05/2026
 * Version: 1.0
 * Descripcion: Entry point principal — importa estilos y logica global del sitio
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

/* =============================================
   Inicializacion principal
   ============================================= */
document.addEventListener('DOMContentLoaded', function() {

	// =============================================
	// Splitting.js Initialization
	// =============================================
	if (typeof Splitting !== 'undefined') {
		Splitting();
		const titulo_cinematico = document.querySelector('.anim-cinematic');
		if (titulo_cinematico) {
			setTimeout(() => {
				titulo_cinematico.classList.add('active');
			}, 100);
		}
	}

	// =============================================
	// Scroll-up Reveal Navigation (Simple)
	// =============================================
	const navbar = document.getElementById('navbar');
	let ultimo_scroll_y = window.scrollY;

	window.addEventListener('scroll', () => {
		const scroll_actual_y = window.scrollY;

		// Cambiar estilo cuando pasamos el hero
		if (scroll_actual_y > 100) {
			navbar.classList.add('scrolled');
		} else {
			navbar.classList.remove('scrolled');
		}

		// Solo aplicar hide/show después de pasar el hero
		if (scroll_actual_y > 150) {
			if (scroll_actual_y > ultimo_scroll_y) {
				// Bajando: Escondemos
				navbar.classList.add('hidden');
			} else {
				// Subiendo: Mostramos
				navbar.classList.remove('hidden');
			}
		} else {
			// Cerca del top, siempre visible
			navbar.classList.remove('hidden');
		}

		ultimo_scroll_y = scroll_actual_y;
	});

	// =============================================
	// Smooth Scroll for Navigation Links
	// =============================================
	document.querySelectorAll('a[href^="#"]').forEach(anchor => {
		anchor.addEventListener('click', function(e) {
			e.preventDefault();
			const id_destino = this.getAttribute('href');

			if (id_destino === '#') return;

			const elemento_destino = document.querySelector(id_destino);
			if (elemento_destino) {
				const offset_top = elemento_destino.offsetTop - 80;
				window.scrollTo({
					top: offset_top,
					behavior: 'smooth'
				});
			}
		});
	});

	// =============================================
	// Fade-in Animation on Scroll
	// =============================================
	const elementos_fade = document.querySelectorAll('.service-card, .value-content, .valor-comparativa, .value-image-placeholder, .stat-item');

	elementos_fade.forEach(element => {
		element.classList.add('fade-in');
	});

	const opciones_observer = {
		root: null,
		rootMargin: '0px',
		threshold: 0.1
	};

	const fade_observer = new IntersectionObserver((entries) => {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				entry.target.classList.add('visible');
				fade_observer.unobserve(entry.target);
			}
		});
	}, opciones_observer);

	elementos_fade.forEach(element => {
		fade_observer.observe(element);
	});

	// =============================================
	// Newsletter Form Handling
	// =============================================
	const formulario_newsletter = document.querySelector('.newsletter-form');

	if (formulario_newsletter) {
		formulario_newsletter.addEventListener('submit', function(e) {
			e.preventDefault();

			const campo_email = this.querySelector('.newsletter-input');
			const email = campo_email.value.trim();

			if (validar_email(email)) {
				// Success feedback
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
				// Error feedback
				campo_email.style.borderColor = '#e74c3c';

				setTimeout(() => {
					campo_email.style.borderColor = '';
				}, 2000);
			}
		});
	}

	// =============================================
	// Service Cards Hover Effect
	// =============================================
	const tarjetas_servicio = document.querySelectorAll('.service-card');

	tarjetas_servicio.forEach(card => {
		card.addEventListener('mouseenter', function() {
			this.style.transform = 'translateY(-8px)';
		});

		card.addEventListener('mouseleave', function() {
			this.style.transform = 'translateY(0)';
		});
	});

	// =============================================
	// Parallax Effect for Hero (subtle)
	// =============================================
	const hero = document.querySelector('.hero');

	window.addEventListener('scroll', function() {
		const scrolled = window.pageYOffset;
		const rate = scrolled * 0.3;

		if (hero && scrolled < window.innerHeight) {
			hero.style.backgroundPosition = `center ${rate}px`;
		}
	});

	// =============================================
	// Animate Stats Numbers
	// =============================================
	const numeros_stat = document.querySelectorAll('.stat-number');
	let stats_animados = false;

	function animar_stats() {
		if (stats_animados) return;

		numeros_stat.forEach(stat => {
			const text = stat.textContent;
			const tiene_plus = text.includes('+');
			const tiene_porciento = text.includes('%');
			const number = parseInt(text.replace(/[^0-9]/g, ''));

			if (isNaN(number)) return;

			let current = 0;
			const increment = number / 50;
			const duration = 1500;
			const step_time = duration / 50;

			const counter = setInterval(() => {
				current += increment;

				if (current >= number) {
					current = number;
					clearInterval(counter);
				}

				let valor_display = Math.floor(current);
				if (tiene_plus) valor_display = valor_display + '+';
				if (tiene_porciento) valor_display = valor_display + '%';

				stat.textContent = valor_display;
			}, step_time);
		});

		stats_animados = true;
	}

	// Observe stats section
	const seccion_stats = document.querySelector('.stats-section');

	if (seccion_stats) {
		const stats_observer = new IntersectionObserver((entries) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					animar_stats();
					stats_observer.unobserve(entry.target);
				}
			});
		}, { threshold: 0.5 });

		stats_observer.observe(seccion_stats);
	}

	// =============================================
	// Mobile Menu Toggle
	// =============================================
	const boton_hamburguesa = document.getElementById('navHamburger');
	const menu_movil = document.getElementById('mobileMenu');

	if (boton_hamburguesa && menu_movil) {
		boton_hamburguesa.addEventListener('click', () => {
			boton_hamburguesa.classList.toggle('active');
			menu_movil.classList.toggle('active');
			document.body.style.overflow = menu_movil.classList.contains('active') ? 'hidden' : '';
		});

		menu_movil.querySelectorAll('a').forEach(link => {
			link.addEventListener('click', () => {
				boton_hamburguesa.classList.remove('active');
				menu_movil.classList.remove('active');
				document.body.style.overflow = '';
			});
		});
	}

	// =============================================
	// Dark Mode Toggle
	// =============================================
	const toggle_tema = document.getElementById('themeToggle');
	const prefiere_oscuro = window.matchMedia('(prefers-color-scheme: dark)');

	// Check for saved theme preference or use system preference
	function obtener_preferencia_tema() {
		const tema_guardado = localStorage.getItem('theme');
		if (tema_guardado) {
			return tema_guardado;
		}
		return prefiere_oscuro.matches ? 'dark' : 'light';
	}

	// Apply theme
	function establecer_tema(theme) {
		document.documentElement.setAttribute('data-theme', theme);
		localStorage.setItem('theme', theme);
	}

	// Initialize theme
	establecer_tema(obtener_preferencia_tema());

	// Toggle theme on button click
	if (toggle_tema) {
		toggle_tema.addEventListener('click', () => {
			const tema_actual = document.documentElement.getAttribute('data-theme');
			const nuevo_tema = tema_actual === 'dark' ? 'light' : 'dark';
			establecer_tema(nuevo_tema);
		});
	}

	// Listen for system theme changes
	prefiere_oscuro.addEventListener('change', (e) => {
		if (!localStorage.getItem('theme')) {
			establecer_tema(e.matches ? 'dark' : 'light');
		}
	});

	// =============================================
	// Chatbot Button (placeholder for future)
	// =============================================
	const boton_chatbot = document.getElementById('chatbotBtn');

	if (boton_chatbot) {
		boton_chatbot.addEventListener('click', () => {
			console.log('Chatbot button clicked - Add your chatbot logic here');
		});
	}

});

/* =============================================
   Funciones utilitarias
   ============================================= */

function validar_email(email) {
	const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	return re.test(email);
}

// Debounce function for performance
function debounce(func, wait) {
	let timeout;
	return function ejecutar_debounce(...args) {
		const later = () => {
			clearTimeout(timeout);
			func(...args);
		};
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
	};
}

// Throttle function for scroll events
function throttle(func, limit) {
	let en_throttle;
	return function(...args) {
		if (!en_throttle) {
			func.apply(this, args);
			en_throttle = true;
			setTimeout(() => en_throttle = false, limit);
		}
	};
}
