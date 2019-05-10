<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Sesion;
use App\File;
use App\Rol;
use App\Http\Requests\UsuarioRequest;
use DB;

class UsuarioController extends Controller
{
    public function index(){
        // $usuarios = Usuario::orderBy('id', 'DESC')->get();
        // return view('administrador.pagina.usuario.usrBuscar', compact('usuarios'));
        $usuarios = Usuario::orderBy('id','DESC')
        ->join('usuarios as user','user.id','=','rol_usuario.rol_id')
        ->get();
        return view('administrador.pagina.usuario.usrBuscar', compact('usuarios'));
      // return view('administrador.pagina.estudiante.usrEstudiante', compact('usuarios','materias','rols'));
    }
    public function create(){
        return view('administrador.pagina.usuario.usrRegistro');
    }
    public function show($id){
        $usuario = Usuario::find($id);
        return view('administrador.pagina.usuario.usrVista', compact('usuario'));
    }
    public function edit($id){
        $usuario = Usuario::find($id);
        return view('administrador.pagina.usuario.usrEditar', compact('usuario'));
    }
    public function destroy($id){
        /*$usuario = Usuario::find($id);
        $usuario->delete();
        return back()->with('info', 'el usuario fue eliminado');*/
        $usuario = Usuario::find($id);
		if($usuario->estado == 'Habilitado')
		{
		$usuario->estado = 'Deshabilitado';
        $usuario->save();
		}else{
		$usuario->estado = 'Habilitado';
        $usuario->save();
		}
        return redirect('usuario');
    }
    public function store(UsuarioRequest $request){
        $usuario = new Usuario();
        $usuario->codSis = $request->input('codSis');
        $usuario->ciU = $request->input('ciU');
        $usuario->nameU = $request->input('nameU');
        $usuario->lastU = $request->input('lastU');
        // $usuario->rol = $request->input('rol');
        // $usuario->materia = $request->input('materia');
       // $usuario->grupo = $request->input('grupo');
        $usuario->save();
        return redirect('usuario')->with('mensaje','Registro de Usuario exitoso');
    }
    public function update(UsuarioRequest $request, $id){
        $usuario = Usuario::find($id);
        $usuario->codSis = $request->input('codSis');
        $usuario->ciU = $request->input('ciU');
        $usuario->nameU = $request->input('nameU');
        $usuario->lastU = $request->input('lastU');
        // $usuario->rol = $request->input('rol');
        // $usuario->materia = $request->input('materia');
        // $usuario->grupo = $request->input('grupo');
        $usuario->save();
        return redirect('usuario')->with('mensaje','Actializacion de Usuario exitoso');
    }
    

    public function listado(){
        $usuarios = usuario::orderBy('lastU')->where('rol','=','Docente')->where('estado','=','Habilitado')->get();
        return view('docentes', compact('usuarios'));
    }
}
