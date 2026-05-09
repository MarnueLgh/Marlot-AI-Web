<?php
/*
 * Autor: MarnueLgh
 * Fecha: 04/04/2026
 * Version: 1.0
 * Descripcion: Página de blog en PHP modular
 */

$titulo_pagina = 'Blog - Marlot AI | Insights de Inteligencia Artificial';
$pagina_actual = 'blog';
$ancla_footer = '';
$hojas_estilo = [];
$scripts_pagina = [];
$vite_entrada = 'src/js/main.js';

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/nav.php';
require __DIR__ . '/includes/articulos.php';

$articulos_recientes = obtener_articulos_recientes(6);
$articulo_destacado = null;
$demas_articulos = [];

foreach ($articulos_recientes as $articulo) {
	if ($articulo['etiqueta'] === 'DESTACADO') {
		$articulo_destacado = $articulo;
	} else {
		$demas_articulos[] = $articulo;
	}
}

if (!$articulo_destacado && count($articulos_recientes) > 0) {
	$articulo_destacado = $articulos_recientes[0];
	$demas_articulos = array_slice($articulos_recientes, 1);
}

// src_local queda preparado para activar imagenes propias cuando existan en el proyecto.
$imagenes_float_card = [
	[
		'clase' => 'float-card-1',
		'src_remoto' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=500&h=500&fit=crop&crop=entropy&auto=format&q=80',
		'src_local' => 'public/assets/images/blog/float-cards/ia.webp',
		'alt' => 'Concepto visual de inteligencia artificial',
	],
	[
		'clase' => 'float-card-2',
		'src_remoto' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500&h=500&fit=crop&crop=entropy&auto=format&q=80',
		'src_local' => 'public/assets/images/blog/float-cards/analitica.webp',
		'alt' => 'Analitica de datos empresariales',
	],
	[
		'clase' => 'float-card-3',
		'src_remoto' => 'https://images.unsplash.com/photo-1535378917042-10a22c95931a?w=500&h=500&fit=crop&crop=entropy&auto=format&q=80',
		'src_local' => 'public/assets/images/blog/float-cards/automatizacion.webp',
		'alt' => 'Automatizacion con tecnologia robotica',
	],
];
?>

<!-- Blog Hero Section -->
<section class="blog-hero">
	<div class="blog-hero-content">
		<span class="blog-hero-tag">BLOG</span>
		<h1 class="blog-hero-title">Descubre el futuro<br>de la IA</h1>
		<p class="blog-hero-subtitle">Insights, tendencias y guías prácticas para transformar tu negocio con inteligencia artificial.</p>
		<a href="#articles" class="blog-hero-cta">
			<span>Explorar artículos</span>
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
				<path d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
			</svg>
		</a>
	</div>
	<div class="blog-hero-visual">
		<div class="floating-cards">
			<?php foreach ($imagenes_float_card as $imagen_float_card): ?>
			<div class="float-card <?php echo htmlspecialchars($imagen_float_card['clase'], ENT_QUOTES, 'UTF-8'); ?>">
				<img
					src="<?php echo htmlspecialchars($imagen_float_card['src_remoto'], ENT_QUOTES, 'UTF-8'); ?>"
					data-src-local="<?php echo htmlspecialchars($imagen_float_card['src_local'], ENT_QUOTES, 'UTF-8'); ?>"
					alt="<?php echo htmlspecialchars($imagen_float_card['alt'], ENT_QUOTES, 'UTF-8'); ?>"
					class="float-imagen"
					loading="lazy"
					decoding="async"
				>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Blog Articles Section -->
<section class="blog-articles" id="articles">
	<div class="blog-articles-header">
		<h2 class="section-title">Últimos artículos</h2>
		<div class="blog-filters">
			<button class="filter-btn active" data-filter="all">Todos</button>
			<button class="filter-btn" data-filter="ia">IA</button>
			<button class="filter-btn" data-filter="automation">Automatización</button>
			<button class="filter-btn" data-filter="tips">Tips</button>
		</div>
	</div>

	<div class="blog-grid">
		<?php if ($articulo_destacado): ?>
		<article class="blog-card blog-card-featured" data-category="<?php echo htmlspecialchars($articulo_destacado['categoria_slug']); ?>">
			<a href="articulo.php?slug=<?php echo htmlspecialchars($articulo_destacado['slug']); ?>">
				<div class="blog-card-image">
					<img src="<?php echo htmlspecialchars($articulo_destacado['imagen']); ?>" alt="<?php echo htmlspecialchars($articulo_destacado['imagen_alt']); ?>" loading="lazy" width="800" height="600">
					<?php if ($articulo_destacado['etiqueta']): ?>
					<span class="blog-card-tag"><?php echo htmlspecialchars($articulo_destacado['etiqueta']); ?></span>
					<?php endif; ?>
				</div>
				<div class="blog-card-content">
					<span class="blog-card-category"><?php echo htmlspecialchars($articulo_destacado['categoria']); ?></span>
					<h3 class="blog-card-title"><?php echo htmlspecialchars($articulo_destacado['titulo']); ?></h3>
					<p class="blog-card-excerpt"><?php echo htmlspecialchars($articulo_destacado['subtitulo']); ?></p>
					<div class="blog-card-meta">
						<span class="blog-card-date"><?php echo htmlspecialchars($articulo_destacado['fecha']); ?></span>
						<span class="blog-card-read"><?php echo htmlspecialchars($articulo_destacado['tiempo_lectura']); ?></span>
					</div>
				</div>
			</a>
		</article>
		<?php endif; ?>

		<?php foreach ($demas_articulos as $articulo): ?>
		<article class="blog-card" data-category="<?php echo htmlspecialchars($articulo['categoria_slug']); ?>">
			<a href="articulo.php?slug=<?php echo htmlspecialchars($articulo['slug']); ?>">
				<div class="blog-card-image">
					<img src="<?php echo htmlspecialchars($articulo['imagen']); ?>" alt="<?php echo htmlspecialchars($articulo['imagen_alt']); ?>" loading="lazy" width="600" height="400">
					<?php if ($articulo['etiqueta']): ?>
					<span class="blog-card-tag tag-new"><?php echo htmlspecialchars($articulo['etiqueta']); ?></span>
					<?php endif; ?>
				</div>
				<div class="blog-card-content">
					<span class="blog-card-category"><?php echo htmlspecialchars($articulo['categoria']); ?></span>
					<h3 class="blog-card-title"><?php echo htmlspecialchars($articulo['titulo']); ?></h3>
					<div class="blog-card-meta">
						<span class="blog-card-date"><?php echo htmlspecialchars($articulo['fecha']); ?></span>
						<span class="blog-card-read"><?php echo htmlspecialchars($articulo['tiempo_lectura']); ?></span>
					</div>
				</div>
			</a>
		</article>
		<?php endforeach; ?>
	</div>

	<div class="blog-load-more">
		<button class="load-more-btn">Cargar más artículos</button>
	</div>
</section>

<?php
require_once __DIR__ . '/includes/vite.php';
echo vite_tags('src/js/blog.js');

require __DIR__ . '/includes/footer.php';
require __DIR__ . '/includes/scripts.php';
