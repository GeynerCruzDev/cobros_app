<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserPaymentController extends Controller
{
    
    public function listaAlumnos()
    {
        $alumnos = User::all();
        return view('payments',compact('alumnos'));
    }

    public function nuevoAlumno()
    {
        return view('students.new_student');
    }

    public function guardarAlumno(Request $request)
    {
        //dd($request);
        //throw new \Exception('Hubo un error');
        return 'Guardando alumno ...';

    }

}
