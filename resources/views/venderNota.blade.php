@extends('layouts.app')
@section('seccionPrincipal')
<div id="registro" class="container-fluid espacio" style="display: block;">
    <div class="row pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <label class="register">INGRESA LOS SIGUIENTES DATOS<br>Y VENDE TU NOTA DE CRÉDITO</label>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 align-self-center">
            <div id="register" class="sellNote">

                <div class="row">
                    <div class="col-6">
                        <input type="text" name="monto" placeholder="MONTO DE NOTA DE CRÉDITO" />
                        <input type="text" name="nombre" placeholder="NOMBRE DEL TITULAR" />
                        <input type="text" name="apellido" placeholder="APELLIDO DEL TITULAR" />
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="calculatedValue">
                                    <p class="text-center">VALOR NETO<br>A RECIBIR</p>
                                    <p class="value text-center">$00.00</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="calculatedValue">
                                    <p class="text-center">COMISIÓN</p>
                                    <p class="value text-center">$00.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col buttonWrapper">
                        <input class="fondoAzul" type="submit" value="Continuar">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
