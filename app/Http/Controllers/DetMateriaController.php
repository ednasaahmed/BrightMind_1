<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetMateriaController extends Controller
{
    public function detmaterias()
    {
        return view('detmaterias');
    }
}