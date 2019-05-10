@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Perfil de Producto</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Perfil de Producto
        </h5>
        <div class="d-flex justify-content-center p-2">
        <div class="w-75">
            <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th><strong>Codigo</strong></th>
                            <td>{{$producto->id}}</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><strong>Nombre</strong></th>
                            <td>{{$producto->name}}</td>
                        </tr>
                        <tr>
                            <th><strong>Descripcion</strong></th>
                            <td>{{$producto->descripcion}}</td>
                        </tr>
                        <tr>
                            <th><strong>Producto</strong></th>
                            <td>
                                <a href="{{$producto->file}}"> Ver Documento</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection