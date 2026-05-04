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
			<div class="float-card float-card-1"><span class="float-icon">🤖</span></div>
			<div class="float-card float-card-2"><span class="float-icon">📊</span></div>
			<div class="float-card float-card-3"><span class="float-icon">⚡</span></div>
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

<!-- Zoom Parallax Gallery Section -->
<section class="parallax-section">
	<div class="parallax-intro">
		<h2 class="parallax-title">Visualiza el futuro</h2>
		<p class="parallax-subtitle">Explora cómo la IA está transformando industrias</p>
	</div>

	<div class="zoom-parallax-container" id="zoomParallax">
		<div class="parallax-sticky">
			<div class="parallax-image-wrapper" data-scale="4">
				<div class="parallax-image parallax-center">
					<img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=800&h=600&fit=crop" alt="Robot AI" loading="lazy">
				</div>
			</div>
			<div class="parallax-image-wrapper" data-scale="5" data-position="top-left">
				<div class="parallax-image parallax-gradient"><div class="gradient-content"></div></div>
			</div>
			<div class="parallax-image-wrapper" data-scale="5.5" data-position="top-right">
				<div class="parallax-image">
					<img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=800&h=500&fit=crop" alt="City business" loading="lazy">
				</div>
			</div>
			<div class="parallax-image-wrapper" data-scale="4.5" data-position="center-left">
				<div class="parallax-image">
					<img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=400&fit=crop" alt="Modern architecture" loading="lazy">
				</div>
			</div>
			<div class="parallax-image-wrapper" data-scale="6" data-position="center-right">
				<div class="parallax-image">
					<img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&h=400&fit=crop" alt="Mountains" loading="lazy">
				</div>
			</div>
			<div class="parallax-image-wrapper" data-scale="5" data-position="bottom-left">
				<div class="parallax-image">
					<img src="https://images.unsplash.com/photo-1439066615861-d1af74d74000?w=600&h=400&fit=crop" alt="Lake dock" loading="lazy">
				</div>
			</div>
			<div class="parallax-image-wrapper" data-scale="7" data-position="bottom-right">
				<div class="parallax-image">
					<img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=600&h=400&fit=crop" alt="Forest" loading="lazy">
				</div>
			</div>
		</div>
	</div>
</section>

<?php
require_once __DIR__ . '/includes/vite.php';
echo vite_tags('src/js/blog.js');

require __DIR__ . '/includes/footer.php';
require __DIR__ . '/includes/scripts.php';
