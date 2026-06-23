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
        "abd-elrady-pro": ['"Abd-ElRady-Pro"', 'sans-serif'],
        "ibm-plex": ['"IBMPlex"', 'sans-serif'],
      },
      colors: {
        background: "#F4F0ED",
        primary: "#0F3960",
      },
      animation: {
        "infinite-scroll": "infinite-scroll 45s linear infinite",
        "infinite-scroll-delayed": "infinite-scroll-2 45s linear infinite",
      },
      keyframes: {
        "infinite-scroll": {
          "0%": { transform: "translateX(0%)" },
          "100%": { transform: "translateX(-200%)" },
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
