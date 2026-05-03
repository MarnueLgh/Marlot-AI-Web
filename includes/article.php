<?php
/*
 * Autor: MarnueLgh
 * Fecha: 04/04/2026
 * Version: 1.0
 * Descripcion: Template reutilizable para mostrar un artículo completo
 */

if (!isset($articulo)) {
	trigger_error('Variable $articulo no definida. Use obtener_articulo() para cargar el artículo.', E_USER_WARNING);
	return;
}
?>
<!-- Article Content -->
<main class="article-page">
	<div class="article-main">
		<header class="article-header">
			<span class="article-category"><?php echo htmlspecialchars($articulo['categoria']); ?></span>
			<h1 class="article-title"><?php echo htmlspecialchars($articulo['titulo']); ?></h1>
			<p class="article-subtitle"><?php echo htmlspecialchars($articulo['subtitulo']); ?></p>
			<div class="article-meta">
				<span><?php echo htmlspecialchars($articulo['fecha']); ?></span>
				<span>•</span>
				<span><?php echo htmlspecialchars($articulo['tiempo_lectura']); ?></span>
			</div>
		</header>

		<img src="<?php echo htmlspecialchars($articulo['imagen']); ?>" alt="<?php echo htmlspecialchars($articulo['imagen_alt']); ?>" class="article-hero-img" width="1200" height="800" fetchpriority="high" decoding="async">

		<div class="article-layout-editorial">
			<!-- Sidebar -->
			<aside class="article-sidebar">
				<h2 class="article-sidebar-title"><?php echo $articulo['sidebar_titulo']; ?></h2>
				<p class="article-sidebar-text"><?php echo htmlspecialchars($articulo['sidebar_texto']); ?></p>
				<div class="article-share">
					<span class="share-text">Compartir</span>
					<div class="share-icons">
						<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode('https://marlot.ai/articulo.php?slug=' . $articulo['slug']); ?>" class="share-btn" aria-label="LinkedIn" target="_blank" rel="noopener">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
								<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
							</svg>
						</a>
						<a href="https://twitter.com/intent/tweet?url=<?php echo urlencode('https://marlot.ai/articulo.php?slug=' . $articulo['slug']); ?>&text=<?php echo urlencode($articulo['titulo']); ?>" class="share-btn" aria-label="Twitter" target="_blank" rel="noopener">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
								<path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
							</svg>
						</a>
					</div>
				</div>
			</aside>

			<!-- Body Content -->
			<div class="article-body-text">
				<?php echo $articulo['contenido']; ?>
			</div>
		</div>
		
		<!-- Author -->
		<div class="article-author-block">
			<img src="<?php echo htmlspecialchars($articulo['autor']['imagen']); ?>" alt="<?php echo htmlspecialchars($articulo['autor']['nombre']); ?>" class="article-author-avatar" width="60" height="60" loading="lazy" decoding="async">
			<div class="article-author-info">
				<h4><?php echo htmlspecialchars($articulo['autor']['nombre']); ?></h4>
				<p><?php echo htmlspecialchars($articulo['autor']['descripcion']); ?></p>
			</div>
		</div>
	</div>
</main>
