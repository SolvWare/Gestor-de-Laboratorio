<div class="">
    <div class="card">
        <h4 class="card-header primary-color-dark white-text text-center p-2">
        Listado de Roles
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
                                <th>Prib1</th>
                                <th>Prib2</th>
                                <th>Prib3</th>
                                <th>Prib4</th>
                                <th>Prib5</th>
                                <th>Prib6</th>
                                <th>Editar</th>
                                <th>Deshabilitar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rols as $rol)
                                <tr class="table-active">
                                    <th>{{$rol->id}}</th>
                                    <th>{{$rol->codeR}}</th>
                                    <th>{{$rol->nameR}}</th>
                                    <th>{{$rol->prib1}}</th>
                                    <th>{{$rol->prib2}}</th>
                                    <th>{{$rol->prib3}}</th>
                                    <th>{{$rol->prib4}}</th>
                                    <th>{{$rol->prib5}}</th>
                                    <th>{{$rol->prib6}}</th>
                                    <th>
                                        <form action="{{ route('rol.edit', $rol->id) }}" method="GET">
                                            <button class="btn btn-link"><i class="fas fa-edit fa-lg"></i></button>
                                        </form>
                                    </th>
                                    <th>
                                        <form action="{{ route('rol.destroy', $rol->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-link"><i class="fas fa-check-square fa-lg"></i></button>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{!! $rols->render() !!}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header blue ">
        <h5 class="modal-title" id="exampleModal1Label">Deshabilitar Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-info">
          El Rol permanecera en la base de datos
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
      </div>
      </div>
    </div>
  </div>
</div>