<?php
/*
 * Autor: MarnueLgh
 * Fecha: 04/04/2026
 * Version: 2.0
 * Descripcion: Cierre de documento — scripts de pagina adicionales (Vite maneja los entry points)
 */

if (!isset($scripts_pagina) || !is_array($scripts_pagina)) {
	$scripts_pagina = [];
}
?>
<?php foreach ($scripts_pagina as $script_pagina): ?>
	<script src="<?php echo htmlspecialchars($script_pagina, ENT_QUOTES, 'UTF-8'); ?>"></script>
<?php endforeach; ?>
</body>
</html>
