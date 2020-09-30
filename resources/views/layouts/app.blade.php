<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!--<link href="{{ asset('css/all.css') }}" rel="stylesheet">-->
    <link href="css/estilos.css" rel="stylesheet">
    <link href="css/estilos2.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
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
                    <img class="img-fluid" src="img/logoP6.png" />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center">
                    <a class="navFont" href="{{ route('inicio') }}#venderNota">Vender nota</a>
                </div>
                
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center">
                    <a class="navFont" href="{{ route('login') }}">Iniciar sesión</a>
                </div>
                @else
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center">
                    <p class="navFont">Empresa</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center">
                    <p class="navFont">Instrucciones</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 logo" style="bottom: 14px;">
                    <img class="img-fluid" src="img/logoP6.png" />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center">
                    <a class="navFont" href="{{ route('venderNota') }}">Vender nota</a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 pt-4 text-center dropdown">
                    <a class="navFont" href="{{ route('perfil') }}" >Mi perfil</a>
                    <div class="dropdown-content border">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
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
                        <a class="mr-1" id="" title="Connect with us on facebook" href=""><img src="img/logo_facebook.png"></a>
                        <a class="mr-1" id="" title="Follow us on Twitter" href="" target="_blank"><img src="img/logo_twitter.png"></a>
                        <a class="mr-1" id="" title="Instagram" href="" target="_blank"><img src="img/logo_insta.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>

</body>

</html>
