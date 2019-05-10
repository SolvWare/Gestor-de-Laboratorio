<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use App\Laboratorio;
// use App\Http\Requests\HorarioRequest;
use App\Materia;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class HorarioController extends Controller
{
    
    public function index(){
        $horarios = Horario::orderBy('dia', 'ASC')->get();
        $laboratorios = Laboratorio::orderBy('id', 'ASC')->get();
        return view('administrador.pagina.horario.horarioListado', compact('horarios','laboratorios'));
    }
    public function create(){
        $laboratorios = Laboratorio::orderBy('id', 'ASC')->get();
        $materias = Materia::orderBy('id', 'ASC')->get();
        return view('administrador.pagina.horario.horarioRegistro', compact('laboratorios','materias'));
    }
    public function show($id){
        $horario = Horario::find($id);
        return view('administrador.pagina.horario.horarioVista', compact('horario'));
    }
    public function edit($id){
        $horario = Horario::find($id);
        return view('administrador.pagina.horario.horarioEditar', compact('horario'));
    }
    public function destroy($id){
        /*$horario = Horario::find($id);
        $horario->delete();
        return back()->with('info', 'el Horario fue eliminado');*/
        $horario= Horario::find($id);
		if($horario->estado == 'Habilitado')
		{
		$horario->estado = 'Deshabilitado';
        $horario->save();
		}else{
		$horario->estado = 'Habilitado';
        $horario->save();
		}
        return redirect('horario');
    }
    
    public function store(Request $request){
        $horario = new Horario();
        $horario->laboratorio_id = $request->input('laboratorio_id');
        $horario->materia_id = $request->input('materia_id');
        $horario->dia = $request->input('dia');
        $horario->hora_ini = $request->input('hora_ini');
        $horario->hora_fin = $request->input('hora_fin');
        $horario->save();
        return redirect('horario')->with('mensaje','Registro de Horario exitoso');
    }

    public function update(Request $request, $id){
        $horario = Horario::find($id);
        $horario->laboratorio_id = $request->input('laboratorio_id');
        $horario->dia = $request->input('dia');
        $horario->hora_ini = $request->input('hora_ini');
        $horario->hora_fin = $request->input('hora_fin');
		$horario->save();
        return redirect('horario')->with('mensaje','Actualizacion de Horario exitoso');
    }

    public function listado(){
        $horarios = Horario::orderBy('dia', 'ASC')->where('estado','=','Habilitado')->get();
        $laboratorios = Laboratorio::orderBy('id', 'ASC')->get();
        return view('horarios', compact('horarios','laboratorios'));
    }
}
