<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Tutor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrarController extends Controller
{
    #ruta del index al registro
    public function registrar()
    {
        return view('registrar');
    }

    public function register(Request $request){
        $user= new User();

        $user->email=$request->email;
        $user->password=Hash::make($request->password);

        $user->save();

        Auth::login($user);

        if (radios.value()=="Estudiante") {
            $tutor = new Tutor();

            $tutor->nombre = $request->nombre;
            $tutor->apellido_paterno = $request->apellido_paterno;
            $tutor->apellido_materno = $request->apellido_metrno;
            $tutor->fecha_nacimiento = $request->fecha_nacimiento;
            $tutor->sexo = $request->sexo;

            $tutor->save();
        }else {
            $estudiante = new Estudiante();

            $estudiante->nombre = $request->nombre;
            $estudiante->apellido_paterno = $request->apellido_paterno;
            $estudiante->apellido_materno = $request->apellido_metrno;
            $estudiante->fecha_nacimiento = $request->fecha_nacimiento;
            $estudiante->sexo = $request->sexo;

            $estudiante->save();
        }

        return redirect(route('home'));
    }

}
