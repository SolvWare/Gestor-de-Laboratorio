<div class="">
    <div class="card">
        <h5 class="card-header text-center primary-color-dark p-2">
        Perfil de Rol
        </h5>
        <div class="d-flex justify-content-center p-2">
        <div class="w-75">
            <table class="table table-bordered mt-3">
                    <thead class="">
                        <tr>
                            <th><strong>Codigo</strong></th>
                            <th>{{$rol->codeR}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <th><strong>Nombre</strong></th>
                            <th>{{$rol->nameR}}</th>
                        </tr>
                        <tr class="">
                            <th><strong>Portafolio</strong></th>
                            <th>{{$rol->prib1}}</th>
                        </tr>
                        <tr class="">
                            <th><strong>Ver Estudiante</strong></th>
                            <th>{{$rol->prib2}}</th>
                        </tr>
                        <tr class="">
                            <th><strong>Reportes</strong></th>
                            <th>{{$rol->prib3}}</th>
                        </tr>
                        <tr class="">
                            <th><strong>Administrar Usuarios</strong></th>
                            <th>{{$rol->prib4}}</th>
                        </tr>
                        <tr class="">
                            <th><strong>Administrar Materias</strong></th>
                            <th>{{$rol->prib5}}</th>
                        </tr>
                        <tr class="">
                            <th><strong>Administrar Roles</strong></th>
                            <th>{{$rol->prib6}}</th>
                        </tr>
                        <tr class="">
                            <th><strong>Estado</strong></th>
                            <th>{{$rol->estado}}</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
