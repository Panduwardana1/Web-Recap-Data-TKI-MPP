/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.php",
  ],
  theme: {
    extend: {
        fontFamily : {
            manrope : ['Manrope', 'sans-serif'],
        }
    },
  },
  plugins: [],
}
