<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    #ruta del index al login
    public function login()
    {
        return view('login');
    }
    
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect(route('index'));
    }

     public function ingresar(){

       $credentials = Request()->only('email','password');

       $remember = (request()->filled('remember'));

        if ( Auth::attempt($credentials, $remember)){

            Request()->session()->regenerate();

            return redirect('home');
            
        }

        return redirect('login');
 
     }

}
