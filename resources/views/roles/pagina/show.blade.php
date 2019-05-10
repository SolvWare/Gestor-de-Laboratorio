@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Perfil de Rol</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Perfil de Rol
        </h5>
        <div class="d-flex justify-content-center p-2">
        <div class="w-75">
            <table class="table table-bordered mt-3">
                    <thead class="">
                        <tr>
                            <th><strong>Codigo</strong></th>
                            <td>{{$role->id}}</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <th><strong>Nombre</strong></th>
                            <td>{{$role->name}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>URL Amigable</strong></th>
                            <td>{{$role->slug}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Descripcion</strong></th>
                            <td>{{$role->description}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Estado</strong></th>
                            <td>{{$role->estado}}</td>
                        </tr>
                        <tr class="">
                            <th><strong>Tipo de Acceso</strong></th>
                            <td>
                                @if ($role->special == null)
                                    Acceso Especial                                    
                                @else
                                    @if ($role->special == 'all-access')
                                        Acceso Total
                                    @else
                                        Sin Acceso
                                    @endif
                                @endif
                            </td>
                        </tr>
                        <tr class="">
                            <th><strong>Lista de Pribilegios</strong></th>
                            <td>
                                @foreach ($role->permissions as $permission)
                                    <li>{{$permission->name}}</li>
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