<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $slides = [
            [
                'title' => '',
                'content' => '',
                'image' => 'c3.jpg',
                'button_text' => 'Login',
                'button_url' => '',
            ],
            [
                'title' => '',
                'content' => '',
                'image' => 'c6.jpg',
            ],
            [
                'title' => '',
                'content' => '',
                'image'=> 'c6.png',
            ]
        ];

        return view('index', compact('slides'));
    }
}

