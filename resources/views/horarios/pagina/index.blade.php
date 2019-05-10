@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/home">{{ Auth::user()->name }}</a></li>
            <li class="breadcrumb-item active" href="/home">Lista de Horarios</li>
        </ol>
    </nav>
@endsection

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Lista de Horarios
        </h5>
        <div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
            <div class="w-100">
                <div class="pl-2 pr-2">
                    @include('opcion.confirmacion')
                    <div class="d-flex justify-content-center pt-2">
                        <div class="w-50">
                            <div class=" pb-2 pt-2">
                                <form class="form-inline ">
                                    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" id="Search1" aria-label="Search">
                                    <i class="fas fa-search text-dark" aria-hidden="true"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="table table-sm table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th><strong>Nombre</strong></th>
                                <th><strong>Laboratorio</strong></th>
                                <th><strong>Materia</strong></th>
                                @can('horarios.show')
                                    <th class="text-center"><strong>Ver</strong></th>
                                @endcan
                                @can('horarios.edit')
                                    <th class="text-center"><strong>Editar</strong></th>
                                @endcan
                                @can('horarios.destroy')
                                    <th class="text-center"><strong>Eliminar</strong></th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody id="tabla1">
                            @foreach ($horarios as $horario)
                                <tr class="">
                                    <td class="pl-2">{{$horario->diaH}}</td>
                                    <td class="pl-2">{{$horario->laboratorio->nameL}}</td>
                                    <td class="pl-2">{{$horario->materia->nameM}}</td>
                                    @can('horarios.show')
                                        <td class="text-center">
                                            <form action="{{ route('horarios.show', $horario->id) }}" method="GET">
                                                <button class="">
                                                    <i class="fas fa-eye fa-lg"></i>
                                                </button>
                                            </form>
                                        </td>
                                    @endcan
                                    @can('horarios.edit')
                                        <td class="text-center">
                                            <form action="{{ route('horarios.edit', $horario->id) }}" method="GET">
                                                <button class="">
                                                    <i class="fas fa-edit fa-lg"></i>
                                                </button>
                                            </form>
                                        </td>
                                    @endcan
                                    @can('horarios.destroy')
                                        <td class="text-center">
                                            <form action="{{ route('horarios.destroy', $horario->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
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

<script>
    // SCRIPT SEARCH
    $(document).ready(function(){
        $("#Search1").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#tabla1 tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
        });
    });
</script>
@endsection