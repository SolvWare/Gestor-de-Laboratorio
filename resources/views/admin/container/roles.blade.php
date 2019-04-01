
<div>

<div class="bg-dark text-center p-1">
  <h3> Registrar rol de usuario</h3>
</div>

<div class="text-center bg-info p-1 mt-1">
   <div class="h-100 w-50 d-inline-block">
        <form>
        <div class="form-group row">
            <label for="codigo" class="col-sm-2 col-form-label">Codigo</label>
            <div class="col-sm-10">
            <input type="number" class="form-control" id="codigo" placeholder="Ingrese codigo de rol">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre de rol">
            </div>
        </div>

        
        <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</div>

          <div class=" mt-1">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Codigo de rol</th>
                <th scope="col">Nombre de rol</th>
                <th scope="col">Editar</th>
                <th scope="col">Deshabilitar</th>
              </tr>
            </thead>
            <tbody  class=" table-active text-dark">
              <tr>
                <th scope="row">30001</th>
                <td class="text-left">Administrador</td>
                <td><i class="fas fa-edit"></i></td>
                <td><i class="fas fa-trash-alt"></i></td>
              </tr>
              <tr>
                <th scope="row">30002</th>
                <td>Docente</td>
                <td><i class="fas fa-edit"></i></td>
                <td><i class="fas fa-trash-alt"></i></td>
              </tr>
              <tr>
                <th scope="row">30003</th>
                <td>Auxiliar</td>
                <td><i class="fas fa-edit"></i></td>
                <td><i class="fas fa-trash-alt"></i></td>
              </tr>
              <tr>
                <th scope="row">30004</th>
                <td>Estudiante</td>
                <td><i class="fas fa-edit"></i></td>
                <td><i class="fas fa-trash-alt"></i></td>
              </tr>
            </tbody>
          </table>
        </div>

</div>