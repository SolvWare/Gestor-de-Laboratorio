<div class="">
    <div class="card">
        <h2 class="card-header blue white-text text-center p-2">
        Registro de Materias
        </h2>
        <div class="d-flex justify-content-center pt-0">
            <div class="w-50">
            
                <form  action="{{url('materia')}}" method="POST" class="text-center" style="color: #757575;">
                  
                    <div class="md-form mt-4">
                        <input type="text" id="materialRegisterFormCod" class="form-control" name="codigoM">
                     
                        <label for="materialRegisterFormCod">Codigo de Materia</label>
                    </div>
                    <div class="form-row">
                        <div class="col">
                        <div class="md-form mb-1">
                            <input type="text" id="materialRegisterFormName" class="form-control" aria-describedby="materialRegisterFormNameHelpBlock" name="nombreM">
                            <label for="materialRegisterFormName">Nombre de la Materia</label>
                        </div>
                        </div>
                        <div class="col">
                        <div class="md-form mb-1">
                            <input type="text" id="materialRegisterFormGrup" class="form-control" aria-describedby="materialRegisterFormGrupHelpBlock" name="grupoM">
                           
                            <label for="materialRegisterFormGrup">Número de grupos</label>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div> 
                        </div>
                    </div>
                  <input class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" action="{{url('listamaterias')}}" type="submit" data-toggle="modal" acdata-target="#exampleModal3" value="REGISTRAR">
                </form>
            </div>
        </div>
        <div class="mt-1">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>Codigo</th>
                <th>Materia</th>
                <th>Nº de Grupos</th>
            </tr>
            </thead>
            <tbody>
              
                <tr class="table-active">
                <td>{{$materia->codigoM}}</td>
                <td>{{$materia->nombreM}}</td>
                <td>{{$materia->grupoM}}</td>
                </tr>
              
            </tbody>
        </table>
        </div>
    </div>
</div>
    
<!-- Modal -->
<!--
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-info">
            <h5 class="modal-title" id="exampleModal3Label">Registro Exitoso</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body bg-secondary">
            La materia se registro correctamente <br>
            Precione continuar para mostrar l amateria registrada
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Continuar</button>
        </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModal4Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-danger ">
            <h5 class="modal-title" id="exampleModal4Label">Error en el registro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body bg-secondary">
            El registro no se realizo de forma correcta <br>
            El Fallo puede deberce a: <br>
            La materia ya existe <br>
            Precione Continuar para volverlo a intentar
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Continuar</button>
        </div>
        </div>
    </div>
</div>
-->