<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        $estudiante = $user->estudiante; 
        return view('home', compact('user', 'estudiante'));
    }
  
}