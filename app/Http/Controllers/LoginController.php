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
    
     public function ingresar(){

        //se obtienen las credenciales del inicio de sesion
       $credentials = Request()->only('email','password');

       //Verificacion de si el campo recuerdame esta marcado, para que la sesion se mantega activa 
       $remember = (request()->filled('remember'));

       //Se autentica al usuario con las credenciales proporcionadas, son correctas el usuario se autentica
        if ( Auth::attempt($credentials, $remember)){

            //Si la autenticacion fue exitosa se regenera la sesion del usuario, y se ingresa al dashboard
            Request()->session()->regenerate();

            return redirect('home');
        }

        //Si la autenticación no es correcta se redirige al usuario al login de nuevo
        return redirect('login');
 
     }

     public function logout(Request $request){

        //Elimina la sesion del usuario actual y cierra la sesion
        Auth::logout();

        //Invalidacion de la sesion actual, se destruye la informacion de la sesion y asegura que el autenticador ya no sea valido
        $request->session()->invalidate();

        // Regenera el token CSRF de la sesión
        $request->session()->regenerateToken();
        
        return redirect(route('index'));
    }

}
