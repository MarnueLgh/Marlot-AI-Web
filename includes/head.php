<?php
/*
 * Autor: MarnueLgh
 * Fecha: 04/04/2026
 * Version: 1.1
 * Descripcion: Cabecera base HTML con estilos compartidos, metaetiquetas SEO y optimizacion de recursos
 */

if (!isset($titulo_pagina)) {
	$titulo_pagina = 'Marlot AI | Transformacion Digital';
}

if (!isset($meta_descripcion)) {
	$meta_descripcion = 'Marlot AI ayuda a transformar tu negocio con soluciones de inteligencia artificial, automatizacion y chatbots avanzados.';
}

if (!isset($meta_keywords)) {
	$meta_keywords = 'inteligencia artificial, automatizacion, chatbots, tecnologia, negocios, marlot ai';
}

if (!isset($hojas_estilo) || !is_array($hojas_estilo)) {
	$hojas_estilo = [];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<title><?php echo htmlspecialchars($titulo_pagina, ENT_QUOTES, 'UTF-8'); ?></title>
	
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

	<!-- Splitting.js CSS -->
	<link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting.css" />
	<link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting-cells.css" />

	<!-- Main CSS -->
	<link rel="stylesheet" href="css/styles.css">
	<?php foreach ($hojas_estilo as $hoja_estilo): ?>
		<?php if (!empty($hoja_estilo)): ?>
		<link rel="stylesheet" href="<?php echo htmlspecialchars($hoja_estilo, ENT_QUOTES, 'UTF-8'); ?>">
		<?php endif; ?>
	<?php endforeach; ?>
</head>
<body>
