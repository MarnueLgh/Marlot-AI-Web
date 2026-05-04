<?php
/*
 * Autor: MarnueLgh
 * Fecha: 03/05/2026
 * Version: 1.0
 * Descripcion: Pagina de politica de privacidad de Marlot AI
 */

$titulo_pagina = 'Política de Privacidad | Marlot AI';
$meta_descripcion = 'Conoce cómo Marlot AI recopila, utiliza y protege tus datos personales conforme a la legislación mexicana.';
$meta_keywords = 'privacidad, datos personales, derechos ARCO, cookies, Marlot AI';
$pagina_actual = 'privacidad';
$ancla_footer = '';
$hojas_estilo = [];
$scripts_pagina = [];

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/nav.php';
?>

<main class="legal-pagina">
	<section class="legal-hero">
		<span class="legal-etiqueta">Documento legal</span>
		<h1 class="legal-titulo">Política de Privacidad</h1>
		<p class="legal-resumen">Marlot AI protege los datos personales que nos compartes al navegar por nuestro sitio, solicitar información o contratar nuestros servicios.</p>
		<p class="legal-fecha">Última actualización: mayo de 2025</p>
	</section>

	<section class="legal-contenedor">
		<aside class="legal-indice" aria-label="Índice de privacidad">
			<h2 class="legal-subtitulo">Contenido</h2>
			<a href="#datos">Datos que recopilamos</a>
			<a href="#finalidades">Finalidades</a>
			<a href="#transferencia">Transferencia de datos</a>
			<a href="#cookies">Cookies</a>
			<a href="#arco">Derechos ARCO</a>
			<a href="#cambios">Cambios al aviso</a>
		</aside>

		<div class="legal-contenido">
			<section class="legal-bloque">
				<p><strong>Marlot AI</strong> (en adelante "Marlot", "nosotros" o "la Agencia"), con domicilio en México, es responsable del tratamiento de los datos personales que usted nos proporciona, de conformidad con la <strong>Ley Federal de Protección de Datos Personales en Posesión de los Particulares (LFPDPPP)</strong> y su Reglamento.</p>
			</section>

			<section class="legal-bloque" id="datos">
				<h2>1. Datos que recopilamos</h2>
				<p>Al interactuar con nuestro sitio web o solicitar nuestros servicios, podemos recopilar los siguientes datos personales:</p>
				<ul class="legal-lista">
					<li><strong>Datos de identificación y contacto:</strong> nombre completo, correo electrónico, número de teléfono y nombre de su empresa.</li>
					<li><strong>Datos de uso del sitio:</strong> dirección IP, tipo de navegador, páginas visitadas y duración de la sesión, recopilados mediante cookies y herramientas de analítica web.</li>
					<li><strong>Datos de comunicación:</strong> mensajes enviados a través de nuestros formularios de contacto o correo electrónico.</li>
					<li><strong>Datos de facturación:</strong> en caso de contratar nuestros servicios, datos fiscales como RFC y domicilio fiscal, necesarios para la emisión de comprobantes digitales (CFDI).</li>
				</ul>
				<div class="legal-destacado">
					<p>No recopilamos datos personales sensibles, como datos de salud, origen racial, creencias religiosas o datos biométricos para ninguno de nuestros servicios.</p>
				</div>
			</section>

			<section class="legal-bloque" id="finalidades">
				<h2>2. Finalidades del tratamiento</h2>
				<p>Sus datos personales serán utilizados para las siguientes finalidades primarias, sin las cuales no podríamos prestar nuestros servicios:</p>
				<ul class="legal-lista">
					<li>Responder a sus solicitudes de información y cotizaciones.</li>
					<li>Celebrar, ejecutar y dar seguimiento a contratos de prestación de servicios.</li>
					<li>Generar comprobantes fiscales y cumplir obligaciones contables y legales.</li>
					<li>Gestionar la relación comercial con usted o su empresa.</li>
				</ul>
				<p>De manera secundaria, y solo con su consentimiento cuando así se requiera, utilizamos sus datos para:</p>
				<ul class="legal-lista">
					<li>Enviarle comunicaciones de marketing, boletines informativos y novedades de Marlot AI.</li>
					<li>Realizar encuestas de satisfacción y estudios de mercado.</li>
					<li>Personalizar el contenido que le mostramos en nuestro sitio.</li>
				</ul>
			</section>

			<section class="legal-bloque" id="transferencia">
				<h2>3. Transferencia de datos</h2>
				<p>Marlot AI no vende, cede ni comercializa sus datos personales a terceros. No obstante, podemos compartirlos con:</p>
				<ul class="legal-lista">
					<li><strong>Proveedores de tecnología:</strong> servidores en la nube, plataformas de correo y herramientas de analítica que actúan como encargados del tratamiento bajo acuerdos de confidencialidad.</li>
					<li><strong>Autoridades competentes:</strong> cuando la ley nos obligue a hacerlo.</li>
				</ul>
			</section>

			<section class="legal-bloque" id="cookies">
				<h2>4. Cookies y tecnologías de rastreo</h2>
				<p>Nuestro sitio web utiliza cookies propias y de terceros para mejorar la experiencia de navegación, medir el rendimiento del sitio y, opcionalmente, mostrar contenido relevante.</p>
				<p>Al ingresar al sitio por primera vez, presentamos un banner de consentimiento de cookies. Puede gestionar sus preferencias en cualquier momento desde este enlace:</p>
				<button class="legal-boton" type="button" data-cookie-preferencias>Gestionar cookies</button>
			</section>

			<section class="legal-bloque" id="arco">
				<h2>5. Derechos ARCO</h2>
				<p>Usted tiene derecho a <strong>Acceder, Rectificar, Cancelar u Oponerse</strong> al tratamiento de sus datos personales. Para ejercer cualquiera de estos derechos, envíe su solicitud por escrito a <a href="mailto:privacidad@marlot.ai">privacidad@marlot.ai</a>, indicando:</p>
				<ul class="legal-lista">
					<li>Nombre completo y datos de contacto.</li>
					<li>Descripción clara del derecho que desea ejercer.</li>
					<li>Documentos que acrediten su identidad.</li>
				</ul>
				<p>Atenderemos su solicitud en un plazo máximo de <strong>20 días hábiles</strong> a partir de su recepción.</p>
			</section>

			<section class="legal-bloque" id="cambios">
				<h2>6. Cambios al Aviso de Privacidad</h2>
				<p>Marlot AI se reserva el derecho de modificar este aviso en cualquier momento. Las modificaciones se publicarán en esta misma página con la fecha de actualización correspondiente. El uso continuado de nuestros servicios tras la publicación de cambios implica su aceptación.</p>
			</section>
		</div>
	</section>

	<section class="legal-accion">
		<h2>¿Tienes dudas sobre tus datos?</h2>
		<p>Escríbenos y te ayudaremos a resolver cualquier solicitud relacionada con privacidad o derechos ARCO.</p>
		<a href="mailto:privacidad@marlot.ai" class="legal-boton">Contactar privacidad</a>
	</section>
</main>

<?php
require __DIR__ . '/includes/footer.php';
require __DIR__ . '/includes/scripts.php';
