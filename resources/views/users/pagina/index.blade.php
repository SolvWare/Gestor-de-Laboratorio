@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Lista de Materias</li>
        </ol>
    </nav>
@endsection

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Listado de Usuarios
        </h5>
        <div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
            <div class="w-100">
                <div class="pl-2 pr-2">
                    @include('opcion.confirmacion')
                    <div class="d-flex justify-content-center pt-2">
                        <div class="w-50">
                            <div class=" pb-2 pt-2">
                                <form class="form-inline ">
                                    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" id="Search1" aria-label="Search">
                                    <i class="fas fa-search text-dark" aria-hidden="true"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="table table-sm table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th><strong>Nombre</strong></th>
                                <th><strong>Rol</strong></th>
                                <th><strong>Materia</strong></th>
                                @can('users.show')
                                    <th class="text-center"><strong>Ver</strong></th>
                                @endcan
                                @can('users.edit')
                                    <th class="text-center"><strong>Editar</strong></th>
                                @endcan
                                @can('users.destroy')
                                    <th class="text-center"><strong>Eliminar</strong></th>
                                @endcan
                                @can('userdisables.destroy')
                                    <th class="text-center"><strong>Deshabilitar</strong></th>
                                @endcan
                                @can('addmaterias.show')
                                    <th class="text-center"><strong>Inscribir</strong></th>
                                @endcan
                                @can('addpracticas.show')
                                    <th class="text-center"><strong>Practicas</strong></th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody id="tabla1">
                            @foreach ($users as $user)
                                <tr>
                                    <td class="pl-2">{{$user->name}} {{$user->lastU}}</td>
                                    <td>
                                        @foreach ($user->roles as $role)
                                            {{$role->name}}
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($user->materias as $materia)
                                            {{$materia->nameM}} {{$materia->grupo}}
                                        @endforeach
                                    </td>
                                    @can('users.show')
                                        <td class="text-center">
                                            <form action="{{ route('users.show', $user->id) }}" method="GET">
                                                <button class=""><i class="fas fa-eye fa-lg"></i></button>
                                            </form>
                                        </td>
                                    @endcan
                                    @can('users.edit')
                                        <td class="text-center">
                                            <form action="{{ route('users.edit', $user->id) }}" method="GET">
                                                <button class=""><i class="fas fa-edit fa-lg"></i></button>
                                            </form>
                                        </td>
                                    @endcan
                                    @can('users.destroy')
                                        <td class="text-center">
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    @endcan
                                    @can('userdisables.destroy')
                                        <th class="text-center">
                                            <form action="{{ route('userdisables.destroy', $user->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">
                                                @if($user->estado == 'Habilitado')
                                                    <button type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-check-square fa-lg"></i></button>
                                                @else($user->estado == 'Deshabilitado')
                                                    <button type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-times-circle"></i></button>
                                                @endif
                                            </form>
                                        </th>
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
                                    @can('addpracticas.show')
                                        <td class="text-center">
                                            @foreach ($user->roles as $role)
                                                @if ($role->name == 'Docente')
                                                    <form action="{{ route('addpracticas.show', $user->id) }}" method="GET">
                                                        <button class="">Documentacion</button>
                                                    </form>
                                                @endif
                                            @endforeach
                                        </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // SCRIPT SEARCH
    $(document).ready(function(){
        $("#Search1").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#tabla1 tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
        });
    });
</script>
@endsection