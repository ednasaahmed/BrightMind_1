<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrarController extends Controller
{
    public function register(Request $request){
        $user= new User();

        $user->email=$request->email;
        $user->password=Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('index')); //Pan
    }

}
