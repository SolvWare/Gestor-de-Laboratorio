<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Inscripcion A Laboratorio
        </h5>
        <div class="d-flex justify-content-center p-2">
            <div class="w-50">
                <!-- @include('administrador.opcion.error') -->
            <form action="{{ route('horario.',$horario->id) }}" method="POST" class="text-center" style="color: #757575;">
                    {{ csrf_field() }}
                    {{ @method_field('PUT') }}
                   
                    <div class="form-row">
                        <div class="col">
                            <div class="md-form mb-1">
                                <input maxlength="20" type="text" id="materialRegisterFormCode" class="form-control" aria-describedby="materialRegisterFormCodeHelpBlock" name='materia_id' value="{{$inscripcion->materia}}">
                                <label for="materialRegisterFormCode">Materia</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form mb-1">
                                <input maxlength="20" type="text" id="materialRegisterFormCode" class="form-control" aria-describedby="materialRegisterFormCodeHelpBlock" name='laboratorio_id' value="{{$inscripcion->laboratorio}}">
                                <label for="materialRegisterFormCode">Laboratorio</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="md-form mb-1">
                                <input maxlength="20" type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name='dia' value="{{$inscripcion->dia}}">
                                <label for="materialRegisterFormName">Dia</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form mb-1">
                                <input type="time"  id="materialRegisterFormGrup" class="form-control" aria-describedby="materialRegisterFormGrupHelpBlock" name='hora' value="{{$inscripcion->hora}}">
                                <label for="materialRegisterFormGrup">Hora</label>
                            </div>
                        </div>
                    </div>
                <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
            </form>
            </div>
        </div>
    </div>
</div>