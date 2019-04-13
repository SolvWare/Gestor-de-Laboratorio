<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Registro de Roles
        </h5>
        <div class="d-flex justify-content-center p-2">
        <div class="w-75">
            @include('administrador.opcion.error')
            <form action="{{ route('rol.store') }}" method="POST" class="text-center" style="color: #757575;">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col">
                        <div class="md-form mb-1">
                            <input maxlength="6" type="text" id="materialRegisterFormCode" class="form-control" aria-describedby="materialRegisterFormCodeHelpBlock" name="codeR">
                            <label for="materialRegisterFormCode">Codigo de Rol</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form mb-1">
                            <input maxlength="30" type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="nameR">
                            <label for="materialRegisterFormName">Nombre de Rol</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col pl-5">
                        <div class="custom-control custom-checkbox d-flex flex-row">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name='prib1'>
                            <label class="custom-control-label" for="customCheck1">Portafolio</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex flex-row">
                            <input type="checkbox" class="custom-control-input" id="customCheck2" name='prib2'>
                            <label class="custom-control-label" for="customCheck2">Ver Estudiante</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex flex-row">
                            <input type="checkbox" class="custom-control-input" id="customCheck3" name='prib3'>
                            <label class="custom-control-label" for="customCheck3">Reportes</label>
                        </div>
                    </div>
                    <div class="col pl-5">
                        <div class="custom-control custom-checkbox d-flex flex-row">
                            <input type="checkbox" class="custom-control-input" id="customCheck4" name='prib4'>
                            <label class="custom-control-label" for="customCheck4">Administrar Usuarios</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex flex-row">
                            <input type="checkbox" class="custom-control-input" id="customCheck5" name='prib5'>
                            <label class="custom-control-label" for="customCheck5">Administrar Materias</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex flex-row">
                            <input type="checkbox" class="custom-control-input" id="customCheck6" name='prib6'>
                            <label class="custom-control-label" for="customCheck6">Administrar Roles</label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
            </form>
        </div>
        </div>
    </div>
</div>
    