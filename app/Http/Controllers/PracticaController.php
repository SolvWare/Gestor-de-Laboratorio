<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use App\Practica;

class PracticaController extends Controller
{
    public function index()
    {
        $users = User::paginate();
        return view('practicas.pagina.index', compact('users'));
    }
    public function show($id){
        $practica = Practica::find($id);
        return view('practicas.pagina.show', compact('practica'));
    }
    public function edit($id){
        $practica = Practica::find($id);
        return view('practicas.pagina.edit', compact('practica'));
    }
    public function destroy($id){
        $practica = Practica::find($id);
        $practica->delete();
        return back()->with('mensaje', 'La practica fue eliminada');
    }
    public function store(Request $request)
    {
        $practica = Practica::create($request->all());

        //IMAGE 
        if($request->file('file')){
            $path = Storage::disk('public')->put('practica',  $request->file('file'));
            $practica->fill(['file' => asset($path)])->save();
        }

        return back()->with('mensaje','Registro de Practica exitoso');
    }
    public function update(Request $request, $id)
    {
        $practica = Practica::find($id);    

        $practica->fill($request->all())->save();

        //IMAGE 
        if($request->file('file')){
            $path = Storage::disk('public')->put('image',  $request->file('file'));
            $practica->fill(['file' => asset($path)])->save();
        }

        return back()->with('mensaje','Actializacion de Practica exitoso');
    }
}
