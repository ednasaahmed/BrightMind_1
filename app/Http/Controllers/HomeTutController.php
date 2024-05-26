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
        return view('homeTut', compact('user', 'tutor'));
    }
  
}