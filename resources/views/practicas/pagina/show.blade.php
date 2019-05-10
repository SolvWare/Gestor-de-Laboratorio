@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Perfil de Practica</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Perfil de Practica
        </h5>
        <div class="d-flex justify-content-center p-2">
        <div class="w-75">
            <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th><strong>Codigo</strong></th>
                            <td>{{$practica->id}}</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><strong>Nombre</strong></th>
                            <td>{{$practica->name}}</td>
                        </tr>
                        <tr>
                            <th><strong>Descripcion</strong></th>
                            <td>{{$practica->descripcion}}</td>
                        </tr>
                        <tr>
                            <th><strong>Producto</strong></th>
                            <td>
                                <a href="{{$practica->file}}"> Ver Documento</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection