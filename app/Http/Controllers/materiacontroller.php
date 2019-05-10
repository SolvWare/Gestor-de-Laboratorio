<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;
use App\Http\Requests\MateriaRequest;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::paginate();
        return view('materias.pagina.index', compact('materias'));
    }
    public function create(){
        return view('materias.pagina.create');
    }
    public function edit($id){
        $materia = Materia::find($id);
        return view('materias.pagina.edit', compact('materia'));
    }
    public function show($id){
        $materia = Materia::find($id);
        return view('materias.pagina.show', compact('materia'));
    }
    public function destroy($id){
        $materia = Materia::find($id);
        $materia->delete();
        return back()->with('mensaje', 'La Materia fue eliminada');
    }
    public function store(MateriaRequest $request){
        $materia = Materia::create($request->all());
        $materia->save();
        return redirect('materias')->with('mensaje','Registro de Materia exitoso');
    }
    public function update(MateriaRequest $request, $id){
        $materia = Materia::find($id);
        $materia->update($request->all());

        return redirect('materias')->with('mensaje','Actializacion de Materia exitoso');
    }

    public function listado(){
        $materias = Materia::orderBy('id', 'DESC')->where('estado','=','Habilitado')->get();
        return view('lista.materia.index', compact('materias'));
    }
}
