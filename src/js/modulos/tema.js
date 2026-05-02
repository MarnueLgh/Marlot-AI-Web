/*
 * Autor: MarnueLgh
 * Fecha: 02/05/2026
 * Version: 1.0
 * Descripcion: Toggle de tema claro/oscuro con persistencia en localStorage
 */

/**
 * Inicializa el sistema de temas (dark/light mode)
 */
export function iniciar_tema() {
	const toggle_tema = document.getElementById('themeToggle');
	const prefiere_oscuro = window.matchMedia('(prefers-color-scheme: dark)');

	function obtener_preferencia() {
		const tema_guardado = localStorage.getItem('theme');
		if (tema_guardado) return tema_guardado;
		return prefiere_oscuro.matches ? 'dark' : 'light';
	}

	function establecer_tema(tema) {
		document.documentElement.setAttribute('data-theme', tema);
		localStorage.setItem('theme', tema);
	}

	/* Aplicar tema inicial */
	establecer_tema(obtener_preferencia());

	/* Toggle al hacer click */
	if (toggle_tema) {
		toggle_tema.addEventListener('click', () => {
			const tema_actual = document.documentElement.getAttribute('data-theme');
			establecer_tema(tema_actual === 'dark' ? 'light' : 'dark');
		});
	}

	/* Escuchar cambios del sistema */
	prefiere_oscuro.addEventListener('change', (e) => {
		if (!localStorage.getItem('theme')) {
			establecer_tema(e.matches ? 'dark' : 'light');
		}
	});
}
