<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;

class RolController extends Controller
{
    public function index(){
        $rols = Rol::orderBy('id', 'DESC')->paginate();
        return view('admin.page.ledrolpage', compact('rols'));
    }
    public function create(){
        return view('admin.page.registrolpage');
    }
    public function edit($id){
        $rol = Rol::find($id);
        return view('admin.page.editrolpage', compact('rol'));
    }
    public function update(Request $request, $id){
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
        return redirect()->route('admin/page/registrolpage');
    }
    public function destroy($id){
        $rol = Rol::find($id);
        $rol->delete();
        return back()->with('info', 'el rol fue eliminado');
    }
    
    public function show($id){
        $rol = Rol::find($id);
        return view('admin/page/registrolpage');
    }
    public function store(Request $request){
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
        return view('admin/page/registrolpage');
    }
}
