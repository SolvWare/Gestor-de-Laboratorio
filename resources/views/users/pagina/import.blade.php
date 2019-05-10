@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Importar Usuarios</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
      <h5 class="card-header text-center primary-color-dark p-2">
      Importar Usuarios
      </h5>
      <div class="d-flex justify-content-center p-2">
        <div class="w-50 pt-2 pb-3">
          <div class="text-center pb-2">
            <i class="fas fa-file-import fa-7x text-dark"></i>
          </div>
          <div class="custom-file text-center">
            <form action="{{ url('importUsr') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input type="file" accept=".csv , .xls , .xlsx" class="custom-file-input" id="customFile" name="file">
              <label class="custom-file-label" for="customFile">Escoger Archivo</label>
              <input type="submit" class="btn btn-primary">
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection