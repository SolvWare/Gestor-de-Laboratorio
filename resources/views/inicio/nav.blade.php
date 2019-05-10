<header>
    <nav class="navbar navbar-expand-lg navbar-dark primary-color-dark">
        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d1/UMSS.png" width="35" height="35" class="img-fluid" alt="Responsive image">
        <a class="navbar-brand" href="/"><h2><strong>Sesiones de Laboratorios</strong></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/listadoD">Docentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/listadoM">Materias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/listadoL">Laboratorios</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 mr-5">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @if (Auth::check())
                            <a class='text-white' href="{{ url('/home') }}">Home</a>
                        @else
                            <a class='text-white' href="{{ url('/login') }}">Login</a>
                        @endif
                    </div>
                @endif
            </form>
        </div>
    </nav>
</header>    