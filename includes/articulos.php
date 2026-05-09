<?php
/*
 * Autor: MarnueLgh
 * Fecha: 04/04/2026
 * Version: 1.0
 * Descripcion: Array centralizado de artículos del blog
 */

$articulos = [
	'ia-generativa' => [
		'slug' => 'ia-generativa',
		'titulo' => 'El impacto de la IA generativa en las PyMEs',
		'subtitulo' => 'Descubre cómo las pequeñas empresas pueden aprovechar herramientas de IA generativa para competir con grandes corporaciones, ahorrando tiempo y elevando la calidad.',
		'categoria' => 'Inteligencia Artificial',
		'categoria_slug' => 'ia',
		'fecha' => 'Ene 8, 2026',
		'fecha_iso' => '2026-01-08',
		'tiempo_lectura' => '5 min lectura',
		'imagen' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=1200&h=800&fit=crop',
		'imagen_alt' => 'IA Generativa',
		'etiqueta' => 'DESTACADO',
		'sidebar_titulo' => 'Un cambio<br>de juego',
		'sidebar_texto' => 'La inteligencia artificial ya no es dominio exclusivo de los gigantes tecnológicos. Hoy, las pequeñas y medianas empresas están útilizando estos modelos para escalar operaciones con equipos reducidos.',
		'contenido' => '<p class="drop-cap">Históricamente, la adopción de nuevas tecnologías requiere de amplios presupuestos, equipos de desarrollo y meses de implementacion. Sin embargo, la llegada de la Inteligencia Artificial Generativa ha roto este paradigma, ofreciendo herramientas poderosas directamente accesibles desde un navegador web.</p>
					
					<p>Para las pequeñas y medianas empresas (PyMEs), esto representa la mayor oportunidad de nivelacion en el terreno de juego empresarial desde la invencion de internet. Tareas que antes requerían agencias especializadas o la contratacion de personal dedicado, ahora pueden completarse, o al menos acelerarse masivamente, con la ayuda de asistentes virtuales.</p>
					
					<h2>Redefiniendo la productividad</h2>
					<p>Uno de los mayores obstáculos para el crecimiento de una PyME es el cuello de botella en la creación de contenido y el procesamiento de información rutinaria. Responder correos complejos de atención al cliente, redactar descripciones de cientos de productos o analizar hojas de calculo con datos de ventas son tareas vitales pero agotadoras.</p>
					
					<blockquote class="article-quote">
						La IA no reemplaza la creatividad humana, la democratiza permitiendo escalar la ejecucion de las mejores ideas.
						<span class="article-quote-author">Marlot Studio</span>
					</blockquote>
					
					<p>Con herramientas adecuadas, estas barreras desaparecen. Las PyMEs están logrando:</p>
					<ul>
						<li><strong>Personalizar la comunicación a escala:</strong> Generando propuestas a medida para clientes en minutos en lugar de horas.</li>
						<li><strong>Acelerar el Time-to-Market:</strong> Creando campañas de marketing, textos publicitarios e imágenes en un tiempo récord.</li>
						<li><strong>Análisis de datos avanzado:</strong> Conversando con sus datos para descubrir tendencias de compra sin necesitar a un científico de datos.</li>
					</ul>

					<div class="article-image-block">
						<img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=500&fit=crop" alt="Equipos usando IA">
						<p class="article-image-caption">La integración de la IA en los flujos de trabajo diarios.</p>
					</div>

					<h2>Cómo dar el primer paso</h2>
					<p>La adopción exitosa no ocurre de la noche a la mañana ni sustituyendo a tu equipo actual de golpe. El secreto radica en la integración paulatina:</p>
					<ol>
						<li><strong>Identifica procesos repetitivos:</strong> Qué tareas toman más de 2 horas diarias de tu equipo y requieren poca toma de decisiones crítica?</li>
						<li><strong>Prueba y capacita:</strong> Empieza con una sola herramienta, por ejemplo, automatizando las respuestas frecuentes de WhatsApp.</li>
						<li><strong>Establece políticas claras:</strong> Define lineamientos sobre qué información puede o no compartirse con estos modelos de lenguaje (privacidad de datos).</li>
					</ol>
					
					<p>El desafio principal de hoy no es el acceso a la tecnología, sino el diseño inteligente de flujos de trabajo en donde la IA potencie el talento humano existente. En <strong>marlot</strong>, creemos que pronto habrá dos tipos de negocios: aquellos que integraron IA en sus operaciones, y aquellos que se volvieron irrelevantes. De que lado estarás?</p>',
		'autor' => [
			'nombre' => 'Cleo Hartmann',
			'descripcion' => 'Editora del Equipo Marlot AI',
			'imagen' => 'CleoHartmann.png'
		]
	],

	'5-procesos' => [
		'slug' => '5-procesos',
		'titulo' => '5 procesos que deberias automatizar hoy',
		'subtitulo' => 'Las tareas manuales están consumiendo tu recurso más valioso: el tiempo. Descubre cuáles procesos rutinarios son los candidatos ideales para automatizar hoy mismo.',
		'categoria' => 'Automatización',
		'categoria_slug' => 'automation',
		'fecha' => 'Ene 6, 2026',
		'fecha_iso' => '2026-01-06',
		'tiempo_lectura' => '3 min lectura',
		'imagen' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=1200&h=800&fit=crop',
		'imagen_alt' => 'Automatización de procesos',
		'etiqueta' => 'NUEVO',
		'sidebar_titulo' => 'Recupera<br>tu tiempo',
		'sidebar_texto' => 'En promedio, los empleados gastan hasta 22 horas a la semana realizando tareas repetitivas que no aportan valor estratégico a la empresa.',
		'contenido' => '<p class="drop-cap">A menudo las empresas caen en la trampa mental de "es más rápido si lo hago yo mismo". Esta pequena mentira nos mantiene atados a procesos operativos menores e impide que podamos escalar nuestros negocios de manera efectiva.</p>
					
					<p>La automatización moderna con inteligencia artificial permite delegar esas tareas roboticas para que los humanos se enfoquen en lo humano: construir relaciones, diseñar estrategias y generar ventas directas. A continuación, exploraremos las cinco áreas más susceptibles a ser automatizadas rápidamente:</p>
					
					<h3>1. Atención al Cliente de Primer Nivel</h3>
					<p>Responder preguntas frecuentes como "cuál es el horario?", "dónde están ubicados?" o "tienen disponibilidad del producto X?" no debería tomar el tiempo de tu equipo de ventas. Un asistente de IA configurado correctamente puede responder instantáneamente en canales como WhatsApp, Instagram y el sitio web las 24 horas del día.</p>
					
					<h3>2. Entrada de Datos (Data Entry)</h3>
					<p>Mover información de un correo electrónico a un CRM, o de un formulario a una hoja de calculo, es la definición perfecta de una tarea para software. Herramientas como Zapier o Make pueden conectar tus aplicaciones sin útilizar una sola linea de código.</p>

					<blockquote class="article-quote">
						Deja que los robots hagan el trabajo de los robots, para que los humanos hagan el trabajo de los humanos.
					</blockquote>

					<h3>3. Facturación y Cobranza</h3>
					<p>Generar facturas a fin de mes y darles seguimiento a los pagos atrasados causa una enorme friccion. Automatizar la creación del documento (CFDI) una vez realizado el cobro y enviar correos corteses programados de recordatorio de pago reduce la carga administrativa dramáticamente.</p>

					<h3>4. Publicación en Redes Sociales</h3>
					<p>En lugar de entrar a 4 plataformas diferentes cada día, puedes automatizar todo el calendario mensual de redes. Combinado con IA generativa, es posible programar meses de contenido escrito y agendar su distribucion de manera fluida.</p>

					<h3>5. Clasificación de Correos Electrónicos</h3>
					<p>Enfrentarse a un buzón con 150 correos sin leer genera ansiedad. Los agentes automatizados pueden clasificar el correo entrante útilizando procesamiento de lenguaje natural (NLP), creando un borrador de respuesta para tu aprobación rápida o reenviándolo al departamento adecuado según el contexto del mensaje.</p>

					<h2>El siguiente paso</h2>
					<p>Empieza pequeno. Escoge el punto numero 1 o 2 de esta lista e invierte unas horas en configurarlo. Cuando veas ese primer proceso funcionar solo por primera vez como por arte de magia, entenderas por qué la automatización es el pilar de las empresas modernas.</p>',
		'autor' => [
			'nombre' => 'Cleo Hartmann',
			'descripcion' => 'Editora del Equipo Marlot AI',
			'imagen' => 'CleoHartmann.png'
		]
	],

	'chatbot-correcto' => [
		'slug' => 'chatbot-correcto',
		'titulo' => 'Cómo elegir el chatbot correcto para tu negocio',
		'subtitulo' => 'No todos los chatbots son iguales. Entre reglas estáticas y modelos conversacionales de última generación impulsados por IA, la decisión marcará la experiencia de tus usuarios.',
		'categoria' => 'Tips y Guías',
		'categoria_slug' => 'tips',
		'fecha' => 'Ene 4, 2026',
		'fecha_iso' => '2026-01-04',
		'tiempo_lectura' => '4 min lectura',
		'imagen' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1200&h=800&fit=crop',
		'imagen_alt' => 'Chatbot strategy',
		'etiqueta' => '',
		'sidebar_titulo' => 'Más allá de<br>los menus',
		'sidebar_texto' => 'Un cliente frustrado en un bucle infinito ("Marque 1 para ventas...") es un cliente perdido. La calidad de la interacción importa mas que nunca en el servicio automatizado.',
		'contenido' => '<p class="drop-cap">Elegir un bot para tu sitio web o linea de WhatsApp solía significar configurar pesados diagramas de flujo. Hoy en día, el paradigma ha cambiado de "flujos de conversacion predefinidos" a "entendimiento de contexto en tiempo real".</p>
					
					<p>Pero con tantas herramientas disponibles en el mercado, cómo sabes cuál es la inversión correcta para el volumen y tipo de consultas que recibe tu empresa?</p>
					
					<h2>1. Bots basados en reglas (Rule-Based) vs. IA Conversacional</h2>
					<p>La primera decision es fundamental:</p>
					<ul>
						<li><strong>Los bots basados en reglas</strong> funcionan mediante la lógica "Si el usuario dice A, responde B" o desplegando menus de botones. Son ideales para flujos muy cerrados (ej. agendar cita, seleccionar un producto específico) y suelen ser económicos.</li>
						<li><strong>Los bots de IA Conversacional (LLM)</strong> entienden intenciones reales usando lenguaje natural, como si fuera ChatGPT programado con el conocimiento de tu negocio. Son perfectos si tus clientes suelen tener dudas complejas, largas o atípicas.</li>
					</ul>

					<div class="article-image-split">
						<div class="split-col">
							<img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=500&h=400&fit=crop" alt="Diagram">
							<p class="article-image-caption">Enfoque tradicional.</p>
						</div>
						<div class="split-col">
							<img src="https://images.unsplash.com/photo-1535378917042-10a22c95931a?w=500&h=400&fit=crop" alt="AI Model">
							<p class="article-image-caption">Enfoque moderno (LLMs).</p>
						</div>
					</div>

					<blockquote class="article-quote">
						El mejor chatbot es aquel que no se siente como un bot, sino como un colaborador que domina toda la información de la empresa.
					</blockquote>

					<h2>2. Capacidad de Integración (APIs)</h2>
					<p>Un bot que vive en aislamiento sirve de poco. A la hora de elegir, asegúrate de que el proveedor permita integraciónes rapidas con:</p>
					<ul>
						<li>Tu CRM (Hubspot, Salesforce, Pipedrive) para guardar prospectos automáticamente.</li>
						<li>Pasarelas de pago (Stripe, PayPal).</li>
						<li>Sistemas de agenda (Calendly, Google Calendar).</li>
					</ul>

					<h2>3. Omnicanalidad Real</h2>
					<p>Asegúrate de que la misma mente artificial pueda operar no solo en el widget del sitio web, sino también como respuesta automatica en Instagram DM, Messenger y, más importante, una API oficial de WhatsApp (WhatsApp Cloud API).</p>
					
					<h2>Conclusión</h2>
					<p>La tecnología ha avanzado tan velozmente que sugerimos saltarnos completamente la era de los bots rígidos de opciones numericas. Invertir en una solución de IA generativa capacitada exclusivamente sobre los datos de tu negocio (Knowledge Base) ofrece un retorno de inversión en servicio al cliente sin precedentes.</p>',
		'autor' => [
			'nombre' => 'Cleo Hartmann',
			'descripcion' => 'Editora del Equipo Marlot AI',
			'imagen' => 'CleoHartmann.png'
		]
	],

	'machine-learning' => [
		'slug' => 'machine-learning',
		'titulo' => 'Machine Learning explicado para no tecnicos',
		'subtitulo' => 'Entiende cómo las máquinas aprenden sin ser programadas explicitamente, y cómo esta tecnología transformará tu industria.',
		'categoria' => 'Inteligencia Artificial',
		'categoria_slug' => 'ia',
		'fecha' => 'Ene 2, 2026',
		'fecha_iso' => '2026-01-02',
		'tiempo_lectura' => '6 min lectura',
		'imagen' => 'https://images.unsplash.com/photo-1535378917042-10a22c95931a?w=1200&h=800&fit=crop',
		'imagen_alt' => 'Machine Learning',
		'etiqueta' => '',
		'sidebar_titulo' => 'La magia<br>de los datos',
		'sidebar_texto' => 'En el fondo, el Machine Learning no es magia oscura, sino estadísticas aplicadas y reconocimiento avanzado de patrones a una escala sobrehumana.',
		'contenido' => '<p class="drop-cap">Si alguna vez le has enseñado a un niño a reconocer a un perro, ya entiendes los principios básicos del Machine Learning. No le entregaste un manual con reglas como "tiene 4 patas, pelo y ladra". Simplemente, senalaste varios animales y dijiste "eso es un perro" y "eso no es un perro".</p>
					
					<p>El cerebro del niño procesó todos esos ejemplos y creó su propio "modelo" interno para identificar perros en el futuro. De manera similar, en la programacion tradicional, los humanos escriben reglas (código) para procesar datos y obtener respuestas. En el Machine Learning, los humanos introducen datos y respuestas, y la maquina "descubre" las reglas.</p>
					
					<h2>El cambio de paradigma</h2>
					<p>Imagina intentar programar filtros de spam con código tradicional. Tendrias que escribir cientos de miles de reglas: "Si dice oferta millónaria, es spam", "Si tiene 10 signos de exclamacion, es spam". Es insostenible.</p>

					<blockquote class="article-quote">
						El código tradicional obedece instrucciones. El Machine Learning busca patrones en el caos.
					</blockquote>

					<p>Con algoritmos de aprendizaje de maquina, a la computadora se le da un millón de correos etiquetados como "spam" y otro millón etiquetados como "normales". La maquina analiza la frecuencia de palabras, la estructura de las oraciones y otros patrones ocultos, construyendo su propia red de decisiones.</p>

					<h2>Tipos principales de aprendizaje</h2>
					<h3>Aprendizaje Supervisado</h3>
					<p>Es como tener un maestro. Le damos datos etiquetados (ej. fotos de facturas validas e invalidas) para que aprenda a predecir la etiqueta de nuevas fotos. Sus aplicaciones van desde predecir precios de viviendas hasta diagnosticos médicos.</p>

					<h3>Aprendizaje No Supervisado</h3>
					<p>Aquí la computadora debe encontrar la estructura por sí misma sobre datos que no están etiquetados categorizándolos. El ejemplo clásico? Segmentación de clientes en marketing basados en comportamientos de compra ocultos.</p>
					
					<h2>Por qué debería importarle a tu empresa</h2>
					<p>Con los motores modernos de Machine Learning como servicio de AWS o Google Cloud, no necesitas un equipo de Ph.D. para empezar a usar esta tecnología. Herramientas ya integradas en CRMs modernos útilizan ML para puntuar qué clientes (leads) tienen más probabilidad de cierre, prediciendo qué producto recomendarles a continuacion mediante un sistema de recomendacion estilo Netflix.</p>',
		'autor' => [
			'nombre' => 'Cleo Hartmann',
			'descripcion' => 'Editora del Equipo Marlot AI',
			'imagen' => 'CleoHartmann.png'
		]
	],

	'caso-real-tp' => [
		'slug' => 'caso-real-tp',
		'titulo' => 'Caso real: 70% menos tiempo en tareas repetitivas',
		'subtitulo' => 'Descubre cómo una empresa comercializadora redujo drasticamente el tiempo empleado en administración implementando agentes de software.',
		'categoria' => 'Automatización',
		'categoria_slug' => 'automation',
		'fecha' => 'Dic 28, 2025',
		'fecha_iso' => '2025-12-28',
		'tiempo_lectura' => '4 min lectura',
		'imagen' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=800&fit=crop',
		'imagen_alt' => 'Equipo trabajando',
		'etiqueta' => '',
		'sidebar_titulo' => 'Más allá<br>de la teoria',
		'sidebar_texto' => 'No se trata de conceptos futuristas; presentamos un caso verificado de cómo la implementación puntual de IA salvó cientos de horas laborales en un solo trimestre.',
		'contenido' => '<p class="drop-cap">Todo negocio en crecimiento llega a un punto de quiebre donde los sistemas manuales colapsan. Esto es exactamente lo que le ocurrió a Lumina Logistics, una empresa de distribucion con una cartera de mas de 300 clientes concurrentes.</p>
					
					<p>El problema era claro: el equipo de soporte recibia un promedio de 80 consultas diarias vía WhatsApp. El 60% de estas consultas eran dudas rutinarias sobre estatus de envío, disponibilidad de stock o envío de comprobantes de pago. Atender manualmente esto requeria un empleado a tiempo completo pegado a la pantalla del teléfono.</p>
					
					<h2>La Solución: Integración de Datos + IA Generativa</h2>
					<p>En lugar de contratar a dos personas mas para manejar el flujo en temporada alta, implementamos un ecosistema hibrido:</p>
					<ul>
						<li><strong>Unificación de Datos:</strong> Se conectó el inventario en tiempo real y el estatus de las guias de envío a una base de datos central en la nube.</li>
						<li><strong>Agente Conversacional NLP:</strong> Un asistente impulsado por inteligencia artificial conectado a la cuenta empresarial de WhatsApp asimilio la lógica de lectura de esa base de datos.</li>
					</ul>

					<blockquote class="article-quote">
						El ROI se hizo evidente en la primera semana. El bot contesto cientos de preguntas de madrugada asegurando la satisfacción de clientes internacionales.
					</blockquote>

					<h2>Resultados Medibles</h2>
					<p>La adopción del agente automatizado trajo los siguientes datos duros el primer mes de operacion:</p>
					<ul>
						<li><strong>Reducción del 70% en el tiempo de respuesta promedio.</strong></li>
						<li><strong>El 55% de los tickets se resolvieron sin intervención humana en primera instancia.</strong></li>
						<li>El empleado que originalmente contestaba mensajes ahora ocupa un puesto clave en ventas corporativas.</li>
					</ul>
					
					<p>La automatización en empresas de este tamaño no desplaza el trabajo humano, sino que elimina el "trabajo robotico" que los humanos estaban obligados a hacer, elevando el potencial creativo y estratégico del equipo.</p>',
		'autor' => [
			'nombre' => 'Cleo Hartmann',
			'descripcion' => 'Editora del Equipo Marlot AI',
			'imagen' => 'CleoHartmann.png'
		]
	],

	'guia-ia' => [
		'slug' => 'guia-ia',
		'titulo' => 'Guía: Prepara tu empresa para la era de la IA',
		'subtitulo' => 'Pasos accionables para adoptar la Inteligencia Artificial de manera estratégica sin abrumar a tu equipo de trabajo ni fracturar el presupuesto.',
		'categoria' => 'Tips',
		'categoria_slug' => 'tips',
		'fecha' => 'Dic 22, 2025',
		'fecha_iso' => '2025-12-22',
		'tiempo_lectura' => '8 min lectura',
		'imagen' => 'https://images.unsplash.com/photo-1553877522-43269d4ea984?w=1200&h=800&fit=crop',
		'imagen_alt' => 'Estrategia',
		'etiqueta' => '',
		'sidebar_titulo' => 'Adopción<br>Inteligente',
		'sidebar_texto' => 'Comprar licencias de software por moda es tirar dinero a la basura. La clave es alinear la inteligencia artificial a los objetivos crudos de la empresa.',
		'contenido' => '<p class="drop-cap">A medida que las noticias tecnológicas prometen revolucionarlo todo, es fácil sentir el "Miedo a quedarse fuera" (FOMO) y apresurarse a integrar modelos de IA de forma desordenada. Sin embargo, para no terminar con un presupuesto abultado de software inútil, proponemos una guía pragmática de adopción.</p>
					
					<h2>1. Auditoria del dolor</h2>
					<p>No empieces por preguntar "Qué puede hacer la IA?". Empieza preguntando "Qué procesos causan dolores de cabeza en mi empresa todos los viernes por la tarde?". Aquellas areas donde reina la friccion por mover datos de un lado a otro (contabilidad, facturación, reportes de estatus, cotizaciones) son los candidatos principales para la transformación digital.</p>
					
					<h2>2. Curaduria y limpieza de datos</h2>
					<p>La IA más avanzada del mundo sera inútil si la alimentas con un Excel desorganizado y bases de datos desactualizadas de tus clientes. El lema "Garbage In, Garbage Out" es totalitario. Consolida tu información. Emplea un CRM estricto de forma mandatoria antes de pensar en algoritmos predictivos.</p>

					<blockquote class="article-quote">
						La IA no es polvo mágico para arreglar flujos rotos, es combustible para escalar flujos que ya funcionan.
					</blockquote>

					<h2>3. Cultura de Adopción (Gestión del Cambio)</h2>
					<p>Tus empleados podrían sentir temor sobre su seguridad laboral. Fomenta una cultura donde ellos vean a la IA como su "exoesqueleto", un super asistente personal en lugar de un reemplazo. Dales licencias a tus mejores talentos para experimentar con ChatGPT o Claude para sus tareas diarias y recompensa los casos de uso exitosos.</p>

					<h2>4. Considera la Seguridad</h2>
					<p>Establece lineamientos claros. Datos financieros, números de tarjetas o datos hiper-sensibles de clientes no deben pegarse impulsivamente en modelos públicos de IA. Usa versiones Enterprise (cerradas) que aseguren la no-persistencia de la información de tu compañía.</p>
					
					<p>Adelantarse a la curva no significa correr a ciegas. Tomate el tiempo para realizar una auditoria honesta hoy mismo. El paso de tortuga estratégica siempre vencera a la liebre desorganizada en la maratón corporativa.</p>',
		'autor' => [
			'nombre' => 'Cleo Hartmann',
			'descripcion' => 'Editora del Equipo Marlot AI',
			'imagen' => 'CleoHartmann.png'
		]
	]
];

function obtener_articulo($slug) {
	global $articulos;
	return isset($articulos[$slug]) ? $articulos[$slug] : null;
}

function obtener_todos_articulos() {
	global $articulos;
	return $articulos;
}

function obtener_articulos_por_categoria($categoria_slug) {
	global $articulos;
	return array_filter($articulos, function($articulo) use ($categoria_slug) {
		return $articulo['categoria_slug'] === $categoria_slug;
	});
}

function obtener_articulos_recientes($limite = 6) {
	global $articulos;
	$articulos_ordenados = $articulos;
	uasort($articulos_ordenados, function($a, $b) {
		return strcmp($b['fecha_iso'], $a['fecha_iso']);
	});
	return array_slice($articulos_ordenados, 0, $limite);
}
