<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    
</head>

<body>

    
    <div  style="
    background-image: url('https://www.greenme.it/wp-content/uploads/2021/04/Earthday.jpg');
    background-size:cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    min-height:100vh;
    ">
    @include('partials.menu')
        <div class="container">
             @yield('content')
        </div>
    </div>
    @include('partials.footer')
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@yield('script_ext')
</html>
