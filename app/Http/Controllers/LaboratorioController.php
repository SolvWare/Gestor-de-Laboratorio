<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laboratorio;
use App\Http\Requests\LaboratorioRequest;

class LaboratorioController extends Controller
{
    public function index()
    {
        $laboratorios = Laboratorio::get();
        return view('laboratorios.pagina.index', compact('laboratorios'));
    }
    public function create()
    {
        return view('laboratorios.pagina.create');
    }
    public function edit($id)
    {
        $laboratorio = Laboratorio::find($id);
        return view('laboratorios.pagina.edit', compact('laboratorio'));
    }
    public function show($id)
    {
        $laboratorio = Laboratorio::find($id);
        return view('laboratorios.pagina.show', compact('laboratorio'));
    }
    public function destroy($id)
    {
        $laboratorio = Laboratorio::find($id);
        $laboratorio->delete();
        return back()->with('mensaje', 'El Laboratorio fue eliminada');
    }
    public function store(LaboratorioRequest $request)
    {
        $laboratorio = Laboratorio::create($request->all());
        $laboratorio->save();

        return redirect('laboratorios')->with('mensaje','Registro de Laboratorio exitoso');
    }
    public function update(LaboratorioRequest $request, $id)
    {
        $laboratorio = Laboratorio::find($id);
        $laboratorio->update($request->all());

        return redirect('laboratorios')->with('mensaje','Actializacion de Laboratorio exitoso');
    }

    public function listado(){
        $laboratorios = Laboratorio::orderBy('id', 'DESC')->where('estado','=','Habilitado')->get();
        return view('lista.laboratorio.index', compact('laboratorios'));
    }
}
