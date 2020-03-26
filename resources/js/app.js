
/* require('./bootstrap');
import 'material-design-icons/iconfont/material-icons.css';

window.Vue = require('vue');

Vue.component('barra-navegacion', require('./components/BarraNavegacion.vue').default);
Vue.component('hola-mundo', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
}); */
/* require('./bootstrap'); */
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'material-design-icons/iconfont/material-icons.css';
import Vue from 'vue';
import VueRouter from 'vue-router';
import {routes} from './routes';
import App from './App.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    routes
}) 

new Vue({
    el: '#app',
    router,
    render: h => h(App)
})


