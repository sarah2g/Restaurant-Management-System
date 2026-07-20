import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/layout.css',
                'resources/css/navbar.css',
                'resources/css/sidebar.css',
                'resources/css/dashboard.css',
                'resources/css/cards.css',
                'resources/css/tables.css',
                'resources/css/forms.css',
                'resources/css/buttons.css',
                'resources/css/modal.css',
                'resources/css/utilities.css',
                'resources/css/responsive.css',
                'resources/js/app.js',
                'resources/js/sidebar.js',
                'resources/js/modal.js',
                'resources/js/dashboard.js',
                'resources/js/orders.js',
                'resources/js/search.js',
                'resources/js/dropdown.js',
                'resources/js/table.js',
                'resources/js/darkmode.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
