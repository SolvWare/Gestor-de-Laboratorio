<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Portafolio
        </h5>
        <div class="d-flex justify-content-center pt-0" style="position: relative; height: 545px; margin-top: .5rem; overflow: auto;">
            <div class="w-100">
                <div class="pl-2 pr-2">
                
                    <table class="table table-sm table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th><strong>Codigo</strong></th>
                                <th><strong>Nombre</strong></th>
                                <th><strong>Fecha Subida</strong></th>
                                <th class="text-center"><strong>Descargar</strong></th>
                                <th class="text-center"><strong>Eliminar</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($files as $file)
                            <tr class="">
                                    <th>{{$file->id}}</th>
                                    <th>{{$file->name}}</th>
                                    <th>{{$file->created_at}}</th>
                                    
                                    <th class="text-center">
                                    
                                    <a href="storage/upload/{{$file->name}}" download="{{$file->name}}">
                                        <button style="font-size:15px"><i class="glyphicon glyphicon-download">Download</i></button>
                                    </a>
                                    </th>
                                    <!-- <a>
                                        <button style="font-size:15px">Eliminar<i class="fa fa-trash-o"></i></button>
                                    </a> -->
                                    <th class="text-center">
                                        <form action="{{ route('portafolio.destroy', $file->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            
                                            <button style="font-size:15px">Eliminar<i class="fa fa-trash-o"></i></button>
                                            <input type="hidden" name="_method" value="DELETE">
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