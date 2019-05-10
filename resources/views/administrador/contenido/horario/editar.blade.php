<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Editar Horario
        </h5>
        <div class="d-flex justify-content-center p-2">
            <div class="w-50">
                @include('administrador.opcion.error')
                <form action="{{ route('horario.update', $horario->id) }}" method="POST" class="text-center" style="color: #757575;">
                    {{ csrf_field() }}
                    {{ @method_field('PUT') }}
                    <div class="form-row mt-5">
						<div class="col">
                            <div class="md-form mb-1">
                                <label for="horarioRegisterFormIdLab">Nombre de Laboratorio</label>
                                <input input ="9" type="text" id="horarioRegisterFormIdLab" class="form-control" aria-describedby="horarioRegisterFormIdLabHelpBlock" name='laboratorio_id' placeholder="{{$horario->laboratorio_id}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form mb-1">
                                <label for="horarioRegisterFormDia">Nombre de Horario</label>
                                <input input ="9" type="text" id="horarioRegisterFormDia" class="form-control" aria-describedby="horarioRegisterFormDiaHelpBlock" name='dia' placeholder="{{$horario->dia}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form mb-1">
                                <label for="horarioRegisterFormHoraIni">Horario Inicio</label>
                                <input maxlength="8" type="text" id="horarioRegisterFormHoraIni" class="form-control" aria-describedby="horarioRegisterFormHoraIniHelpBlock" name='hora_ini' placeholder="{{$horario->hora_ini}}">
                            </div>
                        </div>
						<div class="col">
                            <div class="md-form mb-1">
                                <label for="horarioRegisterFormHoraFin">Horario Fin</label>
                                <input maxlength="8" type="text" id="horarioRegisterFormHoraFin" class="form-control" aria-describedby="horarioRegisterFormHoraFinHelpBlock" name='hora_fin' placeholder="{{$horario->hora_fin}}">
                            </div>
                        </div>
                    </div>
                <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>