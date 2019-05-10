@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Editar Materia</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Editar Materia
        </h5>
        <div class="d-flex justify-content-center p-2">
        <div class="w-75">
            @include('opcion.error')
            <form action="{{ route('materias.update', $materia->id) }}" method="POST" class="text-center" style="color: #757575;">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                <div class="form-row">
                    <div class="col">
                        <div class="md-form mb-1">
                            <label for="materialRegisterFormName">Nombre de Materia</label>
                            <input maxlength="60" type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name='nameM' value="{{$materia->nameM}}" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form mb-1">
                            <input type="number" id="materialRegisterFormGrupo" class="form-control" aria-describedby="materialRegisterFormGrupoHelpBlock" name='grupo' value="{{$materia->grupo}}" required>
                            <label for="materialRegisterFormGrupo">Numero de Grupo</label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection