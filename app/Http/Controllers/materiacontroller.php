<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;
use App\Usuario;
use App\Http\Requests\MateriaRequest;

class MateriaController extends Controller
{
    public function index(){
        $materias = Materia::orderBy('id', 'DESC')->get();
        return view('administrador.pagina.materia.matListado', compact('materias'));
        
    }

    public function create(){
        return view('administrador.pagina.materia.matRegistro');
    }
    public function show($id){
        $materia = Materia::find($id);
        return view('administrador.pagina.materia.matVista', compact('materia'));
    }
    public function edit($id){
        $materia = Materia::find($id);
        return view('administrador.pagina.materia.matEditar', compact('materia'));
    }
    public function destroy($id){
        /*$materia = Materia::find($id);
        $materia->delete();
        return back()->with('info', 'el materia fue eliminado');*/
        $materia = Materia::find($id);
		if($materia->estado == 'Habilitado')
		{
		$materia->estado = 'Deshabilitado';
        $materia->save();
		}else{
		$materia->estado = 'Habilitado';
        $materia->save();
		}
        return redirect('materia');
    }
    
    public function store(MateriaRequest $request){
        $materia = new Materia();
        $materia->codeM = $request->input('codeM');
        $materia->nameM = $request->input('nameM');
        $materia->numGM = $request->input('numGM');
        $materia->save();
        return redirect('materia')->with('mensaje','Registro de Materia exitoso');
    }
    public function update(MateriaRequest $request, $id){
        $materia = Materia::find($id);
        $materia->codeM = $request->input('codeM');
        $materia->nameM = $request->input('nameM');
        //$materia->numGM = $request->input('numGM');
        $materia->save();
        return redirect('materia')->with('mensaje','Actializacion de Materia exitoso');
    }

    public function listado(){
        $materias = Materia::orderBy('id', 'DESC')->where('estado','=','Habilitado')->get();
        return view('materias', compact('materias'));
    }
}
