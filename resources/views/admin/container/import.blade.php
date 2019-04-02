<div class="">
    <div class="card">
      <h2 class="card-header blue white-text text-center p-2">
      Importar Usuarios
      </h2>
      <div class="d-flex justify-content-center pt-2">
        <div class="w-50">
          <div class="text-center pb-2">
            <img src="https://cdn2.iconfinder.com/data/icons/flat-file-types-1-1/300/icon_file-CSV_plano-512.png" width="100" height="100" class="img-fluid" alt="Responsive image">
          </div>
          <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Escoger Archivo</label>
          </div>
          <div class="d-flex justify-content-center">
            <div class=" p-2">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">
                  Cargar Archivo 
                </button>
            </div>
          </div>
        </div>
      </div>
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
        <button type="button" class="btn btn-primary">Continuar</button>
      </div>
    </div>
  </div>
</div>