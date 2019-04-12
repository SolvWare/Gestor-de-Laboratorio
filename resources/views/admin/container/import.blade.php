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
          <form action="{{ url('importUsr') }}" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  Choose your xls/csv File : <input type="file" name="file" class="form-control">

                  <input type="submit" class="btn btn-primary btn-lg" style="margin-top: 3%">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

