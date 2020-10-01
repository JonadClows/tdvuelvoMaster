<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banco;
use App\Models\TipoCuenta;
use App\Models\Cuenta;
use Illuminate\Support\Facades\Validator;

class CuentaBancariaController extends Controller
{
    protected $bancos;
    protected $tiposCta;

    public function __construct()
    {
        $this->bancos = Banco::get();
        $this->tiposCta = TipoCuenta::get();
    }

    public function formRegistro()
    {
        return view(
            'registroCuenta',
            [
                'bancos' => $this->bancos,
                'tiposCta' => $this->tiposCta,
            ]
        );
    }

    public function saveRegistro(Request $request) {
        $rules = [
            'banco' => 'required',
            'tipoCta' => 'required',
            'identificacion' => 'required',
            'nroCta' => 'required',
            'nombreCompleto' => 'required',
        ];
        $messages = [
            'banco.required' => 'No ha indicado el banco',
            'tipoCta.required' => 'No ha indicado el tipo de cuenta',
            'identificacion.required' => 'No ha indicado la identificación',
            'nroCta.required' => 'No ha indicado el número de cuenta',
            'nombreCompleto.required' => 'No ha indicado el nombre completo',
        ];
        $request->validate($rules, $messages);

        $user = \Auth::user()->id;

        $cta = new Cuenta();
        $cta->banco_id = $request->banco;
        $cta->tipocta_id = $request->tipoCta;
        $cta->identificacionTitular = $request->identificacion;
        $cta->nombreTitular = $request->nombreCompleto;
        $cta->numero = $request->nroCta;
        $cta->user_id = $user;
        $cta->save();

        return response()->json([
            'success' => true,
            'message' => '<h5 class="success">¡Éxito!</h5>Tu cuenta bancaria ha sido registrada satisfactoriamente',
        ]);
    }
}
