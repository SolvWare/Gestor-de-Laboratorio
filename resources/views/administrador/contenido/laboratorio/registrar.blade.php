<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Registro de Laboratorio
        </h5>
        <div class="d-flex justify-content-center p-2">
            <div class="w-50">
                @include('administrador.opcion.error')
                <form action="{{ route('laboratorio.store') }}" method="POST" class="text-center">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col">
                            <div class="md-form mb-1">
                                <input maxlength="60" type="text" id="laboratorioRegisterFormName" class="form-control" aria-describedby="laboratorioRegisterFormNameHelpBlock" name='nameL'>
                                <label for="laboratorioRegisterFormName">Nombre de Laboratorio</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form mb-1">
                                <input type="number" step="1" id="laboratorioRegisterFormCap" class="form-control" aria-describedby="laboratorioRegisterFormCapHelpBlock" name='capL'>
                                <label for="laboratorioRegisterFormCap">Capacidad</label>
                            </div>
                        </div>
                    </div>
                <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>