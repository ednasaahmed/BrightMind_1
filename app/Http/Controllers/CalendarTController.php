<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\sesion;

class CalendarTController extends Controller
{
    public function calendar()
    {
        $user = Auth::user();
        $tutor = $user->tutor; 
        $sesiones = Sesion::with(['tutores', 'estudiantes', 'materia'])
        ->where('id_tutor', $tutor->id_tutor)
        ->get()
        ->map(function ($sesion) {
                return [
                    'id_sesion' => $sesion->id_sesion,
                    'fecha' => $sesion->fecha->format('Y-m-d\TH:i:s'),
                    'nombre_tutor' => $sesion->tutores ? $sesion->tutores->nombre : 'No especificado',
                    'nombre_estudiante' => $sesion->estudiantes ? $sesion->estudiantes->nombre : 'No especificado',
                    'apellidoPat_estudiante' => $sesion->estudiantes ? $sesion->estudiantes->apellido_paterno : 'No especificado',
                    'apellidoMat_estudiante' => $sesion->estudiantes ? $sesion->estudiantes->apellido_materno : 'No especificado',
                    'nombre_materia' => $sesion->materia ? $sesion->materia->Nombre : 'No especificado',
                    'estado' => $sesion->estado,
                ];
            });
 
        return view('calendarT', compact('user', 'tutor','sesiones'));
    }
}