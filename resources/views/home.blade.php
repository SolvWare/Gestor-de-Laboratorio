@extends('layouts.app')

@section('content')
<div class="" >
    <div class="text-center primary-color-dark p-1">
        <h4>Bienvenido Administrador</h4>
    </div>
    <div class="">
        <div class="card">
            <div class="text-center p-4">
                <a><i class="fas fa-user-tie fa-7x text-dark"></i></a>
            </div>
            <div class="text-dark p-5">
                <p>
                    Bienbenido  Administrador tienes control total de la plataforma. 
                    <ul>
                        <li>Importar Usuarios, Roles, Materias</li>
                        <li>Registrar Usuarios, Roles, Materias</li>
                        <li>Buscar Usuarios, Roles, Materias</li>
                        <li>Editar Usuarios, Roles, Materias</li>
                        <li>Deshabilitar Usuarios, Roles, Materias</li>
                    </ul>    
                </p>
            </div>
            <div class=" text-dark panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!
            </div>
        </div>
    </div>
</div>
@endsection
