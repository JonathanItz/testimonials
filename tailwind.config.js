import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Outfit', ...defaultTheme.fontFamily.sans],
                display: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                "primary": "#FCEA2B",
                "primary-hover": "#fff9b3",
                "secondary": "#00C2FF",
                "accent": "#F5F1E3",
                "neutral": "#050505",
                "neutral-500": "#5c5c5c",
                "base-100": "#f9f9fb",
                "info": "#1b9aee",
                "success": "#51ecd4",
                "warning": "#eed059",
                "error": "#e96363",
            }
        },
    },


    plugins: [forms],
};
