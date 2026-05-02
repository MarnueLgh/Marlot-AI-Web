<?php
/*
 * Autor: MarnueLgh
 * Fecha: 04/04/2026
 * Version: 1.0
 * Descripcion: Inclusiones de scripts del sitio y cierre de documento
 */

if (!isset($scripts_pagina) || !is_array($scripts_pagina)) {
	$scripts_pagina = [];
}
?>
<script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>
<script src="script.js"></script>
<?php foreach ($scripts_pagina as $script_pagina): ?>
	<script src="<?php echo htmlspecialchars($script_pagina, ENT_QUOTES, 'UTF-8'); ?>"></script>
<?php endforeach; ?>
</body>
</html>
