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
<div class="" >
        <div class="">
            <div class="card">
                <h5 class="card-header text-center primary-color-dark p-2">
                Lista de Materias
                </h5>
                <div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
                    <div class="w-100">
                        <div class="pl-2 pr-2">
                            @include('opcion.confirmacion')
                            <table class="table table-sm table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th><strong>Nombre</strong></th>
                                        <th><strong>Grupo</strong></th>
                                        <th><strong>Docente</strong></th>
                                        <th><strong>Practicas</strong></th>
                                        @can('materias.show')
                                        <th class="text-center"><strong>Ver</strong></th>
                                        @endcan
                                        @can('materias.edit')
                                        <th class="text-center"><strong>Editar</strong></th>
                                        @endcan
                                        @can('materias.destroy')
                                        <th class="text-center"><strong>Deshabilitar</strong></th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user->materias as $materia)
                                        <tr class="">
                                            <td class="pl-2">{{$materia->nameM}}</td>
                                            <td>{{$materia->grupo}}</td>
                                            <td>
                                                @foreach ($materia->users as $user)
                                                    @foreach ($user->roles as $role)
                                                        @if ($role->name == 'Docente')
                                                            {{$user->name}}
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($materia->users as $user)
                                                    @foreach ($user->roles as $role)
                                                        @if ($role->name == 'Docente')
                                                            @foreach ($user->practicas as $practica)
                                                                <li><a href="{{$practica->file}}">{{$practica->name}}</a></li>
                                                            @endforeach    
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </td>
                                            @can('materias.show')
                                                <td class="text-center">
                                                    <form action="{{ route('materias.show', $materia->id) }}" method="GET">
                                                        <button class=""><i class="fas fa-eye fa-lg"></i></button>
                                                    </form>
                                                </td>
                                            @endcan
                                            @can('materias.edit')
                                                <td class="text-center">
                                                    <form action="{{ route('materias.edit', $materia->id) }}" method="GET">
                                                        <button class=""><i class="fas fa-edit fa-lg"></i></button>
                                                    </form>
                                                </td>
                                            @endcan
                                            @can('materias.destroy')
                                                <td class="text-center">
                                                    <form action="{{ route('materias.destroy', $materia->id) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class=""><i class="fas fa-check-square fa-lg"></i></button>
                                                    </form>
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
</div>
@endsection