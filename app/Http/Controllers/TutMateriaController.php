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
        $user = Auth::user();
        $tutor = $user->tutor; 
        $allmaterias = Materia::all();
        $datos = Materia_Tutor::where('id_tutor', $tutor->id_tutor)
                ->join('materia', 'materia_tutor.id_materia', '=', 'materia.id_materia')
                ->select('materia.Nombre', 'materia.Descripcion', 'materia_tutor.precio', 'materia_tutor.id')
                ->get();
        return view('tutmaterias', compact('user', 'tutor','allmaterias','datos'));
    }

    public function store(Request $request, int $id_tutor)
    {
        $tutor = Tutores::find($id_tutor);

        $materiaTutor = new Materia_Tutor();
        $materiaTutor->id_materia = $request->id_materia;
        $materiaTutor->id_tutor = $request->id_tutor;
        $materiaTutor->precio = $request->precio;
        $materiaTutor->save();
        return redirect()->route('tutmaterias');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'precio' => 'required|numeric|min:0',
        ]);

        $materiaTutor = Materia_Tutor::findOrFail($id);
        $materiaTutor->precio = $request->input('precio');
        $materiaTutor->save();
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $materiaTutor = Materia_Tutor::findOrFail($id);
        $materiaTutor->delete();
        return redirect()->back()->with('success', 'La materia ha sido eliminada correctamente.');
    }

}
