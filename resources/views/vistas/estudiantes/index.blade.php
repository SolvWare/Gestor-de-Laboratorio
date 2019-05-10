@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Lista de Estudiantes</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Listado de Usuarios
        </h5>
        <div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
            <div class="w-100">
                <div class="pl-2 pr-2">
                    @include('opcion.confirmacion')
                    <table class="table table-sm table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th><strong>Nombre</strong></th>
                                @can('users.show')
                                    <th class="text-center"><strong>Ver</strong></th>
                                @endcan
                                @can('users.edit')
                                    <th class="text-center"><strong>Editar</strong></th>
                                @endcan
                                @can('users.destroy')
                                    <th class="text-center"><strong>Deshabilitar</strong></th>
                                @endcan
                                @can('addmaterias.show')
                                    <th class="text-center"><strong>Inscribir</strong></th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody id="tabla1">
                            @foreach ($user->materias as $materia)
                                @foreach ($materia->horarios as $horario)
                                    @foreach ($horario->inscripciones as $inscripcione)
                                        <tr>
                                            <td class="pl-2">{{$inscripcione->user->name}} {{$inscripcione->user->lastU}}</td>
                                            @can('users.show')
                                                <td class="text-center">
                                                    <form action="{{ route('users.show', $inscripcione->user->id) }}" method="GET">
                                                        <button class=""><i class="fas fa-eye fa-lg"></i></button>
                                                    </form>
                                                </td>
                                            @endcan
                                            @can('users.edit')
                                                <td class="text-center">
                                                    <form action="{{ route('users.edit', $inscripcione->user->id) }}" method="GET">
                                                        <button class=""><i class="fas fa-edit fa-lg"></i></button>
                                                    </form>
                                                </td>
                                            @endcan
                                            @can('users.destroy')
                                                <td class="text-center">
                                                    <form action="{{ route('users.destroy', $inscripcione->user->id) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class=""><i class="fas fa-check-square fa-lg"></i></button>
                                                    </form>
                                                </td>
                                            @endcan
                                            @can('addmaterias.show')
                                                <td class="text-center">
                                                    @foreach ($user->roles as $role)
                                                        @if ($role->name == 'Estudiante')
                                                            <form action="{{ route('addmaterias.show', $user->id) }}" method="GET">
                                                                <button class="">Ver Materias</button>
                                                            </form>
                                                        @endif
                                                    @endforeach
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection