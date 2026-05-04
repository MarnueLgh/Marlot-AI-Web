<?php
/*
 * Autor: MarnueLgh
 * Fecha: 03/05/2026
 * Version: 1.0
 * Descripcion: Pagina de preguntas frecuentes de Marlot AI
 */

$titulo_pagina = 'Preguntas Frecuentes | Marlot AI';
$meta_descripcion = 'Resuelve dudas frecuentes sobre Marlot AI, servicios de inteligencia artificial, precios, datos y contratación.';
$meta_keywords = 'faq, preguntas frecuentes, servicios IA, precios, Marlot AI';
$pagina_actual = 'faq';
$ancla_footer = '';
$hojas_estilo = [];
$scripts_pagina = [];

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/nav.php';
?>

<main class="legal-pagina faq-pagina">
	<section class="legal-hero">
		<span class="legal-etiqueta">Centro de ayuda</span>
		<h1 class="legal-titulo">Preguntas Frecuentes</h1>
		<p class="legal-resumen">Respuestas rápidas sobre Marlot AI, nuestros servicios, precios, contratación, privacidad y forma de trabajo.</p>
		<p class="legal-fecha">Última actualización: mayo de 2025</p>
	</section>

	<section class="faq-contenedor" aria-label="Preguntas frecuentes">
		<div class="faq-grupo">
			<h2>Sobre Marlot AI</h2>
			<div class="faq-lista">
				<article class="faq-item">
					<button class="faq-pregunta" type="button" aria-expanded="false" aria-controls="faq_respuesta_1" id="faq_pregunta_1">
						<span>¿Qué es Marlot AI?</span>
						<span class="faq-icono" aria-hidden="true"></span>
					</button>
					<div class="faq-respuesta" id="faq_respuesta_1" role="region" aria-labelledby="faq_pregunta_1">
						<p>Marlot AI es una agencia de inteligencia artificial enfocada en ayudar a pequeñas y medianas empresas a implementar soluciones de IA de forma práctica, accesible y alineada con sus necesidades de negocio reales.</p>
					</div>
				</article>

				<article class="faq-item">
					<button class="faq-pregunta" type="button" aria-expanded="false" aria-controls="faq_respuesta_2" id="faq_pregunta_2">
						<span>¿A qué tipo de empresas va dirigido Marlot AI?</span>
						<span class="faq-icono" aria-hidden="true"></span>
					</button>
					<div class="faq-respuesta" id="faq_respuesta_2" role="region" aria-labelledby="faq_pregunta_2">
						<p>Trabajamos principalmente con PyMEs de cualquier sector que busquen automatizar procesos, mejorar la atención a sus clientes o aprovechar sus datos de manera más inteligente.</p>
					</div>
				</article>

				<article class="faq-item">
					<button class="faq-pregunta" type="button" aria-expanded="false" aria-controls="faq_respuesta_3" id="faq_pregunta_3">
						<span>¿Dónde opera Marlot AI?</span>
						<span class="faq-icono" aria-hidden="true"></span>
					</button>
					<div class="faq-respuesta" id="faq_respuesta_3" role="region" aria-labelledby="faq_pregunta_3">
						<p>Operamos de forma remota y podemos trabajar con empresas en cualquier parte de México y Latinoamérica.</p>
					</div>
				</article>
			</div>
		</div>

		<div class="faq-grupo">
			<h2>Sobre los servicios</h2>
			<div class="faq-lista">
				<article class="faq-item">
					<button class="faq-pregunta" type="button" aria-expanded="false" aria-controls="faq_respuesta_4" id="faq_pregunta_4">
						<span>¿Qué tipo de soluciones de IA implementa Marlot AI?</span>
						<span class="faq-icono" aria-hidden="true"></span>
					</button>
					<div class="faq-respuesta" id="faq_respuesta_4" role="region" aria-labelledby="faq_pregunta_4">
						<p>Desarrollamos agentes de IA conversacionales, flujos de automatización, integraciones con CRM, WhatsApp, correo, hojas de cálculo, análisis de datos y capacitación en el uso práctico de IA.</p>
					</div>
				</article>

				<article class="faq-item">
					<button class="faq-pregunta" type="button" aria-expanded="false" aria-controls="faq_respuesta_5" id="faq_pregunta_5">
						<span>¿Cuánto tiempo toma implementar una solución?</span>
						<span class="faq-icono" aria-hidden="true"></span>
					</button>
					<div class="faq-respuesta" id="faq_respuesta_5" role="region" aria-labelledby="faq_pregunta_5">
						<p>Depende del alcance del proyecto. Un agente conversacional básico puede estar operativo en <strong>1 a 3 semanas</strong>. Proyectos de mayor complejidad pueden tomar entre <strong>4 y 12 semanas</strong>.</p>
					</div>
				</article>

				<article class="faq-item">
					<button class="faq-pregunta" type="button" aria-expanded="false" aria-controls="faq_respuesta_6" id="faq_pregunta_6">
						<span>¿Necesito saber de tecnología para trabajar con Marlot AI?</span>
						<span class="faq-icono" aria-hidden="true"></span>
					</button>
					<div class="faq-respuesta" id="faq_respuesta_6" role="region" aria-labelledby="faq_pregunta_6">
						<p>No. Nuestro proceso está diseñado para que usted se enfoque en sus objetivos de negocio mientras nosotros nos encargamos de la parte técnica y explicamos todo en lenguaje claro.</p>
					</div>
				</article>

				<article class="faq-item">
					<button class="faq-pregunta" type="button" aria-expanded="false" aria-controls="faq_respuesta_7" id="faq_pregunta_7">
						<span>¿Las soluciones son compatibles con las herramientas que ya uso?</span>
						<span class="faq-icono" aria-hidden="true"></span>
					</button>
					<div class="faq-respuesta" id="faq_respuesta_7" role="region" aria-labelledby="faq_pregunta_7">
						<p>En la mayoría de los casos, sí. Antes de proponer cualquier solución, analizamos el ecosistema tecnológico actual de su empresa para garantizar una integración fluida.</p>
					</div>
				</article>
			</div>
		</div>

		<div class="faq-grupo">
			<h2>Sobre precios y contratación</h2>
			<div class="faq-lista">
				<article class="faq-item">
					<button class="faq-pregunta" type="button" aria-expanded="false" aria-controls="faq_respuesta_8" id="faq_pregunta_8">
						<span>¿Cuánto cuestan los servicios de Marlot AI?</span>
						<span class="faq-icono" aria-hidden="true"></span>
					</button>
					<div class="faq-respuesta" id="faq_respuesta_8" role="region" aria-labelledby="faq_pregunta_8">
						<p>Nuestros precios varían según el tipo y complejidad de cada proyecto. Trabajamos con propuestas personalizadas y cotización sin costo ni compromiso.</p>
					</div>
				</article>

				<article class="faq-item">
					<button class="faq-pregunta" type="button" aria-expanded="false" aria-controls="faq_respuesta_9" id="faq_pregunta_9">
						<span>¿Tienen planes de suscripción o pago recurrente?</span>
						<span class="faq-icono" aria-hidden="true"></span>
					</button>
					<div class="faq-respuesta" id="faq_respuesta_9" role="region" aria-labelledby="faq_pregunta_9">
						<p>Sí. Además de proyectos de implementación con pago único, ofrecemos planes de mantenimiento y soporte continuo para empresas que necesitan actualización constante de sus soluciones de IA.</p>
					</div>
				</article>

				<article class="faq-item">
					<button class="faq-pregunta" type="button" aria-expanded="false" aria-controls="faq_respuesta_10" id="faq_pregunta_10">
						<span>¿Qué sucede si no quedo satisfecho con el resultado?</span>
						<span class="faq-icono" aria-hidden="true"></span>
					</button>
					<div class="faq-respuesta" id="faq_respuesta_10" role="region" aria-labelledby="faq_pregunta_10">
						<p>Trabajamos con entregas parciales y validación constante. Los criterios de aceptación y mecanismos de revisión se definen desde el inicio en el contrato.</p>
					</div>
				</article>
			</div>
		</div>

		<div class="faq-grupo">
			<h2>Sobre privacidad y datos</h2>
			<div class="faq-lista">
				<article class="faq-item">
					<button class="faq-pregunta" type="button" aria-expanded="false" aria-controls="faq_respuesta_11" id="faq_pregunta_11">
						<span>¿Marlot AI tiene acceso a los datos de mi empresa?</span>
						<span class="faq-icono" aria-hidden="true"></span>
					</button>
					<div class="faq-respuesta" id="faq_respuesta_11" role="region" aria-labelledby="faq_pregunta_11">
						<p>Solo accedemos a los datos estrictamente necesarios para desarrollar la solución contratada y únicamente con autorización explícita. Firmamos acuerdos de confidencialidad con nuestros clientes.</p>
					</div>
				</article>

				<article class="faq-item">
					<button class="faq-pregunta" type="button" aria-expanded="false" aria-controls="faq_respuesta_12" id="faq_pregunta_12">
						<span>¿Los modelos de IA aprenden con los datos de mi empresa?</span>
						<span class="faq-icono" aria-hidden="true"></span>
					</button>
					<div class="faq-respuesta" id="faq_respuesta_12" role="region" aria-labelledby="faq_pregunta_12">
						<p>Dependiendo de la solución, es posible entrenar o ajustar modelos con datos de su empresa. Este proceso siempre se realiza bajo medidas de seguridad, con consentimiento y sin compartir datos con terceros.</p>
					</div>
				</article>

				<article class="faq-item">
					<button class="faq-pregunta" type="button" aria-expanded="false" aria-controls="faq_respuesta_13" id="faq_pregunta_13">
						<span>¿Dónde se almacena la información procesada?</span>
						<span class="faq-icono" aria-hidden="true"></span>
					</button>
					<div class="faq-respuesta" id="faq_respuesta_13" role="region" aria-labelledby="faq_pregunta_13">
						<p>Por defecto, las soluciones se despliegan en proveedores de nube con infraestructura en México o Estados Unidos. Si su empresa tiene requisitos específicos de residencia de datos, podemos adaptarnos.</p>
					</div>
				</article>
			</div>
		</div>

		<div class="faq-grupo">
			<h2>Contacto</h2>
			<div class="faq-lista">
				<article class="faq-item">
					<button class="faq-pregunta" type="button" aria-expanded="false" aria-controls="faq_respuesta_14" id="faq_pregunta_14">
						<span>¿Cómo puedo contactar a Marlot AI?</span>
						<span class="faq-icono" aria-hidden="true"></span>
					</button>
					<div class="faq-respuesta" id="faq_respuesta_14" role="region" aria-labelledby="faq_pregunta_14">
						<p>Puede escribirnos a través del formulario de contacto en nuestro sitio web o directamente a <a href="mailto:hola@marlot.ai">hola@marlot.ai</a>. Respondemos en un plazo máximo de <strong>48 horas hábiles</strong>.</p>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="legal-accion">
		<h2>¿No encontraste tu pregunta?</h2>
		<p>Cuéntanos qué estás intentando resolver y te orientamos con una respuesta clara.</p>
		<a href="index.php#contacto" class="legal-boton">Contactar a Marlot AI</a>
	</section>
</main>

<?php
require __DIR__ . '/includes/footer.php';
require __DIR__ . '/includes/scripts.php';
