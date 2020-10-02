@extends('layouts.app')
@section('seccionPrincipal')
<div class="container-fluid espacio">
    <div class="row pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center pt-4">
            <label class="register">INICIAR SESION</label>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <p class="extra">Ingresa tus datos para acceder a tu perfil</p>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-lg-12 col-md-12 col-sm-12 align-self-center ">
            <div id="login">
                <form method="POST" action="{{ route('login') }}" class="pt-5">
                    @csrf
                    <input type="text" name="email" placeholder="Email" required /><br>
                    <input type="password" name="password" placeholder="Contraseña" required />
                    <div class="text-right">
                        <a class="btn btn-link" href="{{ route('resetPass') }}"
                            style="text-decoration: none; color: #878787;">* Olvide mi contraseña</a>
                    </div><br><br>
                    <input class="fondoAzul" type="submit" value="Enviar" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection