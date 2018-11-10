require('./bootstrap');



window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    data: {
        message: 'List Users',
        items: [],
        resource_url: '/items',
        
       
    },
    methods: {
        editUser: function(user){
         
        },
        deleteUser: function(user){
         
        },
        saveUser: function(){
         
        },
        cancelEdit: function(){
         
        }
    },
   
   
    mounted() {
        axios
      .get(resource_url)
      .then(response => (this.items = response.data))
        
    },

   
});