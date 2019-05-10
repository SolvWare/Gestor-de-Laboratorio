<div class="">
        <div class="card">
            <h5 class="card-header text-center primary-color-dark p-2">
              Control de Practica
            </h5>
            <div class="d-flex justify-content-between align-items-center w-100">
                <h5 class="text-dark pt-3" style="margin-left:17%;"><strong>Lista para tomar asistenta y controlar practicas</strong> </h5>
                <div class="pt-2" style="margin-right:14%;">
                    <button class="btn btn-primary waves-effect"  type="submit" data-toggle="modal">Guardar</button>
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
                        <tr>
                            <th>Alejandro Rojas</th>
                            <th>
                                
                                    <input type="time" name="hora_entrada">
                                
                            </th>
                            <th>
                                
                                    <input type="time" name="hora_salida">
                                
                            </th>
                            <th class="text-center">
                                <input class="" type=" text">
                            </th>
                            <th>
                                <div class="dropdown">
                                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                        Máquina
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Maq 1</a>
                                        <a class="dropdown-item" href="#">Maq 2</a>
                                        <a class="dropdown-item" href="#">Maq 3</a>
                                    </div>
                                </div>
                            </th>
                            <th>
                                <input type="submit">
                            </th>
                        </tr>
                    
                        </form>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    </div>
</div>
