<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Estudiantes;
use App\Models\Tutor;
use App\Models\Tutores;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegistrarController extends Controller
{
    #ruta del index al registro
    public function registrar()
    {
        return view('registrar');
    }

    public function register(Request $request){

        // $rules = [
        //     'email' => 'required | email | unique:users ,email',
        //     'password' => [
        //         'required',
        //         'string',
        //         'min:8', 
        //         'regex:/[a-z]/', 
        //         'regex:/[A-Z]/', 
        //         'regex:/[0-9]/', 
        //         'regex:/[@$!%*?&]/', 
        //         'confirmed', 
        //     ],
        // ];

        // $messages = [
        //     'email.required' => 'El correo electrónico es obligatorio.',
        //     'email.email' => 'El correo electrónico no es válido.',
        //     'email.unique' => 'El correo electrónico ya está registrado.',
        //     'password.required' => 'La contraseña es obligatoria.',
        //     'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
        //     'password.regex' => 'La contraseña debe contener al menos una letra minúscula, una letra mayúscula, un número y un carácter especial (@$!%*?&).',
        //     'password.confirmed' => 'Las contraseñas no coinciden.',
        //     'password.regex.*' => 'La contraseña debe contener al menos una letra minúscula, una letra mayúscula, un número y un carácter especial (@$!%*?&).',
        // ];

        // $validator = Validator::make($request->all(), $rules, $messages);

        // if ($validator->fails()) {   
        //     return redirect('registrar')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
        

        $user= new User();

        $user->email=trim($_POST['email']);
        $user->password=Hash::make(trim($_POST['password']));
        $rememberToken = Str::random(60);
        $user->remember_token = $rememberToken;
        $user->markEmailAsVerified();

        $user->save();
        $usuario_id=$user->id; 

        if ($_SERVER['REQUEST_METHOD']=="POST"){
        
            if(isset($_POST['alu-tut'])){
                $opcion=($_POST['alu-tut']);

                if ($opcion=="tutor") {
                    $tutor = new Tutores();

                    if (isset($_POST['sexo'])){
                        $sexo=($_POST["sexo"]);

                        $tutor->nombre = trim($_POST["nombre"]);
                        $tutor->apellido_paterno =trim($_POST["apellido_paterno"]);
                        $tutor->apellido_materno = trim($_POST["apellido_materno"]);
                        $tutor->fecha_nacimiento = trim($_POST["fecha_nacimiento"]);
                        $tutor->sexo = $sexo;
                        // $tutor->grado=trim($_POST["grado"]);
                        // $tutor->descripcion = trim($_POST["descripcion"]);
                        $tutor->id_usuario = $usuario_id;
            
                        $tutor->save();
                        $credentials = Request()->only('email','password');

                        if ( Auth::attempt($credentials)){
                
                            Request()->session()->regenerate();
                
                            return redirect('homeTut');
                            
                        }
                        //return redirect()->route('home')->with("success","Guardado el registro");
                    } 
                }
                else {

                    if ($opcion=="Alumno"){
                        $estudiante = new Estudiantes();
                    
                        if (isset($_POST['sexo'])){
                            $sexo=($_POST['sexo']);
    
                            $estudiante->nombre = trim($_POST["nombre"]);
                            $estudiante->apellido_paterno = trim($_POST["apellido_paterno"]);
                            $estudiante->apellido_materno = trim($_POST["apellido_materno"]);
                            $estudiante->fecha_nacimiento = trim($_POST["fecha_nacimiento"]);
                            $estudiante->sexo = $sexo;
                            $estudiante->id_usuario = $usuario_id;
                
                            $estudiante->save();

                            $credentials = Request()->only('email','password');

                            if ( Auth::attempt($credentials)){
                    
                                Request()->session()->regenerate();
                    
                                return redirect('home');
                                
                            }
                        }
                    }
                }
            }
        }
       // return redirect(route('home'));
    }
}
