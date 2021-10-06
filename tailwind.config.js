const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['Lato', ...defaultTheme.fontFamily.sans],
                serif: ['Montserrat', ...defaultTheme.fontFamily.serif],
                logo: ['Comfortaa', ...defaultTheme.fontFamily.sans]
            },
            fontSize: {
                'xxs': '.625rem',
            },
            colors: {
                green: colors.lime,
                gold: '#bb9f5d'

            },
            container: {
                center: true,
                padding: {
                    DEFAULT: '1rem',
                },
                screens: {
                    'sm': '640px',
                    'md': '768px',
                    'lg': '1024px',
                    'xl': '1280px',
                }
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
