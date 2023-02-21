/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./**/*.php"
  ],
  theme: {
    extend: {
    colors: {
      'base': '#F6F6F6',
      'base-color': '#F6F6F6',
      'base-cont': '#080D1B',
      'main': '#197DBB',
      'main2': '#fbe5e7',
      'main-light': '#4BAAE0',
      'main-cont': '#F6F6F6',
      'accent': '#A69463',
      'accent-cont': '#FFF',
    },
    },
  },
  plugins: [],
}
