@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/">Inicio</a></li>
            <li class="breadcrumb-item active">Laboratorio</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Lista de Laboratorios Disponibles
        </h5>
        <div class="d-flex justify-content-center p-2">
            <div class="w-100">
                <table class="table table-sm table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th><strong>Nombre de Laboratorio</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laboratorios as $laboratorio)
                            <tr>
                                @if ($laboratorio->estado == 'Habilitado')
                                    <td>{{$laboratorio->nameL}}</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection