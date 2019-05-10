<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Inscripcion Actual
        </h5>
        <div class="d-flex justify-content-center p-0">
            <div class="w-75">
                <table class="table table-bordered mt-1 mb-1">
                    <thead class="">
                        <tr>
                            <th><strong>Materia</strong></th>
                            <th>{{$inscripcion->materia}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <th><strong>Laboratorio</strong></th>
                            <th>{{$inscripcion->laboratorio}}</th>
                        </tr>
                        <tr class="">
                            <th><strong>Dia</strong></th>
                            <th>{{$inscripcion->dia}}</th>
                        </tr>
                        <tr class="">
                            <th><strong>Hora</strong></th>
                            <th>{{$inscripcion->hora}}</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
