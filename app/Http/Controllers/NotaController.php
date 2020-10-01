<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
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

        $data = [
            'endosante' => trim($request->nombreTitular) . ' ' . trim($request->apellidoTitular)
        ];

        $pdf = PDF::loadView('pdf.ventaNota', $data, [ 'format' => 'A4' ]);

        Mail::send('mail.ventaNota', $data, function($message) use ($pdf, $email){
            $message->from(env('MAIL_FROM_ADDRESS'));
            $message->to($email);
            $message->subject('TDVuelvo: Nota de Venta');
            $message->attachData($pdf->output(),'nota_de_venta.pdf');
        });


        return response()->json([
            'success' => true,
            'message' => 'Nos contactaremos contigo a tu correo registrado para continuar con los siguientes pasos de venta.',
        ]);
    }
}
