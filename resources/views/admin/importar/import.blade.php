<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    
    <title> @yield ('title', 'Default' )Panel de administracion</title>
    
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" >
    <script src="{{ asset ('plugins/jquery/js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset ('plugins/bootstrap/js/bootstrap.js') }}"></script>
    
    <link rel="stylesheet" href="{{ asset('css/background.css') }}" >
</head>
<body>

    @include('admin.template.partials.banner')
    @include('admin.template.partials.nav')

    <div class="row">
        @include('admin.template.partials.menu')
        @include('admin.importar.imp')
        @include('admin.template.partials.link')
    </div>
 

    
    @include('admin.template.partials.footer')
    
    
    
</body>
</html>