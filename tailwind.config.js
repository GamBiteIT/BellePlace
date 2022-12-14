
const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        
        color :{
            'HeaderColor':'#2D2B47',
            'BdoyColor' : '#472B31',
            'ColorBody2':'#3a5a76',
            'ColorBody3':'#00ccff',
            'tahiti': {
                light: '#67e8f9',
                DEFAULT:'#06b6d4',
                dark: '#0e7490',
              },
          
        },
        extend: {
            bgGradientDeg: {
                75: '75deg',
            },

            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },
  
    backgroundImage: {
        'Desert': "url('/resources/Images/Desert.jpg)",
        'rever': "url('./River.jpg')",
        
    },

    plugins: [require('@tailwindcss/forms')],
};
