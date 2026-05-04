<?php
/*
 * Autor: MarnueLgh
 * Fecha: 03/05/2026
 * Version: 1.0
 * Descripcion: Pagina de terminos y condiciones de Marlot AI
 */

$titulo_pagina = 'Términos y Condiciones | Marlot AI';
$meta_descripcion = 'Consulta los términos que regulan el uso del sitio web y la contratación de servicios de Marlot AI.';
$meta_keywords = 'terminos, condiciones, servicios, propiedad intelectual, Marlot AI';
$pagina_actual = 'terminos';
$ancla_footer = '';
$hojas_estilo = [];
$scripts_pagina = [];

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/nav.php';
?>

<main class="legal-pagina">
	<section class="legal-hero">
		<span class="legal-etiqueta">Documento legal</span>
		<h1 class="legal-titulo">Términos y Condiciones</h1>
		<p class="legal-resumen">Estos términos regulan el acceso al sitio web de Marlot AI y la contratación de nuestros servicios de inteligencia artificial para empresas.</p>
		<p class="legal-fecha">Última actualización: mayo de 2025</p>
	</section>

	<section class="legal-contenedor">
		<aside class="legal-indice" aria-label="Índice de términos">
			<h2 class="legal-subtitulo">Contenido</h2>
			<a href="#servicio">Descripción del servicio</a>
			<a href="#uso">Uso del sitio web</a>
			<a href="#contratacion">Contratación</a>
			<a href="#propiedad">Propiedad intelectual</a>
			<a href="#responsabilidad">Responsabilidad</a>
			<a href="#jurisdiccion">Jurisdicción</a>
		</aside>

		<div class="legal-contenido">
			<section class="legal-bloque">
				<p>Los presentes Términos y Condiciones regulan el acceso y uso del sitio web de <strong>Marlot AI</strong> y la contratación de los servicios ofrecidos por la Agencia. Al navegar por nuestro sitio o contratar cualquiera de nuestros servicios, usted acepta estos Términos en su totalidad.</p>
			</section>

			<section class="legal-bloque" id="servicio">
				<h2>1. Descripción del servicio</h2>
				<p>Marlot AI es una agencia especializada en la implementación de soluciones de <strong>Inteligencia Artificial para pequeñas y medianas empresas (PyMEs)</strong>. Nuestros servicios incluyen, sin limitarse a:</p>
				<ul class="legal-lista">
					<li>Consultoría y diagnóstico de automatización con IA.</li>
					<li>Desarrollo e integración de agentes de IA personalizados.</li>
					<li>Automatización de flujos de trabajo y procesos operativos.</li>
					<li>Implementación de chatbots y asistentes virtuales.</li>
					<li>Capacitación y acompañamiento en la adopción de herramientas de IA.</li>
				</ul>
			</section>

			<section class="legal-bloque" id="uso">
				<h2>2. Uso del sitio web</h2>
				<p>El acceso al sitio web de Marlot AI es gratuito y de carácter informativo. Usted se compromete a:</p>
				<ul class="legal-lista">
					<li>Utilizar el sitio únicamente con fines lícitos y de conformidad con estos Términos.</li>
					<li>No intentar acceder a sistemas, redes o datos de forma no autorizada.</li>
					<li>No reproducir, distribuir ni modificar el contenido del sitio sin autorización expresa.</li>
					<li>No utilizar el sitio para enviar comunicaciones no solicitadas.</li>
				</ul>
				<p>Marlot AI se reserva el derecho de restringir o suspender el acceso a cualquier usuario que incumpla estas condiciones.</p>
			</section>

			<section class="legal-bloque" id="contratacion">
				<h2>3. Contratación de servicios</h2>
				<p>La contratación de servicios de Marlot AI se formaliza mediante la firma de una <strong>propuesta comercial</strong> o <strong>contrato de prestación de servicios</strong>, en el que se especifican el alcance, los entregables, los plazos y las condiciones económicas pactadas.</p>
				<div class="legal-destacado">
					<p>Ningún intercambio de mensajes previo a la firma del contrato constituye un compromiso vinculante para ninguna de las partes.</p>
				</div>
			</section>

			<section class="legal-bloque" id="propiedad">
				<h2>4. Propiedad intelectual</h2>
				<p>Todo el contenido del sitio web de Marlot AI, incluyendo textos, diseños, logotipos, imágenes y código fuente, es propiedad exclusiva de la Agencia o de sus licenciantes y está protegido por las leyes mexicanas de propiedad intelectual.</p>
				<p>Respecto a los entregables producidos durante la prestación de servicios, los derechos de propiedad intelectual se regirán conforme a lo pactado en el contrato específico de cada proyecto.</p>
			</section>

			<section class="legal-bloque" id="responsabilidad">
				<h2>5. Limitación de responsabilidad</h2>
				<p>Marlot AI no será responsable por daños directos, indirectos, incidentales o consecuentes derivados de:</p>
				<ul class="legal-lista">
					<li>La imposibilidad de acceder al sitio web por causas ajenas a nuestra voluntad.</li>
					<li>El uso indebido que usted haga del sitio o de la información en él contenida.</li>
					<li>Resultados comerciales específicos derivados del uso de nuestras soluciones de IA, los cuales dependen de factores externos a nuestro control.</li>
				</ul>
			</section>

			<section class="legal-bloque">
				<h2>6. Modificaciones</h2>
				<p>Marlot AI puede actualizar estos Términos en cualquier momento. La versión vigente será siempre la publicada en este sitio, identificada por su fecha de última actualización.</p>
			</section>

			<section class="legal-bloque" id="jurisdiccion">
				<h2>7. Legislación aplicable y jurisdicción</h2>
				<p>Los presentes Términos se rigen por las leyes vigentes en los <strong>Estados Unidos Mexicanos</strong>. Para cualquier controversia derivada de su interpretación o cumplimiento, las partes se someten expresamente a la jurisdicción de los tribunales competentes de la <strong>Ciudad de México</strong>, renunciando a cualquier otro fuero que pudiera corresponderles.</p>
			</section>
		</div>
	</section>

	<section class="legal-accion">
		<h2>¿Listo para evaluar un proyecto?</h2>
		<p>Podemos revisar tus objetivos y preparar una propuesta comercial con alcance, entregables y tiempos claros.</p>
		<a href="index.php#contacto" class="legal-boton">Contactar a Marlot AI</a>
	</section>
</main>

<?php
require __DIR__ . '/includes/footer.php';
require __DIR__ . '/includes/scripts.php';
