<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\sesion;


class HomeController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        $estudiante = $user->estudiante; 
        $sesiones = $estudiante->sesiones()->with('tutores', 'materia')->get();
        \Carbon\Carbon::setLocale('es');
        return view('home', compact('user', 'estudiante','sesiones'));
    }
  
}