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

}
