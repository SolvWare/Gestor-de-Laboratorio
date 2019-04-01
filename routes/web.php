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


Route:: get('/materia', 'materiacontroller@create');
Route:: get('/materia/{id}', 'materiacontroller@getmateria');
Route::post('/materia', 'materiacontroller@store');