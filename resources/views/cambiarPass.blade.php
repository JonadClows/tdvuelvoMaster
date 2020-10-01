@extends('layouts.app')
@section('seccionPrincipal')
<div id="registro" class="container-fluid espacio" style="display: block;">
    <div class="row pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <label class="register">CAMBIAR CONTRASEÑA</label>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <p class="extra">Ingresa los datos de tu nueva contraseña</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 align-self-center">
            <div id="register" style="height: 295px;padding-top: 30px;">
                <form action="/updatePass" method="POST">
                    @method('PUT')
                    @csrf

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" placeholder="Nueva contraseña" required autocomplete="new-password"
                        style="height: 65px;">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        placeholder="Confirmar contraseña" required autocomplete="new-password" style="height: 65px;">
                        
                    <input style="width: 464px; height: 65px;" class="fondoAzul mt-4" type="submit" value="Continuar" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection