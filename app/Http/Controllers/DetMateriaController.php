<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use App\Models\Tutores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\sesion;
use App\Models\Materia;
use App\Models\Disponibilidad;
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


    // public function agendarS(Request $request,$id,$id_materia){
    //     $user = Auth::user();
    //     $estudiante = $user->estudiante;
    //     $sesion = new sesion();
    //    // $tutor= $user->tutores;
    //     if ($_SERVER['REQUEST_METHOD']=="POST"){
    //         $request->validate([
    //             'fecha' => 'required|date_format:Y-m-d\TH:i',
    //         ]); 
    //         $fecha1 = \Carbon\Carbon::createFromFormat('Y-m-d\TH:i', $request->fecha);
    //             $sesion->id_tutor=$id;
    //             $sesion->id_estudiante=$estudiante->id_estudiante;
    //             $sesion->fecha= $fecha1;
    //             $sesion->id_materia= $id_materia;
    //             $sesion->estado= 1;

    //             $sesion->save();
    //             $materia = Materia::findOrFail($id_materia);
    //             $tutor = Tutores::findOrFail($id);
    //             $sesiones = Sesion::with(['tutores', 'estudiantes', 'materia'])
    //             ->where('id_estudiante', $estudiante->id_estudiante)
    //             ->get()
    //             ->map(function ($sesion) {
    //                     return [
    //                         'id_sesion' => $sesion->id_sesion,
    //                         //'fecha' => $sesion->fecha->format('Y-m-d\TH:i:s'),
    //                         'fecha' => $sesion->fecha->format('Y-m-d'),
    //                         'nombre_tutor' => $sesion->tutores ? $sesion->tutores->nombre : 'No especificado',
    //                         'nombre_estudiante' => $sesion->estudiantes ? $sesion->estudiantes->nombre : 'No especificado',
    //                         'nombre_materia' => $sesion->materia ? $sesion->materia->Nombre : 'No especificado',
    //                         'estado' => $sesion->estado,
    //                     ];
    //                 });

    //             return view('calendar',compact('tutor','estudiante','materia','sesiones'));

    //         //sreturn redirect()->back()->with('success', 'Cita guardada correctamente.');
    //     }
                   
    // }

    public function agendarS(Request $request,$id,$id_materia){
        $user = Auth::user();
        $estudiante = $user->estudiante;
        $sesion = new sesion();
        $materia = Materia::findOrFail($id_materia);
        $tutor = Tutores::findOrFail($id);
       // $tutor= $user->tutores;
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            // $request->validate([
            //     'fecha' => 'required|date_format:Y-m-d\TH:i',
            // ]); 
           // $fecha1 = \Carbon\Carbon::createFromFormat('Y-m-d\TH:i', $request->fecha);

            if (isset($_POST["check"])){
            $disponibilidad = new Disponibilidad();

            $sesion->id_tutor = $id;
            $sesion->id_estudiante = $estudiante->id_estudiante;
            $sesion->fecha=trim($_POST["fecha"]);
            $sesion->hora_inicio=trim($_POST["hora_inicio"]);
            $sesion->hora_fin=trim($_POST["hora_fin"]);
            $sesion->id_materia=$id_materia;
            $sesion->estado=1;
                    
            $sesion->save(); 
            
            }
               
                $sesiones = Sesion::with(['tutores', 'estudiantes', 'materia'])
                ->where('id_estudiante', $estudiante->id_estudiante)
                ->get()
                ->map(function ($sesion) {
                        return [
                            'id_sesion' => $sesion->id_sesion,
                            //'fecha' => $sesion->fecha->format('Y-m-d\TH:i:s'),
                            'fecha' => $sesion->fecha->format('Y-m-d'),
                            'hora_inicio' => $sesion->hora_inicio,
                            'hora_fin' => $sesion->hora_fin,
                            'nombre_tutor' => $sesion->tutores ? $sesion->tutores->nombre : 'No especificado',
                            'nombre_estudiante' => $sesion->estudiantes ? $sesion->estudiantes->nombre : 'No especificado',
                            'apellidoPat_tutor' => $sesion->tutores ? $sesion->tutores->apellido_paterno : 'No especificado',
                            'apellidoMat_tutor' => $sesion->tutores ? $sesion->tutores->apellido_materno : 'No especificado',
                            'nombre_materia' => $sesion->materia ? $sesion->materia->Nombre : 'No especificado',
                            'estado' => $sesion->estado,
                        ];
                    });

                return view('calendar',compact('tutor','estudiante','materia','sesiones'));

            //sreturn redirect()->back()->with('success', 'Cita guardada correctamente.');
        }
                   
    }

    
 }

