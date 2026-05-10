<?php
/*
 * Autor: MarnueLgh
 * Fecha: 10/05/2026
 * Version: 1.0
 * Descripcion: Fragmento visual de secuencia de iPhone activada por scroll.
 */
?>

<!-- Seccion: Secuencia iPhone -->
<section
	class="secuencia-iphone"
	data-secuencia-iphone
	data-ruta-base="assets/images/componente_iphone/"
	data-prefijo-fotograma="ezgif-frame-"
	data-extension=".jpg"
	data-total-fotogramas="160"
	data-digitos="3"
	aria-label="Secuencia visual del componente iPhone activada por desplazamiento"
>
	<div class="secuencia-marco">
		<canvas class="secuencia-canvas" data-secuencia-canvas aria-hidden="true"></canvas>

		<img
			class="secuencia-respaldo"
			src="assets/images/componente_iphone/ezgif-frame-001.jpg"
			alt="Vista inicial del componente iPhone"
			loading="lazy"
			decoding="async"
		>

		<noscript>
			<p class="secuencia-sin-script">Activa JavaScript para ver la secuencia completa.</p>
		</noscript>
	</div>
</section>
