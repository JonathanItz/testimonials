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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                "primary": "#db82e5",
          
                "secondary": "#0ac5ff",
                        
                "accent": "#20788e",
                        
                "neutral": "#1a2128",
                        
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
