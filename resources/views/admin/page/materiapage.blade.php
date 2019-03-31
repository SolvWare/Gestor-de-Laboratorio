<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    
    <title>Sesion Laboratorio</title>
    
    
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" >
    <script src="{{ asset ('plugins/jquery/js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset ('plugins/bootstrap/js/bootstrap.js') }}"></script>
    
    <link rel="stylesheet" href="{{ asset('css/background.css') }}" >

    <!-- iconos -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}" >
  <link href="{{ asset('css/brands.css') }}" rel="stylesheet">
  <link href="{{ asset ('css/solid.css') }}" rel="stylesheet">
</head>
<body class="h-100">

    <header class="h-25">
        @include('inicio.banner')
        @include('inicio.nav')
    </header>

    <section class="d-flex text-white h-75 mt-1">
        <div class="w-25 d-inline-block">
            @include('admin.container.menu')
        </div>
        <div class="w-100 d-inline-block mr-1 ml-1">
            @include('admin.container.materias')
        </div>
        <div class="w-25 d-inline-block">
            @include('inicio.link')
        </div>
    </section>
 
    <footer class="">
        @include('inicio.footer')
    </footer>

</body>
</html>