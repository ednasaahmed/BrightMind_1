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

class RegistrarController extends Controller
{
    #ruta del index al registro
    public function registrar()
    {
        return view('registrar');
    }

    public function register(){
        $user= new User();

        $user->email=trim($_POST['email']);
        $user->password=Hash::make(trim($_POST['password']));
        //$user->setRememberToken($remember_token = Str::random(60));

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
                        $tutor->grado=trim($_POST["grado"]);
                        $tutor->descripcion = trim($_POST["descripcion"]);
                        $tutor->id_usuario = $usuario_id;
            
                        $tutor->save();
                        $credentials = Request()->only('email','password');

                        if ( Auth::attempt($credentials)){
                
                            Request()->session()->regenerate();
                
                            return redirect('home');
                            
                        }
                        //return redirect()->route('ingresar')->with("success","Guardado el registro");
                    } 
                }
                // else {
                //     $estudiante = new Estudiantes();

                    
                //     if (isset($_POST['sexo'])){
                //         $sexo=implode($_POST['sexo']);

                //         $estudiante->nombre = $request->nombre;
                //         $estudiante->apellido_paterno = $request->apellido_paterno;
                //         $estudiante->apellido_materno = $request->apellido_meterno;
                //         $estudiante->fecha_nacimiento = $request->fecha_nacimiento;
                //        $estudiante->sexo = $request->$sexo;
                //        # $estudiante->id_usuario = $request->id_usuario;
            
                //         $estudiante->save();
                //         return redirect()->route('home')->with("success","Guardado el registro");
                //     }
                   
                // }
        
               
            }
        }

            
       // return redirect(route('home'));
    }

}
