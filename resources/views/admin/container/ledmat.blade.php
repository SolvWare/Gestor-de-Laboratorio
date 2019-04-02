<div class="" action="{{url('listamaterias')}}">
    <div class="card">
        <h2 class="card-header blue white-text text-center p-2">
        Listado de Materias
        </h2>
        <div class="d-flex justify-content-center pt-0">
            <div class="w-100">
                <div class="mt-1">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Nº de grupos</th>
                                <th>Editar</th>
                                <th>Deshabilitar</th>
                            </tr>
                        </thead>
                        <tbody>    
                          @foreach($materias as $materia)
                          <tr class="table-active">
                                <th>{{$materia->codigoM}}</th>
                                <th>{{$materia->nombreM}}</th>
                                <th>{{$materia->grupoM}}</th>
                                <th><a href="/materia">edit</a></th>
                                <th><a type="button" data-toggle="modal" data-target="#exampleModal3">des</a></th>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-info">
            <h5 class="modal-title" id="exampleModal3Label">Desea deshabilitar este Rol</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body bg-secondary">
            La materia no se eliminara y se podra habilitar posteriormente<br>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Aceptar</button>
        </div>
        </div>
    </div>
</div>