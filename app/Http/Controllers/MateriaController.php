<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;

class MateriaController extends Controller
{
    public function index(){
        $materias = Materia::orderBy('id', 'DESC')->paginate();
        return view('admin.page.ledmatpage', compact('materias'));
    }
    public function create(){
        return view('admin.page.registmatpage');
    }
    public function edit($id){
        $materia = Materia::find($id);
        return view('admin.page.registmatpage', compact('materia'));
    }
    public function destroy($id){
        $materia = Materia::find($id);
        $materia->delete();
        return back()->with('info', 'el materia fue eliminado');
    }
    
    public function store(Request $request){
        $materia = new Materia();
        $materia->codeM = $request->input('codeM');
        $materia->nameM = $request->input('nameM');
        $materia->numGM = $request->input('numGM');
        $materia->save();
        return view('admin/page/registmatpage');
    }

    public function lismat(){
        $materias = Materia::orderBy('id', 'DESC')->paginate();
        return view('matpage', compact('materias'));
    }
}
