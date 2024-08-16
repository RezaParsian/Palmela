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
					50: '#d3fff5',
					100: '#beece1',
					200: '#d9f6ef',
					400: '#35ef8b',
					800: '#005340',
					900: '#004838'
				}
			}
		},
	},
	plugins: [],
}

