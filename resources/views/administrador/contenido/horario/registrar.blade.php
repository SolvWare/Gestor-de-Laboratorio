			<div class="">
				<div class="card">
					<h5 class="card-header text-center primary-color-dark p-2">
					Registro de Horario
					</h5>
					<div class="d-flex justify-content-center p-2">
						<div class="w-50">
							@include('administrador.opcion.error')
							<form action="{{ route('horario.store') }}" method="POST" class="text-center">
								{{ csrf_field() }}
								<div class="form-row">
									<div class="col">
										<div class="md-form mb-1">
											<label for="horarioRegisterFormIdLab">Laboratorio</label><br><br>
											<select name='id_lab' id="horarioRegisterFormIdLab" class="form-control" aria-describedby="horarioRegisterFormIdLabHelpBlock">
											  <option value="null">Seleccione Laboratorio</option>
											  @foreach ($laboratorios as $laboratorio)
											  <option value="{{$laboratorio->id}}">{{$laboratorio->nameL}}</option>
											  @endforeach
											</select>
										</div>
									</div>
									<div class="col">
										<div class="md-form mb-1">
											<label for="horarioRegisterFormDia">Dia</label><br><br>
											<select name='dia' id="horarioRegisterFormDia" class="form-control" aria-describedby="horarioRegisterFormDiaHelpBlock">
											  <option value="null">Seleccione Laboratorio</option>
											  <option value="Lunes">Lunes</option>
											  <option value="Martes">Martes</option>
											  <option value="Miercoles">Miercoles</option>
											  <option value="Jueves">Jueves</option>
											  <option value="Viernes">Viernes</option>
											  <option value="Sabado">Sabado</option>
											</select>
										</div>
									</div>
									<div class="col">
										<div class="md-form mb-1">
											<label for="horarioRegisterFormHoraIni">Hora Inicio</label><br><br>
											<select id="horarioRegisterFormHoraIni" class="form-control" aria-describedby="horarioRegisterFormHoraIniHelpBlock" name='hora_ini'>
											  <option value="null">Seleccione Hora</option>
											  <option value="06:45:00">06:45:00</option>	
											  <option value="08:15:00">08:15:00</option>
											  <option value="09:45:00">09:45:00</option>
											  <option value="11:15:00">11:15:00</option>
											  <option value="12:45:00">12:45:00</option>
											  <option value="14:15:00">14:15:00</option>
											  <option value="15:45:00">15:45:00</option>
											  <option value="17:15:00">17:15:00</option>
											  <option value="18:45:00">18:45:00</option>
											  <option value="20:15:00">20:15:00</option>
											  <option value="21:45:00">21:45:00</option>
											  <?php $date = date("G:i:s"); if(strlen($date) == 7) $date = "0".$date; ?>
											  <option value="<?php echo $date; ?>"><?php echo $date . " Hora actual"; ?></option>
											</select>
										</div>
									</div>
									<div class="col">
										<div class="md-form mb-1">
											<label for="horarioRegisterFormHoraFin">Hora Final</label><br><br>
											<select id="horarioRegisterFormHoraFin" class="form-control" aria-describedby="horarioRegisterFormHoraFinHelpBlock" name='hora_fin'>
											<option value="null">Seleccione Hora</option>
											  <option value="06:45:00">06:45:00</option>
											  <option value="08:15:00">08:15:00</option>
											  <option value="09:45:00">09:45:00</option>
											  <option value="11:15:00">11:15:00</option>
											  <option value="12:45:00">12:45:00</option>
											  <option value="14:15:00">14:15:00</option>
											  <option value="15:45:00">15:45:00</option>
											  <option value="17:15:00">17:15:00</option>
											  <option value="18:45:00">18:45:00</option>
											  <option value="20:15:00">20:15:00</option>
											  <option value="21:45:00">21:45:00</option>
											  <?php $date = date("G:i:s"); if(strlen($date) == 7) $date = "0".$date; ?>
											  <option value="<?php echo $date; ?>"><?php echo $date . " Hora actual"; ?></option>
											</select>
										</div>
									</div>
								</div>
								<button class="btn btn-primary waves-effect" type="submit" data-toggle="modal">Registrar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
