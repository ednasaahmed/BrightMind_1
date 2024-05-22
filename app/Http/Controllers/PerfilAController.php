<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilAController extends Controller
{
    public function perfil()
    {
        $user = Auth::user();
        $estudiante = $user->estudiante; 
        return view('perfila', compact('user', 'estudiante'));
    }
}