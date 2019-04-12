<div class="">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <div class="card">
    <h4 class="card-header primary-color-dark white-text text-center p-2">
      Usuarios
    </h4>
    <div class="d-flex justify-content-center pt-2">
      <div class="w-50">
        <div class="text-center pb-2">
          <img src="https://images.vexels.com/media/users/3/132065/isolated/preview/967962d3aac34869f1bec88ea89f573b-buscar-icono-del-c--rculo-azul-by-vexels.png" width="100" height="100" class="img-fluid" alt="Responsive image">
        </div>
        <div class=" pb-2">
          <form class="form-inline ">
            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" id="Search1" aria-label="Search">
            <i class="fas fa-search" aria-hidden="true"></i>
          </form>
        </div>
      </div>
    </div>
    <div class="mt-1">
      <table class="table">
        <thead class=" thead-light">
          <tr>
            <th>Id</th>
            <th>Codigo SIS</th>
            <th>CI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Rol</th>
            <th>Materia</th>
            <th>Grupo</th>
            <th>Editar</th>
            <th>Deshabilitar</th>
          </tr>
        </thead>
        <tbody id="tabla1">
        @foreach($usuarios as $usuario)
            <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->codSis}}</td>
            <td>{{$usuario->ciUsr}}</td>
            <td>{{$usuario->nameUsr}}</td>
            <td>{{$usuario->lastUsr}}</td>
            <td>{{$usuario->rol}}</td>
            <td>{{$usuario->materia}}</td>
            <td>{{$usuario->grupo}}</td>
            </tr>
@endforeach
        </tbody>
      </table>
      
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