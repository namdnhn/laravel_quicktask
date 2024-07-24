import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/scss/app.scss',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@bower': path.resolve(__dirname, 'bower_components'),
        },
    },
});
