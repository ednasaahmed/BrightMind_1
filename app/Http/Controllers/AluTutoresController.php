<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tutores;

class AluTutoresController extends Controller
{
    public function alututores()
    {
        $datos = Tutores::all();
        $user = Auth::user();
        $estudiante = $user->estudiante; 
        return view('aluTutores', compact('user', 'estudiante','datos'));
    }


}