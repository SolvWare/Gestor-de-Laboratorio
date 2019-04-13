<div class="">
    <div class="card">
      <h5 class="card-header text-center primary-color-dark p-2">
      Editar Usuario
      </h5>
      <div class="d-flex justify-content-center p-2">
        <div class="w-75">
          @include('administrador.opcion.error')
          <form action="{{ route('usuario.update', $usuario->id) }}" method="POST" class="text-center" style="color: #757575;">
            {{ csrf_field() }}
            {{ @method_field('PUT') }}
            <div class="form-row">
              <div class="col">
                <div class="md-form mb-1">
                  <label for="materialRegisterFormcodSis">Codigo Sis</label>
                  <input type="number" id="materialRegisterFormcodSis" class="form-control" aria-describedby="materialRegisterFormcodSisHelpBlock" name='codSis' placeholder="{{$usuario->codSis}}">
                  <small id="materialRegisterFormcodSisHelpBlock" class="form-text text-muted">
                    9 caracteres numericos
                  </small>
                </div>
              </div>
              <div class="col">
                <div class="md-form mb-1">
                  <label for="materialRegisterFormciUsr">CI</label>
                  <input type="number" id="materialRegisterFormciUsr" class="form-control" aria-describedby="materialRegisterFormciUsrHelpBlock" name='ciU'placeholder="{{$usuario->ciU}}">
                  <small id="materialRegisterFormciUsrHelpBlock" class="form-text text-muted">
                    7 caracteres numericos
                  </small>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <div class="md-form mt-3 mb-3">
                  <label for="materialRegisterFormnameUsr">Nombre</label>
                  <input type="text" maxlength="30" id="materialRegisterFormnameUsr" class="form-control" name='nameU' placeholder="{{$usuario->nameU}}">
                </div>
              </div>
              <div class="col">
                <div class="md-form mt-3 mb-3">
                  <label for="materialRegisterFormLastlastUsr">Apellido</label>
                  <input type="text" maxlength="30" id="materialRegisterFormLastlastUsr" class="form-control" name='lastU' placeholder="{{$usuario->lastU}}">
                </div>
              </div>
            </div>
            <div class="p-1">
              <select class="custom-select" id="rol" name="rol">
                <option selected>{{$usuario->rol}}</option>
                <option value="Docente">Docente</option>
                <option value="Auxiliar">Auxiliar</option>
                <option value="Estudiante">Estudiante</option>
              </select>
            </div>
            <div class="p-1">
              <select class="custom-select" id="materia" name="materia">
                <option selected>{{$usuario->materia}}</option>
                <option value="Intro">Intro</option>
                <option value="Elementos">Elementos</option>
                <option value="Taller">Taller</option>
              </select>
            </div>
            <div class="col">
              <div class="md-form mt-3 mb-3">
                <label for="materialRegisterFormGrupo">Numero de Grupo: {{$usuario->grupo}}</label>
                <input type="number" step="1" id="materialRegisterFormGrupo" class="form-control" name='grupo' placeholder="{{$usuario->grupo}}">
              </div>
            </div>
            <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
          </form>
        </div>
      </div>
    </div>
</div>