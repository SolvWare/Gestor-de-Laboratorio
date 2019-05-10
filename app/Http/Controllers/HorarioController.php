<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use App\Laboratorio;
use App\Http\Requests\HorarioRequest;
use App\Materia;

class HorarioController extends Controller
{
    public function index()
    {
        $horarios = Horario::get();
        return view('horarios.pagina.index', compact('horarios'));
    }
    public function create()
    {
        $laboratorios = Laboratorio::get();
        $materias = Materia::get();
        return view('horarios.pagina.create', compact('laboratorios', 'materias'));
    }
    public function edit($id)
    {
        $horario = Horario::find($id);
        $laboratorios = Laboratorio::get();
        $materias = Materia::get();
        return view('horarios.pagina.edit', compact('horario', 'laboratorios', 'materias'));
    }
    public function show($id)
    {
        $horario = Horario::find($id);
        return view('horarios.pagina.show', compact('horario'));
    }
    public function destroy($id)
    {
        $horario = Horario::find($id);
        $horario->delete();
        return back()->with('mensaje', 'La horario fue eliminada');
    }
    public function store(HorarioRequest $request)
    {
        $horario = Horario::create($request->all());
        $horario->save();

        return redirect('horarios')->with('mensaje','Registro de horario exitoso');
    }
    public function update(HorarioRequest $request, $id)
    {
        $horario = Horario::find($id);
        $horario->update($request->all());

        return redirect('horarios')->with('mensaje','Actializacion de horario exitoso');
    }
}
