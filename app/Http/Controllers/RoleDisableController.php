<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;

class RoleDisableController extends Controller
{
    public function destroy($id){
        $role = Role::find($id);
            if($role->estado == 'Habilitado')
            {
                $role->estado = 'Deshabilitado';
                $role->save();
            }else{
                $role->estado = 'Habilitado';
                $role->save();
            }
        return back()->with('mensaje', 'El rol fue Deshabilitado');
    }
}
