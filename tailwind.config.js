/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                rubik: ['"Rubik"'],
            },
            colors: {
                background: "#F4F0ED",
                primary: "#0F3960",
            },

            animation: {
                "infinite-scroll": "infinite-scroll 10s -5s linear infinite",
            },
            keyframes: {
                "infinite-scroll": {
                    "0%": { transform: "translateX(0%)" },
                    "100%": { transform: "translateX(-100%)" },
                },
            },
        },
    },
    plugins: [],
};
