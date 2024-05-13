<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutMateriaController extends Controller
{
    public function tutmaterias()
    {
        return view('tutmaterias');
    }
}