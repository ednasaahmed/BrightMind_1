<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Estudiantes;

class PerfilAController extends Controller
{
    public function perfil()
    {
        $user = Auth::user();
        $estudiante = $user->estudiante; 
        return view('perfila', compact('user', 'estudiante'));
    }

    public function update(Request $request, int $id_estudiante)
    { 
            $estudiante = Estudiantes::find($id_estudiante);
        
            $estudiante->nombre = $request->input('nombre', $estudiante->nombre);
            $estudiante->apellido_paterno = $request->input('apellido_paterno', $estudiante->apellido_paterno);
            $estudiante->apellido_materno = $request->input('apellido_materno', $estudiante->apellido_materno);
            $estudiante->fecha_nacimiento = $request->input('fecha_nacimiento', $estudiante->fecha_nacimiento);
            $estudiante->sexo = $request->input('sexo', $estudiante->sexo);
            $estudiante->save();
    
            return redirect()->route('perfila')->with("success", "¡Cambios guardados correctamente!");

    }
}