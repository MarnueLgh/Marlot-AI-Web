/*
 * Autor: MarnueLgh
 * Fecha: 02/05/2026
 * Version: 1.0
 * Descripcion: Configuracion Vite para proyecto PHP multi-pagina
 */

import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
	build: {
		manifest: true,
		outDir: 'dist',
		rollupOptions: {
			input: {
				main: resolve(__dirname, 'src/js/main.js'),
				blog: resolve(__dirname, 'src/js/blog.js'),
			},
		},
	},
	server: {
		origin: 'http://localhost:5173',
		cors: true,
	},
});
