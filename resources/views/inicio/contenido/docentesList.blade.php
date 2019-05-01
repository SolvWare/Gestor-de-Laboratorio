<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Listado de Docentes
        </h5>
        <div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
            <div class="w-100">
                <div class="pl-2 pr-2">
                    <table class="table table-sm table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th><strong>Nombre</strong></th>
                                <th><strong>Apellido</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr class="">
                                    <td>{{$usuario->nameU}}</td>
                                    <td>{{$usuario->lastU}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>