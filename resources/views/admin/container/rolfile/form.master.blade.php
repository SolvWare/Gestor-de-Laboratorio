<div class="row">
  <div class="col-sm-2">
    {!! form::label('nombreLabel','Nombre') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('name_rol') ? 'has-error' : "" }}">
      {{ Form::text('name_rol',NULL, ['class'=>'form-control', 'id_rol'=>'name_rol', 'placeholder'=>'Ingrese nombre de rol']) }}
      {{ $errors->first('name_rol', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="form-group">
  {{ Form::button(isset($model)? 'Update' : 'Registrar' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>
