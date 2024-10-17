/** @type {import('tailwindcss').Config} */
module.exports = {
  // content: ["./*.{php,html,js}", "./template-parts/*.{php,html,js}"],
  content: [
    "./src/**/*.{html,js}",
    "./*.{php,html,js}",
    "./assets/js/*.{php,html,js}",
  ],
  theme: {
    extend: {
      fontFamily: {
        bannerFont: ["Bebas Neue"],
      },
      colors: {
        gold: {
          200: "#FFE240",
          300: "#E6CC39",
          400: "#D4BC35",
          500: "#BDA72F",
          600: "#A8952A",
        },
      },
    },
  },
  plugins: [],
};
