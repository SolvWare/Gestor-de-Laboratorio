

/*@section('title','Crear Usuario')*/


<div style="position: absolute;
                top: 180px;
                left:17%;
                border-style: solid;
                border: 2px solid gray;
                border-radius: 8px;
                width: 67%;
                height:500px;
                border-width: 5px 5px 5px 5px;" >

<div class="text-center">
  <h3> Registrar Usuario</h3>
</div>


<form style="padding: 12px 30px;
             margin: 5px 0;
             display: inline-block;
             width: 80%;">
  <div class="form-group row">
    <label for="codigo" class="col-sm-2 col-form-label">Codigo</label>
    <div class="col-sm-10">
    <input type="number" class="form-control" id="codigo" placeholder="Ingrese codigo de usuario">
    </div>
  </div>
  <div class="form-group row">
    <label for="ci" class="col-sm-2 col-form-label">CI</label>
    <div class="col-sm-10">
    <input type="number" class="form-control" id="ci"  placeholder=" Ingrese carnet de identidad">
    </div>
 </div>
  <div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre">
    </div>
  </div>
  <div class="form-group row">
    <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="apellido" placeholder="Ingrese apellidos">
    </div>
  </div>
  <div class="form-group row">
    <label for="materia" class="col-sm-2 col-form-label">Materia</label>
    <div class="col-sm-10">
    <input type="number" class="form-control" id="materia" placeholder="Ingrese codigo de materia">
    </div>
  </div>
  <div class="form-group row">
    <label for="grupo" class="col-sm-2 col-form-label">Grupo</label>
    <div class="col-sm-10">
    <input type="number" class="form-control" id="grupo" placeholder="Ingrese grupo">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>

</div>