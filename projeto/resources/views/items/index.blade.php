@extends('master')

@section('title', 'Restaurant Management')

@section('content')

<div class="jumbotron">
    <h1>Restaurant Management</h1>
    <h2>Menu</h2>
</div>
<table class="table table-striped">

    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Photo</th>
            <th  v-if="Auth">Actions</th>
        </tr>
        
        
    </thead>

    <tbody id="app">
        <tr v-for="item in items.data">
            <td >@{{ item.name }}</td>
            <td >@{{ item.description }}</td>
            <td >@{{ item.price }} €</td>
            <td><img class="item-photo" width=" 100px"
        heigth= "100px" v-bind:src="'storage/items/'+ item.photo" ></img></td>
            
            <td>

            <div v-if="Auth" class="inline">
                    <button type="button" class="btn btn-light">Light</button>
                    <button type="button" class="btn btn-light">Light</button>
                    <button type="button" class="btn btn-light">Light</button>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<div class=" alert alert-success">
    <button type="button" class="close-btn" >&times;</button>
    <strong></strong>
</div>

    

<div class="jumbotron">
    <h2>Edit User</h2>

</div>


@endsection
@section('pagescript')
<script src="js/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@stop  
