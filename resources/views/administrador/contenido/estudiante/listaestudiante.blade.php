<div class="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <div class="card">
      <h5 class="card-header text-center primary-color-dark p-2">
        Estudiantes
      </h5>
      <div class=" pb-2 pt-2">
            @include('administrador.opcion.confirmacion')
            <form class="form-inline ">
              <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" id="Search1" aria-label="Search">
              <i class="fas fa-search text-dark" aria-hidden="true"></i>
            </form>
      </div>
      <div class="pl-2 pr-2" style="position: relative; height: 490px; margin-top: .5rem; overflow: auto;">
        <table class="table table-sm table-hover">
          <thead class="thead-light">
            <tr>
              <th><strong>Codigo SIS</strong></th>
              <th><strong>CI</strong></th>
              <th><strong>Nombre</strong></th>
              <th><strong>Apellido</strong></th>
              <th class="text-center"><strong>Laboratorio</strong></th>
              <th class="text-center"><strong>Dia</strong></th>
              <th class="text-center"><strong>Hora</strong></th>
              <th class="text-center"><strong>Ver</strong></th>
              <th class="text-center"><strong>Editar</strong></th>
            </tr>
          </thead>
          
          <tbody id="tabla1">
           
           @foreach($usuarios as $usuario)
            @foreach($rols as $rol)
              @if($rol->nameR == 'Estudiante')
                  <td>{{$usuario->codSis}}</td>
                  <td>{{$usuario->ciU}}</td>
                  <td>{{$usuario->nameU}}</td>
                  <td>{{$usuario->lastU}}</td>
                  <td>
                    
                  </td>
                  
                  <th class="text-center">
                      <form action="{{ route('inscripcion.show', $usuario->id) }}" method="GET">
                          <button class=""><i class="fas fa-eye fa-lg"></i></button>
                      </form>
                  </th>
                  <th class="text-center">
                      <form action="{{ route('inscripcion.edit', $usuario->id) }}" method="GET">
                          <button class=""><i class="fas fa-edit fa-lg"></i></button>
                      </form>
                  </th>
                </tr>
                @endif
              @endforeach
            @endforeach
          </tbody>
          
        </table>
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