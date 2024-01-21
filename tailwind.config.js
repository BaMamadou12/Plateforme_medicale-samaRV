/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily:{
            'kanit': ['Kanit', 'sans-serif'],
            'verdana':['Verdana', 'serif'],
            'copp': ['Copperplate Gothic', 'serif']
        },
        extend: {},
    },
    plugins: [],
}
