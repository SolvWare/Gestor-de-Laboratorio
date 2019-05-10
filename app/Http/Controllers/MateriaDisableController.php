<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;

class MateriaDisableController extends Controller
{
    public function destroy($id){
        $materia = Materia::find($id);
            if($materia->estado == 'Habilitado')
            {
                $materia->estado = 'Deshabilitado';
                $materia->save();
            }else{
                $materia->estado = 'Habilitado';
                $materia->save();
            }
        return back()->with('mensaje', 'El materia fue Deshabilitado');
    }
}
