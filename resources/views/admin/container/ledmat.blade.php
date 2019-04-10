<div class="">
    <div class="card">
        <h4 class="card-header primary-color-dark white-text text-center p-2">
        Listado de Materias
        </h4>
        <div class="d-flex justify-content-center pt-0">
            <div class="w-100">
                <div class="mt-1">
                    <table class="table table-hover table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Nº de grupos</th>
                                <th>Editar</th>
                                <th>Deshabilitar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($materias as $materia)
                                <tr class="table-active">
                                    <th>{{$materia->id}}</th>
                                    <th>{{$materia->codeM}}</th>
                                    <th>{{$materia->nameM}}</th>
                                    <th>{{$materia->numGM}}</th>
                                    <th><a href="/registMat"><i class="fas fa-edit fa-lg"></a></th>
                                    <th>
                                        <form action="{{ route('materia.destroy', $materia->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-link"><i class="fas fa-check-square fa-lg"></i></button>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{!! $materias->render() !!}}
                </div>
            </div>
        </div>
    </div>
</div>
    
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header blue">
            <h5 class="modal-title" id="exampleModal1Label">Desea deshabilitar esta Materia</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body bg-info">
            La Materia permanecera en la base de datos
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
        </div>
    </div>
</div>