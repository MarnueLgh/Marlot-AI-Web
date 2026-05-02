<?php
/*
 * Autor: MarnueLgh
 * Fecha: 04/04/2026
 * Version: 1.0
 * Descripción: Footer reutilizable del sitio
 */

if (!isset($ancla_footer)) {
	$ancla_footer = '';
}
?>
<!-- Footer -->
<footer class="footer"<?php echo $ancla_footer !== '' ? ' id="' . htmlspecialchars($ancla_footer, ENT_QUOTES, 'UTF-8') . '"' : ''; ?>>
	<div class="footer-top">
		<div class="footer-newsletter">
			<h3>Rediseña tu futuro con <span class="highlight">marlot</span></h3>
			<p class="newsletter-desc">Recibe tips de automatización y novedades sobre nuestros servicios.</p>
			<form class="newsletter-form">
				<input type="email" placeholder="Email" class="newsletter-input">
				<button type="submit" class="newsletter-btn">SUSCRIBIRSE</button>
			</form>
			<p class="privacy-note">Al suscribirte, aceptas nuestra <a href="#">Política de Privacidad</a>*.</p>
		</div>

		<div class="footer-links">
			<div class="footer-column">
				<h4>NAVEGAR</h4>
				<ul>
					<li><a href="index.php#servicios">Servicios</a></li>
					<li><a href="index.php#nosotros">Nuestra Historia</a></li>
					<li><a href="index.php#casos">Casos de Éxito</a></li>
					<li><a href="#">Impacto</a></li>
					<li><a href="blog.php">Blog</a></li>
				</ul>
			</div>

			<div class="footer-column">
				<h4>SOCIAL</h4>
				<ul class="social-icons">
					<li><a href="https://instagram.com/marlot.ai" target="_blank" aria-label="Instagram"><img src="assets/images/icons/instagram_icon.png" alt="Instagram" width="20" height="20" loading="lazy" decoding="async"></a></li>
					<li><a href="#" aria-label="Youtube"><img src="assets/images/icons/youtube_icon.png" alt="Youtube" width="20" height="20" loading="lazy" decoding="async"></a></li>
					<li><a href="#" aria-label="TikTok"><img src="assets/images/icons/tiktok_icon.png" alt="TikTok" width="20" height="20" loading="lazy" decoding="async"></a></li>
					<li><a href="#" aria-label="LinkedIn"><img src="assets/images/icons/linkedin_icon.png" alt="LinkedIn" width="20" height="20" loading="lazy" decoding="async"></a></li>
				</ul>
			</div>

			<div class="footer-column">
				<h4>OFICIAL</h4>
				<ul>
					<li><a href="#">Privacidad</a></li>
					<li><a href="#">Términos</a></li>
					<li><a href="#">Accesibilidad</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Contacto</a></li>
				</ul>
			</div>

			<div class="footer-column">
				<h4>SOPORTE</h4>
				<p class="support-text">L-V 9am - 6pm CST</p>
				<p class="support-text">Chatbot 24/7</p>
				<a href="mailto:support@marlot.ai" class="support-email">support@marlot.ai</a>
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<p>&copy; marlot 2026</p>
	</div>
</footer>
