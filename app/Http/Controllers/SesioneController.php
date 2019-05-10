<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Inscripcione;
use App\Sesione;

class SesioneController extends Controller
{
    public function index()
    {
        $sesiones = Sesione::paginate();
        return view('sesiones.pagina.index', compact('sesiones'));
    }
    public function edit($id)
    {
        $sesione = Sesione::find($id);
        return view('sesiones.pagina.edit', compact('sesione'));
    }
    public function show($id)
    {
        $sesione = Sesione::find($id);
        return view('sesiones.pagina.show', compact('sesione'));
    }
    public function destroy($id)
    {
        $inscripcione = Inscripcione::find($id);
        $inscripcione->delete();
        return back()->with('mensaje', 'La Inscripcion fue eliminada');
    }
    public function store(Request $request){
        $sesione = Sesione::create($request->all());
        $sesione->save();
        return back()->with('mensaje','Registro de inscripcion exitoso');
    }
    public function update(Request $request, $id)
    {
        $sesione = Sesione::find($id);
        $sesione->update($request->all());

        return redirect('sesiones')->with('mensaje','Actializacion de inscripcion exitoso');
    }
}
