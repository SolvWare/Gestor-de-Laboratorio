<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Dia Hora
        </h5>
        <div class="d-flex justify-content-center p-2">
            <div class="w-50">
                <!-- @include('administrador.opcion.error') -->
            <form action="{{ route('horario.store') }}" method="POST" class="text-center" style="color: #757575;">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col">
                            <div class="md-form mb-1">
                            <select class="custom-select" id="SelectHora">
                            <option selected>Elija hora</option>
                            <option value="1">6:45</option>
                            <option value="2">8:15</option>
                            <option value="3">9:45</option>
                            <option value="3">11:15</option>
                            <option value="3">12:45</option>
                            <option value="3">14:15</option>
                            <option value="3">15:45</option>
                            <option value="3">17:15</option>
                            <option value="3">18:45</option>
                            <option value="3">20:15</option>
                            </select>
                            </div>
                        </div>
                        <div class="col">
                            <select class="custom-select" id="SelectDia">
                            <option selected>Elija dia</option>
                            <option value="1">lunes</option>
                            <option value="2">martes</option>
                            <option value="3">miercoles</option>
                            <option value="3">jueves</option>
                            <option value="3">viernes</option>
                            <option value="3">sabado</option>
                            </select>
                        </div>
                    </div>
                <button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Inscribirse</button>
            </form>
            </div>
        </div>
    </div>
</div>