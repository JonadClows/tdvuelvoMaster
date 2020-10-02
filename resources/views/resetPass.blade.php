@extends('layouts.app')
@section('seccionPrincipal')
<div class="container-fluid espacio">
    <div class="row pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center pt-4">
            <label class="register">RECUPERAR CONTRASEÑA</label>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <p class="extra">Ingresa tu correo</p>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-lg-12 col-md-12 col-sm-12 align-self-center ">
            <div id="login" style="height: 240px;">
                <form id="frmResetPass" method="POST" action="/recuperar-clave" class="pt-5">
                    @csrf
                    <input type="text" name="contactEmail" id="contactEmail" placeholder="Email" required/><br>
                    <input class="fondoAzul" type="submit" value="Enviar" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection