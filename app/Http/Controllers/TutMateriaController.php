<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Materia;
use App\Models\Materia_Tutor;
use App\Models\Tutores;

class TutMateriaController extends Controller
{
    public function tutmaterias()
    {
        $datos = Materia::all();
        $user = Auth::user();
        $tutor = $user->tutor; 
        return view('tutmaterias', compact('user', 'tutor','datos'));
    }

    public function store(Request $request, int $id_tutor)
    {
        $tutor = Tutores::find($id_tutor);

        $materiaTutor = new Materia_Tutor();
        $materiaTutor->id_materia = $request->id_materia;
        $materiaTutor->id_tutor = $request->id_tutor;
        $materiaTutor->precio = $request->precio;

        $materiaTutor->save();
        return redirect()->route('tutmaterias')->with("success", "¡Guardado correctamente!");
    }
}
