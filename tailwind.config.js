module.exports = {
  mode: 'jit',
  purge: {
    content: [
      './app/**/*.php',
      './resources/**/*.php',
      './resources/**/*.vue',
      './resources/**/*.js',
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'c-blue' : {
          100: '#55A7E1',
          200: '#194198',
          300: '#2D3F68',
          400: '#1F325A',
          500: '#485678',
        },
        'c-orange' : {
          100: '#E59C68',
        },
        'c-gray' : {
          100: '#EBEEF3',
        }
      },
      fontFamily: {
        'open' : ['Open Sans', 'sans-serif'],
      },
    },
    // typography: (theme) => ({
    //   DEFAULT: {
    //     css: {
    //       color: theme('colors.c-blue-200'),
    //       strong: theme('colors.c-blue-200'),
    //     }
    //   },
    // }),
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
  ],
};
