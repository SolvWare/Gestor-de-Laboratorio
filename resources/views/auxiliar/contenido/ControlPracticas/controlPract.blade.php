<div class="">
        <div class="card">
            <h5 class="card-header text-center primary-color-dark p-2">
              Control de Practica
            </h5>
    <div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
        <div class="w-75">
            <div class="pl-1 pr-2 p-3 ">
                @include('administrador.opcion.confirmacion')
                <table class="table table-sm table-hover table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th><strong>Nombre</strong></th>
                            <th><strong>Hora Entrada</strong></th>
                            <th><strong>Hora Salida</strong></th>
                            <th><strong>Practica</strong></th>
                            <th><strong>Observación</strong></th>
                            <th><strong>Laboratorio</strong></th>
                            <th><strong>Máquina</strong></th>
                            
                        </tr>
                    </thead>
                    <tbody id="tablaPracticas">
                        <tr>
                            <th>Alejandro Rojas</th>
                            <th>
                                <form action="..." id="formulario_asistencia">
                                    <input type="time" name="hora_entrada">
                                </form>
                            </th>
                            <th>
                                <form action="..." id="formulario_asistencia">
                                    <input type="time" name="hora_salida">
                                </form>
                            </th>
                            <th class="text-center">
                                <input class="" type="checkbox">
                            </th>
                            <th>
                                <input type="text" name="observacion">
                            </th>
                            <th>
                                <div class="dropdown">
                                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                        Laboratorio
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Labo 1</a>
                                        <a class="dropdown-item" href="#">Labo 2</a>
                                        <a class="dropdown-item" href="#">Labo 3</a>
                                    </div>
                                </div>
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
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>
