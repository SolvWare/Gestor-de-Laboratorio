<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::paginate();
        return view('roles.pagina.index', compact('roles'));
    }
    public function create(){
        $permissions = Permission::get();
        return view('roles.pagina.create', compact('permissions'));
    }
    public function edit($id){
        $role = Role::find($id);
        $permissions = Permission::get();
        return view('roles.pagina.edit', compact('role', 'permissions'));
    }
    public function show($id){
        $role = Role::find($id);
        return view('roles.pagina.show', compact('role'));
    }
    public function destroy($id){
        $role = Role::find($id);
        $role->delete();
        return back()->with('mensaje', 'El rol fue eliminado');
    }
    public function store(RoleRequest $request)
    {
        $role = Role::create($request->all());
        $role->permissions()->attach($request->get('permissions'));
        $role->save();
        return redirect('roles')->with('mensaje','Registro de Rol exitoso');
    }
    public function update(RoleRequest $request, $id){
        $role = Role::find($id);
        $role->update($request->all());
        $role->permissions()->sync($request->get('permissions'));

        return redirect('roles')->with('mensaje','Actializacion de Usuario exitoso');
    }
}
