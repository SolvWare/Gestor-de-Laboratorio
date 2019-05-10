@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/">Inicio</a></li>
            <li class="breadcrumb-item active">Materia</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Lista de Materias de la Carrera
        </h5>
        <div class="d-flex justify-content-center p-2">
            <div class="w-100">
                <table class="table table-sm table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th><strong>Nombre de Materia</strong></th>
                            <th><strong>Grupo</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materias as $materia)
                            <tr>
                                @if ($materia->estado == 'Habilitado')
                                    <td>{{$materia->nameM}}</td>
                                    <td>{{$materia->grupo}}</td>
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