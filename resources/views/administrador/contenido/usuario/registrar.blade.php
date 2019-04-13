<div class="">
    <div class="card">
      <h5 class="card-header text-center primary-color-dark p-2">
      Registro de Usuarios
      </h5>
      <div class="d-flex justify-content-center pt-0">
        <div class="w-75">
          @include('administrador.opcion.error')
          <form action="{{ route('usuario.store') }}" method="POST" class="text-center" style="color: #757575;">
            {{ csrf_field() }}
            <div class="form-row">
              <div class="col">
                <div class="md-form mb-1">
                  <input type="number" id="materialRegisterFormcodSis" class="form-control" aria-describedby="materialRegisterFormcodSisHelpBlock" name='codSis'>
                  <label for="materialRegisterFormcodSis">Codigo SIS</label>
                  <small id="materialRegisterFormcodSisHelpBlock" class="form-text text-muted">
                    9 caracteres numericos
                  </small>
                </div>
              </div>
              <div class="col">
                <div class="md-form mb-1">
                  <input type="number" id="materialRegisterFormciUsr" class="form-control" aria-describedby="materialRegisterFormciUsrHelpBlock" name='ciU'>
                  <label for="materialRegisterFormciUsr">CI</label>
                  <small id="materialRegisterFormciUsrHelpBlock" class="form-text text-muted">
                    7 caracteres numericos
                  </small>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <div class="md-form mt-3 mb-3">
                  <input maxlength="30" type="text" id="materialRegisterFormnameUsr" class="form-control" name='nameU'>
                  <label for="materialRegisterFormnameUsr">Nombre</label>
                </div>
              </div>
              <div class="col">
                <div class="md-form mt-3 mb-3">
                  <input maxlength="30" type="text" id="materialRegisterFormLastlastUsr" class="form-control" name='lastU'>
                  <label for="materialRegisterFormLastlastUsr">Apellido</label>
                </div>
              </div>
            </div>
            <div class="">
              <label for="formGroupExampleInput">Escoger Rol</label>
              <select class="custom-select" id="rol" name="rol">
                <option value="Docente">Docente</option>
                <option value="Auxiliar">Auxiliar</option>
                <option value="Estudiante">Estudiante</option>
              </select>
            </div>
            <div class="">
              <label for="formGroupExampleInput">Escoger Materia</label>
              <select class="custom-select" id="materia" name="materia">
                <option value="Intro">Intro</option>
                <option value="Elementos">Elementos</option>
                <option value="Taller">Taller</option>
              </select>
            </div>
            <div class="col">
              <div class="md-form mt-3 mb-3">
                <input type="number" step="1" id="materialRegisterFormGrupo" class="form-control" name='grupo'>
                <label for="materialRegisterFormGrupo">Numero de Grupo</label>
              </div>
            </div>
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
          </form>
        </div>
      </div>
    </div>
</div>