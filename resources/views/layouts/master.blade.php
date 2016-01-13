<!DOCTYPE html>
<html>
<head>
    <title> Cory Norris - @yield('title')</title>
    <!-- Font Awesome 4.5.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Custom CSS (include Bootstrap) -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
</head>
<body>
    <div class="m-scene">        
        <div class="m-header scene_element scene_element--fadein">
            @include('layouts.navigation-bar')
        </div>
        <div class="scene_element scene_element--fadeinup">
             @yield('content')
        </div>
    </div>
    @section('scripts')
    <!-- JQuery 2.1.4 -->
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script> 
    <!-- Smooth State 0.7.2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothState.js/0.7.2/jquery.smoothState.min.js"></script>        
    <!-- Bootstrap 3.3.6 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Custom Javascript -->
    <script src="js/app.js"></script>
    @show
</body>
</html>
