<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Logout;

class LoginController extends Controller
{
   public function __construct(){

      $this->middleware('guest', ['only' => 'showLoginForm']);
   }

 public function showLoginForm(){

    return view('auth.page.loginpage');
 }


     public function logi() {


       $credentials = $this->validate(request(),[
            $this->username() => 'required',
            'ciUsr' => 'required',
            
        ]
        );
        if(Auth::attempt($credentials))
          {
         return redirect()->route('admin.page.adminpage');
         }
         //return 'error en la autenticacion';
         return back()
         ->withErrors([$this->username() => trans('auth failed')])
         ->whithInput(request([$this->username()]));
     }

     public function logout(){

        Auth::logout();

        return  redirect('/');
     }

     public function username(){

        return 'codSis';
     }
    
}
