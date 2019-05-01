<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Editar Materia
        </h5>
        <div class="d-flex justify-content-center p-2">
            <div class="w-50">
                @include('administrador.opcion.error')
                <form action="{{ route('materia.update', $materia->id) }}" method="POST" class="text-center" style="color: #757575;">
                    {{ csrf_field() }}
                    {{ @method_field('PUT') }}
                    <div class="md-form mb-1">
                        <label for="materialRegisterFormCode">Codigo de Materia</label>
                        <input maxlength="6" type="text" id="materialRegisterFormCode" class="form-control" aria-describedby="materialRegisterFormCodeHelpBlock" name='codeM' placeholder="{{$materia->codeM}}">
                    </div>
                    <div class="form-row mt-5">
                        <div class="col">
                            <div class="md-form mb-1">
                                <label for="materialRegisterFormName">Nombre de Materia</label>
                                <input maxlength="60" type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name='nameM' placeholder="{{$materia->nameM}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form mb-1">
                                <label for="materialRegisterFormGrup">Numero de Grupos</label>
                                <input type="number" step="1" id="materialRegisterFormGrup" class="form-control" aria-describedby="materialRegisterFormGrupHelpBlock" name='numGM' placeholder="{{$materia->numGM}}">
                            </div>
                        </div>
                    </div>
                <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>