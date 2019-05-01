<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Listado de Laboratorios
        </h5>
        <div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
            <div class="w-100">
                <div class="pl-2 pr-2">
                    @include('administrador.opcion.confirmacion')
                    <table class="table table-sm table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th><strong>Nombre</strong></th>
                                <th><strong>Capacidad</strong></th>
                                <th class="text-center"><strong>Ver</strong></th>
                                <th class="text-center"><strong>Editar</strong></th>
                                <th class="text-center"><strong>Deshabilitar</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($laboratorios as $laboratorio)
                                <tr class="">
                                    <th>{{$laboratorio->nameL}}</th>
                                    <th>{{$laboratorio->capL}}</th>
                                    <th class="text-center">
                                        <form action="{{ route('laboratorio.show', $laboratorio->id) }}" method="GET">
                                            <button class=""><i class="fas fa-eye fa-lg"></i></button>
                                        </form>
                                    </th>
                                    <th class="text-center">
                                        <form action="{{ route('laboratorio.edit', $laboratorio->id) }}" method="GET">
                                            <button class=""><i class="fas fa-edit fa-lg"></i></button>
                                        </form>
                                    </th>
                                    <th class="text-center">
                                        <form action="{{ route('laboratorio.destroy', $laboratorio->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            @if($laboratorio->estado == 'Habilitado')
                                              <input name="button" type=button onclick="if(confirm('Deseas continuar?')){ this.form.submit();}else{ alert('Operacion Cancelada');}" value="Deshabilitar" />
                                            @else($laboratorio->estado == 'Deshabilitado')
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