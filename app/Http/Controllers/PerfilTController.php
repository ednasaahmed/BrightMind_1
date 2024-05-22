<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tutores;

class PerfilTController extends Controller
{
    public function perfil()
    {
        $user = Auth::user();
        $tutor = $user->tutor; 
        return view('perfilt', compact('user', 'tutor'));
    }

    public function update(Request $request, int $id_tutor)
    { 
            $tutor = Tutores::find($id_tutor);
            

            if($request->hasFile('foto')){
                $image = $request->foto;
                $imageName =rand().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
                $path = "/uploads/".$imageName;
                $tutor->foto = $path;
            }

            $tutor->nombre = $request->input('nombre', $tutor->nombre);
            $tutor->apellido_paterno = $request->input('apellido_paterno', $tutor->apellido_paterno);
            $tutor->apellido_materno = $request->input('apellido_materno', $tutor->apellido_materno);
            $tutor->fecha_nacimiento = $request->input('fecha_nacimiento', $tutor->fecha_nacimiento);
            $tutor->sexo = $request->input('sexo', $tutor->sexo);
            $tutor->grado = $request->input('grado', $tutor->grado);
            $tutor->descripcion = $request->input('descripcion', $tutor->descripcion);
            $tutor->save();
    
            return redirect()->route('perfilt')->with("success", "¡Cambios guardados correctamente!");

    }
}