import axios from 'axios';
import Alpine from 'alpinejs'
import Chart from 'chart.js/auto'

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Chart = Chart;

window.Alpine = Alpine;

Alpine.start();
