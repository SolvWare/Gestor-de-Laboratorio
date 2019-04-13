<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;
use App\Http\Requests\RolRequest;

class RolController extends Controller
{
    public function index(){
        $rols = Rol::orderBy('id', 'DESC')->get();
        return view('administrador.pagina.rol.rolListado', compact('rols'));
    }
    public function create(){
        return view('administrador.pagina.rol.rolRegistro');
    }
    public function show($id){
        $rol = Rol::find($id);
        return view('administrador.pagina.rol.rolVista', compact('rol'));
    }
    public function edit($id){
        $rol = Rol::find($id);
        return view('administrador.pagina.rol.rolEditar', compact('rol'));
    }
    public function destroy($id){
        /*$rol = Rol::find($id);
        $rol->delete();
        return back()->with('info', 'el rol fue eliminado');*/
        $rol = Rol::find($id);
		if($rol->estado == 'Habilitado')
		{
		$rol->estado = 'Deshabilitado';
        $rol->save();
		}else{
		$rol->estado = 'Habilitado';
        $rol->save();
		}
        return redirect('rol');
    }
    public function store(RolRequest $request){
        $rol = new Rol();
        $rol->codeR = $request->input('codeR');
        $rol->nameR = $request->input('nameR');
        $rol->prib1 = $request->input('prib1');
        $rol->prib2 = $request->input('prib2');
        $rol->prib3 = $request->input('prib3');
        $rol->prib4 = $request->input('prib4');
        $rol->prib5 = $request->input('prib5');
        $rol->prib6 = $request->input('prib6');
        $rol->save();
        return redirect('rol')->with('mensaje','Registro de Rol exitoso');
    }
    public function update(RolRequest $request, $id){
        $rol = Rol::find($id);
        $rol->codeR = $request->input('codeR');
        $rol->nameR = $request->input('nameR');
        $rol->prib1 = $request->input('prib1');
        $rol->prib2 = $request->input('prib2');
        $rol->prib3 = $request->input('prib3');
        $rol->prib4 = $request->input('prib4');
        $rol->prib5 = $request->input('prib5');
        $rol->prib6 = $request->input('prib6');
        $rol->save();
        return redirect('rol')->with('mensaje','Actializacion de Rol exitoso');
    }
}
