/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        'cycloid-blue':  '#0345BF',
        'cycloid-navy':  '#0A1628',
        'cycloid-cyan':  '#00C6FF',
        'cycloid-text':  '#1E293B',
        'cycloid-bg':    '#F8FAFC',
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
