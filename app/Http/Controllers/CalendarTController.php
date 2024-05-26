<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalendarTController extends Controller
{
    public function calendar()
    {
        $user = Auth::user();
        $tutor = $user->tutor; 
        return view('calendarT', compact('user', 'tutor'));
    }
}