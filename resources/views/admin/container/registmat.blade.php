<div class="">
    <div class="card">
        <h4 class="card-header primary-color-dark white-text text-center p-2">
        Registro de Materias
        </h4>
        <div class="d-flex justify-content-center pt-0">
            <div class="w-50">
                <form action="{{ route('materia.store') }}" method="POST" class="text-center" style="color: #757575;">
                    {{ csrf_field() }}
                    <div class="md-form mb-1">
                        <input type="text" id="materialRegisterFormCode" class="form-control" aria-describedby="materialRegisterFormCodeHelpBlock" name='codeM'>
                        <label for="materialRegisterFormCode">Codigo de la Materia</label>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="md-form mb-1">
                                <input type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name='nameM'>
                                <label for="materialRegisterFormName">Nombre de la Materia</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form mb-1">
                                <input type="text" id="materialRegisterFormGrup" class="form-control" aria-describedby="materialRegisterFormGrupHelpBlock" name='numGM'>
                                <label for="materialRegisterFormGrup">Número de grupos</label>
                            </div>
                        </div>
                    </div>
                <button class="btn btn-primary my-4 waves-effect z-depth-0" type="submit" data-toggle="modal">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>