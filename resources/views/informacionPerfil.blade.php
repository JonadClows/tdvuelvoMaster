@extends('layouts.app')
@section('seccionPrincipal')
<div id="registro" class="container-fluid espacio" style="display: block; padding-bottom: 100px;">
    <div class="row pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <label class="register">INFORMACIÓN DE PERFIL</label>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <p class="infoMP">Ultimo login 26-09-2020 a las 09:30</p>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 align-self-center">
            <div id="register" class="pt-4">
                @csrf
                <input type="text" name="name" placeholder="Nombre y Apellido" class="mt-1"
                    value="{{ Auth::user()->name }}" disabled/>
                <input type="text" name="cedula" placeholder="C.I./ Ruc"
                    value="{{ Auth::user()->cedula }}" disabled/>
                <input type="email" name="email" placeholder="Correo electrónico"
                    value="{{ Auth::user()->email }}" disabled/>
                <input type="text" name="telefono" placeholder="Número telefónico (Opcional)"
                    value="{{ Auth::user()->telefono }}" disabled/>
                <input type="text" name="telefono" placeholder="Provincia, Ciudad" class="text-capitalize"
                    value="{{ $nameProvincia }}, {{ $nameCanton }}" disabled/>
                <input type="text" name="telefono" placeholder="Banco de Guayaquil"
                    value="" disabled/>
                <div class="row">
                    <div class="col-lg-12 mt-3">
                        <button
                            id="btnSellNote"
                            style="width: 80%"
                            class="fondoBtn btn btn-outline-secondary btn-block py-2 m-auto {{ (sizeof($cuentas)==0 ? 'disabled' : '') }}"
                            data-url="{{ url('vender-nota') }}"
                        >
                            Vender Nota
                        </button>
                        @if (sizeof($cuentas)==0)
                            <p class="text-center mt-2">No tiene cuentas registradas</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection