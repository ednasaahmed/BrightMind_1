<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrarController extends Controller
{
    #ruta del index al registro
    public function registrar()
    {
        return view('registrar');
    }

    public function register(Request $request){
        $user= new User();

        $user->email=$request->email;
        $user->password=Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('home'));
    }

}
