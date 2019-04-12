<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use DB;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::orderBy('id', 'DESC')->paginate();
        return view('admin.page.searchpage', compact('usuarios'));
    }
    public function create(){
        return view('admin.page.registpage');
    }
    public function edit($id){
        $usuario = Usuario::find($id);
        return view('admin.page.registpage', compact('usuario'));
    }
    public function destroy($id){
        $usuario = Usuario::find($id);
        $usuario->delete();
        return back()->with('info', 'el usuario fue eliminado');
    }
    public function store(Request $request){
        $usuario = new Usuario();
        $usuario->codSis = $request->input('codSis');
        $usuario->ciUsr = $request->input('ciUsr');
        $usuario->nameUsr = $request->input('nameUsr');
        $usuario->lastUsr = $request->input('lastUsr');
        $usuario->rol = $request->input('rol');
        $usuario->materia = $request->input('materia');
        $usuario->grupo = $request->input('grupo');
        $usuario->save();
        return redirect('usuario');
    }
    

    public function lisdoc(){
        $usuarios = usuario::orderBy('rol', 'DESC')->paginate();
        return view('docpage', compact('usuarios'));
    }
}
