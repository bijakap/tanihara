/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily : {
        'SourceSerifPro' : ['Source Serif Pro'],
        'SourceSansPro' : ['Source Sans Pro'],
        'Inter' : 'Inter'
      }
    },
  },
  plugins: [],
}
