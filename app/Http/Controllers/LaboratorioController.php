<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laboratorio;
use App\Horario;
use App\Http\Requests\LaboratorioRequest;

class LaboratorioController extends Controller
{
    public function index(){
        $laboratorios = Laboratorio::orderBy('id', 'DESC')->get();
        return view('administrador.pagina.laboratorio.labListado', compact('laboratorios'));
    }
    public function create(){
        return view('administrador.pagina.laboratorio.labRegistro');
    }
    public function show($id){
        $laboratorio = Laboratorio::find($id);
        return view('administrador.pagina.laboratorio.labVista', compact('laboratorio'));
    }
    public function edit($id){
        $laboratorio = Laboratorio::find($id);
        return view('administrador.pagina.laboratorio.labEditar', compact('laboratorio'));
    }
    public function destroy($id){
        /*$laboratorio = Laboratorio::find($id);
        $laboratorio->delete();
        return back()->with('info', 'el laboratorio fue eliminado');*/
        $laboratorio = Laboratorio::find($id);
		if($laboratorio->estado == 'Habilitado')
		{
		$laboratorio->estado = 'Deshabilitado';
        $laboratorio->save();
		}else{
		$laboratorio->estado = 'Habilitado';
        $laboratorio->save();
		}
        return redirect('laboratorio');
    }
    
    public function store(LaboratorioRequest $request){
        $laboratorio = new Laboratorio();
        $laboratorio->nameL = $request->input('nameL');
        $laboratorio->capL = $request->input('capL');
        $laboratorio->save();
        return redirect('laboratorio')->with('mensaje','Registro de Laboratorio exitoso');
    }
    public function update(LaboratorioRequest $request, $id){
        $laboratorio = Laboratorio::find($id);
        $laboratorio->nameL = $request->input('nameL');
        $laboratorio->capL = $request->input('capL');
        $laboratorio->save();
        return redirect('laboratorio')->with('mensaje','Actializacion de Laboratorio exitoso');
    }

    public function listado(){
        $laboratorios = Laboratorio::orderBy('id', 'DESC')->where('estado','=','Habilitado')->get();
        return view('laboratorios', compact('laboratorios'));
    }
}
