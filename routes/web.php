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

Route::group(['prefix' => 'admin'],function(){
    
    Route::resource('users','UsersController');
});

Route::get('user', function() {
    return view('admin/users/mainReg');
});

Route::get('rol', function() {
    return view('admin/roles/Mroles');
});

Route::get('materia', function() {
    return view('admin/materias/Mmateria');
});

Route::get('search', function() {
    return view('admin/search/Msearch');
});

Route::get('importar', function() {
    return view('admin/importar/import');
});