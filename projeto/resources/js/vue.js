require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    data: {
        message: 'List Users',
        items: [], 
       
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
      .get('/items')
      .then(response => (this.items = response.data))
        
    },

   
});