<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserDisableController extends Controller
{
    public function destroy($id){
        $user = User::find($id);
            if($user->estado == 'Habilitado')
            {
                $user->estado = 'Deshabilitado';
                $user->save();
            }else{
                $user->estado = 'Habilitado';
                $user->save();
            }
        return back()->with('mensaje', 'El Usuario fue Deshabilitado');
    }
}
