<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" href="css/estilos.css" />
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
    <header class="">
        <div class="container-fluid header">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center">
                    <a class="navFont" href="{{ route('inicio') }}#empresa">Empresa</a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center">
                    <a class="navFont" href="{{ route('inicio') }}#instrucciones">Instrucciones</a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 logo" style="bottom: 14px;">
                    <img class="img-fluid" src="img/logoP6.png" />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center">
                    <a class="navFont" href="{{ route('inicio') }}#venderNota">Vender nota</a>
                </div>
                @guest
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center">
                    <a class="navFont" href="{{ route('login') }}">Iniciar sesión</a>
                </div>
                @else
                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                @endguest
            </div>
        </div>
    </header>
    @yield('seccionPrincipal')
    <footer>
        <div class="container-fluid footer">
            <div class="row justify-content-md-center sizeFooter text-center">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <p class="text-center colorW letraFooter">©TDVUELVO. Todos los derechos reservados.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ">
                    <p class="text-center colorW letraFooter">Respaldado por LEXTAX</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ">

                </div>
            </div>
            <!--<div class="footerFix">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="colorW">©TDVUELVO. Todos los derechos reservados.</p>
                        </div>
                        <div class="col-md-3">Respaldado por LEXTAX</div>
                        <div class="col-md-3">redes</div>
                    </div>
                </div>
            </div>-->
        </div></footer>

    <script src="dist/smooth-scroll.polyfills.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>
</body>

</html>
