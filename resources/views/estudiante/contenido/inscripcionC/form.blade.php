<div class="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <div class="card">
      <h5 class="card-header text-center primary-color-dark p-2">
        Inscripcion a Laboratorios
      </h5>
      <div class=" pb-2 pt-2">
            <!-- @include('administrador.opcion.confirmacion') -->
            <a class="btn btn-primary" href="/estudiante" role="button">Terminar Inscripcion</a>   
      </div>
      <div class="pl-2 pr-2" style="position: relative; height: 490px; margin-top: .5rem; overflow: auto;">
        <table class="table table-sm table-hover">
          <thead class="thead-light">
            <tr>
              <th><strong>Nombre</strong></th>
              <th><strong>Materia</strong></th>
              <th><strong>Laboratorio</strong></th>
              <th><strong>Dia</strong></th>
              <th><strong>Hora</strong></th>
              <th class="text-center"><strong>Inscripcion</strong></th>
            </tr>
          </thead>
          
          <tbody id="tabla1">
                
            <form action="{{ route('inscripcion.store') }}" method="POST" class="text-center" style="color: #757575;">
                {{ csrf_field() }}
                  
                    <td>
                    <select class="custom-select" id="SelectMaterias" name="usuario_id">
                    <option selected>nombre</option>
                    @foreach($usuarios as $usuario) 
                    <option value="{{$usuario->id}}">{{$usuario->nameU}}</option>
                    @endforeach
                    </select>
                    </td>    
                    <td>
                    <select class="custom-select" id="SelectMaterias" name="materia">
                    <option selected>Elija materias</option>
                    @foreach($materias as $materia) 
                    <option value="{{$materia->id}}">{{$materia->nameM}}</option>
                    @endforeach
                    </select>
                    </td>
                    <td>
                    <select class="custom-select" id="SelectMaterias" name="laboratorio">
                    <option selected>Elija labortorio</option>
                    @foreach($laboratorios as $laboratorio) 
                    <option value="{{$laboratorio->id}}">{{$laboratorio->nameL}}</option>
                    @endforeach
                    </select>
                    </td>
                    <td>
                    <select class="custom-select" id="SelectMaterias" name="dia">
                    <option selected>Elija dia</option>
                    @foreach($horarios as $horario) 
                        <option value="{{$horario->id}}">{{$horario->dia}}</option>
                    @endforeach    
                    </select>
                    </td>
                    <td>
                    <select class="custom-select" id="SelectMaterias" name="hora">
                    <option selected>Elija Hora</option>
                    @foreach($horarios as $horario) 
                        <option value="{{$horario->id}}">{{$horario->hora_ini}}</option>
                    @endforeach   
                    </select>
                    </td>
                    <th class="text-center">
                      <!-- <a class="btn btn" href="" role="button">Inscribirse</a> -->
                      <button class="btn btn-outline-primary" type="submit" >Inscribirse</button>
                    </th>
                    <!-- <button class="btn btn" type="submit" data-toggle="modal">Inscribirse</button> -->
                  </tr>
              </form>
          </tbody>
        </table>
      </div>
    </div>
</div>