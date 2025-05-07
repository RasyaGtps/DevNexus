/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'neon-purple': '#A855F7',
            },
            fontFamily: {
                'inter': ['Inter', 'sans-serif'],
            },
        },
    },
    plugins: [],
} 