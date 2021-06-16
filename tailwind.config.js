module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: 'class', // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Mulish', 'ui-sans'],
                'mono': ['IBM Plex Mono', 'ui-monospace'],
                'serif': ['ui-serif'],
                'display': ['Mulish'],
                'body' : ['Mulish']
            },
            colors: {
                'czqo-blue': {  DEFAULT: '#0080C9',  '50': '#B0E2FF',  '100': '#96D9FF',  '200': '#63C6FF',  '300': '#30B4FF',  '400': '#00A0FC',  '500': '#0080C9',  '600': '#006096',  '700': '#003F63',  '800': '#001F30',  '900': '#000000'},                'orange': {  DEFAULT: '#F79338',  '50': '#FFFFFF',  '100': '#FFFDFC',  '200': '#FDE3CB',  '300': '#FBC89A',  '400': '#F9AE69',  '500': '#F79338',  '600': '#F2790A',  '700': '#C16008',  '800': '#904806',  '900': '#5F2F04'},
            }
        },
    },
    variants: {
    extend: {},
    },
    plugins: [],
}
