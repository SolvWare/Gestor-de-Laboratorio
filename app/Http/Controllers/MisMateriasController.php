<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;
use Illuminate\Support\Facades\Auth;

class MisMateriasController extends Controller
{
    public function materias()
    {
        $user = Auth::user();
        return view('vistas.materias.index', compact('user'));
    }
    public function horarios()
    {
        $user = Auth::user();
        return view('vistas.horarios.index', compact('user'));
    }
    public function inscripciones()
    {
        $user = Auth::user();
        return view('vistas.inscripciones.index', compact('user'));
    }
    public function sesiones()
    {
        $user = Auth::user();
        return view('vistas.sesiones.index', compact('user'));
    }
    public function estudiantes()
    {
        $user = Auth::user();
        return view('vistas.estudiantes.index', compact('user'));
    }
    public function productos()
    {
        $user = Auth::user();
        return view('vistas.productos.index', compact('user'));
    }
    public function practicas()
    {
        $user = Auth::user();
        return view('vistas.practicas.index', compact('user'));
    }
}
