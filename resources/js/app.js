import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import App from "./components/App";

Vue.use(VueRouter);

let app = new Vue({
    el: '#app',
    component: App,
    router: new VueRouter(routes)
});
