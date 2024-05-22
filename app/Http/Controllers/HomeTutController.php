<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeTutController extends Controller
{
    public function homeTut()
    {
        return view('homeTut');
    }
  
}