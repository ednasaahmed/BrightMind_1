<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarTController extends Controller
{
    public function calendar()
    {
        return view('calendarT');
    }
}