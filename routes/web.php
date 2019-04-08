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
    // return 'hola mundo';
   return view('welcome');
});


//Route:: get('/materia', 'materiacontroller@create');
//Route:: get('/materia/{id}', 'materiacontroller@getmateria');
//Route::post('/materia', 'materiacontroller@store');
//Route::post('/materia1', 'materiacontroller@show');
//Route:: get('/materia2', 'materiacontroller@edit');

//Route::get('/listamaterias', 'materiacontroller@listarmateria');
//Route::get('/editar', 'materiacontroller@edit');
Route::resource('materia','materiacontroller');
//jorge
Route::resource('rol','RolController');

Route::get('viewDoc', function () {
    return view('docpage');
});

Route::get('viewMat', function () {
    return view('matpage');
});
Route::get('viewLab', function () {
    return view('labpage');
});
Route::get('login', function () {
    return view('login/page/loginpage');
});
/*Administrador*/
Route::get('admi', function () {
    return view('admin/page/admipage');
});
Route::get('registRol', function () {
    return view('admin/page/registrolpage');
});
Route::get('ledRol', function () {
    return view('admin/page/ledrolpage');
});
/*
Route::get('registMat', function () {
    return view('admin/page/registmatpage');
});
*/

Route::get('importUsr', function () {
    return view('admin/page/importpage');
});
Route::get('registUsr', function () {
    return view('admin/page/registpage');
});
Route::get('search', function () {
    return view('admin/page/searchpage');
});
/*Auxiliar*/
Route::get('aux', function () {
    return view('auxiliar/page/auxpage');
});
/*Docente*/
Route::get('docent', function () {
    return view('docent/page/docentpage');
});
/*Estudiante*/
Route::get('student', function () {
    return view('student/page/studentpage');
});