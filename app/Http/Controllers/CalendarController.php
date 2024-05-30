<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\sesion;
use Illuminate\Support\Facades\DB;


class CalendarController extends Controller
{
    public function calendar()
    {
       // $sesion=sesion::all();
        $user = Auth::user();
        $estudiante  = $user->estudiante; 
        $sesiones = Sesion::with(['tutores', 'estudiantes', 'materia'])
        ->where('id_estudiante', $estudiante->id_estudiante)
        ->get()
        ->map(function ($sesion) {
                return [
                    'id_sesion' => $sesion->id_sesion,
                    'fecha' => $sesion->fecha->format('Y-m-d'),  
                    'hora_inicio' => $sesion->hora_inicio,
                    'hora_fin' => $sesion->hora_fin,
                    'nombre_tutor' => $sesion->tutores ? $sesion->tutores->nombre : 'No especificado',
                    'apellidoPat_tutor' => $sesion->tutores ? $sesion->tutores->apellido_paterno : 'No especificado',
                    'apellidoMat_tutor' => $sesion->tutores ? $sesion->tutores->apellido_materno : 'No especificado',
                    'nombre_materia' => $sesion->materia ? $sesion->materia->Nombre : 'No especificado',
                    'estado' => $sesion->estado,
                ];
            });

        return view('calendar', compact('user', 'estudiante','sesiones'));
    }

    public function finalizarS($id){

        $sesion = sesion::find($id);
        $sesion->estado=0;
        $sesion->save();
        return redirect()->back()->with('success', 'Sesión finalizada correctamente.');
      //  return route('calendar');
       
    }

}