<?php
/*
 * Autor: MarnueLgh
 * Fecha: 04/04/2026
 * Version: 1.0
 * Descripcion: Página individual de artículo del blog
 */

require __DIR__ . '/includes/articulos.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$articulo = obtener_articulo($slug);

if (!$articulo) {
	header('HTTP/1.0 404 Not Found');
	$titulo_pagina = '404 - Artículo no encontrado | Marlot AI';
	$pagina_actual = 'articulo';
	$ancla_footer = '';
	$hojas_estilo = [];
	$scripts_pagina = [];
	
	require __DIR__ . '/includes/head.php';
	require __DIR__ . '/includes/nav.php';
	?>
	<main class="article-page">
		<div class="article-main article-404">
			<h1>404</h1>
			<p>Artículo no encontrado</p>
			<a href="blog.php" class="value-btn">Volver al Blog</a>
		</div>
	</main>
	<?php
	require __DIR__ . '/includes/footer.php';
	require __DIR__ . '/includes/scripts.php';
	exit;
}

$titulo_pagina = $articulo['titulo'] . ' | Marlot AI';
$pagina_actual = 'articulo';
$ancla_footer = '';
$hojas_estilo = [];
$scripts_pagina = [];

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/nav.php';
require __DIR__ . '/includes/article.php';
?>

<?php
require __DIR__ . '/includes/footer.php';
require __DIR__ . '/includes/scripts.php';
