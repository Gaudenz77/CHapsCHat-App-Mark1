import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

/* import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent); */

/* import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent); */

import ChatForm from './components/ChatForm.vue';
import ChatMessages from './components/ChatMessages.vue';
import MyLibraryForm from './components/MyLibraryForm.vue';
import MyLibraryContent from './components/MyLibraryContent.vue';

const app = createApp({});

app.component('chat-form', ChatForm);
app.component('chat-messages', ChatMessages);
app.component('my-library-form', MyLibraryForm);
app.component('my-library-content', MyLibraryContent);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 * 
 * 
 */




app.mount('#app');
