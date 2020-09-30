@extends('layouts.app')
@section('seccionPrincipal')
<div id="registro" class="container-fluid espacio" style="display: block;">
    <div class="row pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <label class="register">INGRESA LOS SIGUIENTES DATOS <br />Y VENDE TU NOTA DE CRÉDITO</label>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 align-self-center">
            <div class="boxVN">
                <form action="{{}}" method="POST">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <form action="">
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg"
                                                placeholder="MONTO NOTA DE CRÉDITO">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg"
                                                placeholder="NOMBRE DEL TITULAR">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg"
                                                placeholder="APELLIDO DEL TITULAR">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="row mr-1">
                                        <div class="col-lg-6 col-md-6 col-sm-6 border pt-5 pb-5">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <em>VALOR NETO A RECIBIR</em>
                                                </div>
                                            </div>
                                            <div class="row text-center">
                                                <div class="col-lg-12 text-center">
                                                    <h1>$00.00</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 border pt-5 pb-5">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <em>COMISION</em>
                                                </div>
                                            </div>
                                            <div class="row text-center">
                                                <div class="col-lg-12 text-center">
                                                    <h1>$00.00</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-ld-center">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 col-md-12, col-sm-12 text-center">
                            <button class="btn btn-primary btn-block">Continuar</button>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection