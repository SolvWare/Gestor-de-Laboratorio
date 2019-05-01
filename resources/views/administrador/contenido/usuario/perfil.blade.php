<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Perfil de Usuario
        </h5>
        <div class="d-flex justify-content-center p-0">
            <div class="w-75">
                <table class="table table-bordered mt-1 mb-1">
                    <thead class="">
                        <tr>
                            <th><strong>Codigo Sis</strong></th>
                            <th>{{$usuario->codSis}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <th><strong>CI</strong></th>
                            <th>{{$usuario->ciU}}</th>
                        </tr>
                        <tr class="">
                            <th><strong>Nombre</strong></th>
                            <th>{{$usuario->nameU}}</th>
                        </tr>
                        <tr class="">
                            <th><strong>Apellido</strong></th>
                            <th>{{$usuario->lastU}}</th>
                        </tr>
                        <tr class="">
                            <th><strong>Rol</strong></th>
                            <th>{{$usuario->rol}}</th>
                        </tr>
                        <tr class="">
                            <th><strong>Materia</strong></th>
                            <th>{{$usuario->materia}}</th>
                        </tr>
                        <tr class="">
                            <th><strong>Grupo</strong></th>
                            <th>{{$usuario->grupo}}</th>
                        </tr>
                        <tr class="">
                            <th><strong>Estado</strong></th>
                            <th>{{$usuario->estado}}</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
