<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CalendarController extends Controller
{
    public function calendar()
    {
        $user = Auth::user();
        $estudiante = $user->estudiante; 
        return view('calendar', compact('user', 'estudiante'));
    }

}