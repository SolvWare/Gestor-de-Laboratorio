@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Perfil de Sesion</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Perfil de Sesion
        </h5>
        <div class="d-flex justify-content-center p-2">
        <div class="w-75">
            <table class="table table-bordered mt-3">
                    <thead class="">
                        <tr>
                            <th><strong>Codigo</strong></th>
                            <td>{{$sesione->id}}</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <th><strong>Usuario</strong></th>
                            <td>{{$sesione->inscripcione->user->name}} {{$sesione->inscripcione->user->lastU}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Materia</strong></th>
                            <td>{{$sesione->inscripcione->horario->materia->nameM}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Hora de Clase</strong></th>
                            <td>{{$sesione->inscripcione->horario->diaH}} {{$sesione->inscripcione->horario->periodoH}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Laboratorio</strong></th>
                            <td>{{$sesione->inscripcione->horario->laboratorio->nameL}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Hora de Entrada</strong></th>
                            <td>{{$sesione->inicio}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Hora de Salida</strong></th>
                            <td>{{$sesione->fin}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Maquina Usada</strong></th>
                            <td>{{$sesione->maquina}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Observacion</strong></th>
                            <td>{{$sesione->observacion}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Producto</strong></th>
                            <td><a href="{{$sesione->producto->file}}">{{$sesione->producto->name}}</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection