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
/*public*/
Route::get('/', function () {
    return view('welcome');
});
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
Route::get('registMat', function () {
    return view('admin/page/registmatpage');
});
Route::get('ledMat', function () {
    return view('admin/page/ledmatpage');
});


// registro de usuarios-registUsr
Route::get('/usuario','UsuarioController@index');
Route::post('/usuario','UsuarioController@store');
Route::get('/usuario/{id}','UsuarioController@show');


//listado y busqueda de usuarios
Route::get('/search','UsuarioController@search');
//importar usuarios
Route::get('/importUsr','ImportController@index');
Route::post('/importUsr', 'ImportController@import');

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
