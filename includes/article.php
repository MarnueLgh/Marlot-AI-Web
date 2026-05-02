<?php
/*
 * Autor: MarnueLgh
 * Fecha: 04/04/2026
 * Version: 1.0
 * Descripcion: Template reutilizable para mostrar un articulo completo
 */

if (!isset($articulo)) {
	trigger_error('Variable $articulo no definida. Use obtener_articulo() para cargar el articulo.', E_USER_WARNING);
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
							<svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
						</a>
						<a href="https://twitter.com/intent/tweet?url=<?php echo urlencode('https://marlot.ai/articulo.php?slug=' . $articulo['slug']); ?>&text=<?php echo urlencode($articulo['titulo']); ?>" class="share-btn" aria-label="Twitter" target="_blank" rel="noopener">
							<svg viewBox="0 0 24 24" fill="currentColor"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
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
