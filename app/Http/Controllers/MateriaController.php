<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MateriaController extends Controller
{
    public function materias()
    {
        $user = Auth::user();
        $estudiante = $user->estudiante; 
        return view('materias', compact('user', 'estudiante'));
    }
}