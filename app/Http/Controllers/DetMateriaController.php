<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetMateriaController extends Controller
{
    public function detmaterias()
    {
        $user = Auth::user();
        $estudiante = $user->estudiante; 
        return view('detmaterias', compact('user', 'estudiante'));
    }
}