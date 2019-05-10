<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sesione;

class AddProductoController extends Controller
{
    public function show($id){
        $sesione = Sesione::find($id);
        return view('productos.pagina.create', compact('sesione'));
    }
}
