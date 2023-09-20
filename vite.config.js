import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'
import {fileURLToPath} from "node:url";

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/js/vue/src/app.js',
            ],
        }),
    ],
    resolve: {
        alias: {
            '@': fileURLToPath(new URL('./resources/js/vue/src', import.meta.url)),
        }
    },
    server: {
        host: '0.0.0.0',
        port: 281,
        hmr: {
            host: 'localhost'
        },
    },
    enableHMR: true
});
