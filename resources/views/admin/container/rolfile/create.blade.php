
<div class="bg-dark text-center p-1">
  <h3> Registrar rol de usuario</h3>
</div>

<div class="text-center bg-info p-1 mt-1">
   <div class="h-100 w-50 d-inline-block">
		{{ Form::open(['route'=>'rol.store', 'method'=>'POST']) }}
			@include('admin.container.rolFile.form_master')
		{{ form::close() }}
    </div>
</div>
