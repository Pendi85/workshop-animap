/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    backgroundImage: {
      'avatar': 'url("/resources/images/avatar.svg")',
    },
    extend: {
      fontFamily: {
        'montserrat': ['Montserrat', 'sans-serif']
      },
      fontSize: {
        'normal': '1.05rem'
      },
      backgroundColor: {
        'primary': '#0F6C41',
        'secondary': '#31424D'
      },
    },
  },
  plugins: [],
}