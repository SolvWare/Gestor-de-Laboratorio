<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReporteRequest;
use App\Http\Controllers\Controller;
use App\Reporte;
use App\Sesion;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
use Auth;

class ReporteController extends Controller
{
    public function index(){
        $reportes = Reporte::orderBy('id', 'ASC')->get();
        //$reportes = User::find(Auth::id())->reportes;
        return view('administrador.pagina.reporte.reporte', compact('reportes'));
    }
    public function create(){
        $reporte = new Reporte();
        $sesiones = Sesion::all();
        return view('administrador.pagina.reporte.reporte');
    }
    public function show($id){
        $reporte = Reporte::find($id);
        return view('administrador.pagina.reporte.reporte', compact('reporte'));
    }
    public function edit($id){
        $reporte = Reporte::find($id);
        $sesiones = Sesion::all();
        return view('administrador.pagina.materia.matEditar', compact('reporte'));
    }
    public function destroy($id){
        $reporte = Reporte::where(array(
            'id' => $id,
            'user_id' => Auth::id()
         ))->first();
        $reporte->delete();
		return Redirect::to('reporte');
    }
    
    public function store(ReporteRequest $request){
        $reporte = new Reporte($request->all());
        $reporte->numReporte = $request->input('numReporte');
        $reporte->fecha = $request->input('fecha');
        $reporte->id_ses = $request->input('id_ses');
        //$reporte->user_id = Auth::id();
        $reporte->save();

        Flash::success('guardado');
        return Redirect::to('reporte')->with('mensaje','Registro de reporte exitoso');
    }
    public function update(ReporteRequest $request, $id){
        $reporte = Reporte::find($id);
        $reporte->numReporte = $request->input('numReporte');
        $reporte->fecha = $request->input('fecha');
        $reporte->id_ses = $request->input('id_ses');
        //$reporte->user_id = Auth::id();
        $reporte->save();
        return redirect('reporte')->with('mensaje','Actializacion de reporte exitoso');
    }

    public function listado(){
        $reporte = Reporte::orderBy('id', 'ASC')->where('rol','=','Auxiliar')->get();
        return view('reporte', compact('reporte'));
    }
}
