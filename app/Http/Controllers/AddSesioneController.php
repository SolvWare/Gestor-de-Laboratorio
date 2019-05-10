<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscripcione;

class AddSesioneController extends Controller
{
    public function index()
    {
        $inscripciones = Inscripcione::paginate();
        return view('sesiones.lista.index', compact('inscripciones'));
    }
}
