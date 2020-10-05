@extends('layouts.app')
@section('seccionPrincipal')
<div id="registro" class="container-fluid espacio" style="display: block;">
    <div class="row pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <label class="register">{{ is_null($cuenta) ? 'REGISTRA TU CUENTA BANCARIA' : 'ACTUALIZA TU CUENTA BANCARIA' }}</label>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <p class="extra">Ingresa los siguientes datos:</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 align-self-center">
            <div id="register" class="accountRegister">
                <form id="frmRegistroCuenta" action="" method="POST">
                    @csrf
                    <input type="hidden" id="id" name="id" value="{{ !is_null($cuenta) ? $cuenta->id : '0' }}" />
                    <div class="input-group-append">
                        <select name="banco" id="banco" class=" btn btn-outline-secondary text-center">
                            <option {{ is_null($cuenta) ? 'selected="selected"' : '' }} disabled hidden>Institución
                                Bancaria</option>
                            @foreach ($bancos as $banco)
                            <option value="{{$banco->id}}"
                                {{ ( !is_null($cuenta) ? ( $cuenta->banco_id == $banco->id ? 'selected="selected"' : "" ) : "" ) }}>
                                {{-- <option> --}}
                                {{$banco->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group-append">
                        <select name="tipoCta" id="tipoCta" class=" btn btn-outline-secondary">
                            <option value="">Tipo cuenta</option>
                            @foreach ($tiposCta as $tipoCta)
                            <option value="{{$tipoCta->id}}"
                                {{ ( !is_null($cuenta) ? ( $cuenta->tipocta_id == $tipoCta->id ? 'selected="selected"' : "" ) : "" ) }}>
                                {{-- <option> --}}
                                {{$tipoCta->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <input type="text" name="identificacion" id="identificacion" placeholder="C.I./ Ruc"
                        value="{{ !is_null($cuenta) ? $cuenta->identificacionTitular : '' }}"
                        onKeyPress="return soloNumeros(event)" />
                    <input type="text" name="nroCta" id="nroCta" placeholder="Numero de cuenta"
                        value="{{ !is_null($cuenta) ? $cuenta->numero : '' }}" maxlength="20"
                        onKeyPress="return soloNumeros(event)" />
                    <input type="text" name="nombreCompleto" id="nombreCompleto" placeholder="Nombre y Apellido"
                        value="{{ !is_null($cuenta) ? $cuenta->nombreTitular : '' }}" />

                    <div class="row mt-4">
                        <div class="col">
                            <div class="input-group-append text-center">
                                <button class="btn-form mx-auto" type="submit">
                                    <span class="btnText">Confirmar</span>
                                    <div class="spinner-border" role="status">
                                        <span class="sr-only">Enviando...</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection