
<div>

<div class="bg-dark text-center p-1">
  <h3> Registrar rol de usuario</h3>
</div>

<div class="text-center bg-light p-5 mt-1">
   <div class=" text-dark" >
        <form>
        <div class="form-row"  style="margin-left:20%"> 
        <div class="col-6">
        <div class="form-group row">
            <label for="codigo" class="col-sm-2 col-form-label">Codigo</label>
            <div class="col-sm-6">
            <input type="number" class="form-control" id="codigo" placeholder="Ingrese codigo de rol">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre de rol">
            </div>
        </div>
        </div> 

        <div class="form-group form-check">
          <h5>Elija los privilegios del usuario</h5>
          <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember" required>privilegio 1<br>
          <input class="form-check-input" type="checkbox" name="remember" required>privilegio 2<br>
          <input class="form-check-input" type="checkbox" name="remember" required>privilegio 3<br>
          <input class="form-check-input" type="checkbox" name="remember" required>privilegio 4
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Check this checkbox to continue.</div>
          </label>
        </div>
        
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</div>

          <div class="bg-light text-center mt-1">
          <table class="table bg-light tam-list">
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
                <td >Administrador</td>
                <td><i class="fas fa-edit"></i></td>
                <td><i class="fas fa-check-square"></i></td>
              </tr>
              <tr>
                <th scope="row">30002</th>
                <td>Docente</td>
                <td><i class="fas fa-edit"></i></td>
                <td><i class="fas fa-check-square"></i></td>
              </tr>
              <tr>
                <th scope="row">30003</th>
                <td>Auxiliar</td>
                <td><i class="fas fa-edit"></i></td>
                <td><i class="fas fa-check-square"></i></td>
              </tr>
              <tr>
                <th scope="row">30004</th>
                <td>Estudiante</td>
                <td><i class="fas fa-edit"></i></td>
                <td><i class="fas fa-check-square"></i></td>
              </tr>
            </tbody>
          </table>
        </div>

</div>