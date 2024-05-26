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
                    'fecha' => $sesion->fecha->format('Y-m-d\TH:i:s'),
                    'nombre_tutor' => $sesion->tutores ? $sesion->tutores->nombre : 'No especificado',
                    'nombre_estudiante' => $sesion->estudiantes ? $sesion->estudiantes->nombre : 'No especificado',
                    'nombre_materia' => $sesion->materia ? $sesion->materia->Nombre : 'No especificado',
                    'estado' => $sesion->estado,
                ];
            });

        return view('calendar', compact('user', 'estudiante','sesiones'));
    }

}