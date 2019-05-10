<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DetalleRequest;
use App\Http\Controllers\Controller;
use App\DetalleReporte;
use App\Reporte;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
use Auth;
use App\Laboratorio;

class DetallesReportController extends Controller
{
    public function index()
    {
        $detalles = DetalleReporte::orderBy('id', 'ASC')->get();
        $usuarios = User::get();  //find(id())->detalles;
        $laboratorios = Laboratorio::get();
        return view('administrador.pagina.reporte.detalleR', compact('detalles', 'usuarios', 'laboratorios'));
    }
    
    public function create()
    {
        $detalle = new Detalle();
        $reportes = Reporte::all();
        return view('administrador.pagina.reporte.detalleR');
    }

    public function show($id){
        $detalle = DetalleReporte::find($id);
        return view('administrador.pagina.reporte.detalleR', compact('detalle'));
    }
    public function edit($id){
        $detalle = DetalleReporte::find($id);
        $reportes = Reporte::all();
        return view('administrador.pagina.reporte.detalleR', compact('detalle'));
    }
    public function destroy($id){
        $detalle = DetalleReporte::where(array(
            'id' => $id,
            'user_id' => Auth::id()
         ))->first();
        $detalle->delete();
        return redirect('reporte');
    }
    public function store(DetalleRequest $request){
        $detalle = new DetalleReporte($request->all());
        $detalle->horaEntrada = $request->input('horaEntrada');
        $detalle->horaSalida = $request->input('horaSalida');
        $detalle->observacion = $request->input('observacion');
        $detalle->maquina = $request->input('maquina');
        $detalle->id_repor = $request->input('id_repor');
        $detalle->user_id = Auth::id();
        $detalle->save();
        
        Flash::success('guardado');
        return Redirect::to('reporte/detalle')->with('mensaje', 'reporte guardada correctamente.');
        
    }
    public function update(DetalleRequest $request, $id){
        $detalle = DetalleReporte::find($id);
        $detalle->horaEntrada = $request->input('horaEntrada');
        $detalle->horaSalida = $request->input('horaSalida');
        $detalle->observacion = $request->input('observacion');
        $detalle->maquina = $request->input('maquina');
        $detalle->id_repor = $request->input('id_repor');
        $detalle->user_id = Auth::id();
        $detalle->save();
        return Redirect::to('reporte/detalle')->with('mensaje','Actializacion de reporte exitoso');
    }
    

    public function listado(){
        $detalle = DetalleReporte::orderBy('id')->where('rol','=','Auxiliar')->get();
        return view('reporte/detalle', compact('detalle'));
    }
}
