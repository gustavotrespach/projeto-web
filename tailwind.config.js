import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/pokemons/create.blade.php",
    "./resources/views/pokemons/edit.blade.php",
    "./resources/views/pokemons/index.blade.php",
    "./resources/js/app.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend:{
          backgroundImage: {
            'custom-background': "url('/images/background.jpg')",
          },
        },
      },
      plugins: [],
}
