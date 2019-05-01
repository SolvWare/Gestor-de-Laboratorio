<div class="">
        <div class="card">
            <h5 class="card-header text-center primary-color-dark p-2">
            Lista de Controles de Practica
            </h5>
            <div class="form-row">
                <div class="row">
                    <div class="pl-5 p-4 " >
                    <h6 class="text-dark">Materias</h6>
                    <select class="form-control" id="grupo" name="grupo">
                        <option value="Intro">Intro</option>
                        <option value="Elementos">Elementos</option>
                    </select>
                    </div>
                </div>
                <div class="row">
                    <div class="pl-5 p-4 " >
                    <h6 class="text-dark">Grupo</h6>
                    <select class="form-control" id="grupo" name="grupo">
                        <option value="grupo1">grupo 1</option>
                        <option value="grupo2">grupo 2</option>
                        <option value="grupo3">grupo 3</option>
                    </select>
                    </div>
                </div>
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
                                    <th><a href="">Practica 1</a></th>
                                    <th>01-05-2019</th>
                                        <th class="text-center">
                                            <form action="" method="GET">
                                                <button><i class="fas fa-trash-alt fa-lg"></i></button>
                                            </form>
                                        </th>
                                </tr>
                                <tr>
                                        <th><a href="">Practica 2</a></th>
                                        <th>10-05-2019</th>
                                            <th class="text-center">
                                                <form action="" method="GET">
                                                    <button><i class="fas fa-trash-alt fa-lg"></i></button>
                                                </form>
                                            </th>
                                    </tr>
                                    <tr>
                                            <th><a href="">Practica 3</a></th>
                                            <th>15-05-2019</th>
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