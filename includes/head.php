<?php
/*
 * Autor: MarnueLgh
 * Fecha: 04/04/2026
 * Version: 2.0
 * Descripcion: Cabecera base HTML con estilos compartidos, metaetiquetas SEO y carga de assets vía Vite
 */

require_once __DIR__ . '/vite.php';

if (!isset($titulo_pagina)) {
	$titulo_pagina = 'Marlot AI | Transformación Digital';
}

if (!isset($meta_descripcion)) {
	$meta_descripcion = 'Marlot AI ayuda a transformar tu negocio con soluciones de inteligencia artificial, automatización y chatbots avanzados.';
}

if (!isset($meta_keywords)) {
	$meta_keywords = 'inteligencia artificial, automatización, chatbots, tecnología, negocios, marlot ai';
}

if (!isset($hojas_estilo) || !is_array($hojas_estilo)) {
	$hojas_estilo = [];
}

/* Entry point Vite para esta pagina (default: main) */
if (!isset($vite_entrada)) {
	$vite_entrada = 'src/js/main.js';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<title><?php echo htmlspecialchars($titulo_pagina, ENT_QUOTES, 'UTF-8'); ?></title>
	<script>
		document.documentElement.classList.add('js-enabled');
		if ('scrollRestoration' in history) {
			history.scrollRestoration = 'manual';
		}
		window.scrollTo(0, 0);
	</script>
	
	<!-- SEO Meta Tags -->
	<meta name="description" content="<?php echo htmlspecialchars($meta_descripcion, ENT_QUOTES, 'UTF-8'); ?>">
	<meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords, ENT_QUOTES, 'UTF-8'); ?>">
	<meta name="author" content="Marlot AI">
	<meta name="robots" content="index, follow">
	<meta name="theme-color" content="#F5F3F0">
	
	<!-- Open Graph / Social Media -->
	<meta property="og:title" content="<?php echo htmlspecialchars($titulo_pagina, ENT_QUOTES, 'UTF-8'); ?>">
	<meta property="og:description" content="<?php echo htmlspecialchars($meta_descripcion, ENT_QUOTES, 'UTF-8'); ?>">
	<meta property="og:type" content="website">
	
	<!-- Resource Optimization & Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" media="print" onload="this.media='all'">
	<noscript>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
	</noscript>
	<!-- CSS bloqueante (dev: via Vite server / prod: via manifest en vite_tags) -->
	<?php echo vite_precargar_css([
		'node_modules/splitting/dist/splitting.css',
		'node_modules/splitting/dist/splitting-cells.css',
		'src/css/styles.css',
	]); ?>

	<!-- Vite Assets (JS + CSS en producción) -->
	<?php echo vite_tags($vite_entrada); ?>

	<?php foreach ($hojas_estilo as $hoja_estilo): ?>
		<?php if (!empty($hoja_estilo)): ?>
		<link rel="stylesheet" href="<?php echo htmlspecialchars($hoja_estilo, ENT_QUOTES, 'UTF-8'); ?>">
		<?php endif; ?>
	<?php endforeach; ?>
</head>
<body>
