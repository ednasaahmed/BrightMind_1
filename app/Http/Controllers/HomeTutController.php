<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeTutController extends Controller
{
    public function homeTut()
    {
        $user = Auth::user();
        $tutor = $user->tutor; 
        $sesiones = $tutor->sesiones()->with('estudiantes', 'materia')->get();
        \Carbon\Carbon::setLocale('es');
        return view('homeTut', compact('user', 'tutor','sesiones'));
    }
  
}