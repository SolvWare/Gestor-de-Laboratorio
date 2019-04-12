<div class="">
  <div class="card">
    <h4 class="card-header primary-color-dark white-text text-center p-2">
    Registro de Usuarios
    </h4>
    <div class="d-flex justify-content-center pt-0">
      <div class="w-50">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session('mensaje'))
                        <div class="alert alert-success">
                            <p>{{ session('mensaje') }}</p>
                        </div>
                    @endif
        <form action="{{ url('usuario') }}" method="POST" class="text-center" style="color: #757575;">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="col">
              <div class="md-form mb-1">
                <input type="text" id="materialRegisterFormcodSis" class="form-control" aria-describedby="materialRegisterFormcodSisHelpBlock" name='codSis'>
                <label for="materialRegisterFormcodSis">Codigo SIS</label>
                <small id="materialRegisterFormcodSisHelpBlock" class="form-text text-muted">
                  9 caracteres numericos
                </small>
              </div>
            </div>
            <div class="col">
              <div class="md-form mb-1">
                <input type="text" id="materialRegisterFormciUsr" class="form-control" aria-describedby="materialRegisterFormciUsrHelpBlock" name='ciUsr'>
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
                <input type="text" id="materialRegisterFormnameUsr" class="form-control" name='nameUsr'>
                <label for="materialRegisterFormnameUsr">Nombre</label>
              </div>
            </div>
            <div class="col">
              <div class="md-form mt-3 mb-3">
                <input type="text" id="materialRegisterFormLastlastUsr" class="form-control" name='lastUsr'>
                <label for="materialRegisterFormLastlastUsr">Apellido</label>
              </div>
            </div>
          </div>
          <div class="p-1">
            <select class="custom-select" id="rol" name="rol">
              <option selected>Escoger Rol</option>
              <option value="Docente">Docente</option>
              <option value="Auxiliar">Auxiliar</option>
              <option value="Estudiante">Estudiante</option>
            </select>
          </div>
          <div class="p-1">
            <select class="custom-select" id="materia" name="materia">
              <option selected>Escoger Materia</option>
              <option value="Intro">Intro</option>
              <option value="Elementos">Elementos</option>
              <option value="Taller">Taller</option>
            </select>
          </div>
          <div class="p-1">
            <select class="custom-select" id="grupo" name="grupo">
              <option selected>Escoger Grupo</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
          <button class="btn btn-primary" type="submit" data-toggle="modal">Registrar</button>
        </form>
      </div>
    </div>
    
  </div>
</div>