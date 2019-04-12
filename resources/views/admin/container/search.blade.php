<div class="">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <div class="card">
    <h4 class="card-header primary-color-dark white-text text-center p-2">
      Usuarios
    </h4>
    <div class=" d-flex  justify-content-between pt-2">
      <div class="w-25">
        <div class=" pb-2">
          <form class="form-inline col-lg-10">
            <input class="form-control form-control-sm " type="text" placeholder="Buscar" id="Search1" aria-label="Search">
            <i class="fas fa-search black-text " style="font-size:25px;" aria-hidden="true"></i>
          </form>
        </div>
      </div>
    </div>
    <div data-spy="scroll" class="scrollspy-example z-depth-1 p-2 " style="position: relative; height: 640px; margin-top:0ex; overflow: auto;" data-target="#navbar-example3" data-offset="0">
      <div class="mt-1">
        <table class="table table-hover table-sm">
          <thead class=" thead-light text-center">
            <tr>
              <th>Id</th>
              <th>Codigo SIS</th>
              <th>CI</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Rol</th>
              <th>Editar</th>
              <th>Deshabilitar</th>
            </tr>
          </thead>
          <tbody id="tabla1">
            @foreach($usuarios as $usuario)
              <tr data-id="{{$usuario->id}}">
                <td >{{$usuario->id}}</td>
                <td>{{$usuario->codSis}}</td>
                <td>{{$usuario->ciUsr}}</td>
                <td>{{$usuario->nameUsr}}</td>
                <td>{{$usuario->lastUsr}}</td>
                <td>{{$usuario->rol}}</td>
                <th class="text-center"><a href="/registUsr" ><i class="fas fa-edit fa-lg "></i></a></th>
                <th  class="text-center">
                  <form action="{{ route('usuario.destroy', $usuario->id) }}" method="POST">
                      {{ csrf_field() }}
                      <input type="hidden" name="_method" value="DELETE">
                      <button class=" invisible"><i class="fas fa-check-square fa-lg visible text-center" ></i></button>
                  </form>
                </th>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{!! $usuarios->render() !!}}
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header blue ">
        <h5 class="modal-title" id="exampleModal1Label">Deshabilitar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-info">
          El Usuario permanecera en la base de datos
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
      </div>
      </div>
    </div>
  </div>
</div>

<script>
  // SCRIPT SEARCH
  $(document).ready(function(){
    $("#Search1").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#tabla1 tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>