<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function savePayment(Request $request)
    {
        try {

            $this->validate($request,array(
               'student_id' => 'required',
               'operation_date' => 'required',
               'application_date' => 'required',
                'payment_type' => 'required',
                'concept' => 'required',
                'folio' => 'required',
                'auth_number' => 'required',
                'amount' => 'required'
            ));

            DB::beginTransaction();
            $payment = (new Payment());

            $payment->user_id = $request->input('student_id') ?? '';
            $payment->application_date = $request->input('application_date') ?? '';
            $payment->payment_type = $request->input('payment_type') ?? '';
            $payment->concept = $request->input('concept') ?? '';
            $payment->amount = $request->input('amount') ?? '';
            $payment->quantity = $request->input('quantity') ?? '';
            $payment->folio = $request->input('folio') ?? '';
            $payment->authorization_number = $request->input('auth_number') ?? '';
            $payment->operation_date = $request->input('operation_date') ?? '';
            $payment->comment = $request->input('comment') ?? '';

            $payment->save();
            DB::commit();
            return response()->json(array(
                'type' => 'success',
                'message' => 'Se ha registrado un nuevo pago al alumno'
            ));
        }catch (Exception $exception){
            DB::rollBack();
            abort(500,'Hubo un error interno: '.$exception->getMessage());
        }
    }

}
