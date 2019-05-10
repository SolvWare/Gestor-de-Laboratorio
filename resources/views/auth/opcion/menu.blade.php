<div class="z-depth-1">
    <div>
        <div id="accordion" role="tablist">
            @can('roles.index')
                <div class="">
                    <div class="card-header" role="tab" id="headingUno">
                        <h6 class="mb-0">
                            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseUno" aria-expanded="true" aria-controls="collapseUno">
                                <strong>Administrar Roles</strong>
                            </a>
                        </h6>
                    </div>
                    
                    <div id="collapseUno" class="collapse" role="tabpanel" aria-labelledby="headingUno">
                        <ul class="list-group">
                            @can('roles.create')
                                <li class="list-group-item">
                                    <a class="text-dark" href="{{ route('roles.create') }}">Registrar</a>
                                </li>
                            @endcan
                            @can('roles.index')
                                <li class="list-group-item">
                                    <a class="text-dark" href="{{ route('roles.index') }}">Listar Editar Deshabilitar</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            @endcan
            @can('materias.index')
                <div class="">
                    <div class="card-header" role="tab" id="headingDos">
                        <h6 class="mb-0">
                            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseDos" aria-expanded="false" aria-controls="collapseDos">
                                <strong>Administrar Materias</strong>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseDos" class="collapse" role="tabpanel" aria-labelledby="headingDos">
                        <ul class="list-group">
                            @can('materias.create')
                                <li class="list-group-item">
                                    <a class="text-dark" href="{{ route('materias.create') }}">Registrar</a>
                                </li>
                            @endcan
                            @can('materias.index')
                                <li class="list-group-item">
                                    <a class="text-dark" href="{{ route('materias.index') }}">Listar Editar Deshabilitar</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            @endcan
            @can('laboratorios.index')
                <div class="">
                    <div class="card-header" role="tab" id="headingTres">
                        <h6 class="mb-0">
                            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseTres" aria-expanded="true" aria-controls="collapseTres">
                                <strong>Administrar Laboratorios</strong>
                            </a>
                        </h6>
                    </div>
                    
                    <div id="collapseTres" class="collapse" role="tabpanel" aria-labelledby="headingTres">
                        <ul class="list-group">
                            @can('laboratorios.create')
                                <li class="list-group-item">
                                    <a class="text-dark" href="{{ route('laboratorios.create') }}">Registrar</a>
                                </li>
                            @endcan
                            @can('laboratorios.index')
                                <li class="list-group-item">
                                    <a class="text-dark" href="{{ route('laboratorios.index') }}">Listar Editar Deshabilitar</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            @endcan
            @can('horarios.index')
                <div class="">
                    <div class="card-header" role="tab" id="headingCuatro">
                        <h6 class="mb-0">
                            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseCuatro" aria-expanded="true" aria-controls="collapseCuatro">
                                <strong>Administrar Horarios</strong>
                            </a>
                        </h6>
                    </div>
                    
                    <div id="collapseCuatro" class="collapse" role="tabpanel" aria-labelledby="headingCuatro">
                        <ul class="list-group">
                            @can('horarios.create')
                                <li class="list-group-item">
                                    <a class="text-dark" href="{{ route('horarios.create') }}">Registrar</a>
                                </li>
                            @endcan
                            @can('horarios.index')
                                <li class="list-group-item">
                                    <a class="text-dark" href="{{ route('horarios.index') }}">Listar Editar Deshabilitar</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            @endcan
            @can('users.index')
                <div class="">
                    <div class="card-header" role="tab" id="headingCinco">
                        <h6 class="mb-0">
                            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseCinco" aria-expanded="false" aria-controls="collapseCinco">
                                <strong>Administrar Usuarios</strong>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseCinco" class="collapse" role="tabpanel" aria-labelledby="headingCinco">
                        <ul class="list-group">
                            @can('users.index')
                                <li class="list-group-item">
                                    <a class="text-dark" class="text-dark" href="/importUsr">Importar</a>
                                </li>
                            @endcan
                            @can('users.create')
                                <li class="list-group-item">
                                    <a class="text-dark" class="text-dark" href="{{ route('users.create') }}">Registrar</a>
                                </li>
                            @endcan
                            @can('users.index')
                                <li class="list-group-item">
                                    <a class="text-dark" class="text-dark" href="{{ route('users.index') }}">Lista y Buscqueda</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            @endcan
            @can('inscripciones.index')
                <div class="">
                    <div class="card-header" role="tab" id="headingSeis">
                        <h6 class="mb-0">
                            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseSeis" aria-expanded="false" aria-controls="collapseSeis">
                                <strong>Administrar Inscripcion</strong>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseSeis" class="collapse" role="tabpanel" aria-labelledby="headingSeis">
                        <ul class="list-group">
                            @can('inscripciones.index')
                                <li class="list-group-item">
                                    <a class="text-dark" class="text-dark" href="{{ route('inscripciones.index') }}">Listar Editar Deshabilitar</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            @endcan
            @can('addsesiones.index')
                <div class="">
                    <div class="card-header" role="tab" id="headingSiete">
                        <h6 class="mb-0">
                            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseSiete" aria-expanded="false" aria-controls="collapseSiete">
                                <strong>Administrar Sesiones</strong>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseSiete" class="collapse" role="tabpanel" aria-labelledby="headingSiete">
                        <ul class="list-group">
                            @can('addsesiones.index')
                                <li class="list-group-item">
                                    <a class="text-dark" class="text-dark" href="{{ route('addsesiones.index') }}">Registrar Sesiones</a>
                                </li>
                            @endcan
                            @can('sesiones.index')
                                <li class="list-group-item">
                                    <a class="text-dark" class="text-dark" href="{{ route('sesiones.index') }}">Listar Editar Deshabilitar</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            @endcan
            @can('productos.index')
                <div class="">
                    <div class="card-header" role="tab" id="headingOcho">
                        <h6 class="mb-0">
                            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseOcho" aria-expanded="false" aria-controls="collapseOcho">
                                <strong>Administrar Productos</strong>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseOcho" class="collapse" role="tabpanel" aria-labelledby="headingOcho">
                        <ul class="list-group">
                            @can('productos.index')
                                <li class="list-group-item">
                                    <a class="text-dark" class="text-dark" href="{{ route('productos.index') }}">Listar Editar Deshabilitar</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            @endcan
            @can('practicas.index')
                <div class="">
                    <div class="card-header" role="tab" id="headingNueve">
                        <h6 class="mb-0">
                            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseNueve" aria-expanded="false" aria-controls="collapseNueve">
                                <strong>Administrar Practicas</strong>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseNueve" class="collapse" role="tabpanel" aria-labelledby="headingNueve">
                        <ul class="list-group">
                            @can('practicas.index')
                                <li class="list-group-item">
                                    <a class="text-dark" class="text-dark" href="{{ route('practicas.index') }}">Listar Editar Deshabilitar</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            @endcan
            @can('mismaterias.index')
                <div class="">
                    <div class="card-header" role="tab" id="headingOnce">
                        <h6 class="mb-0">
                            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseOnce" aria-expanded="false" aria-controls="collapseOnce">
                                <strong>Mis Materias</strong>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseOnce" class="collapse" role="tabpanel" aria-labelledby="headingOnce">
                        <ul class="list-group">
                            @can('mismaterias.index')
                                <li class="list-group-item">
                                    <a class="text-dark" class="text-dark" href="{{ route('mismaterias.index') }}">Lista</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            @endcan
            @can('mishorarios.index')
                <div class="">
                    <div class="card-header" role="tab" id="headingDoce">
                        <h6 class="mb-0">
                            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseDoce" aria-expanded="false" aria-controls="collapseDoce">
                                <strong>Mis Horarios</strong>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseDoce" class="collapse" role="tabpanel" aria-labelledby="headingDoce">
                        <ul class="list-group">
                            @can('mishorarios.index')
                                <li class="list-group-item">
                                    <a class="text-dark" class="text-dark" href="{{ route('mishorarios.index') }}">Lista</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            @endcan
            @can('misinscripciones.index')
                <div class="">
                    <div class="card-header" role="tab" id="headingTrece">
                        <h6 class="mb-0">
                            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseTrece" aria-expanded="false" aria-controls="collapseTrece">
                                <strong>Mis Inscripciones</strong>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseTrece" class="collapse" role="tabpanel" aria-labelledby="headingTrece">
                        <ul class="list-group">
                            @can('misinscripciones.index')
                                <li class="list-group-item">
                                    <a class="text-dark" class="text-dark" href="{{ route('misinscripciones.index') }}">Lista</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            @endcan
            @can('missesiones.index')
                <div class="">
                    <div class="card-header" role="tab" id="headingCatorce">
                        <h6 class="mb-0">
                            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseCatorce" aria-expanded="false" aria-controls="collapseCatorce">
                                <strong>Mis Sesiones</strong>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseCatorce" class="collapse" role="tabpanel" aria-labelledby="headingCatorce">
                        <ul class="list-group">
                            @can('missesiones.index')
                                <li class="list-group-item">
                                    <a class="text-dark" class="text-dark" href="{{ route('missesiones.index') }}">Lista</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            @endcan
            @can('misestudiantes.index')
                <div class="">
                    <div class="card-header" role="tab" id="headingQuince">
                        <h6 class="mb-0">
                            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseQuince" aria-expanded="false" aria-controls="collapseQuince">
                                <strong>Mis Estudiantes</strong>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseQuince" class="collapse" role="tabpanel" aria-labelledby="headingQuince">
                        <ul class="list-group">
                            @can('misestudiantes.index')
                                <li class="list-group-item">
                                    <a class="text-dark" class="text-dark" href="{{ route('misestudiantes.index') }}">Lista</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            @endcan
            @can('misproductos.index')
                <div class="">
                    <div class="card-header" role="tab" id="headingDieciseis">
                        <h6 class="mb-0">
                            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseDieciseis" aria-expanded="false" aria-controls="collapseDieciseis">
                                <strong>Mis Productos</strong>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseDieciseis" class="collapse" role="tabpanel" aria-labelledby="headingDieciseis">
                        <ul class="list-group">
                            @can('misproductos.index')
                                <li class="list-group-item">
                                    <a class="text-dark" class="text-dark" href="{{ route('misproductos.index') }}">Lista</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            @endcan
            @can('mispracticas.index')
                <div class="">
                    <div class="card-header" role="tab" id="headingDiecisiete">
                        <h6 class="mb-0">
                            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseDiecisiete" aria-expanded="false" aria-controls="collapseDiecisiete">
                                <strong>Mis Practicas</strong>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseDiecisiete" class="collapse" role="tabpanel" aria-labelledby="headingDiecisiete">
                        <ul class="list-group">
                            @can('addpracticas.show')
                                <li class="list-group-item">
                                    <a class="text-dark" href="{{ route('addpracticas.show', Auth::user()->id) }}">Registrar</a>
                                </li>
                            @endcan
                            @can('mispracticas.index')
                                <li class="list-group-item">
                                    <a class="text-dark" class="text-dark" href="{{ route('mispracticas.index') }}">Lista</a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            @endcan
        </div>
    </div>
</div>