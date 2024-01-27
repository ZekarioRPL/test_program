import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/global.css', 
                'resources/js/app.js',
                'resources/css/externals/elements/table/dataTable.css',
                'resources/css/externals/elements/table/commonTable.css',
                'resources/css/externals/elements/select2/select2.css',
                'resources/css/internals/elements/main.css',
                'resources/css/internals/elements/layout.css',
            ],
            refresh: true,
        }),
    ],
});
