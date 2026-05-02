# AGENTS.md

Convenciones operativas para agentes de codigo en este repositorio.

Este archivo define el comportamiento esperado del agente al generar, modificar o revisar
cualquier archivo del proyecto.

---

## Objetivo de la skill

Garantizar que todo el codigo generado sea coherente con el estilo del desarrollador y, al mismo
tiempo, preparar el proyecto para una arquitectura mas flexible y moderna (modularizacion en PHP,
`includes/` y JavaScript organizado).

El agente no debe imponer convenciones externas innecesarias ni mezclar idiomas en identificadores.

---

## Estado actual del repositorio (importante)

- Hoy el proyecto funciona como sitio estatico HTML/CSS/JS vanilla.
- Aun no existe estructura PHP activa en produccion dentro de este repo.
- No hay pipeline de build/test automatizado configurado.

Plan objetivo permitido por esta guia:

- Evolucionar a paginas PHP modulares en raiz + fragmentos en `includes/`.
- Consolidar JavaScript propio con una organizacion clara (objetivo preferido: `js/main.js`
  o entrada equivalente definida por el desarrollador).

Si una tarea implica migracion, el agente puede proponer/crear estructura modular sin romper
las rutas actuales.

---

## Build / run / lint / test

### Ejecutar localmente (estado actual)

- Servidor estatico recomendado:
  - `python -m http.server 5500`
- URLs base:
  - `http://localhost:5500/index.html`
  - `http://localhost:5500/blog.html`

### Ejecutar cuando haya modularizacion PHP

- Servidor PHP local recomendado:
  - `php -S localhost:5500`
- URL ejemplo:
  - `http://localhost:5500/index.php`

### Build

- No existe proceso de build obligatorio por ahora.
- Tratar build como smoke check funcional + visual.

### Lint

- No hay linter configurado actualmente.
- No introducir tooling nuevo sin instruccion explicita.

### Test

- No existe suite automatizada en el estado actual.
- Validacion requerida: pruebas manuales reproducibles.

### Como correr un "single test"

Al no haber test runner, "single test" = escenario puntual:

1. Navbar hide/show en home
2. Filtros de categorias en blog
3. Toggle de tema (persistencia en `localStorage`)
4. Carga correcta de include especifico (cuando exista migracion a PHP)

---

## Reglas obligatorias

1. **Idioma espanol** en variables, funciones, clases CSS, nombres de archivos y comentarios,
   con excepciones permitidas: `main`, `header`, `footer`, `hero`, `nav`, `index`, `include`,
   `includes`, `assets`, `style`, `script`.

2. **snake_case** para variables y funciones nuevas en PHP y JS, salvo mantenimiento de un bloque
   existente que ya sea claramente camelCase. No mezclar ambos estilos en el mismo bloque nuevo.

3. **Clases CSS con un solo guion medio**, formato `seccion-elemento`.
   - Correcto: `.footer-texto`, `.nav-enlace`, `.hero-titulo`
   - Incorrecto: `.footer--texto`, `.footer_texto`, `.footerTexto`

4. **IDs solo** para anclas internas, vinculacion `label`/`input` y hooks JS.
   No usar `id` para estilos CSS nuevos.

5. **Encabezado en archivo nuevo**:

```text
/*
 * Autor: MarnueLgh
 * Fecha: dd/mm/aaaa
 * Version: 1.0
 * Descripcion: [descripcion breve]
 */
```

6. **Indentacion con tabs** en archivos nuevos y bloques nuevos grandes, siempre que no genere
   ruido excesivo en archivos legacy. En archivos existentes con 4 espacios, priorizar consistencia
   local en cambios pequenos.

7. **Paginas PHP completas en raiz** cuando se active modularizacion (`index.php`, `blog.php`, etc.).
   `includes/` queda reservado para fragmentos reutilizables (`header.php`, `footer.php`,
   `nav.php`, `scripts.php`).

8. **JS propio centralizado** en `js/main.js` (objetivo de arquitectura) o en una entrada definida
   explicitamente por el desarrollador. Evitar JS inline en HTML para funcionalidades nuevas.

9. No introducir dependencias externas (npm/composer/frameworks) sin pedido explicito.

---

## Reglas recomendadas

- Definir variables CSS globales en `:root` al inicio de la hoja principal.
- Mantener CSS personalizado agrupado y ordenado por secciones.
- Mantener media queries hacia el final del archivo CSS principal.
- Versionar encabezados de archivo cuando haya cambios relevantes.
- Priorizar clases reutilizables solo cuando sean realmente globales.

---

## Convenciones de estilo

### Nomenclatura (referencia rapida)

| Elemento              | Convencion               | Ejemplo                     |
|-----------------------|--------------------------|-----------------------------|
| Variable PHP          | `$snake_case`            | `$total_carrito`            |
| Funcion PHP/JS        | `snake_case()`           | `obtener_socios()`          |
| Clase CSS             | `seccion-elemento`       | `.formulario-campo`         |
| Archivo PHP/CSS/JS    | `nombre_descriptivo`     | `galeria_socios.php`        |
| Carpeta               | minusculas sin espacios  | `includes/`, `css/`, `js/`  |
| ID HTML               | casos permitidos         | `id="contacto"`              |

### Stack objetivo

Bootstrap (base estructural) + `css/style.css` o hoja principal equivalente (personalizacion) +
PHP + JS vanilla.

No usar React/Vue ni Sass/Less salvo instruccion explicita.

### Estructura CSS sugerida

```css
:root {
	--color-primario: #1a1a2e;
	--color-secundario: #e8b84b;
	--fuente-principal: 'Nombre', sans-serif;
}

/* Seccion: Header */
/* Seccion: Hero */
/* Seccion: Footer */
/* Media Queries */
```

### Versionado sugerido

- Cambio grande o nueva funcionalidad: `1.0 -> 2.0`
- Ajuste puntual/refactor menor: `1.0 -> 1.1`

---

## Flujo de validacion

Antes de entregar, el agente debe revisar:

1. Identificadores en espanol (salvo excepciones).
2. Uso consistente de `snake_case` donde aplique.
3. Clases CSS en formato `seccion-elemento`.
4. No uso de `id` para estilos nuevos.
5. Encabezado en archivo nuevo.
6. Consistencia de indentacion (tabs en nuevo; respeto del archivo legacy cuando aplique).
7. JS nuevo fuera de HTML inline.
8. Si hay PHP modular: paginas en raiz e includes en `includes/`.
9. Responsive funcional en mobile/tablet/desktop.
10. Sin errores de consola en paginas afectadas.

Si falla algo, corregir antes de finalizar.

---

## Restricciones

El agente no debe:

- Usar BEM (`--`, `__`) en clases CSS nuevas.
- Aplicar estilos via `id`.
- Introducir dependencias externas sin instruccion.
- Romper rutas existentes durante modularizacion.
- Mezclar espanol e ingles en el mismo identificador.
- Crear fragmentos reutilizables en raiz si corresponden a `includes/`.
- Dejar JS funcional nuevo embebido en HTML.

---

## Cursor / Copilot rules

Rutas verificadas:

- `.cursor/rules/`
- `.cursorrules`
- `.github/copilot-instructions.md`

Si existen, deben respetarse junto con este archivo.
Si no existen, este `AGENTS.md` actua como fuente principal de convenciones.

---

## Prioridad de reglas

En caso de conflicto:

1. Instruccion directa del desarrollador en la tarea actual.
2. Convencion ya dominante del archivo tocado (para no romper coherencia).
3. Este `AGENTS.md`.
4. Convenciones externas genericas.
