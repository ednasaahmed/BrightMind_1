<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcercaDeController extends Controller
{
    public function index()
    {
        return view('nosotros');
    }
}
