<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Restaurant Management</title>

     <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
         <!-- Latest compiled and minified CSS -->
         <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/vuejs-paginator/2.0.0/vuejs-paginator.min.js"></script> <!--Vue Paginator --> 
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
    

</head>
<body>
    <div id="app">
        <navbar></navbar>
        <items></items>
       
       
    </div>

    
    
<script src="js/app.js"></script>

    
    
</body>
</html>