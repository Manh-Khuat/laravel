require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue';
import App from './App.vue';
import Home from '../js/components/Home.vue';
import ProductList from '../js/components/ProductList.vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);


const routes = [
    {
        name: '/',
        path: '/',
        component: Home
    }, {
        name: 'products',
        path: '/products',
        component: ProductList
    }
];

const router = new VueRouter({ routes: routes});

const app = new Vue(Vue.util.extend(App)).$mount('#app');
