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
                    10: '#474747',
                    50: '#e2e8e6',
                    100: '#d3fff5',
                    200: '#beece1',
                    300: '#d9f6ef',
                    400: '#35ef8b',
                    800: '#005340',
                    900: '#004838'
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

