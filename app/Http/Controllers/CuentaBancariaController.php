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

    public function formRegistro($id=0)
    {
        $user_id = \Auth::user()->id;
        //$cuenta = null;
        //if ($id!=0) {
            $cuenta = Cuenta::where('user_id', '=', $user_id)->first();
        //}
        return view(
            'registroCuenta',
            [
                'bancos' => $this->bancos,
                'tiposCta' => $this->tiposCta,
                'id' => $user_id,
                'cuenta' => $cuenta,
            ]
        );
    }

    public function saveRegistro(Request $request) {
        $rules = [
            'id' => 'required',
            'banco' => 'required',
            'tipoCta' => 'required',
            'identificacion' => 'required',
            'nroCta' => 'required',
            'nombreCompleto' => 'required',
        ];
        $messages = [
            'id.required' => 'No ha indicado un Id',
            'banco.required' => 'No ha indicado el banco',
            'tipoCta.required' => 'No ha indicado el tipo de cuenta',
            'identificacion.required' => 'No ha indicado la identificación',
            'nroCta.required' => 'No ha indicado el número de cuenta',
            'nombreCompleto.required' => 'No ha indicado el nombre completo',
        ];
        $request->validate($rules, $messages);

        $user = \Auth::user()->id;

        $cta = $request->id == 0 ? new Cuenta() : Cuenta::find($request->id);
        $cta->banco_id = $request->banco;
        $cta->tipocta_id = $request->tipoCta;
        $cta->identificacionTitular = $request->identificacion;
        $cta->nombreTitular = $request->nombreCompleto;
        $cta->numero = $request->nroCta;
        $cta->user_id = $user;
        $cta->save();

        return response()->json([
            'success' => true,
            'message' => '<h5 class="success">¡Éxito!</h5>Tu cuenta bancaria ha sido ' . ($request->id == 0 ? 'registrada' : 'modificada') . ' satisfactoriamente',
        ]);
    }
}
