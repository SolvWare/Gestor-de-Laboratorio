@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Editar Producto</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Editar Producto
        </h5>
        <div class="d-flex justify-content-center p-2">
        <div class="w-75">
            @include('opcion.error')
            @include('opcion.confirmacion')
            <form action="{{ route('productos.update', $producto->id) }}" method="POST" class="text-center" style="color: #757575;">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                <div class="form-row">
                    <div class="col">
                        <div class="md-form mb-1">
                            <input type="number" readonly="readonly" id="materialRegisterFormSesiones" class="form-control" aria-describedby="materialRegisterFormSesioneHelpBlock" name='sesione_id' value="{{$producto->sesione_id}}" required>
                            <label for="materialRegisterFormSesiones">Id Sesion</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form mb-1">
                            <input maxlength="60" type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name='name' value="{{$producto->name}}" required>
                            <label for="materialRegisterFormName">Nombre del Producto</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="md-form mb-1">
                            <input maxlength="100" type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormDescripcionHelpBlock" name='descripcion' value="{{$producto->descripcion}}" required>
                            <label for="materialRegisterFormName">Descripcion</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="file">Imagen</label>
                        <input name="file" type="file" id="file">
                    </div>
                </div>
                <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection