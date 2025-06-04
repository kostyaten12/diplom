/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
      padding: "2rem",
      screens: {
        'xs': '390px',
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1600px',
      },
    },
    extend: {
      screens: {
        'xs': '400px',
        'xxs': '320px',
      },
      colors: {
        action: '#8685AD',
        lavender: '#ADACC3',
        background: '#F4F4F4',
        accent: '#D0DAFF',
        desc: '#535353',
        button: '#B4B2F5',
      }
    },
  },
  plugins: [],
}
