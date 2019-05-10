@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Lista de Sesines</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Lista de Sesiones
        </h5>
        <div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
            <div class="w-100">
                <div class="pl-2 pr-2">
                    @include('opcion.confirmacion')
                    <table class="table table-sm table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th><strong>Nombre</strong></th>
                                <th><strong>Dia</strong></th>
                                <th><strong>Periodo</strong></th>
                                <th><strong>Laboratorio</strong></th>
                                <th><strong>Materia</strong></th>
                                <th><strong>Sesiones</strong></th>
                                @can('sesiones.show')
                                    <th><strong>Ver</strong></th>
                                @endcan
                                @can('sesiones.edit')
                                    <th><strong>Editar</strong></th>
                                @endcan
                                @can('sesiones.destroy')
                                    <th><strong>Eliminar</strong></th>
                                @endcan
                                @can('addproductos.show')
                                    <th><strong>Producto</strong></th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody id="tabla1">
                            @foreach ($user->roles as $role)
                                @if ($role->name == 'Estudiante')
                                    @foreach ($user->inscripciones as $inscripcione)
                                        @foreach ($inscripcione->sesiones as $sesione)
                                            <tr class="">
                                            <td class="pl-2">{{$sesione->inscripcione->user->name}} {{$sesione->inscripcione->user->lastU}}</td>
                                            <td>{{$sesione->inscripcione->horario->diaH}}</td>
                                            <td>{{$sesione->inscripcione->horario->periodoH}}</td>
                                            <td>{{$sesione->inscripcione->horario->laboratorio->nameL}}</td>
                                            <td>{{$sesione->inscripcione->horario->materia->nameM}}</td>
                                            <td>{{$sesione->created_at}}</td>
                                            @can('sesiones.show')
                                                <td class="text-center">
                                                    <form action="{{ route('sesiones.show', $sesione->id) }}" method="GET">
                                                        <button class=""><i class="fas fa-eye fa-lg"></i></button>
                                                    </form>
                                                </td>
                                            @endcan
                                            @can('sesiones.edit')
                                                <td class="text-center">
                                                    <form action="{{ route('sesiones.edit', $sesione->id) }}" method="GET">
                                                        <button class=""><i class="fas fa-edit fa-lg"></i></button>
                                                    </form>
                                                </td>
                                            @endcan
                                            @can('sesiones.destroy')
                                                <td class="text-center">
                                                    <form action="{{ route('sesiones.destroy', $sesione->id) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class=""><i class="fas fa-check-square fa-lg"></i></button>
                                                    </form>
                                                </td>
                                            @endcan
                                            @can('addproductos.show')
                                                <td class="text-center">
                                                    <form action="{{ route('addproductos.show', $sesione->id) }}" method="GET">
                                                        <button class="">Añadir Producto</button>
                                                    </form>
                                                </td>
                                            @endcan
                                        </tr>
                                        @endforeach
                                    @endforeach
                                @else
                                    @foreach ($user->materias as $materia)
                                        @foreach ($materia->users as $user)
                                            @foreach ($user->inscripciones as $inscripcione)
                                                @foreach ($inscripcione->sesiones as $sesione)
                                                    <tr>
                                                        <td>{{$user->name}} {{$user->lastU}}</td>
                                                        <td>{{$inscripcione->horario->diaH}}</td>
                                                        <td>{{$inscripcione->horario->periodoH}}</td>
                                                        <td>{{$inscripcione->horario->laboratorio->nameL}}</td>
                                                        <td>{{$inscripcione->horario->materia->nameM}} - {{$inscripcione->horario->materia->grupo}}</td>
                                                        <td>{{$sesione->created_at}}</td>
                                                        @can('sesiones.show')
                                                            <td class="text-center">
                                                                <form action="{{ route('sesiones.show', $sesione->id) }}" method="GET">
                                                                    <button class=""><i class="fas fa-eye fa-lg"></i></button>
                                                                </form>
                                                            </td>
                                                        @endcan
                                                        @can('sesiones.edit')
                                                            <td class="text-center">
                                                                <form action="{{ route('sesiones.edit', $sesione->id) }}" method="GET">
                                                                    <button class=""><i class="fas fa-edit fa-lg"></i></button>
                                                                </form>
                                                            </td>
                                                        @endcan
                                                        @can('sesiones.destroy')
                                                            <td class="text-center">
                                                                <form action="{{ route('sesiones.destroy', $sesione->id) }}" method="POST">
                                                                    {{ csrf_field() }}
                                                                    <input type="hidden" name="_method" value="DELETE">
                                                                    <button class=""><i class="fas fa-check-square fa-lg"></i></button>
                                                                </form>
                                                            </td>
                                                        @endcan
                                                        @can('addproductos.show')
                                                            <td class="text-center">
                                                                <form action="{{ route('addproductos.show', $sesione->id) }}" method="GET">
                                                                    <button class="">Añadir Producto</button>
                                                                </form>
                                                            </td>
                                                        @endcan
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection