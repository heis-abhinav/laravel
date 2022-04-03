/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.axios = require("axios");
window.Vue = require('vue').default;
import App from './App.vue';
import Store from './Store.vue';
import VueRouter from 'vue-router';
//import { createRouter } from 'vue-router'
Vue.use(VueRouter)
import Form from 'vform'
import HasError from 'vform'
import AlertError  from 'vform'
import { adminroutes } from './adminroutes'
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

 
// Vue.component('file-upload-component', require('./components/FileUpload.vue').default);
// Vue.component('view-items-component', require('./components/ItemsViewPage.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });

 
if (document.getElementById('items')) {
   Vue.component('side-component', require('./components/admin/SideComponent.vue').default);
   const adminrouter = new VueRouter({
    mode: 'history',
    routes: adminroutes,
});
   const app = new Vue({
      // routers,
       el: '#items',
       router: adminrouter,
       render: h => h(App),
   });
   
}
const store = new Vue({
   el : '#navigation',
   router: adminrouter,
   render: h => h(Store)
});
