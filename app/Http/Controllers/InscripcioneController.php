<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscripcione;
use App\User;
use App\Http\Requests\InscripcioneRequest;

class InscripcioneController extends Controller
{
    public function index()
    {
        $inscripciones = Inscripcione::get();
        return view('inscripciones.pagina.index', compact('inscripciones'));
    }
    public function edit($id)
    {
        $inscripcione = Inscripcione::find($id);
        $users = User::get();
        return view('inscripciones.pagina.edit', compact('users', 'inscripcione'));
    }
    public function show($id)
    {
        $inscripcione = Inscripcione::find($id);
        return view('inscripciones.pagina.show', compact('inscripcione'));
    }
    public function destroy($id)
    {
        $inscripcione = Inscripcione::find($id);
        $inscripcione->delete();
        return back()->with('mensaje', 'La Inscripcion fue eliminada');
    }
    public function store(InscripcioneRequest $request){
        $inscripcione = Inscripcione::create($request->all());
        $inscripcione->save();
        return back()->with('mensaje','Registro de inscripcion exitoso');
    }
    public function update(InscripcioneRequest $request, $id)
    {
        $inscripcione = Inscripcione::find($id);
        $inscripcione->update($request->all());

        return redirect('inscripciones')->with('mensaje','Actializacion de inscripcion exitoso');
    }
}
