<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use App\Models\Tutores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\sesion;
use App\Models\Materia;
use Illuminate\Support\Facades\DB;

class DetMateriaController extends Controller
{
    public function detmaterias($id,$id_materia)
    {
        $materia = Materia::findOrFail($id_materia);
        $tutor = Tutores::findOrFail($id);
        $user = Auth::user();
        $estudiante = $user->estudiante; 
        $disponibilidad = $tutor->disponibilidad;
        return view('detmaterias', compact('user', 'estudiante','tutor','materia','disponibilidad'));
    }


    public function agendarS(Request $request,$id,$id_materia){
        $user = Auth::user();
        $estudiante = $user->estudiante;
        $sesion = new sesion();
       // $tutor= $user->tutores;
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            $request->validate([
                'fecha' => 'required|date_format:Y-m-d\TH:i',
            ]); 
            $fecha1 = \Carbon\Carbon::createFromFormat('Y-m-d\TH:i', $request->fecha);
                $sesion->id_tutor=$id;
                $sesion->id_estudiante=$estudiante->id_estudiante;
                $sesion->fecha= $fecha1;
                $sesion->id_materia= $id_materia;
                $sesion->estado= 1;

                $sesion->save();
                $materia = Materia::findOrFail($id_materia);
                $tutor = Tutores::findOrFail($id);
                $sesiones = Sesion::with(['tutores', 'estudiantes', 'materia'])
                ->where('id_estudiante', $estudiante->id_estudiante)
                ->get()
                ->map(function ($sesion) {
                        return [
                            'id_sesion' => $sesion->id_sesion,
                            'fecha' => $sesion->fecha->format('Y-m-d\TH:i:s'),
                            'nombre_tutor' => $sesion->tutores ? $sesion->tutores->nombre : 'No especificado',
                            'nombre_estudiante' => $sesion->estudiantes ? $sesion->estudiantes->nombre : 'No especificado',
                            'nombre_materia' => $sesion->materia ? $sesion->materia->Nombre : 'No especificado',
                            'estado' => $sesion->estado,
                        ];
                    });

                return view('calendar',compact('tutor','estudiante','materia','sesiones'));

            //sreturn redirect()->back()->with('success', 'Cita guardada correctamente.');
        }
           
        
                
            
        
    }
 }

