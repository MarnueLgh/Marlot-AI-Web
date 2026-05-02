<?php
/*
 * Autor: MarnueLgh
 * Fecha: 02/05/2026
 * Version: 1.0
 * Descripcion: Helper PHP para integrar assets de Vite (dev con HMR y produccion con manifest)
 */

/**
 * Obtiene el entorno actual desde .env
 */
function obtener_entorno_vite() {
	static $entorno = null;
	if ($entorno !== null) {
		return $entorno;
	}

	$ruta_env = __DIR__ . '/../.env';
	if (file_exists($ruta_env)) {
		$lineas = file($ruta_env, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		foreach ($lineas as $linea) {
			if (strpos($linea, '#') === 0) continue;
			if (strpos($linea, 'VITE_ENV=') === 0) {
				$entorno = trim(str_replace('VITE_ENV=', '', $linea));
				return $entorno;
			}
		}
	}

	$entorno = 'production';
	return $entorno;
}

/**
 * Verifica si estamos en modo desarrollo
 */
function es_modo_desarrollo() {
	return obtener_entorno_vite() === 'development';
}

/**
 * Lee el manifest.json generado por Vite build
 */
function obtener_manifest_vite() {
	static $manifest = null;
	if ($manifest !== null) {
		return $manifest;
	}

	$ruta_manifest = __DIR__ . '/../dist/.vite/manifest.json';
	if (!file_exists($ruta_manifest)) {
		return [];
	}

	$contenido = file_get_contents($ruta_manifest);
	$manifest = json_decode($contenido, true);
	return $manifest ?: [];
}

/**
 * Genera las etiquetas HTML para cargar un entry point de Vite
 *
 * @param string $entrada Ruta relativa del entry point (ej: 'src/js/main.js')
 * @return string Etiquetas HTML (<script> y <link>)
 */
function vite_tags($entrada) {
	if (es_modo_desarrollo()) {
		return vite_tags_desarrollo($entrada);
	}
	return vite_tags_produccion($entrada);
}

/**
 * Etiquetas para modo desarrollo (HMR via Vite dev server)
 */
function vite_tags_desarrollo($entrada) {
	$servidor = 'http://localhost:5173';
	$tags = '';

	/* Cliente HMR — solo una vez por pagina */
	static $cliente_inyectado = false;
	if (!$cliente_inyectado) {
		$tags .= '<script type="module" src="' . $servidor . '/@vite/client"></script>' . "\n";
		$cliente_inyectado = true;
	}

	$tags .= '<script type="module" src="' . $servidor . '/' . $entrada . '"></script>' . "\n";
	return $tags;
}

/**
 * Precarga archivos CSS como <link> bloqueantes en modo desarrollo para evitar FOUC
 * En produccion no hace nada (el manifest ya genera los <link> correctos)
 *
 * @param array $rutas_css Array de rutas relativas de CSS (ej: ['src/css/styles.css'])
 * @return string Etiquetas <link> bloqueantes
 */
function vite_precargar_css($rutas_css = []) {
	if (!es_modo_desarrollo()) {
		return '';
	}

	$servidor = 'http://localhost:5173';
	$tags = '';

	foreach ($rutas_css as $ruta) {
		$tags .= '<link rel="stylesheet" href="' . $servidor . '/' . htmlspecialchars($ruta) . '">' . "\n";
	}

	return $tags;
}

/**
 * Etiquetas para modo produccion (archivos hasheados desde manifest)
 */
function vite_tags_produccion($entrada) {
	$manifest = obtener_manifest_vite();
	if (empty($manifest) || !isset($manifest[$entrada])) {
		return '<!-- Vite: entrada "' . htmlspecialchars($entrada) . '" no encontrada en manifest -->' . "\n";
	}

	$dato = $manifest[$entrada];
	$tags = '';

	/* CSS asociado al entry point */
	if (isset($dato['css'])) {
		foreach ($dato['css'] as $archivo_css) {
			$tags .= '<link rel="stylesheet" href="dist/' . htmlspecialchars($archivo_css) . '">' . "\n";
		}
	}

	/* JS del entry point */
	if (isset($dato['file'])) {
		$tags .= '<script type="module" src="dist/' . htmlspecialchars($dato['file']) . '"></script>' . "\n";
	}

	return $tags;
}
