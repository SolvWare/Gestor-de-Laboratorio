<div class="">
    <div class="card">
        <h4 class="card-header primary-color-dark white-text text-center p-2">
        Registro de Roles
        </h4>
        <div class="d-flex justify-content-center pt-0">
        <div class="w-50">
            <form action="{{ route('rol.store') }}" method="POST" class="text-center" style="color: #757575;">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col">
                        <div class="md-form mb-1">
                            <input maxlength="3" type="text" id="materialRegisterFormCode" class="form-control" aria-describedby="materialRegisterFormCodeHelpBlock" name="codeR">
                            <label for="materialRegisterFormCode" onkeypress="return soloNumeros(event);">Codigo de Rol</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form mb-1">
                            <input maxlength="30" type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="nameR">
                            <label for="materialRegisterFormName">Nombre de Rol</label>
                        </div>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="custom-control custom-checkbox col-7">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" name='prib1'>
                        <label class="custom-control-label" for="customCheck1">Portafolio</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2" name='prib2'>
                        <label class="custom-control-label" for="customCheck2">Estudiantes</label>
                    </div>
                </div>  
                <div class="form-row"> 
                    <div class="custom-control custom-checkbox col-7">
                        <input type="checkbox" class="custom-control-input" id="customCheck3" name='prib3'>
                        <label class="custom-control-label" for="customCheck3">Docentes</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck4" name='prib4'>
                        <label class="custom-control-label" for="customCheck4">Auxiliares</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="custom-control custom-checkbox col-6" style="margin-left:14px;">
                        <input type="checkbox" class="custom-control-input" id="customCheck5" name='prib5' >
                        <label class="custom-control-label" for="customCheck5">Roles</label>
                    </div>
                    <div class="custom-control custom-checkbox"  style="margin-left:40px;">
                        <input type="checkbox" class="custom-control-input" id="customCheck6" name='prib6'>
                        <label class="custom-control-label" for="customCheck6">Materias</label>
                    </div>
                </div>
                <button class="btn btn-primary my-4 waves-effect z-depth-0" type="submit" data-toggle="modal" data-target="#exampleModal1">Registrar</button>
            </form>
			<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content-sm">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" id="mymodal">Usuario creado correctamente</h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary my-4 waves-effect z-depth-0" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
      </div>
    </div>

        </div>
        </div>
    </div>
</div>
