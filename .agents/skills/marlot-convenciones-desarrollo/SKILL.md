---
name: marlot-convenciones-desarrollo
description: "Usa esta skill al crear, modificar o revisar codigo dentro de Marlot_AI_Web_Test_OpenC. Aplica las convenciones locales del proyecto Marlot AI para PHP modular, includes, Vite, src/js, src/css, HTML, CSS, JavaScript vanilla, migracion gradual desde archivos legacy, AGENTS.md, .cursorrules y reglas del repositorio."
---

# Convenciones Marlot AI

Usa esta skill como capa local del proyecto. Si hay conflicto, prioriza la instruccion directa del usuario, luego esta skill y las reglas del repo, y finalmente la skill global `convenciones-desarrollo`.

## Estado del proyecto

- El proyecto actual usa PHP modular con paginas completas en la raiz: `index.php`, `blog.php`, `articulo.php`, `faq.php`, `accesibilidad.php`, `privacidad.php` y `terminos.php`.
- Los fragmentos reutilizables viven en `includes/`: `head.php`, `nav.php`, `footer.php`, `scripts.php`, `vite.php` y secciones compartidas.
- Vite esta integrado por `includes/vite.php`, con entorno leido desde `.env` mediante `VITE_ENV`.
- Las entradas activas de frontend estan en `src/js/main.js` y `src/js/blog.js`; los modulos propios viven en `src/js/modulos/`.
- El CSS activo esta en `src/css/styles.css` y se importa desde las entradas Vite.
- `dist/` contiene salida generada por `npm run build`; no editar manualmente salvo que la tarea pida revisar artefactos generados.
- `script.js`, `js/blog.js` y `javascript/` son legado. No migrarlos en masa; mover o retirar codigo solo cuando la tarea toque esa funcionalidad.

## Reglas de arquitectura

- Crear paginas PHP completas en la raiz del proyecto.
- Crear fragmentos reutilizables solo dentro de `includes/`.
- Cargar assets propios mediante Vite cuando la pagina ya use `vite_tags()`.
- Definir `$titulo_pagina`, `$pagina_actual`, `$ancla_footer`, `$hojas_estilo`, `$scripts_pagina` y `$vite_entrada` antes de incluir `includes/head.php` cuando aplique.
- Usar `require __DIR__ . '/includes/archivo.php';` para piezas obligatorias y `include` solo para secciones opcionales o contenido puntual.
- No crear JavaScript funcional inline en PHP/HTML nuevo.
- No introducir nuevas dependencias npm, Composer, frameworks, linters o bundlers sin instruccion explicita.

## Nomenclatura

- Usar espanol en variables, funciones, clases CSS, comentarios, archivos y carpetas nuevas.
- Excepciones permitidas: `main`, `header`, `footer`, `hero`, `nav`, `index`, `include`, `includes`, `assets`, `style`, `script`, `app`, `api`, `config`, `layout`, `vite`, `src`, `dist`, `public`.
- Usar `snake_case` para variables y funciones nuevas en PHP y JS.
- Respetar camelCase solo si se edita un bloque legacy que ya lo usa de forma consistente.
- Usar clases CSS con un solo guion medio: `.seccion-elemento`.
- No usar BEM (`__`, `--`), guion bajo ni camelCase en clases CSS nuevas.
- Usar `id` solo para anclas internas, `label`/`input`, hooks JS o integraciones externas; no usar `id` para estilos nuevos.

## CSS

- Trabajar principalmente en `src/css/styles.css`.
- Mantener variables globales en `:root` al inicio de la hoja.
- Agrupar cambios por seccion con comentarios breves cuando el archivo lo necesite.
- Mantener media queries hacia el final si el cambio no exige otra ubicacion local.
- Evitar reformateos masivos en `src/css/styles.css`; el archivo legacy usa espacios y se debe respetar si el cambio es puntual.
- Usar clases existentes y patrones visuales del proyecto antes de inventar una nueva familia de componentes.

## JavaScript

- Agregar funcionalidad nueva en `src/js/main.js`, `src/js/blog.js` o un modulo nuevo dentro de `src/js/modulos/`.
- Exportar funciones desde modulos y orquestarlas desde el entry point correspondiente.
- Usar `addEventListener`, selectores claros y guard clauses cuando un elemento no exista.
- Mantener nombres en espanol y `snake_case`: `iniciar_cookies()`, `botones_filtro`, `contenedor_parallax`.
- Leer el comportamiento existente de Lenis, GSAP, Splitting y ScrollTrigger antes de modificar animaciones.
- Si se toca scroll, animaciones o filtros, revisar que `pageshow`/bfcache no deje estilos inline rotos.

## Encabezados e indentacion

En archivos nuevos de codigo, agregar:

```text
/*
 * Autor: MarnueLgh
 * Fecha: dd/mm/aaaa
 * Version: 1.0
 * Descripcion: descripcion breve
 */
```

- Usar la fecha actual de la sesion.
- Usar tabs en archivos nuevos y bloques nuevos grandes.
- Respetar la indentacion dominante en archivos existentes, especialmente en CSS legacy.
- En Markdown de skills o docs, usar el formato propio del archivo en lugar del encabezado de codigo.

## Comandos y validacion

- Desarrollo PHP local: `php -S localhost:5500`.
- Vite dev server: `npm run dev`.
- Build de assets: `npm run build`.
- Preview de Vite: `npm run preview`.
- No hay linter o test runner propio; validar con smoke checks reproducibles.
- Para cambios visuales o de interaccion, probar mobile, tablet y desktop.
- Revisar consola limpia en las paginas afectadas.
- Validar escenarios segun alcance:
  - navbar hide/show;
  - filtros de blog;
  - carga de includes;
  - cookies, FAQ o diagnostico si se tocan;
  - assets Vite en dev y produccion si se toca `includes/vite.php` o entradas.

## Flujo antes de entregar

1. Revisar si existe una convencion local mas fuerte en el archivo tocado.
2. Mantener cambios acotados a la tarea.
3. Confirmar que no se rompen rutas publicas ni includes existentes.
4. Confirmar que el JS nuevo no queda inline.
5. Confirmar que no se agregaron dependencias ni tooling sin permiso.
6. Explicar brevemente que reglas locales se aplicaron y que validacion se ejecuto.
