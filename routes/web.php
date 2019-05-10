<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('listadoD','UserController@listado');
Route::get('listadoM','MateriaController@listado');
Route::get('listadoL','LaboratorioController@listado');


Route::get('/importUsr','ImportController@index');
Route::post('/importUsr', 'ImportController@import');

//Routes

Route::middleware(['auth'])->group(function(){
    //Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
    ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');

    Route::delete('roledisables/{roledisable}', 'RoleDisableController@destroy')->name('roledisables.destroy')
    ->middleware('permission:roledisables.destroy');


    //Materias
    Route::post('materias/store', 'MateriaController@store')->name('materias.store')
    ->middleware('permission:materias.create');

    Route::get('materias', 'MateriaController@index')->name('materias.index')
    ->middleware('permission:materias.index');

    Route::get('materias/create', 'MateriaController@create')->name('materias.create')
    ->middleware('permission:materias.create');

    Route::put('materias/{materia}', 'MateriaController@update')->name('materias.update')
    ->middleware('permission:materias.edit');

    Route::get('materias/{materia}', 'MateriaController@show')->name('materias.show')
    ->middleware('permission:materias.show');

    Route::delete('materias/{materia}', 'MateriaController@destroy')->name('materias.destroy')
    ->middleware('permission:materias.destroy');

    Route::get('materias/{materia}/edit', 'MateriaController@edit')->name('materias.edit')
    ->middleware('permission:materias.edit');
    
    Route::delete('materiadisables/{materiadisable}', 'MateriaDisableController@destroy')->name('materiadisables.destroy')
    ->middleware('permission:materiadisables.destroy');

    //Laboratorios
    Route::post('laboratorios/store', 'LaboratorioController@store')->name('laboratorios.store')
    ->middleware('permission:laboratorios.create');

    Route::get('laboratorios', 'LaboratorioController@index')->name('laboratorios.index')
    ->middleware('permission:laboratorios.index');

    Route::get('laboratorios/create', 'LaboratorioController@create')->name('laboratorios.create')
    ->middleware('permission:laboratorios.create');

    Route::put('laboratorios/{laboratorio}', 'LaboratorioController@update')->name('laboratorios.update')
    ->middleware('permission:laboratorios.edit');

    Route::get('laboratorios/{laboratorio}', 'LaboratorioController@show')->name('laboratorios.show')
    ->middleware('permission:laboratorios.show');

    Route::delete('laboratorios/{laboratorio}', 'LaboratorioController@destroy')->name('laboratorios.destroy')
    ->middleware('permission:laboratorios.destroy');

    Route::get('laboratorios/{laboratorio}/edit', 'LaboratorioController@edit')->name('laboratorios.edit')
    ->middleware('permission:laboratorios.edit');
    
    Route::delete('laboratoriodisables/{materiadisable}', 'LaboratorioDisableController@destroy')->name('laboratoriodisables.destroy')
    ->middleware('permission:laboratoriodisables.destroy');

    //Horarios
    Route::post('horarios/store', 'HorarioController@store')->name('horarios.store')
    ->middleware('permission:horarios.create');

    Route::get('horarios', 'HorarioController@index')->name('horarios.index')
    ->middleware('permission:horarios.index');

    Route::get('horarios/create', 'HorarioController@create')->name('horarios.create')
    ->middleware('permission:horarios.create');

    Route::put('horarios/{horario}', 'HorarioController@update')->name('horarios.update')
    ->middleware('permission:horarios.edit');

    Route::get('horarios/{horario}', 'HorarioController@show')->name('horarios.show')
    ->middleware('permission:horarios.show');

    Route::delete('horarios/{horario}', 'HorarioController@destroy')->name('horarios.destroy')
    ->middleware('permission:horarios.destroy');

    Route::get('horarios/{horario}/edit', 'HorarioController@edit')->name('horarios.edit')
    ->middleware('permission:horarios.edit');


    //Usuarios
    Route::post('users/store', 'UserController@store')->name('users.store')
    ->middleware('permission:users.create');

    Route::get('users', 'UserController@index')->name('users.index')
    ->middleware('permission:users.index');

    Route::get('users/create', 'UserController@create')->name('users.create')
    ->middleware('permission:users.create');

    Route::put('users/{user}', 'UserController@update')->name('users.update')
    ->middleware('permission:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
    ->middleware('permission:users.show');

    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
    ->middleware('permission:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
    ->middleware('permission:users.edit');
    
    Route::delete('userdisables/{materiadisable}', 'UserDisableController@destroy')->name('userdisables.destroy')
    ->middleware('permission:userdisables.destroy');
    

    //Inscripciones
    Route::post('inscripciones/store', 'InscripcioneController@store')->name('inscripciones.store')
    ->middleware('permission:inscripciones.create');

    Route::get('inscripciones', 'InscripcioneController@index')->name('inscripciones.index')
    ->middleware('permission:inscripciones.index');

    Route::get('inscripciones/create', 'InscripcioneController@create')->name('inscripciones.create')
    ->middleware('permission:inscripciones.create');

    Route::put('inscripciones/{inscripcione}', 'InscripcioneController@update')->name('inscripciones.update')
    ->middleware('permission:inscripciones.edit');

    Route::get('inscripciones/{inscripcione}', 'InscripcioneController@show')->name('inscripciones.show')
    ->middleware('permission:inscripciones.show');

    Route::delete('inscripciones/{inscripcione}', 'InscripcioneController@destroy')->name('inscripciones.destroy')
    ->middleware('permission:inscripciones.destroy');

    Route::get('inscripciones/{inscripcione}/edit', 'InscripcioneController@edit')->name('inscripciones.edit')
    ->middleware('permission:inscripciones.edit');

    //Añadir Materias
    Route::get('addmaterias/{addmateria}', 'AddMateriaController@show')->name('addmaterias.show')
    ->middleware('permission:addmaterias.show');

    //Sesiones
    Route::post('sesiones/store', 'SesioneController@store')->name('sesiones.store')
    ->middleware('permission:sesiones.create');

    Route::get('sesiones', 'SesioneController@index')->name('sesiones.index')
    ->middleware('permission:sesiones.index');

    Route::get('sesiones/create', 'SesioneController@create')->name('sesiones.create')
    ->middleware('permission:sesiones.create');

    Route::put('sesiones/{sesione}', 'SesioneController@update')->name('sesiones.update')
    ->middleware('permission:sesiones.edit');

    Route::get('sesiones/{sesione}', 'SesioneController@show')->name('sesiones.show')
    ->middleware('permission:sesiones.show');

    Route::delete('sesiones/{sesione}', 'SesioneController@destroy')->name('sesiones.destroy')
    ->middleware('permission:sesiones.destroy');

    Route::get('sesiones/{sesione}/edit', 'SesioneController@edit')->name('sesiones.edit')
    ->middleware('permission:sesiones.edit');

    //Añadir Sesiones
    Route::get('addsesiones/', 'AddSesioneController@index')->name('addsesiones.index')
    ->middleware('permission:addsesiones.index');

    //Productos
    Route::post('productos/store', 'ProductoController@store')->name('productos.store')
    ->middleware('permission:productos.create');

    Route::get('productos', 'ProductoController@index')->name('productos.index')
    ->middleware('permission:productos.index');

    Route::get('productos/create', 'ProductoController@create')->name('productos.create')
    ->middleware('permission:productos.create');

    Route::put('productos/{producto}', 'ProductoController@update')->name('productos.update')
    ->middleware('permission:productos.edit');

    Route::get('productos/{producto}', 'ProductoController@show')->name('productos.show')
    ->middleware('permission:productos.show');

    Route::delete('productos/{producto}', 'ProductoController@destroy')->name('productos.destroy')
    ->middleware('permission:productos.destroy');

    Route::get('productos/{producto}/edit', 'ProductoController@edit')->name('productos.edit')
    ->middleware('permission:productos.edit');
    
    //Añadir Producto
    Route::get('addproductos/{addproducto}', 'AddProductoController@show')->name('addproductos.show')
    ->middleware('permission:addproductos.show');

    //Practicas
    Route::post('practicas/store', 'PracticaController@store')->name('practicas.store')
    ->middleware('permission:practicas.create');

    Route::get('practicas', 'PracticaController@index')->name('practicas.index')
    ->middleware('permission:practicas.index');

    Route::get('practicas/create', 'PracticaController@create')->name('practicas.create')
    ->middleware('permission:practicas.create');

    Route::put('practicas/{practica}', 'PracticaController@update')->name('practicas.update')
    ->middleware('permission:practicas.edit');

    Route::get('practicas/{practica}', 'PracticaController@show')->name('practicas.show')
    ->middleware('permission:practicas.show');

    Route::delete('practicas/{practica}', 'PracticaController@destroy')->name('practicas.destroy')
    ->middleware('permission:practicas.destroy');

    Route::get('practicas/{practica}/edit', 'PracticaController@edit')->name('practicas.edit')
    ->middleware('permission:practicas.edit');
    
    //Añadir Practica
    Route::get('addpracticas/{addpractica}', 'AddPracticaController@show')->name('addpracticas.show')
    ->middleware('permission:addpracticas.show');

    //Mis materias
    Route::get('mismaterias/', 'MisMateriasController@materias')->name('mismaterias.index')
    ->middleware('permission:mismaterias.index');
    //Mis horarios
    Route::get('mishorarios/', 'MisMateriasController@horarios')->name('mishorarios.index')
    ->middleware('permission:mishorarios.index');
    //Mis inscripciones
    Route::get('misinscripciones/', 'MisMateriasController@inscripciones')->name('misinscripciones.index')
    ->middleware('permission:misinscripciones.index');
    //Mis sesiones
    Route::get('missesiones/', 'MisMateriasController@sesiones')->name('missesiones.index')
    ->middleware('permission:missesiones.index');
    //Mis productos
    Route::get('misproductos/', 'MisMateriasController@productos')->name('misproductos.index')
    ->middleware('permission:misproductos.index');

    
    //Mis estudiantes
    Route::get('misestudiantes/', 'MisMateriasController@estudiantes')->name('misestudiantes.index')
    ->middleware('permission:misestudiantes.index');
    
    //Mis practicas
    Route::get('mispracticas/', 'MisMateriasController@practicas')->name('mispracticas.index')
    ->middleware('permission:mispracticas.index');

    
});
