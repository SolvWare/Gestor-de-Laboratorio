<header>
    <nav class="navbar navbar-expand-lg navbar-dark primary-color-dark">
        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d1/UMSS.png" width="35" height="35" class="img-fluid" alt="Responsive image">
        <a class="navbar-brand" href="/"><h2><strong>Sesiones de Laboratorios</strong></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @if (Auth::guest())
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
                @endif
            </ul>
            <div class="mr-5">
                <ul class="nav navbar-nav navbar-right mr-5 text-white">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a class='text-white' href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} {{ Auth::user()->lastU }}<span class="caret"></span>
                                </a>
        
                                <ul class="dropdown-menu p-0 m-0" role="menu">
                                    <li class="p-0 m-0">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
            </div>
        </div>
    </nav>
</header>