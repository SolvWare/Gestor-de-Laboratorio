<div class="">
    <div class="card">
        <h4 class="card-header primary-color-dark white-text text-center p-2">
        Registro de Materias
        </h4>
        <div class="d-flex justify-content-center pt-0">
            <div class="w-50">
                     @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session('mensaje'))
                        <div class="alert alert-success">
                            <p>{{ session('mensaje') }}</p>
                        </div>
                    @endif
                <form action="{{ url('materia') }}" method="POST" class="text-center" style="color: #757575;">
                    {{ csrf_field() }}
                    <div class="md-form mb-1">
                        <input type="number" id="materialRegisterFormCode" class="form-control" aria-describedby="materialRegisterFormCodeHelpBlock" name="codigoM" value="{{ old('codigoM') }}">
                        <label for="materialRegisterFormCode">Codigo de la Materia</label>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="md-form mb-1">
                                <input type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="nombreM" value="{{ old('nombreM') }}">
                                <label for="materialRegisterFormName">Nombre de la Materia</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form mb-1">
                                <input type="number" id="materialRegisterFormGrup" class="form-control" aria-describedby="materialRegisterFormGrupHelpBlock" name="grupoM" value="{{ old('grupoM') }}">
                                <label for="materialRegisterFormGrup">Número de grupos</label>
                            </div>
                        </div>
                    </div>
                <input class="btn btn-primary my-4 waves-effect z-depth-0" type="submit" data-toggle="modal" value="Registrar">
                </form>
            </div>
        </div>
    </div>
</div>