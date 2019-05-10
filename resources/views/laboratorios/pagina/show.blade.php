@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Perfil de Laboratorio</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Perfil de Laboratorio
        </h5>
        <div class="d-flex justify-content-center p-2">
        <div class="w-75">
            <table class="table table-bordered mt-3">
                    <thead class="">
                        <tr>
                            <th><strong>Codigo</strong></th>
                            <td>{{$laboratorio->id}}</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><strong>Nombre</strong></th>
                            <td>{{$laboratorio->nameL}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Capacidad</strong></th>
                            <td>{{$laboratorio->capL}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Estado</strong></th>
                            <td>{{$laboratorio->estado}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection