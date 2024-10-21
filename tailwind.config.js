/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {fontFamily: {
      oswald: ['Oswald', 'sans-serif'], // Add Oswald font here
    },
  },
  },
  plugins: [],
}

