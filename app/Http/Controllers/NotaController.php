<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    public function venderNota() {
        return view('venderNota');
    }

    public function saveNota(Request $request) {
        $rules = [
            'montoVN' => 'required',
            'nombreVN' => 'required',
            'apellidoVN' => 'required',
        ];
        $messages = [
            'montoVN.required' => 'No ha indicado el monto',
            'nombreVN.required' => 'No ha indicado el nombre del titular',
            'apellidoVN.required' => 'No ha indicado el apellido del titular',
        ];
        $request->validate($rules, $messages);

        $user_id = \Auth::user()->id;
        $user_ced = \Auth::user()->cedula;

        $nota = new Nota();
        $nota->monto_nota = $request->montoVN;
        $nota->nombreTitular = $request->nombreVN;
        $nota->apellidoTitular = $request->apellidoVN;
        $nota->valor_neto = $request->valorNetoVN;
        $nota->comision = $request->comisionVN;
        $nota->user_id = $user;
        $nota->save();

        return response()->json([
            'success' => true,
            'message' => 'Nos contactaremos contigo a tu
            correo registrado para continuar
            con los siguientes pasos de venta.',
        ]);
    }
}
