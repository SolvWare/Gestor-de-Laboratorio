@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active">Inicio</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="" >
    <div class="text-center primary-color-dark p-1">
        <h4>
            @foreach (Auth::user()->roles as $role)
                Bienvenido {{$role->name}}
            @endforeach
        </h4>
    </div>
    <div class="">
        <div class="card">
            <div class="text-center p-4">
                <a><i class="fas fa-user-tie fa-7x text-dark"></i></a>
            </div>
            <div class="text-dark p-5">
                <p>
                    Bienbenido a la plataforma de control de laboratorio.
                </p>
                @foreach (Auth::user()->roles as $role)
                    @if ($role->name == 'Administrador')
                        <p>
                            Bienbenido  Administrador tienes control total de la plataforma. 
                            <ul>
                                <li>Importar Usuarios, Roles, Materias</li>
                                <li>Registrar Usuarios, Roles, Materias</li>
                                <li>Buscar Usuarios, Roles, Materias</li>
                                <li>Editar Usuarios, Roles, Materias</li>
                                <li>Deshabilitar Usuarios, Roles, Materias</li>
                            </ul>    
                        </p>
                    @else
                        @if ($role->name == 'Docente')
                            <p>
                                Bienbenido  Docente tienes control de la siguientes funciones en la plataforma. 
                                <ul>
                                    <li>Ver las materia en la que esta asignado(a)</li>
                                    <li>Ver los horarios de sus materias</li>
                                    <li>Ver los alumnos de cada una de sus materias</li>
                                    <li>Cuenta con un portafolio para compartir documentacion con sus estudiantes</li>
                                </ul>    
                            </p>
                        @else
                            @if ($role->name == 'Auxiliar')
                                <p>
                                    Bienbenido  Auxiliar tienes control de la siguientes funciones en la plataforma. 
                                    <ul>
                                        <li>Ver las materia en la que esta asignado(a)</li>
                                        <li>Ver los horarios de sus materias</li>
                                        <li>Ver los alumnos de cada una de sus materias</li>
                                        <li>Ver los reportes realizados</li>
                                    </ul>    
                                </p>
                            @else
                                @if ($role->name == 'Estudiante')
                                    <p>
                                        Bienbenido  Estudiante tienes control de la siguientes funciones en la plataforma. 
                                        <ul>
                                            <li>Ver las materia en la que esta inscrito</li>
                                            <li>Ver los horarios de sus materias</li>
                                            <li>Ver los reportes realizados de sus sesiones</li>
                                            <li>Cuenta con un portafolio para compartir documentacion con sus docente</li>
                                        </ul>    
                                    </p>
                                @else
                                    <p>
                                        Esta plataforma se la realizo para llevar un control al avance de los estudiantes
                                        y de esta manera poder ayudarlos y orientarlos en las dificultades que tengan.
                                    </p>
                                @endif
                            @endif
                        @endif
                    @endif 
                @endforeach
            </div>
            <div class=" text-dark panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
