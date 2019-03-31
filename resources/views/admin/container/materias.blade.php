
<div >

<div class="bg-dark text-center p-1">
  <h3> Registrar materia</h3>
</div>

<div class="text-center bg-light p-5 mt-1">
   <div class="h-100 w-50 d-inline-block text-dark">
        <form>
        <div class="form-group row">
            <label for="codigo" class="col-sm-3 col-form-label">Codigo</label>
            <div class="col-sm-6">
            <input type="number" class="form-control" id="codigo" placeholder="Ingrese codigo de materia">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre de materia">
            </div>
        </div>

        <div class="form-group row">
            <label for="nombre" class="col-sm-3 col-form-label">Grupos</label>
            <div class="col-sm-6">
            <input type="number" class="form-control" id="nombre" placeholder="Ingrese el numero de grupos">
            </div>
        </div>
        
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">Registrar</button>
        </form>
  </div>
</div>


<div class="bg-light mt-1 text-center">
  <table class="table  bg-light tam-list">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Codigo de rol</th>
        <th scope="col">Nombre de rol</th>
        <th scope="col">Editar</th>
        <th scope="col">Deshabilitar</th>
      </tr>
    </thead>
    <tbody class="table-active text-dark">
      <tr>
        <th>2010010</th>
        <td>Introduccion a la programacion</td>
        <td><i class="fas fa-edit"></i></td>
        <td><i class="fas fa-check-square"></i></td>
      </tr>
      <tr>
        <th>2010003</th>
        <td>Elementos</td>
        <td><i class="fas fa-edit"></i></td>
        <td><i class="fas fa-check-square"></i></td>
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
        <h5 class="modal-title" id="exampleModal3Label">Registro exitoso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-secondary">
        La materia se agrego de forma correcta <br>
        Precione continuar para mostrar la lista de los datos cargados
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
        <h5 class="modal-title" id="exampleModal4Label">Registro fallido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-secondary">
        La materia no se registro de forma correcta <br>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Continuar</button>
      </div>
    </div>
  </div>
</div>