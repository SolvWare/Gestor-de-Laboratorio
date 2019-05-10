@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Lista de Materias a Inscribir</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Materias de Usuario
        </h5>
        <div class="d-flex justify-content-center p-2">
            <div class="w-100">
                @include('opcion.confirmacion')
                <table class="table table-bordered mt-3">
                    <thead class="">
                        <tr>
                            <th><strong>Usuario</strong></th>
                            <th><strong>Materias</strong></th>
                            <th><strong>Horario</strong></th>
                            <th><strong>Inscribir</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        solucion = 'true';
                        @foreach ($user->materias as $materia)
                            <tr>
                                <form action="{{ route('inscripciones.store') }}" method="POST" class="text-center" style="color: #757575;">
                                {{ csrf_field() }}
                                    <td>
                                        <select class="custom-select" id="user_id" name="user_id">
                                            <option value="{{$user->id}}">{{$user->name}} {{$user->lastU}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="custom-select" id="materia" name="materia">
                                            <option value="{{$materia->nameM}}">{{$materia->nameM}} - {{$materia->grupo}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="custom-select" id="horario_id" name="horario_id">
                                        @foreach ($materia->horarios as $horario)
                                            <option value="{{$horario->id}}">{{$horario->diaH}} - {{$horario->periodoH}} - {{$horario->laboratorio->nameL}}</option>
                                        @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection