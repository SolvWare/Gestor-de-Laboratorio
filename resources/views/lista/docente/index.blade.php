@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/">Inicio</a></li>
            <li class="breadcrumb-item active">Docentes</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Lista de Docentes de la Carrera
        </h5>
        <div class="d-flex justify-content-center p-2">
            <div class="w-100">
                <table class="table table-sm table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th><strong>Nombre Apellido</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                @foreach ($user->roles as $role)
                                    @if ($role->name == 'Docente')
                                        @if ($user->estado == 'Habilitado')
                                            <td>{{$user->name}} {{$user->lastU}}</td>
                                        @endif
                                    @endif
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection