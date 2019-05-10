@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Lista de Roles</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Lista de Roles
        </h5>
        <div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
            <div class="w-100">
                <div class="pl-2 pr-2">
                    @include('opcion.confirmacion')
                    <table class="table table-sm table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th><strong>Nombre</strong></th>
                                <th><strong>Descripcion</strong></th>
                                <th><strong>Estado</strong></th>
                                @can('roles.show')
                                <th class="text-center"><strong>Ver</strong></th>
                                @endcan
                                @can('roles.edit')
                                <th class="text-center"><strong>Editar</strong></th>
                                @endcan
                                @can('roles.destroy')
                                <th class="text-center"><strong>Eliminar</strong></th>
                                @endcan
                                @can('roles.disable')
                                <th class="text-center"><strong>Deshabilitar</strong></th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr class="">
                                    <td class="pl-2">{{$role->name}}</td>
                                    <td class="pl-2">{{$role->description}}</td>
                                    <td class="pl-2">{{$role->estado}}</td>
                                    @can('roles.show')
                                        <td class="text-center">
                                            <form action="{{ route('roles.show', $role->id) }}" method="GET">
                                                <button class=""><i class="fas fa-eye fa-lg"></i></button>
                                            </form>
                                        </td>
                                    @endcan
                                    @can('roles.edit')
                                        <td class="text-center">
                                            <form action="{{ route('roles.edit', $role->id) }}" method="GET">
                                                <button class=""><i class="fas fa-edit fa-lg"></i></button>
                                            </form>
                                        </td>
                                    @endcan
                                    @can('roles.destroy')
                                        <td class="text-center">
                                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    @endcan
                                    @can('roledisables.destroy')
                                        <th class="text-center">
                                            <form action="{{ route('roledisables.destroy', $role->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">
                                                @if($role->estado == 'Habilitado')
                                                    <button type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-check-square fa-lg"></i></button>
                                                @else($role->estado == 'Deshabilitado')
                                                    <button type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-times-circle"></i></button>
                                                @endif
                                            </form>
                                        </th>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection