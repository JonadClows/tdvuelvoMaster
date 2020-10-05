@extends('layouts.app')
@section('seccionPrincipal')
<div class="container-fluid">
    <div id="empresa" class="row mainW" style="padding-top: 45px;">
        <div class="col-lg-6 col-md-6 col-sm-6 parte1 ">
            <div class="row pl-3" id="">
                <div class="col-md-8 ">
                    <h1 class="colorC ubiFont" id="titlePrin">FINANZAS DIGITALES</h1>
                </div>
            </div>
            <div class="row pl-3 pt-5">
                <div class="col-md-10 ">
                    <p class="colorC sizeP ubiFont">
                        <tspan class="boldSize">TDVUELVO</tspan> es una empresa enfocada en facilitar varios procesos
                        tributarios, con el respaldo de uno de los estudios jurídicos más importantes del Ecuador.
                    </p>
                </div>
            </div>
            <div class="row pl-3 pt-4">
                <div class="col-lg-7 col-md-8 col-sm-4 mt-3">
                    <a id="" class="btnCrearCuenta btnC" href="{{ route('registro') }}">Crea tu cuenta</a>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-4 text-left">
                    <a class="colorC sizeP" href="#contactanos">Contáctate con nosotros</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 pt-4 pl-4 parte1  text-center">
            <img class="img-fluid" width="510" src="img/imgEmpresa-2x.png" />
        </div>
    </div>
    <div id="instrucciones" class="row mainW">
        <div class="col-lg-5 col-md-12 col-sm-12 parte1">
            <div class="row pl-3 pt-5" id="">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <h1 class="colorC ubiFont" id="titlePrin">¿CÓMO VENDER MI NOTA?</h1>
                </div>
            </div>
            <div class="row pl-3 pt-5">
                <div class="col-lg-11 col-md-12 col-sm-12">
                    <p class="colorC sizeP ubiFont">
                        Mira el video y aprende cómo realizar la venta de tu nota de crédito desmaterializada en pocos
                        pasos.<br />Si tienes alguna pregunta, siempre puedes contactarnos.
                    </p>
                </div>
            </div>
            <div class="row pl-3 pt-4">
                <div class="col-lg-9 col-md-8 col-sm-4 mt-3">
                    <a id="" class="btnCrearCuenta btnC" href="{{ route('registro') }}">Comienza aquí</a>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 pl-0 parte1  text-center">
            <!--<iframe width="682" height="405" src="img/videoVenderNota.mp4" style="padding-bottom: 21px;" frameborder="0" allowfullscreen autoplay></iframe>
            <iframe width="569" height="345" src="img/videoVenderNota.mp4"
                style="padding-bottom: 25px; margin-top: 70px;" frameborder="0" allowfullscreen></iframe>-->

            <iframe width="560" height="315" src="https://www.youtube.com/embed/j6KEsQoz3AY"
                style="padding-bottom: 25px; margin-top: 70px;" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
    <div id="venderNota" class="row mainC" style="padding-bottom: 40px;">
        <div class="col-lg-6 col-md-6 col-sm-12" style="margin-top: 50px;">
            <div class="row pl-3 pt-5" id="">
                <div class="col-sm-10">
                    <h1 class="colorW text-left ubiFont" id="titlePrin">VENDE TU NOTA DE CRÉDITO</h1>
                </div>
            </div>
            <div class="row pl-3 pt-5">
                <div class="col-md-10">
                    <p class="colorW sizeP ubiFont">
                        <tspan class="boldSize">TDVUELVO</tspan> te ayuda a comercializar tus notas de crédito
                        desmaterializadas.
                        <br />Crea tu cuenta y convierte tu nota de crédito en efectivo.
                    </p>
                </div>
            </div>
            <div class="row pl-3 pt-4">
                <div class="col-lg-7 col-md-8 col-sm-4 mt-3">
                    <a id="" class="btnCrearCuenta btnW" href="{{ route('registro') }}">Crea tu cuenta</a>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-4 text-left">
                    <a class="colorW sizeP" href="#contactanos">Contáctate con nosotros</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 parte1 ">
            <div class="simulador">
                <div id="centrar">
                    <h3 class="colorContact" id="title">SIMULADOR</h3>
                    <p>
                        Calcula el monto que recibiras por tu nota de crédito.
                        <br />Ingresa el valor de tu nota para disponibilizar el porcentaje que aplica y el valor
                        correspodiente.
                    </p>
                    <label>MONTO DE NOTA</label>
                    <input type="text" name="txtMontoNota" id="txtMontoNota" class="txtPart2"
                        onKeyPress="return soloNumeros(event)" />
                    <label>DESCUENTO %</label>
                    <input type="text" name="txtComision" id="txtComision" class="txtPart2" readonly />
                    <label>TOTAL A RECIBIR</label>
                    <input type="text" name="txtTotalRecibir" id="txtTotalRecibir" class="txtPart2"
                        readonly /><br /><br />
                    <input type="hidden" value="Enviar" />
                </div>
            </div>
        </div>
    </div>
    <div id="contactanos" class="row text-center colorContact" tabindex="-1" style="outline: none;">
        <div class="col-md-12">
            <h1>Sigue estos tres pasos</h1>
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
                        <div class="col col-lg-12 pl-4">
                            <img class="pl-2 img-responsive" src="img/paso1.png">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-12 text-center">1. CREA TU CUENTA</div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="media">
                        <div class="col col-lg-12 pl-4">
                            <img class="pl-2 img-responsive" src="img/paso2.png">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-12 text-center">2. REGISTRA TU NOTA</div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="media">
                        <div class="col col-lg-12 pl-4">
                            <img class="pl-2 img-responsive" src="img/paso3.png">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-12 text-center pl-5 pr-5">3. ENDOSA TU NOTA</div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="media">
                        <div class="col col-lg-12 pl-4">
                            <img class="pl-2 img-responsive" src="img/paso4.png">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-12 text-center">LISTO, RECIBE TU DINERO</div>
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
                <form id="frmContacto" action="/contacto" method="POST">
                    <div id="contact" class=" input-group mb-3 ">
                    @csrf
                        <div class="btn-group dropup">
                            <select name="asunto" id="asunto" class="btn btn-info dropdown-toggle text-center fondoAzul" style="width: 115px;">
                                <option hidden>Asunto</option>
                                <option value="Información empresa">Quiero saber más de la empresa.</option>
                                <option value="Cotización personalizada">Tengo una cotización personalizada.</option>
                                <option value="Información devolución">Quiero información para hacer el trámite de la
                                    devolución con ustedes.</option>
                                <option value="Cambio Devolución a N/C">Tengo una devolución en cuenta y quiero cambiar
                                    a nota de crédito.</option>
                                <option value="N/C Cartular">Tengo una nota de crédito cartular.</option>
                                <option value="Inconveniente en venta de nota">No puedo completar la venta de la nota.
                                </option>
                                <option value="Otras">Otras.</option>
                            </select>
                        </div>

                        <input type="text" name="contactEmail" id="contactEmail" class="form-control"
                            placeholder="Correo electrónico" aria-label="Recipient's username"
                            aria-describedby="basic-addon2">

                        <div class="input-group-append fondoAzul">
                            <button class="btn btn-outline-secondary" type="submit"
                                style="color: white;">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection