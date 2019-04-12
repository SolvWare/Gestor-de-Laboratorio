<div class="">
    <div class="card">
        <h4 class="card-header primary-color-dark white-text text-center p-2">
        Registro de Roles
        </h4>
        <div class="d-flex justify-content-center pt-0">
        <div class="w-50">
            <form action="{{ route('rol.update', $rol->id) }}" method="PUT" class="text-center" style="color: #757575;">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col">
                        <div class="md-form mb-1">
                            <input maxlength="3" type="text" id="materialRegisterFormCode" class="form-control" aria-describedby="materialRegisterFormCodeHelpBlock" name="codeR">
                            <label for="materialRegisterFormCode">{{$rol->codeR}}</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form mb-1">
                            <input maxlength="30" type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="nameR">
                            <label for="materialRegisterFormName">{{$rol->nameR}}</label>
                        </div>
                    </div>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" name='prib1' @if($rol->prib1 == "on") checked @endif>
                    <label class="custom-control-label" for="customCheck1">Pribilegio 1</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2" name='prib2' @if($rol->prib2 == "on") checked @endif>
                    <label class="custom-control-label" for="customCheck2">Pribilegio 2</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck3" name='prib3' @if($rol->prib3 == "on") checked @endif>
                    <label class="custom-control-label" for="customCheck3">Pribilegio 3</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck4" name='prib4' @if($rol->prib4 == "on") checked @endif>
                    <label class="custom-control-label" for="customCheck4">Pribilegio 4</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck5" name='prib5' @if($rol->prib5 == "on") checked @endif>
                    <label class="custom-control-label" for="customCheck5">Pribilegio 5</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck6" name='prib6' @if($rol->prib6 == "on") checked @endif>
                    <label class="custom-control-label" for="customCheck6">Pribilegio 6</label>
                </div>
                <button class="btn btn-primary my-4 waves-effect z-depth-0" type="submit" data-toggle="modal" data-target="#exampleModal1">Registrar</button>
            </form>
        </div>
        </div>
    </div>
</div>
