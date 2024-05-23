<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use App\Models\Tutores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\sesion;
use Illuminate\Support\Facades\DB;

class DetMateriaController extends Controller
{
    public function detmaterias($id)
    {
        $tutor = Tutores::findOrFail($id);
        $user = Auth::user();
        $estudiante = $user->estudiante; 
        return view('detmaterias', compact('user', 'estudiante','tutor'));
    }


    public function agendarS(Request $request){
        $user = Auth::user();
        $estudiante = $user->estudiante;
        $sesion = new sesion();
        $tutor= $user->tutores;
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            $request->validate([
                'fecha' => 'required|date_format:Y-m-d\TH:i',
            ]); 
            $fecha1 = \Carbon\Carbon::createFromFormat('Y-m-d\TH:i', $request->fecha);
                $sesion->id_tutor=$tutor->id_tutor;
                $sesion->id_estudiante=$estudiante->id_estudiante;
                $sesion->fecha= $fecha1;
                $sesion->id_materia= 1;
                $sesion->estado= 1;

                $sesion->save();

                return redirect('home');

            //sreturn redirect()->back()->with('success', 'Cita guardada correctamente.');
        }
           
        
                
            
        
    }
 }

