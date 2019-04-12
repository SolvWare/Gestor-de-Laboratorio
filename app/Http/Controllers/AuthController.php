<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
class AuthController extends Controller
{
    
    public function showLogin()
    {
        // Verificamos si hay sesión activa
        if (Auth::check())
        {
            // Si tenemos sesión activa mostrará la página de inicio
            return Redirect::to('admin');
        }
        // Si no hay sesión activa mostramos el formulario
        return View('auth.page.loginpage');
    }
 
    public function postLogin()
    {

        $credentials = $this->validate(request(),[
            $this->username() => 'required',
            'ciUsr' => 'required',
            
        ]
        );
        if(Auth::attempt($credentials))
          {
         return view('admin.page.adminpage');
         }

    //     // Obtenemos los datos del formulario
    //     $data = [
    //         'codSis' => Input::get('codSis'),
    //         'ciUsr' => Input::get('ciUsr')
    //     ];
 
    //     // Verificamos los datos
    //     if (Auth::attempt($data, Input::get('remember'))) // Como segundo parámetro pasámos el checkbox para sabes si queremos recordar la contraseña
    //     {
    //         // Si nuestros datos son correctos mostramos la página de inicio
    //         return view('admin.page.admipage');
    //     }
    //     // Si los datos no son los correctos volvemos al login y mostramos un error
    //     //return 'error';
    //     //return view('admin.page.admipage');
    //    // return Redirect::back()->with('error_message', 'Invalid data')->withInput();
    }
 
    public function logOut()
    {
        // Cerramos la sesión
        Auth::logout();
        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        return Redirect::to('login')->with('error_message', 'Logged out correctly');

    }
    public function username(){

        return 'codSis';
     }
    
}
