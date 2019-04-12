<?php
use Illuminate\Support\Facades\Route;

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
Route::get('viewDoc','UsuarioController@lisdoc');
/*Route::get('viewDoc', function () {
    return view('docpage');
});*/

Route::resource('materia','MateriaController');

//Route::get('viewMat','MateriaController@lismat');
/*Route::get('viewMat', function () {
    return view('matpage');
});*/
Route::get('viewLab', function () {
    return view('labpage');
});
//Route::get('login', function () {
  //  return view('auth/page/loginpage');
//});
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

//Route::get('registMat', function () {
 //   return view('admin/page/registmatpage');
//});

//Route::get('ledMat', function () {
 //   return view('admin/page/ledmatpage');
//});
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
Route::get('auxiliar', function () {
    return view('auxiliar/page/auxpage');
});
/*Docente*/
Route::get('docente', function () {
    return view('docente/page/docentpage');
});
/*Estudiante*/
Route::get('student', function () {
    return view('student/page/studentpage');
});



Route::resource('rol', 'RolController');
//Route::resource('materia', 'MateriaController');
Route::resource('usuario', 'UsuarioController');
Route::resource('importUsr', 'ImportController');
//Auth::routes();

// Route::get('logi','Auth\LoginController@showLoginForm');
// // Route::get('/logi', function(){
// //  return view('auth.page.loginpage');
// // });
// Route::post('/logi', 'Auth\LoginController@logi');
// Route::get('admin','AdminController@index')->name('admin');
// Route::get('logout','AdminController@logout')->name('logout');

//Route::get('/home', 'HomeController@index')->name('home');

// /*Llamadas al controlador Auth*/
// Route::get('login', 'AuthController@showLogin'); // Mostrar login
// Route::post('login', 'AuthController@postLogin'); // Verificar datos
// Route::get('logout', 'AuthController@logOut'); // Finalizar sesión
 
// /*Rutas privadas solo para usuarios autenticados*/
// Route::group(['before' => 'auth'], function()
// {
//     Route::get('admin', 'HomeController@index'); // Vista de inicio
// });
Route::resource('login', 'AdminController');
