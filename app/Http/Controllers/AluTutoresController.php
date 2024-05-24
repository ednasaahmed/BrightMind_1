<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tutores;
use App\Models\Materia;

class AluTutoresController extends Controller
{
    public function alututores($id_materia)
    {
        $materia = Materia::findOrFail($id_materia);
        $datos = Tutores::all();
        $user = Auth::user();
        $estudiante = $user->estudiante; 
        return view('aluTutores', compact('user', 'estudiante','datos','materia'));
    }


}