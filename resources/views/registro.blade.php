@extends('layouts.app')
@section('seccionPrincipal')
<div id="registro" class="container-fluid espacio" style="display: block;">
    <div class="row">
        <div class="col-md-12 align-self-center">
            @guest
            <div id="register">
                <form action="{{ route('register') }}" method="POST">
                <label class="register">INGRESA TUS DATOS</label>
            @else
            <div id="register" style="height: 400px; padding-top: 20px;">
                <form action="/update/{{Auth::user()->id}}" method="POST">
                    @method('PUT')
                    <label class="register">ACTUALIZA TUS DATOS</label>
            @endguest
                @csrf 
                    
                    <div class="text-left" style="margin-bottom: 2%;"><a>Por favor llena los campos requeridos y regístrate</a></div>
                    @guest
                    <input type="text" name="name" placeholder="Nombre y Apellido" />
                    <input type="text" name="cedula" placeholder="C.I./ Ruc" />
                    <input type="email" name="email" placeholder="Correo electrónico" />
                    <input type="text" name="telefono" placeholder="Número telefónico (Opcional)"/>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required autocomplete="new-password">

                    <div class="row">
                        <div class="col-md-6 pl-4">
                            <div class="input-group-append">
                                <select name="selectProvincia" id="selectProvincia" class="cbCiudad btn btn-outline-secondary">
                                    <option value="Provincia" selected="selected" disabled hidden>Provincia</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 pl-4" style="right: 65px;">
                            <div class="input-group-append">
                                <input type="hidden" name="id_ciudad" id="id_ciudad" value="1"/>
                                <select name="selectCiudad" id="selectCiudad" class="cbCiudad btn btn-outline-secondary">
                                    <option value="Ciudad" selected="selected" disabled hidden>Ciudad</option>
                                    <option value="1">Guayaquil</option>
                                    <option value="2">Quito</option>
                                    <option value="3">Cuenca</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    @else
                    <input type="text" name="name" placeholder="Nombre y Apellido" value="{{ Auth::user()->name }}"/>
                    <input type="text" name="cedula" placeholder="C.I./ Ruc" value="{{ Auth::user()->cedula }}"/>
                    <input type="email" name="email" placeholder="Correo electrónico" value="{{ Auth::user()->email }}"/>
                    <input type="text" name="telefono" placeholder="Número telefónico (Opcional)" value="{{ Auth::user()->telefono }}"/>
                    @endguest

                    

                    @guest
                        <input class="fondoAzul" type="submit" value="Enviar" />
                    @else
                        <input class="fondoAzul mt-4" type="submit" value="Actualizar" />
                    @endguest
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
