<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Lista de Controles de Practica
        </h5>

        <div class="card-body d-flex justify-content-between align-items-center">
       
            <div class="form-row" style="margin-left:10%;">
                <div class="row">
                    <div class="pl-5 " >
                    <h6 class="text-dark">Horario</h6>
                    {{-- <select class="form-control" id="grupo" name="grupo">
                        <option value="grupo1">grupo 1</option>
                        <option value="grupo2">grupo 2</option>
                        <option value="grupo3">grupo 3</option>
                    </select> --}}
                    <select class="form-control">
                            @foreach($horarios as $horario)
                            <option>{{$horario->id, $horario->mat_id, $horario->lab_id}}</option>
                            @endforeach
                    </select>
                    </div>
                </div>
            </div>
        <button class="btn btn-primary waves-effect"  style="margin-right:13%;" type="submit" data-toggle="modal">
            <a href="/reporte/detalle" class="text-white">Nueva Practica</a>
        </button>
       
        </div>

        <div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
            <div class="w-75">
                <div class="pl-1 pr-2 p-3 ">
                    @include('administrador.opcion.confirmacion')
                    <table class="table table-sm table-hover table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th><strong>Sesion</strong></th>
                                <th><strong>Fecha</strong></th>
                                <th class="text-center"><strong>Eliminar</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($Detalles as $detalle)
                                    
                                @endforeach
                                <th><a href="">Practica 1</a></th>
                                <th><input type="date" name="fecha" id="">  01-05-2019</th>
                                    <th class="text-center">
                                        <form action="" method="GET">
                                            <button><i class="fas fa-trash-alt fa-lg"></i></button>
                                        </form>
                                    </th>
                                
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>