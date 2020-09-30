<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banco;
use App\Models\TipoCuenta;
use App\Models\Cuenta;

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
        $request->validate([
            'banco' => 'required',
            'tipoCta' => 'required',
            'cedula' => 'required',
            'nroCta' => 'required',
            'nombreCompleto' => 'required',
        ]);

        $user = \Auth::user()->id;

        $cta = new Cuenta();
        $cta->banco_id = $request->banco;
        $cta->tipocta_id = $request->tipoCta;
        $cta->identificacionTitular = $request->cedula;
        $cta->nombreTitular = $request->nombreCompleto;
        $cta->numero = $request->nroCta;
        $cta->user_id = $user;
        $cta->save();

        return view(
            'registroCuenta',
            [
                'bancos' => $this->bancos,
                'tiposCta' => $this->tiposCta,
                'message' => 'Cuenta registrada satisfactoriamente'
            ]
        );
    }
}
