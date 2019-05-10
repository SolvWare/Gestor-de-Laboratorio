<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AddPracticaController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        return view('practicas.pagina.create', compact('user'));
    }
}
