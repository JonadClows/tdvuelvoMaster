<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>TDVUELVO Tu nota de crédito del SRI en dinero inmediato a un clic.</title>
    <meta name="text"
        content="Somos una solución digital para la comercialización de tus notas de crédito desmaterializadas de manera ágil y segura.">
    <meta name="description"
        content="Somos una solución digital para la comercialización de tus notas de crédito desmaterializadas de manera ágil y segura.">
    <meta name="keywords"
        content="Devolución SRI, Notas de crédito SRI, Nota de Crédito desmaterializada, Liquidez, Vender nota, Devolución de impuestos, Pago SRI, Vender nota, Devolución efectiva">
    <!--<link href="{{ asset('css/all.css') }}" rel="stylesheet">-->
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MJSXG6Q');
    </script>
    <!-- End Google Tag Manager -->

    <link href="/css/estilos.css" rel="stylesheet">
    <link href="/css/estilos2.css" rel="stylesheet">
    {{-- 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJSXG6Q" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="">
        <div class="container-fluid header">
            <div class="row">
                @guest
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center">
                    <a class="navFont" href="{{ route('inicio') }}#empresa">Empresa</a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center">
                    <a class="navFont" href="{{ route('inicio') }}#instrucciones">Instrucciones</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 logo" style="bottom: 14px;">
                    <a href="/">
                        <img class="img-fluid" src="{{ asset('img/logoP6.png') }}" />
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center">
                    <a class="navFont" href="{{ route('inicio') }}#venderNota">Vender nota</a>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center">
                    <a class="navFont" href="{{ route('login') }}">Iniciar sesión</a>
                </div>
                @else
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center">
                    <div class="dropdown-hover">
                        <a class="navFont py-4" href="{{ route('informacionPerfil') }}">Mi perfil</a>
                        <div class="dropdown-content">
                            <a href="{{ route('registro') }}">Editar datos</a>
                            <a href="{{ route('registrarCuenta') }}">Editar Cuenta Bancaria</a>
                            <a href="{{ route('cambiaPass') }}">Cambiar Contraseña</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center">
                    <p class="navFont"></p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 logo" style="bottom: 14px;">
                    <a href="/">
                        <img class="img-fluid" src="{{ asset('img/logoP6.png') }}" />
                    </a>

                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center">
                    <a class="navFont" href="{{ route('venderNota') }}"></a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center dropdown">
                    <a class="navFont" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar
                        sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>

            @endguest
        </div>
        </div>
    </header>
    @yield('seccionPrincipal')

    {{-- Modal Dialog --}}
    <div class="modal fade" id="modalDialog" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="modalDialogLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <span id="modalDialogLabel" class="sr-only">Diálogo Registro de Cuenta</span>
                    <img src="{{ asset('img/logo-blanco-gde.png') }}" alt="TDVuelvo" class="mx-auto d-block logo">
                </div>
                <div class="modal-body">
                    <div class="modal-message"></div>
                    <button data-dismiss="modal">Continuar</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid footer">
            <div class="row justify-content-md-center sizeFooter text-center">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <p class="text-center colorW letraFooter">©TDVUELVO. Todos los derechos reservados.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ">
                    <p class="text-center colorW letraFooter">Respaldado por LEXTAX, GRUPO LINK Y STUPENDO. </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ">
                    <div class="socialSimple text-right mr-4 mt-4">
                        <a class="mr-2" id="" title="LinkedIn" href="" target="_blank"><img src="img/logo_in.png"></a>
                        <a class="mr-1" id="" title="Connect with us on facebook" href=""><img
                                src="img/logo_facebook.png"></a>
                        <a class="mr-1" id="" title="Follow us on Twitter" href="" target="_blank"><img
                                src="img/logo_twitter.png"></a>
                        <a class="mr-1" id="" title="Instagram" href="" target="_blank"><img
                                src="img/logo_insta.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
    var scroll = new SmoothScroll('a[href*="#"]');
    </script>

</body>

</html>