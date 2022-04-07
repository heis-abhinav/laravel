/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.axios = require("axios");
window.Vue = require('vue').default;
import Store from './Store.vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter)
import Form from 'vform'
import HasError from 'vform'
import AlertError  from 'vform'
import { storeroutes } from './storeroutes'
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

 
if (document.getElementById('topnavigation')) {
   Vue.component('side-component', require('./components/store/SideComponent.vue').default);
   const storerouter = new VueRouter({
       mode: 'history',
       routes: storeroutes,
    });
   const store = new Vue({
      el : '#home',
      router: storerouter,
      render: h => h(Store)
   });

   
}

