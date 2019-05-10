<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AddMateriaController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        return view('materias.lista.show', compact('user'));
    }
}
