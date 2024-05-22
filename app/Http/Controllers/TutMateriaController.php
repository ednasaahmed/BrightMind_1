<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TutMateriaController extends Controller
{
    public function tutmaterias()
    {
        $user = Auth::user();
        $tutor = $user->tutor; 
        return view('tutmaterias', compact('user', 'tutor'));
    }
}