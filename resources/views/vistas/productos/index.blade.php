@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Lista de Productos</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="" >
        <div class="">
            <div class="card">
                <h5 class="card-header text-center primary-color-dark p-2">
                Lista de Productos
                </h5>
                <div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
                    <div class="w-100">
                        <div class="pl-2 pr-2">
                            @include('opcion.confirmacion')
                            <table class="table table-sm table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th><strong>Usuario</strong></th>
                                        <th><strong>Nombre de Producto</strong></th>
                                        @can('productos.show')
                                        <th class="text-center"><strong>Ver</strong></th>
                                        @endcan
                                        @can('productos.edit')
                                        <th class="text-center"><strong>Editar</strong></th>
                                        @endcan
                                        @can('productos.destroy')
                                        <th class="text-center"><strong>Deshabilitar</strong></th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user->inscripciones as $inscripcione)
                                        @foreach ($inscripcione->sesiones as $sesione)
                                            <tr class="">
                                                <td class="pl-2">{{$user->name}}</td>
                                                <td >{{$sesione->producto->name}}</td>
                                                @can('productos.show')
                                                    <td class="text-center">
                                                        <form action="{{ route('productos.show', $sesione->producto->id) }}" method="GET">
                                                            <button class=""><i class="fas fa-eye fa-lg"></i></button>
                                                        </form>
                                                    </td>
                                                @endcan
                                                @can('productos.edit')
                                                    <td class="text-center">
                                                        <form action="{{ route('productos.edit',$sesione->producto->id) }}" method="GET">
                                                            <button class=""><i class="fas fa-edit fa-lg"></i></button>
                                                        </form>
                                                    </td>
                                                @endcan
                                                @can('productos.destroy')
                                                    <td class="text-center">
                                                        <form action="{{ route('productos.destroy', $sesione->producto->id) }}" method="POST">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button class=""><i class="fas fa-check-square fa-lg"></i></button>
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