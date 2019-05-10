@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Lista de Practicas</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="" >
        <div class="">
            <div class="card">
                <h5 class="card-header text-center primary-color-dark p-2">
                Lista de Practicas
                </h5>
                <div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
                    <div class="w-100">
                        <div class="pl-2 pr-2">
                            @include('opcion.confirmacion')
                            <table class="table table-sm table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th><strong>Nombre</strong></th>
                                        <th><strong>Producto</strong></th>
                                        @can('practicas.show')
                                        <th class="text-center"><strong>Ver</strong></th>
                                        @endcan
                                        @can('practicas.edit')
                                        <th class="text-center"><strong>Editar</strong></th>
                                        @endcan
                                        @can('practicas.destroy')
                                        <th class="text-center"><strong>Eliminar</strong></th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        @foreach ($user->practicas as $practica)
                                        <tr class="">
                                            <td class="pl-2">
                                                {{$user->name}}
                                            </td>
                                            <td>{{$practica->name}}</td>
                                            @can('practicas.show')
                                                <td class="text-center">
                                                    <form action="{{ route('practicas.show', $practica->id) }}" method="GET">
                                                        <button class=""><i class="fas fa-eye fa-lg"></i></button>
                                                    </form>
                                                </td>
                                            @endcan
                                            @can('practicas.edit')
                                                <td class="text-center">
                                                    <form action="{{ route('practicas.edit', $practica->id) }}" method="GET">
                                                        <button class=""><i class="fas fa-edit fa-lg"></i></button>
                                                    </form>
                                                </td>
                                            @endcan
                                            @can('practicas.destroy')
                                                <td class="text-center">
                                                    <form action="{{ route('practicas.destroy', $practica->id) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
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