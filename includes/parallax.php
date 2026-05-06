<?php
/*
 * Autor: MarnueLgh
 * Fecha: 04/05/2026
 * Version: 1.0
 * Descripcion: Seccion parallax modular para el blog
 */

$imagenes_parallax = [
	[
		'src' => 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=1280&h=720&fit=crop&crop=entropy&auto=format&q=80',
		'alt' => 'Robot interactuando con tecnologia',
	],
	[
		'src' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1280&h=720&fit=crop&crop=entropy&auto=format&q=80',
		'alt' => 'Equipo de startup colaborando creativamente',
	],
	[
		'src' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=800&h=800&fit=crop&crop=entropy&auto=format&q=80',
		'alt' => 'Microchip y placa base iluminada en neon',
	],
	[
		'src' => 'https://images.unsplash.com/photo-1535378917042-10a22c95931a?w=1280&h=720&fit=crop&crop=entropy&auto=format&q=80',
		'alt' => 'Brazo robotico conceptual',
	],
	[
		'src' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=800&h=800&fit=crop&crop=entropy&auto=format&q=80',
		'alt' => 'Concepto visual de inteligencia artificial generativa',
	],
	[
		'src' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=1280&h=720&fit=crop&crop=entropy&auto=format&q=80',
		'alt' => 'Laboratorio de innovacion y robotica',
	],
	[
		'src' => 'https://images.unsplash.com/photo-1508614589041-895b88991e3e?w=1280&h=720&fit=crop&crop=entropy&auto=format&q=80',
		'alt' => 'Dron de automatizacion',
	],
];
?>

<!-- Seccion parallax del blog -->
<section class="parallax-seccion" id="contenedor-parallax" aria-label="Galeria visual sobre inteligencia artificial">
	<div class="parallax-contenedor" id="contenedor-sticky">
		<?php foreach ($imagenes_parallax as $indice_imagen => $imagen_parallax): ?>
		<div class="parallax-capa" data-capa="<?php echo $indice_imagen + 1; ?>">
			<div class="parallax-elemento">
				<img
					src="<?php echo htmlspecialchars($imagen_parallax['src'], ENT_QUOTES, 'UTF-8'); ?>"
					alt="<?php echo htmlspecialchars($imagen_parallax['alt'], ENT_QUOTES, 'UTF-8'); ?>"
					class="parallax-imagen"
					loading="lazy"
				>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</section>
