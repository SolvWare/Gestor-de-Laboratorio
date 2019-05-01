<div class="">
        <div class="card">
            <h5 class="card-header text-center primary-color-dark p-2">
            Perfil de Materia
            </h5>
            <div class="d-flex justify-content-center pt-0">
            <div class="w-75">
                <table class="table table-bordered mt-3">
                        <thead class="">
                            <tr>
                                <th><strong>Codigo</strong></th>
                                <th>{{$laboratorio->id}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <th><strong>Nombre</strong></th>
                                <th>{{$laboratorio->nameL}}</th>
                            </tr>
                            <tr class="">
                                <th><strong>Nº de Grupos</strong></th>
                                <th>{{$laboratorio->capL}}</th>
                            </tr>
                            <tr class="">
                                <th><strong>Estado</strong></th>
                                <th>{{$laboratorio->estado}}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    