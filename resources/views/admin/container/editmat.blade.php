<div class="">
    <div class="card">
        <h2 class="card-header blue white-text text-center p-2">
        Registro de Materias
        </h2>
        <div class="d-flex justify-content-center pt-0">
            <div class="w-50">
              
                    <div class="row">
                        <div class="col-lg-12 mt40">
                            <div class="pull-left">
                                <h2>Add Note</h2>
                            </div>
                        </div>
                    </div>
                        
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif
                    <form  action="{{ url('/materia/'.$mate_info->id) }}" method="POST" class="text-center" style="color: #757575;">
                   {{ csrf_field() }}
                   {{ method_field('PATCH') }}
                    <div class="md-form mt-4">
                        <input type="text" id="materialRegisterFormCod" class="form-control" name="codigoM" value="{{$mate_info->codigoM}}">
                        
                        <label for="materialRegisterFormCod">Codigo de Materia</label>
                       
                    </div>
                    <div class="form-row">
                        <div class="col">
                        <div class="md-form mb-1">
                            <input type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="nombreM" value="{{$mate_info->nombreM}}">
                            <label for="materialRegisterFormName">Nombre de la Materia</label>
                           
                        </div>
                        </div>
                        <div class="col">
                        <div class="md-form mb-1">
                            <input type="text" id="materialRegisterFormGrup" class="form-control" aria-describedby="materialRegisterFormGrupHelpBlock" name="grupoM" value="{{$mate_info->grupoM}}">
                            <label for="materialRegisterFormGrup">Número de grupos</label>
                        </div> 
                        </div>
                    </div>
                  <input class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"  type="submit" data-toggle="modal" acdata-target="#exampleModal3" value="GUARDAR">
                </form>
            </div>
        </div>
    </div>
</div>