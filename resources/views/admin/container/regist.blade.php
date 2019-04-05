<div class="">
  <div class="card">
    <h2 class="card-header blue white-text text-center p-2">
    Registro de Usuarios
    </h2>
      <!-- add la etiqueta form -->
    <form action="{{url('/usuario')}}" method="post">
    {{csrf_field()}}
    <div class="text-center bg-info p-1 mt-1">
        <div class="h-100 w-50 d-inline-block" >
            <div class="form-group row">
                <label for="codSis" class="col-sm-2 col-form-label">Codigo SIS</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="codSis" id="codSis"placeholder="CodSis">
                </div>
            </div>
            <div class="form-group row">
                <label for="ciUsr" class="col-sm-2 col-form-label">CI</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control"  name="ciUsr" id="ciUsr"  placeholder="CI">
                </div>
            </div>
            <div class="form-group row">
                <label for="nameUsr" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nameUsr" id="nameUsr" placeholder="Nombre">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastUsr" class="col-sm-2 col-form-label">Apellido</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="lastUsr" id="lastUsr" placeholder="Apellido">
                </div>
            </div>
        </div>
        <div class="h-100 w-25 d-inline-block">
            <div class=" p-1">
                <select class="cust om-select" id="rol" name="rol">
                    <option selected>Escoger Rol</option>
                    <option value="Docente">Docente</option>
                    <option value="Auxiliar">Auxiliar</option>
                    <option value="Estudiante">Estudiante</option>
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
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">
                Registrar
            </button> -->
            <button class="btn btn-primary" >Registrar</button>
        </div>
    </div>
    
    </form>
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
<!-- <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
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
</div> -->