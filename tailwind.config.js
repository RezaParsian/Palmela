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
                    10: '#e6e6e6',  // Very light black (almost white)
                    50: '#cccccc',  // Light black (pale gray)
                    100: '#b3b3b3', // Soft black (light gray)
                    200: '#999999', // Neutral gray
                    300: '#808080', // Medium black (standard gray)
                    400: '#666666', // Deep gray
                    800: '#333333', // Dark black (deep gray)
                    900: '#000000', // Pure black
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

