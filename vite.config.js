import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    server: {
        host: "0.0.0.0", // Usa '0.0.0.0' para ser accesible externamente
        port: 3000, // Puedes especificar un puerto; si no, Vite usará 3000 por defecto
        // Otras opciones de servidor...
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
