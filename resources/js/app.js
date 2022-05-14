require('./bootstrap');

import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

import VueBootstrap from '@/Plugins/VueBootstrap';
import VueCookies from 'vue-cookies';

// import App from '@/Components/App.vue';
import Index from '@/Pages/Index.vue';

const routes = [
    { path: '/', component: Index },
    // { path: '/:pathMatch(.*)', component: NotFound }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

const app = createApp({});

app.use(VueBootstrap);
app.use(VueCookies);
app.use(router);

app.mount('#app');
