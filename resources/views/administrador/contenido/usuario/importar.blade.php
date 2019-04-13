<div class="">
  <div class="card">
    <h5 class="card-header text-center primary-color-dark p-2">
    Importar Usuarios
    </h5>
    <div class="d-flex justify-content-center p-2">
      <div class="w-50 pt-2 pb-3">
        <div class="text-center pb-2">
          <i class="fas fa-file-import fa-7x text-dark"></i>
        </div>
        <div class="custom-file text-center">
          <form action="{{ url('importUsr') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" accept=".csv , .xls , .xlsx" class="custom-file-input" id="customFile" name="file">
            <label class="custom-file-label" for="customFile">Escoger Archivo</label>
            <input type="submit" class="btn btn-primary">
          </form>
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