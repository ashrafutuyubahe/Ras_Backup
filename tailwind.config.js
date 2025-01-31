    import defaultTheme from 'tailwindcss/defaultTheme';

    /** @type {import('tailwindcss').Config} */
    export default {
        content: [
            './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
            './storage/framework/views/*.php',
            './resources/**/*.blade.php',
            './resources/**/*.js',
            './resources/**/*.vue',
        ],
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                    nunito: ['Nunito', 'sans-serif'],
                },
            backgroundImage: {
                    'custom-gradient': 'linear-gradient(90deg, #5E656F 0%, #4E525D 25%, #474D5B 37.5%, #484C58 50%, #656974 75%, #525662 100%)',
                },
            },
        },
        plugins: [],
    };
