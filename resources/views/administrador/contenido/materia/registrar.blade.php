<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Registro de Materias
        </h5>
        <div class="d-flex justify-content-center p-2">
            <div class="w-50">
                @include('administrador.opcion.error')
                <form action="{{ route('materia.store') }}" method="POST" class="text-center" style="color: #757575;">
                    {{ csrf_field() }}
                    <div class="md-form mb-1">
                        <input maxlength="6" type="text" id="materialRegisterFormCode" class="form-control" aria-describedby="materialRegisterFormCodeHelpBlock" name='codeM'>
                        <label for="materialRegisterFormCode">Codigo de la Materia</label>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="md-form mb-1">
                                <input maxlength="60" type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name='nameM'>
                                <label for="materialRegisterFormName">Nombre de la Materia</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form mb-1">
                                <input type="number" step="1" id="materialRegisterFormGrup" class="form-control" aria-describedby="materialRegisterFormGrupHelpBlock" name='numGM'>
                                <label for="materialRegisterFormGrup">Número de grupos</label>
                            </div>
                        </div>
                    </div>
                <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>