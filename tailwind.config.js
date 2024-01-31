/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {
      colors: {
        'background' : '#FAFAF6',
        'primary' : '#00587A',
        'secondary' : '#456173',
        'text' : '#00587A',
        'title' : '#00587A'
      },
    },
  },
  plugins: [],
}
