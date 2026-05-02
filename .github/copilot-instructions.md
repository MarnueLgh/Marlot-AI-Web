# Copilot Instructions

Este repositorio sigue las reglas definidas en `AGENTS.md`.

Resumen operativo para Copilot:

1. Idioma principal en espanol para identificadores nuevos (salvo excepciones permitidas).
2. Preferir `snake_case` para variables/funciones nuevas en PHP y JS.
3. Clases CSS nuevas en formato `seccion-elemento` (un solo guion, sin BEM).
4. No usar `id` para estilos CSS nuevos.
5. En archivos nuevos, incluir encabezado con Autor/Fecha/Version/Descripcion.
6. Evitar JS inline en HTML para funcionalidades nuevas.
7. Objetivo de modularizacion:
   - Paginas PHP completas en raiz.
   - Fragmentos reutilizables en `includes/`.
   - JS propio centralizado en `js/main.js` (o entrada definida por el desarrollador).
8. No introducir frameworks o dependencias externas sin instruccion explicita.
9. Mantener cambios minimos y consistentes con el estilo existente del archivo.
10. Antes de cerrar cambios, verificar responsive y ausencia de errores de consola.

Comandos de ejecucion recomendados:

- Sitio estatico actual: `python -m http.server 5500`
- Cuando haya migracion PHP: `php -S localhost:5500`

Ante conflicto de reglas:

1. Priorizar instruccion directa del desarrollador.
2. Luego convencion dominante del archivo editado.
3. Luego `AGENTS.md`.
