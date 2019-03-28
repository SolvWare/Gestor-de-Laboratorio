<div>    
    <div class="bg-dark text-center p-1">
        <h4>Registro de Usuarios</h4>
    </div>
    <div class="text-center bg-info p-1 mt-1">
        <div class="h-100 w-50 d-inline-block" >
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Codigo SIS</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">CI</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Apellido</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
        </div>
        <div class="h-100 w-25 d-inline-block">
            <div class=" p-1">
                <select class="custom-select">
                    <option selected>Escoger Rol</option>
                    <option value="1">Docente</option>
                    <option value="2">Auxiliar</option>
                    <option value="3">Docente</option>
                </select>
            </div>
            <div class=" p-1">
                <select class="custom-select">
                    <option selected>Escoger Materia</option>
                    <option value="1">Intro</option>
                    <option value="2">Elementos</option>
                    <option value="3">Taller</option>
                </select>
            </div>
            <div class=" p-1">
                <select class="custom-select">
                    <option selected>Escoger Grupo</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>
        <div class="col-sm-10 offset-sm-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">
                Cargar Archivo 
            </button>
        </div>
    </div>
    <div class="mt-1">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-active">
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModal3Label">Registro Exitoso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-secondary">
        El usuario se registro correctamente <br>
        Precione continuar para mostrar el usuario registrado
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Continuar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModal4Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger ">
        <h5 class="modal-title" id="exampleModal4Label">Error en el registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-secondary">
        El registro no se realizo de forma correcta <br>
        El Fallo puede deberce a: <br>
        El usuario ya existe <br>
        Rol, Materia, Grupo incorrecto <br>
        Precione Continuar para volverlo a intentar
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Continuar</button>
      </div>
    </div>
  </div>
</div>