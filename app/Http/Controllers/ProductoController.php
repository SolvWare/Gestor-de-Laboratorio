<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Sesione;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::paginate();
        $sesiones = Sesione::paginate();
        return view('productos.pagina.index', compact('productos', 'sesiones'));
    }
    public function show($id){
        $producto = Producto::find($id);
        return view('productos.pagina.show', compact('producto'));
    }
    public function edit($id){
        $producto = Producto::find($id);
        return view('productos.pagina.edit', compact('producto'));
    }
    public function destroy($id){
        $producto = Producto::find($id);
        $producto->delete();
        return back()->with('mensaje', 'La producto fue eliminada');
    }
    public function store(Request $request)
    {
        $producto = Producto::create($request->all());

        //IMAGE 
        if($request->file('file')){
            $path = Storage::disk('public')->put('image',  $request->file('file'));
            $producto->fill(['file' => asset($path)])->save();
        }

        return back()->with('mensaje','Registro de Producto exitoso');
    }
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);    

        $producto->fill($request->all())->save();

        //IMAGE 
        if($request->file('file')){
            $path = Storage::disk('public')->put('image',  $request->file('file'));
            $producto->fill(['file' => asset($path)])->save();
        }

        return back()->with('mensaje','Actializacion de Producto exitoso');
    }
}
