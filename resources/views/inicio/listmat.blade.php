<div class="">
    <div class="card">
        <h2 class="card-header primary-color-dark white-text text-center p-2">
        Listado de Materias
        </h2>
        <div class="d-flex justify-content-center pt-0">
            <div class="w-100">
                <div class="mt-1">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Nº de grupos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($materias as $materia)
                                <tr class="table-active">
                                    <th>{{$materia->id}}</th>
                                    <th>{{$materia->codeM}}</th>
                                    <th>{{$materia->nameM}}</th>
                                    <th>{{$materia->numGM}}</th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>