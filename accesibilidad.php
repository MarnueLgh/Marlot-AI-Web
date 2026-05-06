<?php
/*
 * Autor: MarnueLgh
 * Fecha: 03/05/2026
 * Version: 1.0
 * Descripcion: Pagina de politica de accesibilidad de Marlot AI
 */

$titulo_pagina = 'Accesibilidad | Marlot AI';
$meta_descripcion = 'Conoce el compromiso de accesibilidad de Marlot AI y cómo reportar barreras de acceso en el sitio.';
$meta_keywords = 'accesibilidad, WCAG, inclusion digital, Marlot AI';
$pagina_actual = 'accesibilidad';
$ancla_footer = '';
$hojas_estilo = [];
$scripts_pagina = [];

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/nav.php';
?>

<main class="legal-pagina">
	<section class="legal-hero">
		<h1 class="legal-titulo">Política de Accesibilidad</h1>
		<p class="legal-resumen">Trabajamos para que el acceso a la tecnología y la información de Marlot AI sea claro, usable y compatible con distintas capacidades y dispositivos.</p>
		<p class="legal-fecha">Última actualización: mayo de 2025</p>
	</section>

	<section class="legal-contenedor">
		<aside class="legal-indice" aria-label="Índice de accesibilidad">
			<h2 class="legal-subtitulo">Contenido</h2>
			<a href="#compromiso">Nuestro compromiso</a>
			<a href="#medidas">Medidas implementadas</a>
			<a href="#limitaciones">Limitaciones conocidas</a>
			<a href="#reporte">Reportar un problema</a>
		</aside>

		<div class="legal-contenido">
			<section class="legal-bloque">
				<p>En Marlot AI creemos que el acceso a la tecnología y la información debe ser universal. Estamos comprometidos con hacer que nuestro sitio web sea accesible para todas las personas, independientemente de sus capacidades o del dispositivo que utilicen.</p>
			</section>

			<section class="legal-bloque" id="compromiso">
				<h2>Nuestro compromiso</h2>
				<p>Nos esforzamos por que nuestro sitio cumpla con las pautas de las <strong>Directrices de Accesibilidad para el Contenido Web (WCAG) 2.1</strong>, en su nivel de conformidad <strong>AA</strong>, publicadas por el World Wide Web Consortium (W3C).</p>
			</section>

			<section class="legal-bloque" id="medidas">
				<h2>Medidas implementadas</h2>
				<ul class="legal-lista">
					<li><strong>Contraste de color:</strong> buscamos que textos y componentes interactivos cumplan ratios mínimos de contraste recomendados.</li>
					<li><strong>Texto alternativo:</strong> las imágenes significativas del sitio incluyen texto alternativo descriptivo.</li>
					<li><strong>Navegación por teclado:</strong> el sitio puede recorrerse con teclado, con indicadores de foco visibles en elementos interactivos.</li>
					<li><strong>Jerarquía de encabezados:</strong> usamos una estructura semántica coherente para facilitar la orientación en la página.</li>
					<li><strong>Tipografía y espaciado:</strong> empleamos fuentes legibles, tamaños base accesibles y espaciado generoso.</li>
					<li><strong>Compatibilidad con tecnologías de asistencia:</strong> buscamos compatibilidad con lectores de pantalla y configuraciones nativas de accesibilidad.</li>
					<li><strong>Diseño responsivo:</strong> el sitio se adapta a distintos tamaños de pantalla y niveles de zoom.</li>
				</ul>
			</section>

			<section class="legal-bloque" id="limitaciones">
				<h2>Limitaciones conocidas</h2>
				<p>A pesar de nuestros esfuerzos, es posible que algunas partes del sitio aún presenten áreas de mejora. Trabajamos continuamente para identificar y corregir estas limitaciones.</p>
			</section>

			<section class="legal-bloque" id="reporte">
				<h2>Cómo reportar un problema</h2>
				<p>Si encuentra alguna barrera de accesibilidad en nuestro sitio o tiene dificultades para acceder a algún contenido, le invitamos a contactarnos:</p>
				<ul class="legal-lista">
					<li><strong>Correo:</strong> <a href="mailto:accesibilidad@marlot.ai">accesibilidad@marlot.ai</a></li>
					<li><strong>Asunto sugerido:</strong> "Reporte de accesibilidad"</li>
				</ul>
				<div class="legal-destacado">
					<p>Nos comprometemos a responder en un plazo de <strong>5 días hábiles</strong> y a trabajar en una solución lo antes posible.</p>
				</div>
			</section>
		</div>
	</section>

	<section class="legal-accion">
		<h2>Ayúdanos a mejorar la experiencia</h2>
		<p>Tu reporte nos permite corregir barreras reales y hacer que el sitio sea más útil para todas las personas.</p>
		<a href="mailto:accesibilidad@marlot.ai" class="legal-boton">Reportar accesibilidad</a>
	</section>
</main>

<?php
require __DIR__ . '/includes/footer.php';
require __DIR__ . '/includes/scripts.php';
