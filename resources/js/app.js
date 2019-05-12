

import Vue from 'vue'


import loginComponent from './components/Login/login-component.vue';
import registerComponent from './components/Login/register-component.vue'


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    components: {loginComponent, registerComponent}
});
