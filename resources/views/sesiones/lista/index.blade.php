@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Lista de Sesines</li>
        </ol>
    </nav>
@endsection

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Lista de Sesiones
        </h5>
        <div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
            <div class="w-100">
                @include('opcion.confirmacion')
                <div class="d-flex justify-content-center pt-2">
                    <div class="w-50">
                        <div class=" pb-2 pt-2">
                            <form class="form-inline ">
                                <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" id="Search1" aria-label="Search">
                                <i class="fas fa-search text-dark" aria-hidden="true"></i>
                            </form>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered mt-3">
                    <thead class="thead-light">
                        <tr>
                            <th><strong>Usuario</strong></th>
                            <th><strong>Dia - Periodo</strong></th>
                            <th><strong>Materias</strong></th>
                            <th><strong>Entrada</strong></th>
                            <th><strong>Salida</strong></th>
                            <th><strong>Maquina</strong></th>
                            <th><strong>Observacion</strong></th>
                            <th><strong>Guardar</strong></th>
                        </tr>
                    </thead>
                    <tbody id="tabla1">
                        @foreach ($inscripciones as $inscripcione)
                            <tr>
                                <form action="{{ route('sesiones.store') }}" method="POST" class="text-center" style="color: #757575;">
                                {{ csrf_field() }}
                                    <td>
                                        <label>{{$inscripcione->user->name}} {{$inscripcione->user->lastU}}</label>
                                    </td>
                                    <td>
                                        <label>{{$inscripcione->horario->diaH}} {{$inscripcione->horario->periodoH}}</label>
                                    </td>
                                    <td>
                                        <select class="custom-select" id="inscripcione_id" name="inscripcione_id">
                                            <option value="{{$inscripcione->id}}">{{$inscripcione->horario->materia->nameM}}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label></label>
                                        <div class="md-form">
                                            <input class="form-control form-control-sm" type="time" placeholder="Hora de Inicio" id="inicio" name="inicio">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="md-form">
                                            <input class="form-control form-control-sm" type="time" placeholder="Hora de Fin" id="fin" name="fin">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="md-form">
                                            <input class="form-control form-control-sm" type="number" placeholder="Maquina" id="maquina" name="maquina">
                                        </div>
                                    </td>
                                    <td>
                                        <select class="mdb-select md-form" id="observacion" name="observacion">
                                            <option value="Bien">Bien</option>
                                            <option value="Regular">Regular</option>
                                            <option value="Mal">Mal</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="" type="submit"  data-toggle="modal">Registrar</button>
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


<script>
    // SCRIPT SEARCH
    $(document).ready(function(){
        $("#Search1").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#tabla1 tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
        });
    });
</script>

@endsection