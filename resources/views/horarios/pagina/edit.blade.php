@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Editar Horario</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Editar Horario
        </h5>
        <div class="d-flex justify-content-center p-2">
            <div class="w-75">
                @include('opcion.error')
                <form action="{{ route('horarios.update', $horario->id) }}" method="POST" class="text-center" style="color: #757575;">
                    {{ csrf_field() }}
                    {{ @method_field('PUT') }}
                    <div class="form-row">
                        <div class="col">
                            <div class="">
                                <label for="formGroupExampleInput">Escoger Dia</label>
                                <select class="custom-select" id="diaH" name="diaH">
                                    <option value="{{$horario->diaH}}">{{$horario->diaH}}</option>
                                    <option value="Lunes">Lunes</option>
                                    <option value="Martes">Martes</option>
                                    <option value="Miercoles">Miercoles</option>
                                    <option value="Jueves">Jueves</option>
                                    <option value="Viernes">Viernes</option>
                                    <option value="Sabado">Sabado</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="">
                                <label for="formGroupExampleInput">Hora Inicio</label>
                                <select class="custom-select" id="periodoH" name="periodoH">
                                    <option value="{{$horario->periodoH}}">{{$horario->periodoH}}</option>
                                    <option value="06:45 - 08:15">06:45 - 08:15</option>
                                    <option value="08:15 - 09:45">08:15 - 09:45</option>
                                    <option value="09:45 - 11:15">09:45 - 11:15</option>
                                    <option value="11:15 - 12:45">11:15 - 12:45</option>
                                    <option value="12:45 - 14:15">12:45 - 14:15</option>
                                    <option value="14:15 - 15:45">14:15 - 15:45</option>
                                    <option value="15:45 - 17:15">15:45 - 17:15</option>
                                    <option value="17:15 - 18:45">17:15 - 18:45</option>
                                    <option value="18:45 - 20:15">18:45 - 20:15</option>
                                    <option value="20:15 - 21:45">20:15 - 21:45</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row pt-3">
                        <div class="col">
                            <label for="laboratorio_id">Laboratorio</label>
                            <select class="custom-select" id="laboratorio_id]" name="laboratorio_id">
                                    <option value="{{$horario->laboratorio->id}}">{{$horario->laboratorio->nameL}}</option>
                                @foreach ($laboratorios as $laboratorio)
                                    <option value="{{$laboratorio->id}}">{{$laboratorio->nameL}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="materia_id">Materia</label>
                            <select class="custom-select" id="materia_id" name="materia_id">
                                    <option value="{{$horario->materia->id}}">{{$horario->materia->nameM}}</option>
                                @foreach ($materias as $materia)
                                    <option value="{{$materia->id}}">{{$materia->nameM}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection