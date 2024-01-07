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
        'primary' : '#00ADB5',
        'secondary' : '#525CEB',
        'text' : '#EEEEEE',
        'title' : '#525CEB'
      },
    },
  },
  plugins: [],
}
