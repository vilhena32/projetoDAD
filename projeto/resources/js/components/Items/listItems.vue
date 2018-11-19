<template>
    <div>
    <table class="table table-striped">
	    <thead>
	        <tr>
	            <th>Name</th>
	            <th>Description</th>
				<th>Price</th>
				<th>Photo</th>
	        </tr>
	    </thead>
	    <tbody>
	        <tr v-for="item in items"  :key="item.id">
                <td>{{ item.name }}</td>
				<td>{{ item.description }}</td>
				<td>{{ item.price }}</td>
				<td><img width="100px" heigth= "100px" v-bind:src="'storage/items/' + item.photo" /> </td>
                
	        </tr>
	    </tbody>
	</table>
   
    </div>
</template>

<script>
module.exports={
		data: function () {
			return {
				items: []
			}
		},
        mounted(){
			//if (this.$root.departments.length === 0) {
				axios.get('/items')
  					.then(response=>{
  						//this.$root.departments = response.data.data; 
						  //
						  
						  this.items= response.data.data;
						  console.log(response);
  					})
  			//} else {
  			//	this.departments = this.$root.departments;
  			//}
        }
	}


</script>
