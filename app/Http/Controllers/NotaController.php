<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
use App\Models\Cuenta;
use App\Models\Banco;
use App\Models\TipoCuenta;
use Illuminate\Support\Facades\Mail;
use PDF;

class NotaController extends Controller
{
    public function venderNota() {
        return view('venderNota');
    }

    public function saveNota(Request $request) {
        $rules = [
            'monto' => 'required',
            'nombreTitular' => 'required',
            'apellidoTitular' => 'required',
            'valorNeto' => 'required',
            'comision' => 'required',
        ];
        $messages = [
            'monto.required' => 'El monto es requerido',
            'nombreTitular.required' => 'El nombre del titular es requerido',
            'apellidoTitular.required' => 'El apellido del titular es requerido',
            'valorNeto.required' => 'El total es requerido',
            'comision.required' => 'La comisión es requerida',
        ];
        $request->validate($rules, $messages);

        $user_id = \Auth::user()->id;
        $email = \Auth::user()->email;

        $nota = new Nota();
        $nota->nombreTitular = $request->nombreTitular;
        $nota->apellidoTitular = $request->apellidoTitular;
        $nota->montoNota = $request->monto;
        $nota->valorNeto = $request->valorNeto;
        $nota->comision = $request->comision;
        $nota->user_id = $user_id;
        $nota->save();

        // Una vez guardados los datos, ahora se genera el pdf
        
        $cuentas = Cuenta::where('user_id','=',$user_id)->first();
        $banco = Banco::where('id','=',$cuentas->banco_id)->first();
        $tipoCuenta = Tipocuenta::where('id','=',$cuentas->tipocta_id)->first();
        

        //identificacionTitular - numero - banco_id - tipocta_id

        $data = [
            'endosante' => trim($request->nombreTitular) . ' ' . trim($request->apellidoTitular),
            'cedula' => $cuentas->identificacionTitular,
            'tipoCta' => $tipoCuenta->name,
            'numeroCta' => $cuentas->numero,
            'bancoCta' => $banco->name
        ];

        $pdf = PDF::loadView('pdf.ventaNota', $data, [ 'format' => 'A4' ]);

        Mail::send('mail.ventaNota', $data, function($message) use ($pdf, $email){
            //$message->from(env('MAIL_FROM_ADDRESS'));
            $message->from($email);
            $message->to('info@tdvuelvo.com');
            $message->subject('TDVuelvo: Nota de Venta');
            $message->attachData($pdf->output(),'nota_de_venta.pdf');
        });


        return response()->json([
            'success' => true,
            'message' => 'Nos contactaremos contigo a tu correo registrado para continuar con los siguientes pasos de venta.',
        ]);
    }
}
