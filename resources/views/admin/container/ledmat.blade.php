<div class="">
    <div class="card">
        <h4 class="card-header primary-color-dark white-text text-center p-2">
        Listado de Materias
        </h4>
        <div class="d-flex justify-content-center pt-0">
            <div class="w-100">
                <div class="mt-1">
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
                    <table class="table table-hover table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Nº de grupos</th>
                                <th>Editar</th>
                                <th>Deshabilitar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($materiass as $materiaa)
                                <tr class="table-active">
                                    <th>{{$materiaa->id}}</th>
                                    <th>{{$materiaa->codigoM}}</th>
                                    <th>{{$materiaa->nombreM}}</th>
                                    <th>{{$materiaa->grupoM}}</th>
                                    <th><a href="{{ url('/materia/'.$materiaa->id.'/edit')}}"><i class="fas fa-edit fa-lg"></a></th>
                                   <th>

                                   <form action="{{ url('/materia/'.$materiaa->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-link"><i class="fas fa-check-square fa-lg"></i></button>
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
    
