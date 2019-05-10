@extends('layouts.app')

@section('navegacion')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb p-0 m-0 pl-5">
      <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
      <li class="breadcrumb-item active" href="/home">Editar Usuario</li>
    </ol>
  </nav>
@endsection

@section('content')
<div class="">
  <div class="card">
    <h5 class="card-header text-center primary-color-dark p-2">
    Editar Usuario
    </h5>
    <div class="d-flex justify-content-center p-2">
      <div class="w-75">
          @include('opcion.error')
          <form action="{{ route('users.update', $user->id) }}" method="POST" class="text-center" style="color: #757575;">
              {{ csrf_field() }}
              {{ @method_field('PUT') }}
              <div class="form-row">
                <div class="col">
                  <div class="md-form mt-3 mb-3">
                    <input maxlength="30" type="text" id="materialRegisterFormName" class="form-control" name='name' value="{{$user->name}}" required>
                    <label for="materialRegisterFormName">Nombre</label>
                  </div>
                </div>
                <div class="col">
                  <div class="md-form mt-3 mb-3">
                    <input maxlength="30" type="text" id="materialRegisterFormLastlastUsr" class="form-control" name='lastU' value="{{$user->lastU}}" required>
                    <label for="materialRegisterFormLastlastUsr">Apellido</label>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <div class="md-form mb-1">
                    <input type="text" id="materialRegisterFormEmail" class="form-control" aria-describedby="materialRegisterFormEmailHelpBlock" name='email' value="{{$user->email}}" required autofocus>
                    <label for="materialRegisterFormEmail">Codigo SIS</label>
                    <small id="materialRegisterFormEmailHelpBlock" class="form-text text-muted">
                      9 caracteres numericos
                    </small>
                  </div>
                </div>
                <div class="col">
                  <div class="md-form mb-1">
                    <input type="text" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" name='password' value="{{$user->ci}}" required>
                    <label for="materialRegisterFormPassword">CI</label>
                    <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted">
                      7 caracteres numericos
                    </small>
                  </div>
                </div>
              </div>
              <div class="col">
                  <label for="roles[]">Rol</label>
                  <select class="custom-select" id="roles[]" name="roles[]">
                      @foreach ($roles as $role)
                          <option value="{{$role->id}}"> {{$role->name}} </option>
                      @endforeach
                  </select>
              </div>
              <div class="d-flex justify-content-center">
                <div class="w-50 form-row">
                    <label class="mdb-main-label">Materia</label>
                    <select class="custom-select" id="materias" name="materias[]" multiple style="height: 115px">
                      @foreach ($materias as $materia)
                          <option value="{{$materia->id}}">{{$materia->nameM}} {{$materia->numGM}}</option>
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