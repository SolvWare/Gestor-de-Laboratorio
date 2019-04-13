<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laboratorio</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/css/mdb.min.css" rel="stylesheet">
</head>
<body class="h-100">

    <header class="h-25">
        @include('inicio.nav')
    </header>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/admi">Administrador</a></li>
            <li class="breadcrumb-item"><a class="black-text" href="/usuario">Usuario</a></li>
            <li class="breadcrumb-item active">Buscar</li>
        </ol>
    </nav>
    <section class="d-flex text-white h-75 mt-1">
        <div class="w-25 d-inline-block">
            @include('administrador.opcion.menu')
        </div>
        <div class="w-100 d-inline-block mr-1 ml-1">
            @include('administrador.contenido.usuario.buscar')
        </div>
        <div class="w-25 d-inline-block">
            @include('inicio.link')
        </div>
    </section>

    <footer class="mt-1">
        @include('inicio.footer')
    </footer>
    
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/js/mdb.min.js"></script>
</body>
</html>