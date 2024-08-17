/** @type {import('tailwindcss').Config} */
export default {
	content: [
		"./index.html",
		"./src/**/*.{js,ts,jsx,tsx,html}",
	],
	theme: {
		extend: {
			colors: {
				palmela: {
					50:'#e2e8e6',
					100: '#d3fff5',
					200: '#beece1',
					300: '#d9f6ef',
					400: '#35ef8b',
					800: '#005340',
					900: '#004838'
				}
			},
			animation:{
				'bounce-slow': 'bounce 2s infinite',
			}
		},
	},
	plugins: [],
}

