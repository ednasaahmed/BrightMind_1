<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Materia;

class MateriaController extends Controller
{
    public function materias()
    {
        $datos = Materia::all();
        $user = Auth::user();
        $estudiante = $user->estudiante; 
        return view('materias', compact('user', 'estudiante','datos'));
    }


}