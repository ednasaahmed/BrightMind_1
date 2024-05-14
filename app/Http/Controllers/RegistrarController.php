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
    public function registrarte()
    {
        return view('registrar');
    }

    public function register(){
        $user= new User();

        
        $user->email=trim($_POST['email']);
        $user->password=Hash::make(trim($_POST['password']));

        $user->save();

        Auth::login($user);

        return redirect(route('home'));
        


        //-------------------------------------------------------

       /* if ($_SERVER['REQUEST_METHOD']=="POST"){

            if(isset($_POST['alu-tut'])){
                $opcion=implode($_POST['alu-tut']);

                if ($opcion=="tutor") {
                    $tutor = new Tutores();

                    if (isset($_POST['sexo'])){
                        $sexo=implode($_POST['sexo']);

                        $tutor->nombre = $request->nombre;
                        $tutor->apellido_paterno = $request->apellido_paterno;
                        $tutor->apellido_materno = $request->apellido_meterno;
                       # $tutor->fecha_nacimiento = $request->fecha_nacimiento;
                       # $tutor->sexo = $request->$sexo;
                        $tutor->grado= $request->grado;
                        $tutor->descripcion = $request->descripcion;
                       # $tutor->id_usuario = $request->id_usuario;
            
                        $tutor->save();
                        return redirect()->route('home')->with("success","Guardado el registro");
                    } 
                }else {
                    $estudiante = new Estudiantes();

                    
                    if (isset($_POST['sexo'])){
                        $sexo=implode($_POST['sexo']);

                        $estudiante->nombre = $request->nombre;
                        $estudiante->apellido_paterno = $request->apellido_paterno;
                        $estudiante->apellido_materno = $request->apellido_meterno;
                       # $estudiante->fecha_nacimiento = $request->fecha_nacimiento;
                      #  $estudiante->sexo = $request->$sexo;
                       # $estudiante->id_usuario = $request->id_usuario;
            
                        $estudiante->save();
                        return redirect()->route('home')->with("success","Guardado el registro");
                    }
                   
                }
        
               
            }
        }*/

       
    }

}
