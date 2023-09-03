import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import eslint from 'vite-plugin-eslint'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/*.css', 'resources/js/app.js', 'resources/images/**'],
            refresh: true,
        }),
        eslint({fix: true}),
    ],
});
