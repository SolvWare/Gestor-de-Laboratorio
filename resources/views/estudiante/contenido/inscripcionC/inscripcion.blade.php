<div class="">
    <div class="card">
			<select name='taskOption' id="horarioRegisterFormDia" class="form-control" aria-describedby="horarioRegisterFormDiaHelpBlock"action="{{ route('inscripcion.store') }}" method="POST" class="text-center">
				@foreach ($inscripcions as $inscripcion)
				@foreach ($usuarios as $usuario)
					@if($inscripcion->usuario_id == $usuario->id)
						<option value="{{$inscripcion->usuario_id}}">{{$usuario->nameU}}</option>
					@else
                    @endif
				@endforeach
            @endforeach
			</select>
		  </div>
		<div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
            <div class="w-100">
                <div class="pl-2 pr-2">
                    <!-- @include('administrador.opcion.confirmacion') -->
                    <table class="table table-sm table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th><strong>materia</strong></th>
                                <th><strong>laboratorio</strong></th>
                                <th><strong>dia</strong></th>
                                <th><strong>hora</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inscripcions as $inscripcion)
                                <tr class="">
                                <th> @foreach ($materias as $materia)
                                        {{$inscripcion->materia == $materia->id ? $materia->nameM : ''}}
                                    @endforeach   
                                    </th>
                                    <th> @foreach ($laboratorios as $laboratorio)
                                        {{$inscripcion->laboratorio == $laboratorio->id ? $laboratorio->nameL : ''}}
                                    @endforeach   
                                    </th>
                                    <th>
                                    @foreach ($horarios as $horario)
                                        {{$inscripcion->dia == $horario->id ? $horario->dia : ''}}
                                    @endforeach  
                                    </th>
                                    <th>
                                    @foreach ($horarios as $horario)
                                        {{$inscripcion->hora == $horario->id ? $horario->hora_ini : ''}}
                                    @endforeach 
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
		
    </div>
</div>