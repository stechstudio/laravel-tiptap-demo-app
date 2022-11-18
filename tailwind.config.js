const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  safelist: [
    {
      pattern:
          /bg-(red|green|blue|yellow|slate|gray|white)-(50|100|200|300|400|500|600|700|800|900)/,
      variants: ["hover", "focus", "lg", "lg:hover"],
    },
    {
      pattern:
          /border-(red|green|blue|yellow|slate|gray|white)-(50|100|200|300|400|500|600|700|800|900)/,
      variants: ["hover", "focus", "lg", "lg:hover"],
    },
  ],
  theme: {
    extend: {
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
