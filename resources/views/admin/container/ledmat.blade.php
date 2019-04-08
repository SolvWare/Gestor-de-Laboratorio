<div class="" action="">
    <div class="card">
        <h2 class="card-header blue white-text text-center p-2">
        Listado de Materias
        </h2>
        <div class="d-flex justify-content-center pt-0">
            <div class="w-100">
                <div class="mt-1">
                <br><br>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Opps!</strong> Something went wrong<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Nº de grupos</th>
                                <th>Editar</th>
                                <th>Deshabilitar</th>
                            </tr>
                        </thead>
                        <tbody>    
                          @foreach($materiass as $materiaa)
                          <tr class="table-active">
                                <th>{{$materiaa->codigoM}}</th>
                                <th>{{$materiaa->nombreM}}</th>
                                <th>{{$materiaa->grupoM}}</th>
                                <th><a href="{{ url('/materia/'.$materiaa->id.'/edit')}}">edit</a></th>
                                <th>
                               <form action="{{ url('/materia/'.$materiaa->id) }}" method="POST" role="form">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-primary" onclick="return confirm('¿borrar?')">borrar</button>
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
    
<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-info">
            <h5 class="modal-title" id="exampleModal3Label">Desea deshabilitar este Rol</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body bg-secondary">
            La materia no se eliminara y se podra habilitar posteriormente<br>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Aceptar</button>
        </div>
        </div>
    </div>
</div>