<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
          Control de Practica
        </h5>
        <div class="d-flex justify-content-between align-items-center w-100">
            <h5 class="text-dark pt-3" style="margin-left:17%;"><strong>Lista para tomar asistenta y controlar practicas</strong> </h5>
            <div class="pt-2" style="margin-right:14%;">
                <form method="get" action="">
                        <button class="btn btn-primary waves-effect"  type="submit" data-toggle="modal">Guardar</button>
                </form>
            </div>
        </div>
        
<div class="d-flex justify-content-center pt-0 " style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
    <div class="w-75">
        <div class="pl-1 pr-2 p-3 ">
            @include('administrador.opcion.confirmacion')
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th><strong>Nombre</strong></th>
                        <th><strong>Hora Entrada</strong></th>
                        <th><strong>Hora Salida</strong></th>
                        <th><strong>Observación</strong></th>
                        <th><strong>Máquina</strong></th>
                        <th><strong>Guardar</strong></th>
                        
                    </tr>
                </thead>
                <tbody id="tablaPracticas">
                    <form>
                            @foreach ($usuarios as $usuario)
                    <tr>
                        <th>
                            
                                {{$usuario->nameUsr}}
                                {{$usuario->lastUsr}}
                        </th>
                        <th>
                            
                            <input type="time" name="hora_entrada">
                            
                        </th>
                        <th>
                            
                            <input type="time" name="hora_salida">
                            
                        </th>
                        <th class="text-center">
                            <input class="p-3" type=" text">
                        </th>
                        <th>
                                <div class="form-group">
                                    
                                    
                                    <select class="form-control">
                                        @foreach($laboratorios as $laboratorio)
                                        <option>{{$laboratorio->capacidad}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            
                        </th>
                        <th>
                                <button class="btn btn-primary waves-effect p-2"  type="submit" data-toggle="modal">Guardar</button>
                        </th>
                    </tr>
                    @endforeach
                    </form>
                    
                
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
