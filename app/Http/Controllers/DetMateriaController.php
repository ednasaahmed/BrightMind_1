<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\sesion;

class DetMateriaController extends Controller
{
    public function detmaterias()
    {
        $user = Auth::user();
        $estudiante = $user->estudiante; 
        return view('detmaterias', compact('user', 'estudiante'));
    }

   
    public function agendar(){
        $sesion = new sesion();
        $user = Auth::id();
        $estudiante= new Estudiantes();

        if ($_SERVER['REQUEST_METHOD']=="POST"){
            
            if(isset($_POST['agendar'])){
                $sesion->id_tutor=2;
                $sesion->id_estudiante= $user ;
                $sesion->id_estudiante= $user ;
            }
        }
    }
 }
