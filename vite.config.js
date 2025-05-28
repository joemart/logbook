import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/globals.scss', 
                'resources/js/app.js'
            ],
            refresh: true,
        })
    ],

    resolve: {
        alias: {
            '@scss' : path.resolve(__dirname, 'resources/scss')
        }
    },
    css:{
        preprocessorOptions: {
            scss: {
                additionalData: `@use "/resources/scss/global_variables.scss" as v;
                @use "/resources/scss/globals" as *;`
            }
        },
        devSourcemap: true
    }
});
