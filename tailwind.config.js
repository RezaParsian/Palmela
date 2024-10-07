/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                'Hel_Med': ["Helvetica\\ Medium"],
                'Hel_Bld': ["Helvetica\\ Bold"]
            },
            colors: {
                palmela: {
                    10: '#665e42',  // Dark golden brown
                    50: '#fdf6e3',  // Light golden beige
                    100: '#f9e8b2', // Pale gold
                    200: '#f5da80', // Soft gold
                    300: '#f2cb4d', // Brighter gold
                    400: '#f0bd1a', // True gold
                    800: '#b38b07', // Deep gold
                    900: '#8c6e05', // Darker gold
                }
            },
            animation: {
                'bounce-slow': 'bounce 2s infinite',
                'rotate': 'spin .2s 2',
            }
        },
    },
    plugins: [],
}

