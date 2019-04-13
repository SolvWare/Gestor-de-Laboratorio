<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Editar Materia
        </h5>
        <div class="d-flex justify-content-center p-2">
            <div class="w-50">
                @include('administrador.opcion.error')
                <form action="{{ route('laboratorio.update', $laboratorio->id) }}" method="POST" class="text-center" style="color: #757575;">
                    {{ csrf_field() }}
                    {{ @method_field('PUT') }}
                    <div class="form-row mt-5">
                        <div class="col">
                            <div class="md-form mb-1">
                                <label for="laboratorioRegisterFormName">Nombre de Laboratorio</label>
                                <input maxlength="60" type="text" id="laboratorioRegisterFormName" class="form-control" aria-describedby="laboratorioRegisterFormNameHelpBlock" name='nameL' placeholder="{{$laboratorio->nameL}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form mb-1">
                                <label for="laboratorioRegisterFormCap">Capacidad</label>
                                <input type="number" step="1" id="laboratorioRegisterFormCap" class="form-control" aria-describedby="laboratorioRegisterFormCapHelpBlock" name='capL' placeholder="{{$laboratorio->capL}}">
                            </div>
                        </div>
                    </div>
                <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>