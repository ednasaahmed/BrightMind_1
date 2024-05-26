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

    public function obtenerTutores($id)
    {
        // Encuentra la materia por el ID
        $materia = Materia::findOrFail($id);

        // Obtén los tutores asociados a la materia
        $tutores = $materia->tutores;

        return response()->json($tutores);
    }

}