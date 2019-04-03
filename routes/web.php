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

Route::get('home', function () {
    return view('inicio/home');
});

Route::get('login', function () {
    return view('login/page/viewlogin');
});

Route::get('estudiante', function () {
    return view('estudiante/page/viewest');
});


Route::get('docente', function() {
    return view('docente/page/viewdoc');
});

Route::get('auxiliar', function() {
    return view('auxiliar/page/viewaux');
});

/* Route::get('rol', function() {
    return view('admin/roles/Mroles');
});

Route::get('materia', function() {
    return view('admin/materias/Mmateria');
});
 */
Route::get('search', function() {
    return view('admin/page/searchpage');
});

Route::get('import', function() {
    return view('admin/page/importpage');
});

Route::get('regist', function() {
    return view('admin/page/registpage');
});

Route::get('adm', function() {
    return view('admin/page/viewadm');
});

Route::get('mater', function() {
    return view('admin/page/materiapage');
});

Route::resource('rol','RolController');

Route::get('rol', function() {
    return view('admin/page/rolpage');
});
