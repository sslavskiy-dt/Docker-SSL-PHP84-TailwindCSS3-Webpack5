/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{php,html,js}"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    //require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    //require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/container-queries'),
  ],
}

