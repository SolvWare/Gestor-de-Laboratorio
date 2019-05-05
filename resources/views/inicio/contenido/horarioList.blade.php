<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Listado de Horarios
        </h5>
        <div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
            <div class="w-100">
                <div class="pl-2 pr-2">
                    <table class="table table-sm table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th><strong>Laboratorio</strong></th>
                                <th><strong>Dia</strong></th>
                                <th><strong>Horario Inicio</strong></th>
                                <th><strong>Horario Fin</strong></th>
                                <th><strong>Editar</strong></th>
                                <th><strong>Eliminar</strong></th>
                            </tr>
                        </thead>
                        <tbody>	
                            @foreach ($horarios as $horario)
                                <tr class="">
                                    <td>{{$horario->id_lab}}</td>
                                    <td>{{$horario->dia}}</td>
                                    <td>{{$horario->hora_ini}}</td>
                                    <td>{{$horario->hora_fin}}</td>
                                    <td>poneralgo</td>
                                    <td>{{$horario->estado}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>