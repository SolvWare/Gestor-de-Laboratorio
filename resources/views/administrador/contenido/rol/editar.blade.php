<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Editar Rol
        </h5>
        <div class="d-flex justify-content-center p-2">
        <div class="w-75">
            @include('administrador.opcion.error')
            <form action="{{ route('rol.update', $rol->id) }}" method="POST" class="text-center" style="color: #757575;">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                <div class="form-row">
                    <div class="col">
                        <div class="md-form mb-1">
                            <label for="materialRegisterFormCode">Codigo de Rol</label>
                            <input maxlength="6" type="text" id="materialRegisterFormCode" class="form-control" aria-describedby="materialRegisterFormCodeHelpBlock" name="codeR" placeholder="{{$rol->codeR}}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form mb-1">
                            <label for="materialRegisterFormName">Nombre de Rol</label>
                            <input maxlength="30" type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="nameR" placeholder="{{$rol->nameR}}">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col pl-5">
                        <div class="custom-control custom-checkbox d-flex flex-row">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name='prib1' @if($rol->prib1 == "on") checked @endif>
                            <label class="custom-control-label" for="customCheck1">Portafolio</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex flex-row">
                            <input type="checkbox" class="custom-control-input" id="customCheck2" name='prib2' @if($rol->prib2 == "on") checked @endif>
                            <label class="custom-control-label" for="customCheck2">Ver Estudiante</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex flex-row">
                            <input type="checkbox" class="custom-control-input" id="customCheck3" name='prib3' @if($rol->prib3 == "on") checked @endif>
                            <label class="custom-control-label" for="customCheck3">Reportes</label>
                        </div>
                    </div>
                    <div class="col pl-5">
                        <div class="custom-control custom-checkbox d-flex flex-row">
                            <input type="checkbox" class="custom-control-input" id="customCheck4" name='prib4' @if($rol->prib4 == "on") checked @endif>
                            <label class="custom-control-label" for="customCheck4">Administrar Usuarios</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex flex-row">
                            <input type="checkbox" class="custom-control-input" id="customCheck5" name='prib5' @if($rol->prib5 == "on") checked @endif>
                            <label class="custom-control-label" for="customCheck5">Administrar Materias</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex flex-row">
                            <input type="checkbox" class="custom-control-input" id="customCheck6" name='prib6' @if($rol->prib6 == "on") checked @endif>
                            <label class="custom-control-label" for="customCheck6">Administrar Roles</label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
            </form>
        </div>
        </div>
    </div>
</div>