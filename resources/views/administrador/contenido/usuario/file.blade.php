<div class="">
  <div class="card">
    <h5 class="card-header text-center primary-color-dark p-2">
    Subir Archivos
    </h5>
    <div class="d-flex justify-content-center p-2">
      <div class="w-50 pt-2 pb-3">
        <div class="text-center pb-2">
          <i class="fas fa-file-upload fa-7x text-dark"></i>
        </div>
        <div class="custom-file text-center">
        <form action="{{ url('file') }}" id="frm"method="POST" files="true" enctype="multipart/form-data">
            {{ csrf_field() }}
           
            <label for="Archivo"><b>Archivo: </b></label><input type="file" name="file" required>
            <input type="submit" class="btn btn-primary" value="Guardar">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>