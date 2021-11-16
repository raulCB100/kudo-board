require('./bootstrap');

import Vue from 'vue';
import Buefy from 'buefy'
import 'buefy/dist/buefy.css'
import VueRouter from 'vue-router';
import router from './Router/index';
import store from './Store/index';
import App from './App.vue';
import Store from './Store'
Vue.use(Buefy)
Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router,
    components: {App},
    store:Store,
});
window.app = app;