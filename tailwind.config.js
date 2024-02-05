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
        extend: {
            zIndex: {
                '1200': '1200',
                '900': '900',
                '800': '800',
                '700': '700',
                '600': '600',
                '500': '500',
                '400': '400',
                '300': '300',
                '200': '200',
                '100': '100',
            },
            keyframes: {
                affect: {
                  '0%': { transform: 'scale(0)', opacity: '0' },
                  '100%': { transform: 'scale(1)', opacity: '1' },
                }
            },
            animation: {
                affect: 'affect .3s ease-in-out',
            },
        },
    },
    plugins: [],
}
