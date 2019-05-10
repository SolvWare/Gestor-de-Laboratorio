@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Editar Inscripcion</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
            Editar Inscripcion
        </h5>
        <div class="d-flex justify-content-center p-2">
            <div class="w-75">
                @include('opcion.error')
                <form action="{{ route('inscripciones.update', $inscripcione->id) }}" method="POST" class="text-center" style="color: #757575;">
                    {{ csrf_field() }}
                    {{ @method_field('PUT') }}
                    <div class="form-row">
                        <div class="col">
                            <div class="md-form mb-1">
                                <select class="custom-select" id="user_id" name="user_id">
                                    @foreach ($users as $user)
                                        @if ($user->id == $inscripcione->user_id)
                                            <option value="{{$user->id}}">{{$user->name}} {{$user->lastU}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <select class="custom-select" id="materia" name="materia">
                                <option value="{{$inscripcione->horario->materia->id}}">{{$inscripcione->horario->materia->nameM}}</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="custom-select" id="horario_id" name="horario_id">
                                @foreach ($inscripcione->horario->materia->horarios as $horario)
                                    <option value="{{$horario->id}}">{{$horario->diaH}} - {{$horario->periodoH}} - {{$horario->laboratorio->nameL}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection