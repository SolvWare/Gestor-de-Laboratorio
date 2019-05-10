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
Route::get('viewDoc', function () {
    return view('docentes');
});
Route::get('viewMat', function () {
    return view('materias');
});
Route::get('viewLab', function () {
    return view('laboratorios');
});
// Route::get('login', function () {
//     return view('login.login');
// });
Route::get('admi', function () {
    return view('administrador.pagina.inicio');
});

Route::get('estudiante', function () {
    return view('estudiante.pagina.inicio');
});

Route::resource('rol', 'RolController');

Route::resource('materia', 'MateriaController');
Route::get('listadoM','MateriaController@listado');

Route::resource('usuario', 'UsuarioController');
Route::get('listadousuario','UsuarioController@listado');
//Route::post('/desabilitar/{usuario}','UsuarioController@deshabilitar');
Route::get('/importUsr','ImportController@index');
Route::post('/importUsr', 'ImportController@import');

Route::resource('laboratorio', 'LaboratorioController');
Route::get('listadoL','LaboratorioController@listado');


Route::resource('inscripcion', 'InscripcionController');
Route::get('editInscripcion','InscripcionController@usu');

Route::get('file','FileController@showUploadForm');
Route::post('file','FileController@storesFile');
Route::resource('portafolio','FileController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('usuario','UserController');

Route::resource('/reporte/detalle', 'DetallesReportController');
//Route::get('listadoD','DetallesReportController@listado');
Route::resource('/reporte', 'ReporteController');
Route::get('listadoR','ReporteController@listado');
Route::resource('horario', 'HorarioController');
