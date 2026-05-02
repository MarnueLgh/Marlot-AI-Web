<?php
/*
 * Autor: MarnueLgh
 * Fecha: 04/04/2026
 * Version: 1.0
 * Descripcion: Array centralizado de articulos del blog
 */

$articulos = [
	'ia-generativa' => [
		'slug' => 'ia-generativa',
		'titulo' => 'El impacto de la IA generativa en las PyMEs',
		'subtitulo' => 'Descubre como las pequenas empresas pueden aprovechar herramientas de IA generativa para competir con grandes corporaciones, ahorrando tiempo y elevando la calidad.',
		'categoria' => 'Inteligencia Artificial',
		'categoria_slug' => 'ia',
		'fecha' => 'Ene 8, 2026',
		'fecha_iso' => '2026-01-08',
		'tiempo_lectura' => '5 min lectura',
		'imagen' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=1200&h=800&fit=crop',
		'imagen_alt' => 'IA Generativa',
		'etiqueta' => 'DESTACADO',
		'sidebar_titulo' => 'Un cambio<br>de juego',
		'sidebar_texto' => 'La inteligencia artificial ya no es dominio exclusivo de los gigantes tecnologicos. Hoy, las pequenas y medianas empresas estan utilizando estos modelos para escalar operaciones con equipos reducidos.',
		'contenido' => '<p class="drop-cap">Historicamente, la adopcion de nuevas tecnologias requiere de amplios presupuestos, equipos de desarrollo y meses de implementacion. Sin embargo, la llegada de la Inteligencia Artificial Generativa ha roto este paradigma, ofreciendo herramientas poderosas directamente accesibles desde un navegador web.</p>
					
					<p>Para las pequenas y medianas empresas (PyMEs), esto representa la mayor oportunidad de nivelacion en el terreno de juego empresarial desde la invencion de internet. Tareas que antes requerian agencias especializadas o la contratacion de personal dedicado, ahora pueden completarse, o al menos acelerarse masivamente, con la ayuda de asistentes virtuales.</p>
					
					<h2>Redefiniendo la productividad</h2>
					<p>Uno de los mayores obstaculos para el crecimiento de una PyME es el cuello de botella en la creacion de contenido y el procesamiento de informacion rutinaria. Responder correos complejos de atencion al cliente, redactar descripciones de cientos de productos o analizar hojas de calculo con datos de ventas son tareas vitales pero agotadoras.</p>
					
					<blockquote class="article-quote">
						La IA no reemplaza la creatividad humana, la democratiza permitiendo escalar la ejecucion de las mejores ideas.
						<span class="article-quote-author">Marlot Studio</span>
					</blockquote>
					
					<p>Con herramientas adecuadas, estas barreras desaparecen. Las PyMEs estan logrando:</p>
					<ul>
						<li><strong>Personalizar la comunicacion a escala:</strong> Generando propuestas a medida para clientes en minutos en lugar de horas.</li>
						<li><strong>Acelerar el Time-to-Market:</strong> Creando campanhas de marketing, textos publicitarios e imagenes en un tiempo records.</li>
						<li><strong>Analisis de datos avanzado:</strong> Conversando con sus datos para descubrir tendencias de compra sin necesitar a un cientifico de datos.</li>
					</ul>

					<div class="article-image-block">
						<img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=500&fit=crop" alt="Equipos usando IA">
						<p class="article-image-caption">La integracion de la IA en los flujos de trabajo diarios.</p>
					</div>

					<h2>Como dar el primer paso</h2>
					<p>La adopcion exitosa no ocurre de la noche a la manana ni sustituyendo a tu equipo actual de golpe. El secreto radica en la integracion paulatina:</p>
					<ol>
						<li><strong>Identifica procesos repetitivos:</strong> Que tareas toman mas de 2 horas diarias de tu equipo y requieren poca toma de decisiones critica?</li>
						<li><strong>Prueba y capacita:</strong> Empieza con una sola herramienta, por ejemplo, automatizando las respuestas frecuentes de WhatsApp.</li>
						<li><strong>Establece politicas claras:</strong> Define lineamientos sobre que informacion puede o no compartirse con estos modelos de lenguaje (privacidad de datos).</li>
					</ol>
					
					<p>El desafio principal de hoy no es el acceso a la tecnologia, sino el diseno inteligente de flujos de trabajo en donde la IA potencie el talento humano existente. En <strong>marlot</strong>, creemos que pronto habra dos tipos de negocios: aquellos que integraron IA en sus operaciones, y aquellos que se volvieron irrelevantes. De que lado estaras?</p>',
		'autor' => [
			'nombre' => 'Equipo Editorial Marlot',
			'descripcion' => 'Especialistas en transformacion digital y adopcion de IA para PyMEs.',
			'imagen' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop'
		]
	],

	'5-procesos' => [
		'slug' => '5-procesos',
		'titulo' => '5 procesos que deberias automatizar hoy',
		'subtitulo' => 'Las tareas manuales estan consumiendo tu recurso mas valioso: el tiempo. Descubre cuales procesos rutinarios son los candidatos ideales para automatizar hoy mismo.',
		'categoria' => 'Automatizacion',
		'categoria_slug' => 'automation',
		'fecha' => 'Ene 6, 2026',
		'fecha_iso' => '2026-01-06',
		'tiempo_lectura' => '3 min lectura',
		'imagen' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=1200&h=800&fit=crop',
		'imagen_alt' => 'Automatizacion de procesos',
		'etiqueta' => 'NUEVO',
		'sidebar_titulo' => 'Recupera<br>tu tiempo',
		'sidebar_texto' => 'En promedio, los empleados gastan hasta 22 horas a la semana realizando tareas repetitivas que no aportan valor estrategico a la empresa.',
		'contenido' => '<p class="drop-cap">A menudo las empresas caen en la trampa mental de "es mas rapido si lo hago yo mismo". Esta pequena mentira nos mantiene atados a procesos operativos menores e impide que podamos escalar nuestros negocios de manera efectiva.</p>
					
					<p>La automatizacion moderna con inteligencia artificial permite delegar esas tareas roboticas para que los humanos se enfoquen en lo humano: construir relaciones, disenar estrategias y generar ventas directas. A continuacion, exploraremos las cinco areas mas susceptibles a ser automatizadas rapidamente:</p>
					
					<h3>1. Atencion al Cliente de Primer Nivel</h3>
					<p>Responder preguntas frecuentes como "cual es el horario?", "donde estan ubicados?" o "tienen disponibilidad del producto X?" no deberia tomar el tiempo de tu equipo de ventas. Un asistente de IA configurado correctamente puede responder instantaneamente en canales como WhatsApp, Instagram y el sitio web las 24 horas del dia.</p>
					
					<h3>2. Entrada de Datos (Data Entry)</h3>
					<p>Mover informacion de un correo electronico a un CRM, o de un formulario a una hoja de calculo, es la definicion perfecta de una tarea para software. Herramientas como Zapier o Make pueden conectar tus aplicaciones sin utilizar una sola linea de codigo.</p>

					<blockquote class="article-quote">
						Deja que los robots hagan el trabajo de los robots, para que los humanos hagan el trabajo de los humanos.
					</blockquote>

					<h3>3. Facturacion y Cobranza</h3>
					<p>Generar facturas a fin de mes y darles seguimiento a los pagos atrasados causa una enorme friccion. Automatizar la creacion del documento (CFDI) una vez realizado el cobro y enviar correos corteses programados de recordatorio de pago reduce la carga administrativa dramaticamente.</p>

					<h3>4. Publicacion en Redes Sociales</h3>
					<p>En lugar de entrar a 4 plataformas diferentes cada dia, puedes automatizar todo el calendario mensual de redes. Combinado con IA generativa, es posible programar meses de contenido escrito y agendar su distribucion de manera fluida.</p>

					<h3>5. Clasificacion de Correos Electronicos</h3>
					<p>Enfrentarse a un buzon con 150 correos sin leer genera ansiedad. Los agentes automatizados pueden clasificar el correo entrante utilizando procesamiento de lenguaje natural (NLP), creando un borrador de respuesta para tu aprobacion rapida o reenviandolo al departamento adecuado segun el contexto del mensaje.</p>

					<h2>El siguiente paso</h2>
					<p>Empieza pequeno. Escoge el punto numero 1 o 2 de esta lista e invierte unas horas en configurarlo. Cuando veas ese primer proceso funcionar solo por primera vez como por arte de magia, entenderas por que la automatizacion es el pilar de las empresas modernas.</p>',
		'autor' => [
			'nombre' => 'Equipo Editorial Marlot',
			'descripcion' => 'Especialistas en transformacion digital.',
			'imagen' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop'
		]
	],

	'chatbot-correcto' => [
		'slug' => 'chatbot-correcto',
		'titulo' => 'Como elegir el chatbot correcto para tu negocio',
		'subtitulo' => 'No todos los chatbots son iguales. Entre reglas estaticas y modelos conversacionales de ultima generacion impulsados por IA, la decision marcara la experiencia de tus usuarios.',
		'categoria' => 'Tips y Guias',
		'categoria_slug' => 'tips',
		'fecha' => 'Ene 4, 2026',
		'fecha_iso' => '2026-01-04',
		'tiempo_lectura' => '4 min lectura',
		'imagen' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1200&h=800&fit=crop',
		'imagen_alt' => 'Chatbot strategy',
		'etiqueta' => '',
		'sidebar_titulo' => 'Mas alla de<br>los menus',
		'sidebar_texto' => 'Un cliente frustrado en un bucle infinito ("Marque 1 para ventas...") es un cliente perdido. La calidad de la interaccion importa mas que nunca en el servicio automatizado.',
		'contenido' => '<p class="drop-cap">Elegir un bot para tu sitio web o linea de WhatsApp solia significar configurar pesados diagramas de flujo. Hoy en dia, el paradigma ha cambiado de "flujos de conversacion predefinidos" a "entendimiento de contexto en tiempo real".</p>
					
					<p>Pero con tantas herramientas disponibles en el mercado, como sabes cual es la inversion correcta para el volumen y tipo de consultas que recibe tu empresa?</p>
					
					<h2>1. Bots basados en reglas (Rule-Based) vs. IA Conversacional</h2>
					<p>La primera decision es fundamental:</p>
					<ul>
						<li><strong>Los bots basados en reglas</strong> funcionan mediante la logica "Si el usuario dice A, responde B" o desplegando menus de botones. Son ideales para flujos muy cerrados (ej. agendar cita, seleccionar un producto especifico) y suelen ser economicos.</li>
						<li><strong>Los bots de IA Conversacional (LLM)</strong> entienden intenciones reales usando lenguaje natural, como si fuera ChatGPT programado con el conocimiento de tu negocio. Son perfectos si tus clientes suelen tener dudas complejas, largas o atipicas.</li>
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
						El mejor chatbot es aquel que no se siente como un bot, sino como un colaborador que domina toda la informacion de la empresa.
					</blockquote>

					<h2>2. Capacidad de Integracion (APIs)</h2>
					<p>Un bot que vive en aislamiento sirve de poco. A la hora de elegir, asegurate de que el proveedor permita integraciones rapidas con:</p>
					<ul>
						<li>Tu CRM (Hubspot, Salesforce, Pipedrive) para guardar prospectos automaticamente.</li>
						<li>Pasarelas de pago (Stripe, PayPal).</li>
						<li>Sistemas de agenda (Calendly, Google Calendar).</li>
					</ul>

					<h2>3. Omnicanalidad Real</h2>
					<p>Asegurate de que la misma mente artificial pueda operar no solo en el widget del sitio web, sino tambien como respuesta automatica en Instagram DM, Messenger y, mas importante, una API oficial de WhatsApp (WhatsApp Cloud API).</p>
					
					<h2>Conclusion</h2>
					<p>La tecnologia ha avanzado tan velozmente que sugerimos saltarnos completamente la era de los bots rigidos de opciones numericas. Invertir en una solucion de IA generativa capacitada exclusivamente sobre los datos de tu negocio (Knowledge Base) ofrece un retorno de inversion en servicio al cliente sin precedentes.</p>',
		'autor' => [
			'nombre' => 'Equipo Editorial Marlot',
			'descripcion' => 'Especialistas en la integracion de flujos conversacionales.',
			'imagen' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop'
		]
	],

	'machine-learning' => [
		'slug' => 'machine-learning',
		'titulo' => 'Machine Learning explicado para no tecnicos',
		'subtitulo' => 'Entiende como las maquinas aprenden sin ser programadas explicitamente, y como esta tecnologia transformara tu industria.',
		'categoria' => 'Inteligencia Artificial',
		'categoria_slug' => 'ia',
		'fecha' => 'Ene 2, 2026',
		'fecha_iso' => '2026-01-02',
		'tiempo_lectura' => '6 min lectura',
		'imagen' => 'https://images.unsplash.com/photo-1535378917042-10a22c95931a?w=1200&h=800&fit=crop',
		'imagen_alt' => 'Machine Learning',
		'etiqueta' => '',
		'sidebar_titulo' => 'La magia<br>de los datos',
		'sidebar_texto' => 'En el fondo, el Machine Learning no es magia oscura, sino estadisticas aplicadas y reconocimiento avanzado de patrones a una escala sobrehumana.',
		'contenido' => '<p class="drop-cap">Si alguna vez le has ensenado a un nino a reconocer a un perro, ya entiendes los principios basicos del Machine Learning. No le entregaste un manual con reglas como "tiene 4 patas, pelo y ladra". Simplemente, senalaste varios animales y dijiste "eso es un perro" y "eso no es un perro".</p>
					
					<p>El cerebro del nino proceso todos esos ejemplos y creo su propio "modelo" interno para identificar perros en el futuro. De manera similar, en la programacion tradicional, los humanos escriben reglas (codigo) para procesar datos y obtener respuestas. En el Machine Learning, los humanos introducen datos y respuestas, y la maquina "descubre" las reglas.</p>
					
					<h2>El cambio de paradigma</h2>
					<p>Imagina intentar programar filtros de spam con codigo tradicional. Tendrias que escribir cientos de miles de reglas: "Si dice oferta millonaria, es spam", "Si tiene 10 signos de exclamacion, es spam". Es insostenible.</p>

					<blockquote class="article-quote">
						El codigo tradicional obedece instrucciones. El Machine Learning busca patrones en el caos.
					</blockquote>

					<p>Con algoritmos de aprendizaje de maquina, a la computadora se le da un millon de correos etiquetados como "spam" y otro millon etiquetados como "normales". La maquina analiza la frecuencia de palabras, la estructura de las oraciones y otros patrones ocultos, construyendo su propia red de decisiones.</p>

					<h2>Tipos principales de aprendizaje</h2>
					<h3>Aprendizaje Supervisado</h3>
					<p>Es como tener un maestro. Le damos datos etiquetados (ej. fotos de facturas validas e invalidas) para que aprenda a predecir la etiqueta de nuevas fotos. Sus aplicaciones van desde predecir precios de viviendas hasta diagnosticos medicos.</p>

					<h3>Aprendizaje No Supervisado</h3>
					<p>Aqui la computadora debe encontrar la estructura por si misma sobre datos que no estan etiquetados categorizandolos. El ejemplo clasico? Segmentacion de clientes en marketing basados en comportamientos de compra ocultos.</p>
					
					<h2>Por que deberia importarle a tu empresa</h2>
					<p>Con los motores modernos de Machine Learning como servicio de AWS o Google Cloud, no necesitas un equipo de Ph.D. para empezar a usar esta tecnologia. Herramientas ya integradas en CRMs modernos utilizan ML para puntuar que clientes (leads) tienen mas probabilidad de cierre, prediciendo que producto recomendarles a continuacion mediante un sistema de recomendacion estilo Netflix.</p>',
		'autor' => [
			'nombre' => 'Equipo Editorial Marlot',
			'descripcion' => 'Divulgacion tecnologica accesible.',
			'imagen' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop'
		]
	],

	'caso-real-tp' => [
		'slug' => 'caso-real-tp',
		'titulo' => 'Caso real: 70% menos tiempo en tareas repetitivas',
		'subtitulo' => 'Descubre como una empresa comercializadora reducio drasticamente el tiempo empleado en administracion implementando agentes de software.',
		'categoria' => 'Automatizacion',
		'categoria_slug' => 'automation',
		'fecha' => 'Dic 28, 2025',
		'fecha_iso' => '2025-12-28',
		'tiempo_lectura' => '4 min lectura',
		'imagen' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=800&fit=crop',
		'imagen_alt' => 'Equipo trabajando',
		'etiqueta' => '',
		'sidebar_titulo' => 'Mas alla<br>de la teoria',
		'sidebar_texto' => 'No se trata de conceptos futuristas; presentamos un caso verificado de como la implementacion puntual de IA salvo cientos de horas laborales en un solo trimestre.',
		'contenido' => '<p class="drop-cap">Todo negocio en crecimiento llega a un punto de quiebre donde los sistemas manuales colapsan. Esto es exactamente lo que le ocurrio a Lumina Logistics, una empresa de distribucion con una cartera de mas de 300 clientes concurrentes.</p>
					
					<p>El problema era claro: el equipo de soporte recibia un promedio de 80 consultas diarias via WhatsApp. El 60% de estas consultas eran dudas rutinarias sobre estatus de envio, disponibilidad de stock o envio de comprobantes de pago. Atender manualmente esto requeria un empleado a tiempo completo pegado a la pantalla del telefono.</p>
					
					<h2>La Solucion: Integracion de Datos + IA Generativa</h2>
					<p>En lugar de contratar a dos personas mas para manejar el flujo en temporada alta, implementamos un ecosistema hibrido:</p>
					<ul>
						<li><strong>Unificacion de Datos:</strong> Se conecto el inventario en tiempo real y el estatus de las guias de envio a una base de datos central en la nube.</li>
						<li><strong>Agente Conversacional NLP:</strong> Un asistente impulsado por inteligencia artificial conectado a la cuenta empresarial de WhatsApp asimilio la logica de lectura de esa base de datos.</li>
					</ul>

					<blockquote class="article-quote">
						El ROI se hizo evidente en la primera semana. El bot contesto cientos de preguntas de madrugada asegurando la satisfaccion de clientes internacionales.
					</blockquote>

					<h2>Resultados Medibles</h2>
					<p>La adopcion del agente automatizado trajo los siguientes datos duros el primer mes de operacion:</p>
					<ul>
						<li><strong>Reduccion del 70% en el tiempo de respuesta promedio.</strong></li>
						<li><strong>El 55% de los tickets se resolvieron sin intervencion humana en primera instancia.</strong></li>
						<li>El empleado que originalmente contestaba mensajes ahora ocupa un puesto clave en ventas corporativas.</li>
					</ul>
					
					<p>La automatizacion en empresas de este tamano no desplaza el trabajo humano, sino que elimina el "trabajo robotico" que los humanos estaban obligados a hacer, elevando el potencial creativo y estrategico del equipo.</p>',
		'autor' => [
			'nombre' => 'Equipo Editorial Marlot',
			'descripcion' => 'Casos de estudio.',
			'imagen' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop'
		]
	],

	'guia-ia' => [
		'slug' => 'guia-ia',
		'titulo' => 'Guia: Prepara tu empresa para la era de la IA',
		'subtitulo' => 'Pasos accionables para adoptar la Inteligencia Artificial de manera estrategica sin abrumar a tu equipo de trabajo ni fracturar el presupuesto.',
		'categoria' => 'Tips',
		'categoria_slug' => 'tips',
		'fecha' => 'Dic 22, 2025',
		'fecha_iso' => '2025-12-22',
		'tiempo_lectura' => '8 min lectura',
		'imagen' => 'https://images.unsplash.com/photo-1553877522-43269d4ea984?w=1200&h=800&fit=crop',
		'imagen_alt' => 'Estrategia',
		'etiqueta' => '',
		'sidebar_titulo' => 'Adopcion<br>Inteligente',
		'sidebar_texto' => 'Comprar licencias de software por moda es tirar dinero a la basura. La clave es alinear la inteligencia artificial a los objetivos crudos de la empresa.',
		'contenido' => '<p class="drop-cap">A medida que las noticias tecnologicas prometen revolucionarlo todo, es facil sentir el "Miedo a quedarse fuera" (FOMO) y apresurarse a integrar modelos de IA de forma desordenada. Sin embargo, para no terminar con un presupuesto abultado de software inutil, proponemos una guia pragmatica de adopcion.</p>
					
					<h2>1. Auditoria del dolor</h2>
					<p>No empieces por preguntar "Que puede hacer la IA?". Empieza preguntando "Que procesos causan dolores de cabeza en mi empresa todos los viernes por la tarde?". Aquellas areas donde reina la friccion por mover datos de un lado a otro (contabilidad, facturacion, reportes de estatus, cotizaciones) son los candidatos principales para la transformacion digital.</p>
					
					<h2>2. Curaduria y limpieza de datos</h2>
					<p>La IA mas avanzada del mundo sera inutil si la alimentas con un Excel desorganizado y bases de datos desactualizadas de tus clientes. El lema "Garbage In, Garbage Out" es totalitario. Consolida tu informacion. Emplea un CRM estricto de forma mandatoria antes de pensar en algoritmos predictivos.</p>

					<blockquote class="article-quote">
						La IA no es polvo magico para arreglar flujos rotos, es combustible para escalar flujos que ya funcionan.
					</blockquote>

					<h2>3. Cultura de Adopcion (Gestion del Cambio)</h2>
					<p>Tus empleados podrian sentir temor sobre su seguridad laboral. Fomenta una cultura donde ellos vean a la IA como su "exoesqueleto", un super asistente personal en lugar de un reemplazo. Dales licencias a tus mejores talentos para experimentar con ChatGPT o Claude para sus tareas diarias y recompensa los casos de uso exitosos.</p>

					<h2>4. Considera la Seguridad</h2>
					<p>Establece lineamientos claros. Datos financieros, numeros de tarjetas o datos hiper-sensibles de clientes no deben pegarse impulsivamente en modelos publicos de IA. Usa versiones Enterprise (cerradas) que aseguren la no-persistencia de la informacion de tu compania.</p>
					
					<p>Adelantarse a la curva no significa correr a ciegas. Tomate el tiempo para realizar una auditoria honesta hoy mismo. El paso de tortuga estrategica siempre vencera a la liebre desorganizada en la maratona corporativa.</p>',
		'autor' => [
			'nombre' => 'Equipo Editorial Marlot',
			'descripcion' => 'Gestion del Cambio y Estrategia de IA.',
			'imagen' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop'
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
