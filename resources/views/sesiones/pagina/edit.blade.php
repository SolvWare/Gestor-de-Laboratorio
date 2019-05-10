@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Editar Sesion</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Editar de Rol
        </h5>
        <div class="d-flex justify-content-center p-2">
        <div class="w-75">
            @include('opcion.error')
            <form action="{{ route('sesiones.update', $sesione->id) }}" method="POST" class="text-center" style="color: #757575;">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                <div class="form-row">
                    <div class="col">
                        <div class="md-form mb-1">
                            <input type="time" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="fin" value="{{$sesione->inicio}}" required>
                            <label for="materialRegisterFormName">URL amigable</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form mb-1">
                            <input type="time" id="materialRegisterFormSlug" class="form-control" aria-describedby="materialRegisterFormSlugHelpBlock" name="fin" value="{{$sesione->fin}}" required>
                            <label for="materialRegisterFormSlug">URL amigable</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="md-form mb-1">
                            <input type="number" id="materialRegisterFormNDescripción" class="form-control" aria-describedby="materialRegisterFormNDescripciónHelpBlock" name="maquina" value="{{$sesione->maquina}}" required autofocus>
                            <label for="materialRegisterFormNDescripción">Maquina</label>
                        </div>
                    </div>
                    <div class="col">
                        <select class="mdb-select md-form" id="observacion" name="observacion">
                            <option value="Bien">Bien</option>
                            <option value="Regular">Regular</option>
                            <option value="Mal">Mal</option>
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