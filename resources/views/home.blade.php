@extends('layouts.app')
@section('seccionPrincipal')
<div class="container-fluid">
    <div id="empresa" class="row mainW">
        <div class="col-lg-6 col-md-6 col-sm-12 parte1 ">
            <div class="row pl-5" id="">
                <div class="col-md-8 ">
                    <h1 class="colorC ubiFont" id="titlePrin">FINANZAS DIGITALES</h1>
                </div>
            </div>
            <div class="row pl-5 pt-5">
                <div class="col-md-10 ">
                    <p class="colorC sizeP ubiFont">
                        <tspan class="boldSize">TDVUELVO</tspan> es una empresa enfocada en facilitar varios procesos tributarios, con el respaldo de uno de los estudios jurídicos más importantes del Ecuador.
                    </p>
                </div>
            </div>
            <div class="row pl-5 pt-5 text-center">
                <div class="col-md-6 ">
                    <a id="" class="btnCrearCuenta btnC" href="{{ route('provincia') }}" onclick="//llenaDatos()">Crea tu cuenta</a>
                </div>
                <div class="col-md-6 text-left">
                    <a class="colorC sizeP" href="#contactanos">Contáctate con nosotros</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 pt-4 pl-4 parte1  text-center">
            <img class="img-fluid" width="510" src="img/imgEmpresa-2x.png" />
            <!--<figure>
                <img class="img-fluid rounded d-block m-l-none" src="img/imgEmpresa-2x.png">
            </figure>
            <div id="imgEmpresa" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ml-5 "></div>-->
        </div>
    </div>
    <div id="instrucciones" class="row mainW">
        <div class="col-lg-6 col-md-6 col-sm-12 parte1  ">
            <div class="row pl-5 pt-5" id="">
                <div class="col-md-8 ">
                    <h1 class="colorC ubiFont" id="titlePrin">¿CÓMO VENDER MI NOTA?</h1>
                </div>
            </div>
            <div class="row pl-5 pt-5">
                <div class="col-md-10 ">
                    <p class="colorC sizeP ubiFont">
                        Mira el video y aprende cómo realizar la venta de tu nota de crédito desmaterializada en pocos pasos.<br />Si tienes alguna pregunta, siempre puedes contactarnos.
                    </p>
                </div>
            </div>
            <div class="row pl-5 pt-5 text-center">
                <div class="col-md-6 ">
                    <a id="" class="btnCrearCuenta btnC" href="{{ route('registro') }}" onclick="llenaDatos()">Comienza aquí</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 pt-4 pl-4 parte1  text-center">
            <img class="img-fluid" style="margin-top: 35px;" width="610" src="img/videoVenderNota.jpg" />
        </div>
    </div>
    <div id="venderNota" class="row mainC">
        <div class="col-lg-6 col-md-6 col-sm-12 parte1  ">
            <div class="row pl-5 pt-5" id="">
                <div class="col-md-8 ">
                    <h1 class="colorW text-left ubiFont" id="titlePrin">VENDE TU NOTA DE CRÉDITO</h1>
                </div>
            </div>
            <div class="row pl-5 pt-5">
                <div class="col-md-10 ">
                    <p class="colorW sizeP ubiFont">
                        <tspan class="boldSize">TDVUELVO</tspan> te ayuda a comercializar tus notas de crédito desmaterializadas.
                        <br />Crea tu cuenta y convierte tu nota de crédito en efectivo.
                    </p>
                </div>
            </div>
            <div class="row pl-5 pt-5 text-center">
                <div class="col-md-6 ">
                    <a id="" class="btnCrearCuenta btnW" href="{{ route('inicio') }}" onclick="llenaDatos()">Crea tu cuenta</a>
                </div>
                <div class="col-md-6 text-left">
                    <a class="colorW sizeP" href="#contactanos">Contáctate con nosotros</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 parte1 ">
            <div class="simulador">
                <div id="centrar">
                    <p id="title">SIMULADOR</p>
                    <p>
                        Calcula el monto que recibiras por tu nota de crédito.
                        <br />Ingresa el valor de tu nota para disponibilizar el porcentaje que aplica y el valor correspodiente.
                    </p>
                    <label>MONTO DE NOTA</label>
                    <input type="text" name="txtMontoNota" id="txtMontoNota" class="txtPart2" />
                    <label>COMISIÓN</label>
                    <input type="text" name="txtComision" id="txtComision" class="txtPart2" readonly/>
                    <label>TOTAL A RECIBIR</label>
                    <input type="text" name="txtTotalRecibir" id="txtTotalRecibir" class="txtPart2" readonly /><br /><br />
                    <input type="hidden" value="Enviar" />
                </div>
            </div>
        </div>
    </div>
    <div id="contactanos" class="row text-center colorContact">
        <div class="col-md-12">
            <h1>Sigue estos cuatro pasos</h1>
            <!--<img src="vender2.svg" />-->
        </div>
        <div class="col-md-12">
            <h6>y podrás convertir tu nota de credito en efectivo con rapidez</h6>
        </div>
        <br>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-3">
                    <div class="media">
                        <div class="col col-lg-12">
                            <img class="mr-3 img-responsive" src="img/paso1.png" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-12 text-center">1. CREA TU CUENTA</div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="media">
                        <div class="col col-lg-12 align-self-center">
                            <img class="mr-3 img-responsive" src="img/paso2.png" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-12 text-center">2. REGISTRA TU NOTA</div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="media">
                        <div class="col col-lg-2 align-self-center">
                            <img class="mr-3 img-responsive" src="img/paso3.png" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-12 text-center">3. FIRMA CONTRATO</div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="media">
                        <div class="col col-lg-2 align-self-center">
                            <img class="mr-3 img-responsive" src="img/paso4.png" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-12 text-center">4. ENDOSA Y RECIBE TU DINERO</div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col col-lg-3 mt-4">
                    <a href="#instrucciones" style="text-decoration: underline;">Mira nuestro video explicativo</a>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-5 col-md-7 col-sm-5 mt-5 text-left">
                    <span class="colorContact">Contáctanos</span>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <form action="/contacto" method="POST">
                    <div id="contact" class=" input-group mb-3 ">
                        @csrf
                        <input type="text" name="contactEmail" id="contactEmail" class="form-control" placeholder="Correo electrónico" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append fondoAzul">
                            <button class="btn btn-outline-secondary" type="submit" style="color: white;">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection