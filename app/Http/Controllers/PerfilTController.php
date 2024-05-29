<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tutores;
use App\Models\Disponibilidad;

class PerfilTController extends Controller
{
    public function perfil()
    {
        $user = Auth::user();
        $tutor = $user->tutor; 
        $disponibilidad = $tutor->disponibilidad;
        return view('perfilt', compact('user', 'tutor', 'disponibilidad'));
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
    
            // Disponibilidad::where('id_tutor', $tutor->id_tutor)->delete();

            // // Crear las nuevas disponibilidades
            // if ($request->has('disponibilidad_fechas')) {
            //     foreach ($request->disponibilidad_fechas as $disponibilidad) {
            //         Disponibilidad::create([
            //             'id_tutor' => $tutor->id_tutor,
            //             'fecha' => $disponibilidad['fecha'],
            //             'hora_inicio' => $disponibilidad['hora_inicio'],
            //             'hora_fin' => $disponibilidad['hora_fin'],
            //         ]);
            //     }
            // }

            return redirect()->route('perfilt')->with("success", "¡Cambios guardados correctamente!");

    }

    public function updateD(Request $request, int $id_tutor)
    {
        $tutor = Tutores::find($id_tutor);
        $disponibilidad=new Disponibilidad();
            $disponibilidad->id_tutor=$id_tutor;
            $disponibilidad->fecha=trim($_POST["fechaN"]);
            $disponibilidad->hora_inicio=trim($_POST["hora_inicioN"]);
            $disponibilidad->hora_fin=trim($_POST["hora_finN"]);

            $disponibilidad->save();
            return redirect()->route('perfilt')->with("success", "¡Cambios guardados correctamente!");
    }
    
    public function delete(int $id)
    {
        dd($request->all());
        $disponibilidad = Disponibilidad::find($id);
        $disponibilidad->delete();
        Session::flash('success', '¡Horario eliminado correctamente!');
        // if ($disponibilidad) {
        //     $disponibilidad->delete();
        //     return redirect()->route('perfilt')->with("success", "¡Horario eliminado correctamente!");
        // }
        // return redirect()->route('perfilt')->with('error', 'Error al eliminar la disponibilidad');
    }
}