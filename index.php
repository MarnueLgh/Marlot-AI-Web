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

<!-- Sección: Parallax -->
<?php //require __DIR__ . '/includes/parallax.php'; ?>

<!-- Sección: Servicios -->
<?php include('includes/acordeon_servicios.php'); ?>

<!-- Sección: Diagnóstico de Oportunidades -->
<?php include('includes/diagnostico_oportunidades.php'); ?>



<!-- Sección: Footer -->
<?php require __DIR__ . '/includes/footer.php'; ?>

<!-- Sección: Scripts -->
<?php require __DIR__ . '/includes/scripts.php'; ?>