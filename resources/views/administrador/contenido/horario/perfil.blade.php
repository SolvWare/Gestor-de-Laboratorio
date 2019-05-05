<div class="">
        <div class="card">
            <h5 class="card-header text-center primary-color-dark p-2">
            Perfil de Horario
            </h5>
            <div class="d-flex justify-content-center pt-0">
            <div class="w-75">
                <table class="table table-bordered mt-3">
                        <thead class="">
                            <tr>
                                <th><strong>Codigo</strong></th>
                                <th>{{$horario->id}}</th>
                            </tr>
                        </thead>
                        <tbody>
							<tr class="">
                                <th><strong>Laboratorio</strong></th>
                                <th>{{$horario->id_lab}}</th>
                            </tr>
                            <tr class="">
                                <th><strong>Dia</strong></th>
                                <th>{{$horario->dia}}</th>
                            </tr>
                            <tr class="">
                                <th><strong>Hora Inicio</strong></th>
                                <th>{{$horario->hora_ini}}</th>
                            </tr>
							<tr class="">
                                <th><strong>Hora Final</strong></th>
                                <th>{{$horario->hora_fin}}</th>
                            </tr>
                            <tr class="">
                                <th><strong>Estado</strong></th>
                                <th>{{$horario->estado}}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    