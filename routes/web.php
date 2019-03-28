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

Route::get('login', function () {
    return view('login/page/loginpage');
});
Route::get('importUsr', function () {
    return view('admin/page/importpage');
});
Route::get('registUsr', function () {
    return view('admin/page/registpage');
});
Route::get('search', function () {
    return view('admin/page/searchpage');
});
Route::get('aux', function () {
    return view('auxiliar/page/auxpage');
});
Route::get('docent', function () {
    return view('docent/page/docentpage');
});
Route::get('student', function () {
    return view('student/page/studentpage');
});
