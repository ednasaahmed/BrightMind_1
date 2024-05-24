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
        $sesion=sesion::all();
        $user = Auth::user();
        $estudiante = $user->estudiante; 
        //$tipoE=DB::table('estudiantes')->where('id_usuario',$estudiante->id_estudiante)->exists();

        return view('calendar', compact('user', 'estudiante','sesion'));
    }

}