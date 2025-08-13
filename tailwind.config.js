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
            // manrope
            manrope : ['Manrope', 'sans-serif'],
            // urbanist
            urbanist : ['Usrbanist', 'sans-serif'],
        },
    },
  },
  plugins: [],
}
