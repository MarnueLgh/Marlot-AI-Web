<?php
/*
 * Autor: MarnueLgh
 * Fecha: 03/05/2026
 * Version: 1.0
 * Descripcion: Fragmento del diagnostico interactivo de oportunidades IA para pymes.
 */
?>

<!-- Sección: Diagnóstico de Oportunidades -->
<section class="oportunidades" aria-labelledby="oportunidades_titulo">
	<div class="oportunidades-contenedor" id="nosotros">
		<div class="oportunidades-contenido">
			<h2 class="oportunidades-titulo" id="oportunidades_titulo">Encuentra el primer proceso que tu negocio puede automatizar</h2>
			<p class="oportunidades-descripcion">Marca las señales que ya pasan en tu operación. Si aparecen dos o más, hay una oportunidad clara para implementar IA sin cambiar todo tu sistema.</p>
			<a href="#contacto" class="oportunidades-btn">SOLICITAR DIAGNÓSTICO</a>
		</div>

		<div class="oportunidades-panel" data-diagnostico-oportunidades>
			<div class="oportunidades-encabezado">
				<span class="oportunidades-contador" data-oportunidades-contador>0/5 señales</span>
				<span class="oportunidades-estado">Autoevaluación rápida</span>
			</div>

			<div class="oportunidades-lista" role="group" aria-label="Señales de oportunidad para automatizar con IA">
				<button class="oportunidades-opcion" type="button" aria-pressed="false">
					<span class="oportunidades-check" aria-hidden="true"></span>
					<span>Respondes las mismas preguntas varias veces al día.</span>
				</button>
				<button class="oportunidades-opcion" type="button" aria-pressed="false">
					<span class="oportunidades-check" aria-hidden="true"></span>
					<span>Das seguimiento manual a prospectos o clientes.</span>
				</button>
				<button class="oportunidades-opcion" type="button" aria-pressed="false">
					<span class="oportunidades-check" aria-hidden="true"></span>
					<span>Tienes información repartida entre chats, hojas y correos.</span>
				</button>
				<button class="oportunidades-opcion" type="button" aria-pressed="false">
					<span class="oportunidades-check" aria-hidden="true"></span>
					<span>Publicar contenido o campañas depende demasiado de tiempo libre.</span>
				</button>
				<button class="oportunidades-opcion" type="button" aria-pressed="false">
					<span class="oportunidades-check" aria-hidden="true"></span>
					<span>Tu equipo repite tareas administrativas que no generan venta directa.</span>
				</button>
			</div>

			<div class="oportunidades-resultado" aria-live="polite">
				<p class="oportunidades-subtexto">Resultado</p>
				<strong data-oportunidades-resultado>Hay oportunidad, pero conviene priorizar.</strong>
			</div>
		</div>
	</div>
</section>
