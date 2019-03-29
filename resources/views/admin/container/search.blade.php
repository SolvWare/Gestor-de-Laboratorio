<div>    
    <div class="bg-dark text-center p-1">
        <h4>Buscar Usuarios</h4>
    </div>
    <div class="text-center p-1">
        <div class="w-25 d-inline-block text-center">
            <img class="img-thumbnail" src="https://cdn.icon-icons.com/icons2/20/PNG/128/business_application_addmale_useradd_insert_add_user_client_2312.png" alt="Thumbnail image">
        </div>
        <div class="w-50 d-inline-block">
            <select class="custom-select">
                <option selected="">Buscar por</option>
                <option value="1">Codigo</option>
                <option value="2">CI</option>
                <option value="3">Nombre</option>
                <option value="3">Apellido</option>
            </select>
            <div class="p-1">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">
                    Buscar
                </button>
            </div>
        </div>
    </div>
    <div>
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
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModal4Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger ">
        <h5 class="modal-title" id="exampleModal4Label">Dato no encontrado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-secondary">
        El Archivo no se encontro el la base de datos <br>
        Precione Continuar para volverlo a intentar
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Continuar</button>
      </div>
    </div>
  </div>
</div>