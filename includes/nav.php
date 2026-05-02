<?php
/*
 * Autor: MarnueLgh
 * Fecha: 04/04/2026
 * Version: 1.0
 * Descripcion: Navegación principal reutilizable para home y blog
 */

if (!isset($pagina_actual)) {
	$pagina_actual = 'index';
}

$es_home = $pagina_actual === 'index';
$es_blog = $pagina_actual === 'blog';
?>
<!-- Navigation -->
<nav class="navbar<?php echo $es_blog ? ' navbar-blog' : ''; ?>" id="navbar">
	<div class="nav-container">
		<div class="nav-left">
			<a href="<?php echo $es_home ? '#servicios' : 'index.php#servicios'; ?>" class="nav-link">SERVICIOS</a>
			<a href="<?php echo $es_home ? '#nosotros' : 'index.php#nosotros'; ?>" class="nav-link">NOSOTROS</a>
			<a href="<?php echo $es_home ? '#casos' : 'index.php#casos'; ?>" class="nav-link">CASOS</a>
		</div>
		<div class="nav-logo">
			<a href="index.php">
				<img src="assets/images/logo-marlot3.svg" alt="Marlot AI" class="logo-img" width="120" height="48" fetchpriority="high" decoding="async">
			</a>
		</div>
		<div class="nav-right">
			<a href="<?php echo $es_home ? '#contacto' : 'index.php#contacto'; ?>" class="nav-link">CONTACTO</a>
			<a href="blog.php" class="nav-link<?php echo $es_blog ? ' nav-active' : ''; ?>">BLOG</a>
			<a href="#" class="nav-link nav-cta">AGENDA UNA LLAMADA</a>
		</div>
		<button class="nav-hamburger" id="navHamburger" aria-label="Abrir menu">
			<span></span>
			<span></span>
			<span></span>
		</button>
	</div>
</nav>

<!-- Mobile Menu Drawer -->
<div class="mobile-menu" id="mobileMenu">
	<a href="<?php echo $es_home ? '#servicios' : 'index.php#servicios'; ?>">SERVICIOS</a>
	<a href="<?php echo $es_home ? '#nosotros' : 'index.php#nosotros'; ?>">NOSOTROS</a>
	<a href="<?php echo $es_home ? '#casos' : 'index.php#casos'; ?>">CASOS</a>
	<a href="<?php echo $es_home ? '#contacto' : 'index.php#contacto'; ?>">CONTACTO</a>
	<a href="blog.php">BLOG</a>
	<a href="#" class="mobile-menu-cta">AGENDA UNA LLAMADA</a>
</div>
