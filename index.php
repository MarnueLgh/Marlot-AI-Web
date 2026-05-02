<?php
/*
 * Autor: MarnueLgh
 * Fecha: 04/04/2026
 * Version: 1.0
 * Descripcion: Home principal en PHP modular
 */

$titulo_pagina = 'Marlot AI - Agencia de Inteligencia Artificial';
$pagina_actual = 'index';
$ancla_footer = 'contacto';
$hojas_estilo = [];
$scripts_pagina = [];

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/nav.php';
?>

<!-- Hero Section -->
<section class="hero">
	<div class="hero-background-image">
		<img src="assets/images/hero/hero-mountain-grok.jpg" alt="Hero Background" fetchpriority="high" decoding="async">
	</div>
	<div class="hero-content">
		<h1 class="hero-title">Inteligencia artificial<br>para tu negocio.</h1>
		<a href="#servicios" class="hero-btn">CONOCE NUESTRAS SOLUCIONES</a>
	</div>
	<div class="hero-overlay"></div>
</section>

<!-- Services Section -->
<section class="services" id="servicios">
	<div class="services-intro">
		<p class="services-label">SOLUCIONES IA</p>
		<h2 class="services-title">Servicios disenados para impacto real</h2>
		<p class="services-text">Elige el punto de entrada ideal para tu negocio y escala con acompanamiento de Marlot AI.</p>
	</div>

	<div class="services-container">
		<article class="service-card">
			<div class="service-head">
				<span class="service-tag service-destacado">Mas solicitado</span>
				<div class="service-image service-automation" aria-hidden="true">
					<div class="service-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
							<path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
						</svg>
					</div>
				</div>
			</div>
			<div class="service-info">
				<h3 class="service-name">Agentes de atencion</h3>
				<p class="service-desc">Atencion automatizada 24/7 para WhatsApp, web y redes sociales.</p>
				<ul class="service-benefits">
					<li>Responde preguntas frecuentes en segundos</li>
					<li>Deriva casos complejos a tu equipo</li>
					<li>Reduce tiempos de espera y carga operativa</li>
				</ul>
				<div class="service-metrics">
					<span class="service-metric">24/7 disponibilidad</span>
					<span class="service-metric">Respuesta en segundos</span>
				</div>
				<a href="#contacto" class="service-cta">Solicitar demo</a>
			</div>
		</article>

		<article class="service-card">
			<div class="service-head">
				<span class="service-tag service-nuevo">Nuevo</span>
				<div class="service-image service-chatbots" aria-hidden="true">
					<div class="service-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
							<path d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
						</svg>
					</div>
				</div>
			</div>
			<div class="service-info">
				<h3 class="service-name">Gestion de datos</h3>
				<p class="service-desc">Centraliza, ordena y activa datos para tomar decisiones con contexto.</p>
				<ul class="service-benefits">
					<li>Conecta fuentes de informacion en un solo flujo</li>
					<li>Automatiza reportes para ventas y operaciones</li>
					<li>Reduce errores manuales y reprocesos</li>
				</ul>
				<div class="service-metrics">
					<span class="service-metric">Reportes automaticos</span>
					<span class="service-metric">Menos errores operativos</span>
				</div>
				<a href="#contacto" class="service-cta">Ver implementacion</a>
			</div>
		</article>

		<article class="service-card">
			<div class="service-head">
				<span class="service-tag service-escalable">Escalable</span>
				<div class="service-image service-analytics" aria-hidden="true">
					<div class="service-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
							<path d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
						</svg>
					</div>
				</div>
			</div>
			<div class="service-info">
				<h3 class="service-name">Marketing con IA</h3>
				<p class="service-desc">Genera contenido y campanas con mayor velocidad y mejor consistencia.</p>
				<ul class="service-benefits">
					<li>Ideas de contenido alineadas a tu marca</li>
					<li>Copys listos para anuncios y redes</li>
					<li>Flujos para publicacion recurrente</li>
				</ul>
				<div class="service-metrics">
					<span class="service-metric">Mas contenido util</span>
					<span class="service-metric">Menos tiempo por pieza</span>
				</div>
				<a href="#contacto" class="service-cta">Solicitar demo</a>
			</div>
		</article>

		<article class="service-card">
			<div class="service-head">
				<span class="service-tag service-productividad">Productividad</span>
				<div class="service-image service-consulting" aria-hidden="true">
					<div class="service-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
							<path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
						</svg>
					</div>
				</div>
			</div>
			<div class="service-info">
				<h3 class="service-name">Asistente personal</h3>
				<p class="service-desc">Automatiza tareas repetitivas del equipo y libera tiempo para vender.</p>
				<ul class="service-benefits">
					<li>Gestiona agenda, seguimiento y recordatorios</li>
					<li>Apoya tareas administrativas del dia a dia</li>
					<li>Mejora velocidad de respuesta interna</li>
				</ul>
				<div class="service-metrics">
					<span class="service-metric">Flujo diario asistido</span>
					<span class="service-metric">Mayor foco comercial</span>
				</div>
				<a href="#contacto" class="service-cta">Hablar con un especialista</a>
			</div>
		</article>
	</div>
</section>

<section class="value-section" id="nosotros">
	<div class="value-container">
		<div class="value-content">
			<p class="value-label">IA PARA PYMES</p>
			<h2 class="value-title">Transforma operaciones sin crecer costos</h2>
			<p class="value-description">Implementamos automatizacion aplicada a ventas, operaciones y soporte con foco en impacto real desde las primeras semanas.</p>
			<ul class="value-points">
				<li>Implementacion por fases, sin frenar tu operacion actual</li>
				<li>Integracion con tus canales y herramientas existentes</li>
				<li>Acompanamiento humano para tu equipo en cada etapa</li>
			</ul>
			<div class="value-actions">
				<a href="#contacto" class="value-btn">SOLICITAR DEMO</a>
				<a href="#casos" class="value-link">VER CASOS</a>
			</div>
		</div>
		<div class="value-image">
			<article class="valor-comparativa" aria-label="Comparativa antes y despues de implementar soluciones de IA">
				<div class="valor-grid">
					<section class="valor-columna">
						<h3 class="valor-estado">Antes</h3>
						<ul class="valor-lista">
							<li class="valor-item valor-alerta">Tareas manuales repetitivas en varias areas</li>
							<li class="valor-item valor-alerta">Datos dispersos en hojas y chats</li>
							<li class="valor-item valor-alerta">Respuestas lentas a clientes y equipo</li>
						</ul>
					</section>
					<section class="valor-columna">
						<h3 class="valor-estado valor-exito">Despues</h3>
						<ul class="valor-lista">
							<li class="valor-item valor-exito">Flujos automatizados para tareas clave</li>
							<li class="valor-item valor-exito">Informacion centralizada y accionable</li>
							<li class="valor-item valor-exito">Atencion asistida 24/7 con contexto</li>
						</ul>
					</section>
				</div>

				<div class="valor-tiempo">
					<span class="valor-texto">Tiempo de implementacion estimado</span>
					<strong class="valor-dato">2 a 4 semanas</strong>
				</div>

				<div class="valor-chips">
					<span class="valor-chip">Sin codigo</span>
					<span class="valor-chip">Escalable</span>
					<span class="valor-chip">Soporte continuo</span>
				</div>
			</article>
		</div>
	</div>
</section>

<section class="stats-section">
	<div class="bento-grid">
		<div class="bento-card bento-mint">
			<div class="bento-content">
				<span class="bento-number">70%</span>
				<span class="bento-label">Ahorro de tiempo estimado</span>
			</div>
			<div class="progress-ring-container">
				<svg class="progress-ring" viewBox="0 0 100 100">
					<circle class="progress-ring-bg" cx="50" cy="50" r="40"/>
					<circle class="progress-ring-fill" cx="50" cy="50" r="40" style="--progress: 70"/>
				</svg>
				<span class="progress-value">70%</span>
			</div>
		</div>

		<div class="bento-card bento-dark">
			<div class="bento-icon-corner">
				<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
					<path d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
					<circle cx="12" cy="12" r="3"/>
					<path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/>
				</svg>
			</div>
			<div class="bento-content bento-content-left">
				<span class="bento-number bento-number-light">24/7</span>
				<span class="bento-label bento-label-light">Disponibilidad de agentes IA</span>
			</div>
		</div>

		<div class="bento-card bento-neutral">
			<div class="bento-content bento-content-center">
				<span class="bento-number bento-number-muted">0+</span>
				<span class="bento-label">Personal adicional necesario</span>
			</div>
			<div class="zero-badge">
				<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
					<path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
				</svg>
			</div>
		</div>

		<div class="bento-card bento-lavender">
			<div class="bento-content bento-content-left">
				<span class="bento-number">100%</span>
				<span class="bento-label">Soluciones personalizadas</span>
			</div>
			<div class="bento-graph">
				<div class="mini-bars">
					<div class="mini-bar" style="height: 40%"></div>
					<div class="mini-bar" style="height: 60%"></div>
					<div class="mini-bar" style="height: 80%"></div>
					<div class="mini-bar" style="height: 100%"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="value-section value-section-alt" id="casos">
	<div class="value-container value-container-reverse">
		<div class="value-image">
			<div class="value-image-placeholder case-study-image">
				<div class="case-study-visual">
					<div class="chart-bars">
						<div class="bar bar-1"></div>
						<div class="bar bar-2"></div>
						<div class="bar bar-3"></div>
						<div class="bar bar-4"></div>
					</div>
					<span class="growth-label">Simple</span>
				</div>
			</div>
		</div>
		<div class="value-content">
			<div class="case-rating">
				<span class="stars">★★★★★</span>
				<span class="rating-count">Beta</span>
			</div>
			<h3 class="case-title">COMO FUNCIONA</h3>
			<p class="case-subtitle">Interfaz conversacional</p>
			<h2 class="value-title">Tan facil como chatear</h2>
			<p class="value-description">Interactua con una interfaz simple mediante mensajes y la IA ejecuta tareas automaticamente. Sin complicaciones tecnicas, sin curva de aprendizaje. Solo escribe lo que necesitas.</p>
			<a href="#contacto" class="value-btn">SOLICITAR DEMO</a>
		</div>
	</div>
</section>

<section class="logo-section">
	<div class="large-logo"><img src="assets/images/footer-logo-marlot.svg" alt="Marlot AI" loading="lazy" decoding="async" width="1200" height="300"></div>
</section>

<div id="chatbot-container"></div>

<?php
require __DIR__ . '/includes/footer.php';
require __DIR__ . '/includes/side_menu.php';
require __DIR__ . '/includes/scripts.php';
