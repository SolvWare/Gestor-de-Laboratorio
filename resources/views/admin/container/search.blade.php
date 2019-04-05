<div class="">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <div class="card">
    <h2 class="card-header blue white-text text-center p-2">
       Usuarios
    </h2>
    <div class="d-flex justify-content-center pt-2">
      <div class="w-50">
        <div class="text-center pb-2">
          <img src="https://images.vexels.com/media/users/3/132065/isolated/preview/967962d3aac34869f1bec88ea89f573b-buscar-icono-del-c--rculo-azul-by-vexels.png" width="100" height="100" class="img-fluid" alt="Responsive image">
        </div>
        <div>
          <form class="form-inline ">
            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" id="Search1" aria-label="Search">
            <i class="fas fa-search" aria-hidden="true"></i>
          </form>
          <br>
        </div>
      </div>
    </div>
    <div class="tablaScroll5">
      <table class="table table-striped table-sm tablaScroll5">
        <thead class="thead-dark">
            <tr>
                <th style="width: 8%" class="text-center">nro</th>
                <th style="width: 10%" class="text-center">Codigo SIS</th>
                <th style="width: 10%" class="text-center">CI</th>
              	<th style="width: 20%" >Nombre</th>
              	<th style="width: 20%" >Apellido</th>
              	<th style="width: 10%" >Rol</th>
              	<th style="width: 15%" class="text-center">Herramientas</th>
            </tr>
        </thead>
        <tbody id="tabla1">
            @foreach($usuarios as $usuario)
            <tr data-id="{{$usuario->id}}">
                <td style="width: 10%" class="text-center">{{$usuario->id}}</td>
                <td style="width: 10%" >{{$usuario->codSis}}</td>
                <td style="width: 10%" >{{$usuario->ciUsr}}</td>
                <td style="width: 20%" >{{$usuario->nameUsr}}</td>
                <td style="width: 20%" >{{$usuario->lastUsr}}</td>
                <td style="width: 10%" >{{$usuario->rol}}</td>
                <td style="width: 15%" class="text-center">
                	<a class="btn-floating btn-sm btn-mdb-color btn-modal-show" data-toggle="tooltip" data-placement="top" title="ver"><i class="fa fa-eye mt-2 ml-1 fa-lg"></i></a>
                	<a class="btn-floating btn-sm btn-blue btn-modal-edit" data-toggle="tooltip" data-placement="top" title="editar"><i class="fa fa-edit mt-2 ml-1 fa-lg"></i></a>
    				<a class="btn-floating btn-sm btn-pink btn-modal-delete" data-toggle="tooltip" data-placement="top" title="eliminar"><i class="fa fa-trash mt-2 ml-1 fa-lg"></i></a>
                  <!-- <a class="btn-floating btn-sm btn-light-green" href="" data-toggle="tooltip" data-placement="top" title="ver grupo"><i class="fa fa-plus mt-2 ml-1 fa-lg"></i></a> -->
                </td>
            </tr>
      
            @endforeach
        </tbody>
      </table>
   
    </div>
  </div>
</div>

<!-- Modal agregar y modificar estudiante -->
<div class="modal fade" id="modal-usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-notify modal-primary modal-lg" role="document">
       <!--Content-->
       <div class="modal-content">
           <!--Header-->
           <div class="modal-header">
               <p class="heading lead">USUARIO</p>
              
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true" class="white-text">&times;</span>
               </button>
            </div>
           <!--Body-->
           <div class="modal-body">
              <p class="red-text">*Obligatorio</p>
               <!-- Grid row -->
               <div class="form-row">
                   <!-- Grid column -->
                   <div class="col-md-12">
                       <!-- Material input -->
                       <div class="md-form form-group">
                           <input type="number" class="form-control validate" id="codsis" placeholder="CodSis">
                           <label for="codsis">CodSis <b class="h5 red-text">*</b></label>
                       </div>
                   </div>
                   <!-- Grid column -->

                   <!-- Grid column -->
                   <div class="col-md-12">
                       <!-- Material input -->
                       <div class="md-form form-group">
                           <input type="number" class="form-control validate" id="ci" placeholder="Ci">
                           <label for="ci">CI <b class="h5 red-text">*</b></label>
                       </div>
                   </div>
                   <!-- Grid column -->
               </div>
               <!-- Grid row -->

               <!-- Grid row -->
               <div class="row">
                   <!-- Grid column -->
                   <div class="col-md-6">
                       <!-- Material input -->
                       <div class="md-form form-group">
                           <input type="text" class="form-control validate" id="nombre" placeholder="Nombre">
                           <label for="nombre">Nombre <b class="h5 red-text">*</b></label>
                       </div>
                   </div>
                   <!-- Grid column -->

                   <!-- Grid column -->
                   <div class="col-md-6">
                       <!-- Material input -->
                       <div class="md-form form-group">
                            <input type="text" class="form-control validate" id="apellido" placeholder="Apellido">
                            <label for="apellido">Apellido <b class="h5 red-text">*</b></label>
                       </div>
                   </div>
                   <!-- Grid column -->
               </div>
               <!-- Grid row -->

               <!-- Grid row -->
               <div class="form-row">
                   <!-- Grid column -->
                   <div class="col-md-6">
                       <!-- Material input -->
                       <div class="md-form form-group" id="roldiv">
                            <select class="mdb-select colorful-select dropdown-primary col-md-12" id="rol">
                               <option value="" selected disabled>Seleccionar rol</option>
                               <option value="2">Docente</option>
                               <option value="1">Auxiliar</option>
                               <option value="2">Estudiante</option>
                               
                           </select>
                           <label for="rol">Rol <b class="h5 red-text">*</b></label>
                       </div>
                   </div>
                   <!-- Grid column -->
               </div>
               <!-- Grid row -->               
           </div>
          
           <!--Footer-->
           <div class="modal-footer">
               <button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
               <button class="btn btn-indigo" id="modal-agregar-btn">Guardar</button>
           </div>
       </div>
       <!--/.Content-->
   </div>
</div>
<!-- Modal agregar y modificar estudiante -->

<!-- Modal show usuario -->
<div class="modal fade" id="modal-show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-notify modal-info modal-lg" role="document">
       <!--Content-->
       <div class="modal-content">
           <!--Header-->
           <div class="modal-header">
               <p class="heading lead">Usuario</p>
              
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true" class="white-text">&times;</span>
               </button>
           </div>
          
           <!--Body-->
           <div class="modal-body">
               <!-- Grid row -->
               <div class="form-row">
                   <!-- Grid column -->
                   <div class="col-md-12">
                       <table class="table table-bordered">
                           <tbody>
                               <tr>
                                   <th scope="row">CodSis</th>
                                   <td id="td-codsis"></td>
                               </tr>
                               <tr>
                                   <th scope="row">Ci</th>
                                   <td id="td-ci"></td>
                               </tr>
                               <tr>
                                   <th scope="row">Nombre</th>
                                   <td id="td-nombre"></td>
                               </tr>
                               <tr>
                                   <th scope="row">Apellido</th>
                                   <td id="td-apellido"></td>
                               </tr>
                               <tr>
                                   <th scope="row">Rol</th>
                                   <td id="td-rol"></td>
                               </tr>
                            
                           </tbody>
                       </table>
                   </div>
                   <!-- Grid column -->
               </div>
               <!-- Grid row -->             
           </div>
           <!--Footer-->
           <div class="modal-footer">
               <button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
           </div>
       </div>
       <!--/.Content-->
   </div>
</div>
<!-- Modal show estudiante -->


<!-- <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModal4Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger ">
        <h5 class="modal-title" id="exampleModal4Label">Dato no encontrado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-secondary">
        El Archivo no se encontro el la base de datos <br>
        Precione Continuar para volverlo a intentar
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Continuar</button>
      </div>
    </div>
  </div>
</div> -->
<script>
  
 // SCRIPT PARA MOSTRAR USUARIOS for id EN EL MODAL
   $(document).on('click', '.btn-modal-show', function() {
       $.get('/usuario/'+$($(this).parents("tr")).data('id'), function(data){
           $('#td-codsis').text(data.usuario.codSis);
           $('#td-ci').text(data.usuario.ciUsr);
           $('#td-nombre').text(data.usuario.nameUsr);
           $('#td-apellido').text(data.usuario.lastUsr);
           $('#td-rol').text(data.usuario.rol);
       });
       $('#modal-show').modal('show');
   });

 // SCRIPT PARA AGREGAR ESTUDIANTE EN EL MODAL
 $(document).on('click', '#modal-agregar-btn', function(e) {
       e.preventDefault();
       $.ajax({
           type: type_,
           url: url_,
           data: {
               '_token': $('input[name=_token]').val(),
               'codSis': $('#codsis').val(),
               'ciUsr': $('#ci').val(),
               'nameUsr': $('#nombre').val(),
               'lastUsr': $('#apellido').val(),
               'rol': $('#rol').val(),
               
           },
           success : function(data) {
              //console.log(data);
               toastr.success(data.message);
               location.reload();
           },
           error : function(xhr, status) {
               toastr.error('Disculpe, existio un problema!');
           },
       });
       $('#modal-usuario').modal('hide');
       clear();
   });
   
// SCRIPT PARA EDITAR ESTUDIANTE EN EL MODAL
    $(document).on('click', '.btn-modal-edit', function() {
       $.get('/usuario/'+$($(this).parents("tr")).data('id'), function(data){
           $('#codsis').val(data.usuario.codSis);
           $('#ci').val(data.usuario.ciUsr);
           $('#nombre').val(data.usuario.nameUsr);
           $('#apellido').val(data.usuario.lastUsr);
           console.log($('#rol')[0][1]);
           $($('#rol')[0][0]).removeAttr('selected');
           if (data.usuario.idCarrera == 1) {
               $($('#rol')[0][1]).attr('selected','');
           }
           else{
               $($('#rol')[0][2]).attr('selected','');
           }
       });
       type_ = 'PUT';
       url_ = '/usuario/'+$($(this).parents("tr")).data('id');
       $('#roldiv').attr('hidden', 'hidden');

       $('#modal-usuario').modal('show');
   });   
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