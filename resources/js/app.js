import './bootstrap';
import AttendanceReport from './components/AttendanceReport.vue';

const app = createApp({});
app.component('attendance-report', AttendanceReport);
app.mount('#app');
