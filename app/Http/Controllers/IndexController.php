<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $slides = [
            [
                'image' => 'c3.jpg',
                'button_text' => 'Login',
                'button_url' => '#',
            ],
            [
                'image' => 'c6.jpg',
            ],
            [
                'image'=> 'c6.png',
            ]
        ];

        return view('index', compact('slides'));
    }
}

