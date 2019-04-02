<div class="">
  <div class="card">
    <h2 class="card-header blue white-text text-center p-2">
    Registro de Usuarios
    </h2>
    <div class="d-flex justify-content-center pt-0">
      <div class="w-50">
        <form class="text-center" style="color: #757575;">
          <div class="form-row">
            <div class="col">
              <div class="md-form mb-1">
                <input type="text" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <label for="materialRegisterFormPassword">Codigo SIS</label>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted">
                  9 caracteres numericos
                </small>
              </div>
            </div>
            <div class="col">
              <div class="md-form mb-1">
                <input type="text" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <label for="materialRegisterFormPassword">CI</label>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted">
                  7 caracteres numericos
                </small>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <div class="md-form mt-3 mb-3">
                <input type="text" id="materialRegisterFormName" class="form-control">
                <label for="materialRegisterFormName">Nombre</label>
              </div>
            </div>
            <div class="col">
              <div class="md-form mt-3 mb-3">
                <input type="text" id="materialRegisterFormLastName" class="form-control">
                <label for="materialRegisterFormLastName">Apellido</label>
              </div>
            </div>
          </div>
          <div class="p-1">
            <select class="custom-select">
              <option selected>Escoger Rol</option>
              <option value="1">Docente</option>
              <option value="2">Auxiliar</option>
              <option value="3">Docente</option>
            </select>
          </div>
          <div class="p-1">
            <select class="custom-select">
              <option selected>Escoger Materia</option>
              <option value="1">Intro</option>
              <option value="2">Elementos</option>
              <option value="3">Taller</option>
            </select>
          </div>
          <div class="p-1">
            <select class="custom-select">
              <option selected>Escoger Grupo</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
          <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="button" data-toggle="modal" data-target="#exampleModal3">Registrar</button>
        </form>
      </div>
    </div>
    <div class="mt-1">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Codigo SIS</th>
            <th>CI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Rol</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-active">
            <th>65465465465</th>
            <th>5546464</th>
            <th>Otto</th>
            <th>Simpson</th>
            <th>Estudiante</th>
          </tr>
        </tbody>
      </table>
    </div>
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