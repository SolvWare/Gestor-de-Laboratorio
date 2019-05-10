<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('users.pagina.index', compact('users'));
    }
    public function create()
    {
        $materias = Materia::get();
        $roles = Role::get();
        return view('users.pagina.create', compact('materias', 'roles'));
    }
    public function edit($id)
    {
        $user = User::find($id);
        $materias = Materia::get();
        $roles = Role::get();
        return view('users.pagina.edit', compact('user', 'materias', 'roles'));
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('users.pagina.show', compact('user'));
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('mensaje', 'El Usuario fue eliminada');
    }
    public function store(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->lastU = $request->input('lastU');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->ci = $request->input('password');
        $user->save();

        //$user = User::create($request->all());
        $user->roles()->attach($request->get('roles'));
        $user->materias()->attach($request->get('materias'));
        //$user->save();
        return redirect('users')->with('mensaje','Registro de Usuario exitoso');
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->lastU = $request->input('lastU');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->ci = $request->input('password');
        $user->save();
        
        //$user->update($request->all());
        $user->roles()->sync($request->get('roles'));
        $user->materias()->sync($request->get('materias'));

        return redirect('users')->with('mensaje','Actializacion de Usuario exitoso');
    }

    public function listado(){
        $users = User::orderBy('id', 'DESC')->where('estado','=','Habilitado')->get();
        return view('lista.docente.index', compact('users'));
    }
}
