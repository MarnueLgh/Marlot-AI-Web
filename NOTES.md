# Lenguaje técnico utilizado en el proyecto
----------- Guía de Aprendizaje -----------

## Técnicas de diseño UX/UI
- **Parallax**: Efecto donde el fondo se mueve más lento que el contenido al hacer scroll, creando sensación de profundidad.
- **Scroll-triggered Animation**: Animaciones que se activan cuando el usuario hace scroll hasta cierto punto.
- **Glassmorphism**: Efecto de vidrio esmerilado con `backdrop-filter: blur()` y fondos semi-transparentes.
- **Liquid Glass**: Variante de glassmorphism con bordes suaves y sombras internas (inset).
- **Oversized Typography**: Tipografía gigante que ocupa gran parte de la pantalla, usada para impacto visual.
- **Capsule Cards**: Tarjetas con forma de píldora (border-radius muy alto), diseño compacto horizontal.
- **Dark Mode**: Modo oscuro que invierte colores para reducir fatiga visual. Se implementa con CSS variables.

## Etiquetas generales
- **Hover**: Estado cuando el cursor está sobre un elemento. Se define con `:hover` en CSS.
- **Focus**: Estado cuando un elemento tiene el foco (teclado). Se define con `:focus`.
- **Active**: Estado cuando se hace click. Se define con `:active`.
- **Transition**: Animación suave entre estados. Ej: `transition: all 0.3s ease;`
- **Transform**: Modifica un elemento (mover, rotar, escalar). Ej: `transform: scale(1.1);`
- **Opacity**: Transparencia de un elemento (0 = invisible, 1 = visible).

## NavBar 
- **Fixed**: `position: fixed;` mantiene la barra siempre visible al hacer scroll.
- **Floating Navbar**: Navbar con márgenes, border-radius y sombras, "flotando" sobre el contenido.
- **Sticky**: Similar a fixed pero solo después de cierto scroll.
- **Mega Menu**: Menú desplegable grande con múltiples columnas y contenido enriquecido.
- **Hamburger Menu**: Icono de 3 líneas para menú móvil (≡).
- **Scroll-up Reveal**: Navbar que aparece solo cuando haces scroll hacia arriba.

## Hero 🦸🏻
- **Hero Section**: Primera sección grande de la página, generalmente con título principal y CTA.
- **CTA (Call to Action)**: Botón principal que invita a una acción ("Descubre más", "Comprar").
- **Overlay**: Capa semi-transparente sobre una imagen para mejorar legibilidad del texto.
- **Full-height**: `height: 100vh;` ocupa toda la altura de la ventana.
- **Background Gradient**: Fondo con degradado de colores.

## Sections 📒
- **Container**: Contenedor que limita el ancho del contenido (`max-width`).
- **Grid Layout**: Sistema de cuadrícula para organizar elementos (`display: grid;`).
- **Flexbox**: Sistema flexible para alinear elementos (`display: flex;`).
- **Gap**: Espacio entre elementos en grid/flex.
- **Padding**: Espacio interno de un elemento.
- **Margin**: Espacio externo de un elemento.
- **Two-column Layout**: Diseño de dos columnas, común para texto + imagen.

## Footer 👣
- **Newsletter Form**: Formulario para suscripción por email.
- **Footer Links**: Enlaces organizados en columnas (Navegación, Legal, Social).
- **Social Icons**: Iconos de redes sociales, generalmente en grid o fila.
- **Copyright**: Texto legal de derechos de autor (© año).

## Cards y Componentes 🃏
- **Service Card**: Tarjeta que muestra un servicio con icono, título y descripción.
- **Border-radius**: Redondea esquinas. Valores altos = forma de píldora.
- **Box-shadow**: Sombra alrededor del elemento para dar profundidad.
- **Badge/Tag**: Etiqueta pequeña sobre una tarjeta ("Nuevo", "Popular").

## Colores y Variables 🎨
- **CSS Variables**: Variables reutilizables definidas en `:root`. Ej: `var(--color-primary)`.
- **Primary Color**: Color principal de la marca.
- **Background (bg)**: Color de fondo.
- **Text Color**: Color del texto.
- **Border Color**: Color de los bordes.

## Responsive Design 📱
- **Media Query**: Reglas CSS que aplican según tamaño de pantalla. Ej: `@media (max-width: 768px)`.
- **Breakpoints**: Puntos de quiebre comunes: 480px (móvil), 768px (tablet), 992px (desktop), 1200px (grande).
- **Mobile-first**: Diseñar primero para móvil y luego escalar hacia arriba.
- **clamp()**: Función CSS para valores fluidos. Ej: `font-size: clamp(16px, 4vw, 24px);`

## Animaciones ✨
- **@keyframes**: Define animaciones personalizadas con estados intermedios.
- **Ease / Ease-in-out**: Curvas de animación (suave al inicio/final).
- **Cubic-bezier**: Curva de animación personalizada para efectos más naturales.
- **Fade-in**: Aparecer gradualmente (opacity 0 → 1).
- **Slide-up**: Deslizar hacia arriba (translateY).

## Accesibilidad ♿
- **aria-label**: Etiqueta para lectores de pantalla en elementos sin texto visible.
- **alt text**: Texto alternativo para imágenes.
- **Focus states**: Estados visuales para navegación con teclado.
- **Contrast ratio**: Proporción de contraste entre texto y fondo (mínimo 4.5:1).

## 