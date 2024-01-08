/** @type {import('tailwindcss').Config} */

export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx,html,css}",
  ],
  theme: {
    extend: {
      colors: {
        'beige': '#e9e4db',
        'green': '#285855',
        'green-dark': '#293429',
        'green-dark-transparent': '#29342921',
        'green-hover': '#33716d',
        'brown': '#b37f5f',
      },
      backgroundBody: {
        "background-body": "url('src/img/background.webp')"
      },
      fontFamily: {
        'plex-500': ['"IBM Plex Serif"', 'sans-serif'],
        'poppins': ['Poppins', 'sans-serif'],
      },
      screens: {
        '3xl':  '1920px'
      }
    },
  },
  plugins: [],
}

