/*
 * Autor: MarnueLgh
 * Fecha: 03/05/2026
 * Version: 1.0
 * Descripcion: Logica del diagnostico interactivo de oportunidades IA.
 */

const mensajes_resultado = [
	'Hay oportunidad, pero conviene priorizar.',
	'Hay oportunidad, pero conviene priorizar.',
	'Ya tienes un proceso claro para automatizar.',
	'Ya tienes un proceso claro para automatizar.',
	'Tu operación necesita un flujo IA por fases.',
	'Tu operación necesita un flujo IA por fases.',
];

// Descripcion: Inicializa el checklist de diagnostico y actualiza su resultado.
export function iniciar_diagnostico_oportunidades() {
	const diagnostico = document.querySelector('[data-diagnostico-oportunidades]');
	if (!diagnostico) return;

	const lista_opciones = diagnostico.querySelectorAll('.oportunidades-opcion');
	const contador = diagnostico.querySelector('[data-oportunidades-contador]');
	const resultado = diagnostico.querySelector('[data-oportunidades-resultado]');

	if (!lista_opciones.length || !contador || !resultado) return;

	function actualizar_resultado() {
		const total_activo = diagnostico.querySelectorAll('.oportunidades-opcion[aria-pressed="true"]').length;

		contador.textContent = `${total_activo}/5 señales`;
		resultado.textContent = mensajes_resultado[total_activo];
	}

	lista_opciones.forEach((opcion) => {
		opcion.addEventListener('click', () => {
			const esta_activa = opcion.getAttribute('aria-pressed') === 'true';
			opcion.setAttribute('aria-pressed', String(!esta_activa));
			actualizar_resultado();
		});
	});

	actualizar_resultado();
}
