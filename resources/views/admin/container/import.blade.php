<div class="">
    <div class="card">
      <h4 class="card-header primary-color-dark white-text text-center p-2">
      Importar Usuarios
      </h4>
      <div class="d-flex justify-content-center pt-2">
        <div class="w-50">
          <div class="text-center pb-2">
            <a><i class="fas fa-file-csv "></i>
          </div>
          <div class="custom-file">
              <input type="file" accept=".csv" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Escoger Archivo</label>
          </div>
          <div class="d-flex justify-content-center">
            <div class=" p-2">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                  Cargar Archivo 
                </button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header blue">
        <h5 class="modal-title" id="exampleModal1Label">Error en la importacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-info">
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