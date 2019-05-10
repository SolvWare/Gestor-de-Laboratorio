@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Crear Practica</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
            Registrar de Practica
        </h5>
        <div class="d-flex justify-content-center p-2">
            <div class="w-75">
                @include('opcion.error')
                @include('opcion.confirmacion')
                <form action="{{ route('practicas.store') }}" method="POST" enctype="multipart/form-data" class="text-center" style="color: #757575;">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col">
                            <div class="md-form mb-1">
                                <input type="text" readonly="readonly" id="materialRegisterFormUser" class="form-control" aria-describedby="materialRegisterFormUserHelpBlock" name='user_id' value="{{$user->id}}" required>
                                <label for="materialRegisterFormUser">Id Sesion</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form mb-1">
                                <input maxlength="60" type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name='name' value="{{ old('name') }}" required>
                                <label for="materialRegisterFormName">Nombre del Producto</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="md-form mb-1">
                                <input maxlength="100" type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormDescripcionHelpBlock" name='descripcion' value="{{ old('descripcion') }}" required>
                                <label for="materialRegisterFormName">Descripcion</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="file">Imagen</label>
                            <input name="file" type="file" id="file" accept=".docx, .doc, .txt, .zip , .rar , .7z">
                        </div>
                    </div>
                    <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection