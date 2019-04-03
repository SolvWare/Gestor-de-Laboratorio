
          <div class=" mt-1">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Codigo de rol</th>
                <th scope="col">Nombre de rol</th>
                <th scope="col">Editar</th>
                <th scope="col">Deshabilitar</th>
              </tr>
            </thead>
            <tbody  class=" table-active text-dark">
			
			<?php 
			foreach ($rol as $value) {
				if ($value->enabled_rol == 1) {
					?>
				<tr>
					<th scope="row"><?php echo $value->id_rol ?></th>
					<td class="text-left"><?php echo $value->name_rol ?></td>
					<td>
						{!! Form::open(['method' => 'PUT','route' => ['rol.update', $value->id_rol],'style'=>'display:inline']) !!}
						{!! Form::submit('modify', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</td>
	                <td>
						{!! Form::open(['method' => 'DELETE','route' => ['rol.destroy', $value->id_rol],'style'=>'display:inline']) !!}
						{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
				<?php
				}
			}
			?>
			</tbody>
          </table>
        </div>
