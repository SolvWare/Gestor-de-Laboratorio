<div class="">
    <div class="card">
        <h2 class="card-header blue white-text text-center p-2">
        Registro de Roles
        </h2>
        <div class="d-flex justify-content-center pt-0">
        <div class="w-50">
            <form class="text-center" style="color: #757575;">
            <div class="md-form mt-4">
                <input type="text" id="materialRegisterFormCod" class="form-control">
                <label for="materialRegisterFormCod">Codigo de Rol</label>
            </div>
            <div class="md-form mt-4">
                <input type="text" id="materialRegisterFormName" class="form-control">
                <label for="materialRegisterFormName">Nombre de Rol</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Pribilegio 1</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">Pribilegio 2</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck3">
                <label class="custom-control-label" for="customCheck3">Pribilegio 3</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck4">
                <label class="custom-control-label" for="customCheck4">Pribilegio 4</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck5">
                <label class="custom-control-label" for="customCheck5">Pribilegio 5</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck6">
                <label class="custom-control-label" for="customCheck6">Pribilegio 6</label>
            </div>
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="button" data-toggle="modal" data-target="#exampleModal3">Registrar</button>
            </form>
        </div>
        </div>
        <div class="mt-1">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                </tr>
                </thead>
                <tbody>
                <tr class="table-active">
                    <th>001</th>
                    <th>Docente</th>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-info">
            <h5 class="modal-title" id="exampleModal3Label">Registro Exitoso</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body bg-secondary">
            El Rol se registro correctamente <br>
            Precione continuar para mostrar el rol registrado
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
            <h5 class="modal-title" id="exampleModal4Label">Error en el registro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body bg-secondary">
            El registro no se realizo de forma correcta <br>
            El Fallo puede deberce a: <br>
            El rol ya existe <br>
            Precione Continuar para volverlo a intentar
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Continuar</button>
        </div>
        </div>
    </div>
</div>