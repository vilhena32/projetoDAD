require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);



import Navbar from './components/Main/Navbar.vue';
import listItems from './components/Items/listItems.vue';




Vue.component('navbar',Navbar);
Vue.component('items',listItems);


 new Vue({
    el: '#app',
    component:
    {

        navbar : Navbar,
        items : listItems
    },
    data:
    {
       
    }
});