@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Editar Laboratorio</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Editar Laboratorio
        </h5>
        <div class="d-flex justify-content-center p-2">
        <div class="w-75">
            @include('opcion.error')
            <form action="{{ route('laboratorios.update', $laboratorio->id) }}" method="POST" class="text-center" style="color: #757575;">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                <div class="form-row">
                    <div class="col">
                        <div class="md-form mb-1">
                            <input maxlength="60" type="text" id="laboratorioRegisterFormName" class="form-control" aria-describedby="laboratorioRegisterFormNameHelpBlock" name='nameL' value="{{$laboratorio->nameL}}" required autofocus>
                            <label for="laboratorioRegisterFormName">Nombre de Laboratorio</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form mb-1">
                            <input type="number" step="1" id="laboratorioRegisterFormCap" class="form-control" aria-describedby="laboratorioRegisterFormCapHelpBlock" name='capL' value="{{$laboratorio->capL}}" required>
                            <label for="laboratorioRegisterFormCap">Capacidad</label>
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