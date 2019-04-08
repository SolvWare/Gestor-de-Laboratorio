<div class="">
        <div class="card">
            <h2 class="card-header primary-color-dark white-text text-center p-2">
            Listado de Docentes
            </h2>
            <div class="d-flex justify-content-center pt-0">
                <div class="w-100">
                    <div class="mt-1">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr class="table-active">
                                        <td>{{$usuario->nameUsr}}</td>
                                        <td>{{$usuario->lastUsr}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>