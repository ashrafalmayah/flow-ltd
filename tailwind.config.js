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
                rubik: ['"Rubik"', 'sans-serif'],
            },
            colors: {
                background: "#F4F0ED",
                primary: "#0F3960",
            },

            animation: {
                "infinite-scroll": "infinite-scroll 20s -10s linear infinite",
                "infinite-scroll-delayed": "infinite-scroll-2 20s linear infinite",
            },
            keyframes: {
                "infinite-scroll": {
                    "0%": { transform: "translateX(100%)" },
                    "100%": { transform: "translateX(-100%)" },
                },
                "infinite-scroll-2": {
                    "0%": { transform: "translateX(0%)" },
                    "100%": { transform: "translateX(-200%)" },
                },
            },
        },
    },
    plugins: [],
};
