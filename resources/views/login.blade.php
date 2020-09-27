@extends('layouts.app')
@section('seccionPrincipal')
<div class="container-fluid">
    <div class="row pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 align-self-center pt-5 mt-5">
            <div id="login">
                <form method="POST" action="{{ route('login') }}" >
                    @csrf
                    <label class="logon">INICIAR SESION</label>
                    <input type="text" name="email" placeholder="C.I./ RUC" /><br>
                    <input type="password" name="password" placeholder="Contraseña" />
                    <div class="text-right"><a>* Olvide mi contraseña</a></div><br><br>
                    <input class="fondoAzul" type="submit" value="Enviar" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection