import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      fontFamily: ["Figtree", ...defaultTheme.fontFamily.sans],
    },
  },
  plugins: [],
}

