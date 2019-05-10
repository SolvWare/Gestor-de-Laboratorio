@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Crear Materia</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
            Registrar de Materia
        </h5>
        <div class="d-flex justify-content-center p-2">
            <div class="w-75">
                @include('opcion.error')
                <form action="{{ route('materias.store') }}" method="POST" class="text-center" style="color: #757575;">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col">
                            <div class="md-form mb-1">
                                <input maxlength="60" type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name='nameM' value="{{ old('nameM') }}" required>
                                <label for="materialRegisterFormName">Nombre de la Materia</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form mb-1">
                                <input type="number" id="materialRegisterFormGrupo" class="form-control" aria-describedby="materialRegisterFormGrupoHelpBlock" name='grupo' value="{{ old('grupo') }}" required>
                                <label for="materialRegisterFormGrupo">Numero de Grupo</label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection