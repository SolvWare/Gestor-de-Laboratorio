@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Perfil de Usuario</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Perfil de Usuario
        </h5>
        <div class="d-flex justify-content-center p-2">
        <div class="w-75">
            <table class="table table-bordered mt-3">
                    <thead class="">
                        <tr>
                            <th><strong>Codigo</strong></th>
                            <td>{{$user->id}}</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <th><strong>Nombre</strong></th>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Apellido</strong></th>
                            <td>{{$user->lastU}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Codigo SIS</strong></th>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>CI</strong></th>
                            <td>{{$user->ci}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Estado</strong></th>
                            <td>{{$user->estado}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Materias</strong></th>
                            <td>
                                @foreach ($user->materias as $materia)
                                    <li>{{$materia->nameM}} - {{$materia->grupo}}</li>
                                @endforeach
                            </td>
                        </tr>
                        <tr class="">
                            <th><strong>Rol</strong></th>
                            <td>
                                @foreach ($user->roles as $rol)
                                    <li>{{$rol->name}}</li>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection