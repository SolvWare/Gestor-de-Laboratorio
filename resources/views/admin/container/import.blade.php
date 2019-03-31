<div>    
    <div class="bg-dark text-center p-1">
        <h4>Importar Usuarios</h4>
    </div>
    <div class="text-center p-1">
        <div class="w-25 d-inline-block text-center">
            <img class="img-thumbnail" src="https://cdn.icon-icons.com/icons2/20/PNG/128/business_application_addmale_useradd_insert_add_user_client_2312.png" alt="Thumbnail image">
        </div>
        <div class="w-50 d-inline-block">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <div class="p-2">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">
                  Cargar Archivo 
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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                </tr><tr>
                    <th scope="row">3</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
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
        <h5 class="modal-title" id="exampleModal3Label">Importacion Exitosa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-secondary">
        El Archivo se cargo de forma correcta <br>
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
        <h5 class="modal-title" id="exampleModal4Label">Error en la importacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-secondary">
        El Archivo no se cargo de forma correcta <br>
        El Fallo puede deberce a: <br>
        Los datos no se encuentran de forma correcta <br>
        El archivo esta dañado <br>
        Precione Continuar para volverlo a intentar
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" >Continuar</button>
      </div>
    </div>
  </div>
</div>