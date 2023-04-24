import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


import { createApp } from 'vue';

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

const app = createApp({});

app.component('example-component', ExampleComponent);

app.mount('#app');