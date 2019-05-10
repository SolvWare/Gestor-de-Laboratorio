<div class="">
    <div class="card">
			<select name='taskOption' id="horarioRegisterFormDia" class="form-control" aria-describedby="horarioRegisterFormDiaHelpBlock"action="{{ route('horario.store') }}" method="POST" class="text-center">
				@foreach ($horarios as $horario)
				@foreach ($laboratorios as $laboratorio)
					@if($horario->laboratorio_id == $laboratorio->id)
						<option value="{{$horario->laboratorio_id}}">{{$laboratorio->nameL}}</option>
					@else
                    @endif
				@endforeach
            @endforeach
			</select>
		  </div>
		<div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
            <div class="w-100">
                <div class="pl-2 pr-2">
                    @include('administrador.opcion.confirmacion')
                    <table class="table table-sm table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th><strong>Dia</strong></th>
                                <th><strong>Hora Inicio</strong></th>
                                <th><strong>Hora Final</strong></th>
                                <th class="text-center"><strong>Ver</strong></th>
                                <th class="text-center"><strong>Editar</strong></th>
                                <th class="text-center"><strong>Deshabilitar</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($horarios as $horario)
                                <tr class="">
                                    <th>{{$horario->dia}}</th>
                                    <th>{{$horario->hora_ini}}</th>
                                    <th>{{$horario->hora_fin}}</th>
                                    <th class="text-center">
                                        <form action="{{ route('horario.show', $horario->id) }}" method="GET">
                                            <button class=""><i class="fas fa-eye fa-lg"></i></button>
                                        </form>
                                    </th>
                                    <th class="text-center">
                                        <form action="{{ route('horario.edit', $horario->id) }}" method="GET">
                                            <button class=""><i class="fas fa-edit fa-lg"></i></button>
                                        </form>
                                    </th>
                                    <th class="text-center">
                                        <form action="{{ route('horario.destroy', $horario->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            @if($horario->estado == 'Habilitado')
                                              <input name="button" type=button onclick="if(confirm('Deseas continuar?')){ this.form.submit();}else{ alert('Operacion Cancelada');}" value="Deshabilitar" />
                                            @else($horario->estado == 'Deshabilitado')
                                              <input name="button" type=button onclick="if(confirm('Deseas continuar?')){ this.form.submit();}else{ alert('Operacion Cancelada');}" value="Habilitar" />
                                            @endif
                                        </form>
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