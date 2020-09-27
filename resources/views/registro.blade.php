@extends('layouts.app')
@section('seccionPrincipal')
<div id="registro" class="container-fluid espacio" style="display: block;">
    <div class="row">
        <div class="col-md-12 align-self-center">
            <div id="register">
                <form action="" method="GET">
                    <label class="register">INGRESA TUS DATOS</label>
                    <div class="text-left" style="margin-bottom: 2%;"><a>Por favor llena los campos requeridos y regístrate</a></div>
                    <input type="text" name="user" placeholder="Nombre y Apellido" />
                    <input type="text" name="user" placeholder="C.I./ Ruc" />
                    <input type="text" name="user" placeholder="Correo electrónico" />
                    <input type="text" name="user" placeholder="Número telefónico (Opcional)" />
                    <input type="password" name="password" placeholder="Contraseña" />
                    <input type="text" name="user" placeholder="Confirmar contraseña" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Provincia</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Guayas</a>
                                    <a class="dropdown-item" href="#">Pichinca</a>
                                    <a class="dropdown-item" href="#">Azuay</a>
                                    <!--<div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="right: 44px;">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ciudad</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Guayaquil</a>
                                    <a class="dropdown-item" href="#">Quito</a>
                                    <a class="dropdown-item" href="#">Cuenta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <input class="fondoAzul" type="submit" value="Enviar" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
