require('./bootstrap');
import { createApp } from 'vue';
import App from './components/App.vue';
import { createRouter, createWebHistory } from 'vue-router';
import { routes } from './routes';
import axios from 'axios';
const app = createApp(App)

const router = createRouter({
    history: createWebHistory(),
    routes
})

app.use(router)
app.mount("#app")
