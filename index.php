<?php
/*
 * Autor: MarnueLgh
 * Fecha: 04/04/2026
 * Version: 1.0
 * Descripcion: Home principal en PHP modular
 */

$titulo_pagina = 'Marlot AI - Agencia de Inteligencia Artificial';
$pagina_actual = 'index';
$ancla_footer = 'contacto';
$hojas_estilo = [];
$scripts_pagina = [];

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/nav.php';
?>

<!-- Hero Section -->
<section class="hero">
	<div class="hero-background-image">
		<img src="assets/images/hero/hero-mountain-grok.jpg" alt="Hero Background" fetchpriority="high" decoding="async">
	</div>
	<div class="hero-content">
		<h1 class="hero-title anim-cinematic" data-splitting>Inteligencia artificial<br>para tu negocio.</h1>
		<a href="#servicios" class="hero-btn">CONOCE NUESTRAS SOLUCIONES</a>
	</div>
	<div class="hero-overlay"></div>
</section>

<!-- Sección: Métricas -->
<?php include('includes/acordeon_metricas.php'); ?>

<!-- Sección: Servicios -->
<?php include('includes/acordeon_servicios.php'); ?>

<!-- Sección: Diagnóstico de Oportunidades -->
<?php include('includes/diagnostico_oportunidades.php'); ?>

<!-- Sección: Casos de Estudio -->
<!-- <section class="value-section value-section-alt" id="casos">
	<div class="value-container value-container-reverse">
		<div class="value-image">
			<div class="value-image-placeholder case-study-image">
				<div class="case-study-visual">
					<div class="chart-bars">
						<div class="bar bar-1"></div>
						<div class="bar bar-2"></div>
						<div class="bar bar-3"></div>
						<div class="bar bar-4"></div>
					</div>
					<span class="growth-label">Simple</span>
				</div>
			</div>
		</div>
		<div class="value-content">
			<div class="case-rating">
				<span class="stars">★★★★★</span>
				<span class="rating-count">Beta</span>
			</div>
			<h3 class="case-title">CÓMO FUNCIONA</h3>
			<p class="case-subtitle">Interfaz conversacional</p>
			<h2 class="value-title">Tan fácil como chatear</h2>
			<p class="value-description">Interactúa con una interfaz simple mediante mensajes y la IA ejecuta tareas automáticamente. Sin complicaciones técnicas, sin curva de aprendizaje. Solo escribe lo que necesitas.</p>
			<a href="#contacto" class="value-btn">SOLICITAR DEMO</a>
		</div>
	</div>
</section> -->

<section class="logo-section">
	<div class="large-logo"><img src="assets/images/footer-logo-marlot.svg" alt="Marlot AI" loading="lazy" decoding="async" width="1200" height="300"></div>
</section>

<?php
require __DIR__ . '/includes/footer.php';
require __DIR__ . '/includes/scripts.php';
