@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Crear Rol</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Registrar Rol
        </h5>
        <div class="d-flex justify-content-center p-2">
            <div class="w-75">
                @include('opcion.error')
                <form action="{{ route('roles.store') }}" method="POST" class="text-center" style="color: #757575;">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col">
                            <div class="md-form mb-1">
                                <input type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="name" value="{{ old('name') }}" required autofocus>
                                <label for="materialRegisterFormName">Nombre</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form mb-1">
                                <input maxlength="30" type="text" id="materialRegisterFormSlug" class="form-control" aria-describedby="materialRegisterFormSlugHelpBlock" name="slug" value="{{ old('slug') }}" required>
                                <label for="materialRegisterFormSlug">URL amigable</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="md-form mb-1">
                                <input type="text" id="materialRegisterFormNDescripción" class="form-control" aria-describedby="materialRegisterFormNDescripciónHelpBlock" name="description" value="{{ old('description') }}" required autofocus>
                                <label for="materialRegisterFormNDescripción">Descripción</label>
                            </div>
                        </div>
                        <div class="col p-2 ml-5">
                            <div class="custom-control custom-checkbox d-flex flex-row">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" name='special' value="all-access">
                                <label class="custom-control-label" for="customCheck1">Acceso total</label>
                            </div>
                            <div class="custom-control custom-checkbox d-flex flex-row">
                                <input type="checkbox" class="custom-control-input" id="customCheck2" name='special' value="no-access">
                                <label class="custom-control-label" for="customCheck2">Ningún acceso</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="w-50 form-row">
                            <label class="mdb-main-label">Escoger Pribilegios</label>
                            <select class="custom-select" id="permissions[]" name="permissions[]" multiple style="height: 200px">
                                @foreach ($permissions as $permission)
                                    <option value="{{$permission->id}}">{{$permission->name}}</option>
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