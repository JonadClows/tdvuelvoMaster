@extends('layouts.app')
@section('seccionPrincipal')
<div class="fondoTd">

    </div>
    <div class="container espacio">
        <div class="row mt-5">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="row">
                    <div class="container mt-5 ml-3 mr-3 sombra border">
                        <div class="row">
                            <div class="col-lg-12 colorC">
                                <h5 class="fontMP">MI PERFIL</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                            <p class="infoMP">{{ Auth::user()->name }}</p>
                            </div>
                            <div class="col-lg-6">
                                <!--<p class="infoMP">Ultimo login 26-09-2020 a las 09:30</p>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="container mt-3 ml-3 mr-3 pt-3 pb-3 sombra border">
                        <!--<div class="row">
                            <div class="col-lg-12">
                                <h2>MI INFORMACION</h2>
                            </div>
                        </div>-->
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <div class="row">
                                    <div class="col-lg-12 colorC">
                                        <h5 class="fontMP">MI INFORMACION</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p class="infoMP mb-0"><tspan class="font-weight-bold">CI:</tspan> {{ Auth::user()->cedula }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                    <p class="infoMP mb-0"><tspan class="font-weight-bold">Correo electronico:</tspan> {{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                    <p class="infoMP mb-0"><tspan class="font-weight-bold">Numero telefonico:</tspan> {{ Auth::user()->telefono }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 mt-4 text-center">
                                <a type="button" class="btnMP btnC" href="{{ route('registro') }}">Editar datos</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="container mt-3 ml-3 mr-3 pt-3 pb-3 sombra border">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-7 mt-2 colorC">
                                <h5 class="fontMP">CUENTA BANCARIA</h5>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 text-center d-flex align-items-start justify-content-center">
                                <a type="button" id="linkRegistrarCuenta" class="btnMP btnC"
                                    href="{{
                                        sizeof($cuentas)==0
                                            ? route('registrarCuenta')
                                            : 'editar-cuenta/' . $cuentas[0]->id
                                    }}"
                                >
                                    {{ sizeof($cuentas)==0 ? 'Registrar' : 'Editar' }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="container mt-3 ml-3 mr-3 pt-3 pb-3 sombra border">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <div class="row">
                                    <div class="col-lg-12 colorC">
                                        <h5 class="fontMP">MI CONTRASEÑA</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <em>Mi contraseña actual: *******</em>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-lg-5 col-md-5 col-sm-5 mt-2 text-center">
                                <a type="button" class="btnMP btnC" href="{{ route('cambiaPass') }}">Cambiar contraseña</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="row">
                    <div class="container mt-5 mb-5 ml-3 mr-3 sombra border">
                        <div class="row">
                            <div class="col-lg-12 colorC">
                                <h5 class="fontMP">NOTAS DE CRÉDITO</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container mt-3 ml-3 mr-3 border">
                                <div class="row divMP btnC">
                                    <div class="col-lg-6 text-center colorC">
                                        <h4 class="fontMP pt-4">NOTAS VENDIDAS</h4>
                                    </div>
                                    <div class="col-lg-6 text-center">
                                        <h1 class="numMP">1</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="container mt-4 mt-2 ml-3 mr-3 border">
                                <div class="row divMP btnC">
                                    <div class="col-lg-6 text-center colorC">
                                        <h4 class="fontMP pt-4">NOTAS EN VENTA</h4>
                                    </div>
                                    <div class="col-lg-6 text-center">
                                        <h1 class="numMP">0</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt-4 mb-3">
                                <button
                                    id="btnSellNote"
                                    class="fondoBtn btn btn-outline-secondary btn-block {{ (sizeof($cuentas)==0 ? 'disabled' : '') }}"
                                    data-url="{{ url('vender-nota') }}"
                                >
                                    Vender Nota
                                </button>
                                @if (sizeof($cuentas)==0)
                                    <p class="text-center">No tiene cuentas registradas</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection