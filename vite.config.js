import { defineConfig } from 'vite';
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';

export default defineConfig({
    css: {
        postcss: {
            plugins: [
                tailwindcss(),
                autoprefixer(),
            ],
        },
    },
    build: {
        rollupOptions: {
            input: 'resources/js/markdown-cheatsheet.js',
            output: {
                entryFileNames: 'markdown-cheatsheet.js',
                chunkFileNames: 'markdown-cheatsheet.js',
                assetFileNames: 'markdown-cheatsheet.css',
                dir: 'dist',
            },
        },
        outDir: 'dist',
        minify: 'terser',
    },
});
