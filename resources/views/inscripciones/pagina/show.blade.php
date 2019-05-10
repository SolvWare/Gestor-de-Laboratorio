@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Perfil de Inscripcion</li>
        </ol>
    </nav>
@endsection


@section('content')
<div class="" >
    <div class="">
        <div class="card">
            <h5 class="card-header text-center primary-color-dark p-2">
            Perfil de Inscripcion
            </h5>
            <div class="d-flex justify-content-center p-2">
            <div class="w-75">
                <table class="table table-bordered mt-3">
                        <thead class="">
                            <tr>
                                <th><strong>Codigo</strong></th>
                                <th>{{$inscripcione->id}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <th><strong>Usuario</strong></th>
                                <th>{{$inscripcione->user->name}}</th>
                            </tr>
                            <tr class="">
                                <th><strong>Horario</strong></th>
                                <th>{{$inscripcione->horario->diaH}} {{$inscripcione->horario->periodoH}}</th>
                            </tr>
                            <tr class="">
                                <th><strong>Materia</strong></th>
                                <th>{{$inscripcione->horario->materia->nameM}}</th>
                            </tr>
                            <tr class="">
                                <th><strong>Laboratorio</strong></th>
                                <th>{{$inscripcione->horario->laboratorio->nameL}}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection