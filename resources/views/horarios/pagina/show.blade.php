@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Perfil de Horario</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Perfil de Horario
        </h5>
        <div class="d-flex justify-content-center p-2">
        <div class="w-75">
            <table class="table table-bordered mt-3">
                    <thead class="">
                        <tr>
                            <th><strong>Codigo</strong></th>
                            <td>{{$horario->id}}</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <th><strong>Dia</strong></th>
                            <td>{{$horario->diaH}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Periodo</strong></th>
                            <td>{{$horario->periodoH}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Laboratorio</strong></th>
                            <td>{{$horario->laboratorio->nameL}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Materia</strong></th>
                            <td>{{$horario->materia->nameM}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection