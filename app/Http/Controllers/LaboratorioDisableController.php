<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laboratorio;

class LaboratorioDisableController extends Controller
{
    public function destroy($id){
        $laboratorio = Laboratorio::find($id);
            if($laboratorio->estado == 'Habilitado')
            {
                $laboratorio->estado = 'Deshabilitado';
                $laboratorio->save();
            }else{
                $laboratorio->estado = 'Habilitado';
                $laboratorio->save();
            }
        return back()->with('mensaje', 'El laboratorio fue Deshabilitado');
    }
}
