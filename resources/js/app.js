
import './bootstrap'; // or './app'
import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import Welcome from './components/Welcome.vue';

const app = createApp({});
app.component('welcome', Welcome);
app.mount('#app');
