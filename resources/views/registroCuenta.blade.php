@extends('layouts.app')
@section('seccionPrincipal')
<div id="registro" class="container-fluid espacio" style="display: block;">
    <div class="row pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <label class="register">REGISTRA TU CUENTA BANCARIA</label>
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
                    <div class="input-group-append">
                        <select name="banco" id="banco" class=" btn btn-outline-secondary">
                            <option value="">Banco</option>
                            @foreach ($bancos as $banco)
                                <option value="{{$banco->id}}" {{ ( old("banco") == $banco->id ? "selected" : "" ) }}>
                                    {{$banco->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group-append">
                        <select name="tipoCta" id="tipoCta" class=" btn btn-outline-secondary">
                            <option value="">Tipo cuenta</option>
                            @foreach ($tiposCta as $tipoCta)
                                <option value="{{$tipoCta->id}}" {{ ( old("tipoCta") == $tipoCta->id ? "selected" : "" ) }}>
                                    {{$tipoCta->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <input type="text" name="identificacion" id="identificacion" placeholder="C.I./ Ruc" />
                    <input type="text" name="nroCta" id="nroCta" placeholder="Numero de cuenta" />
                    <input type="text" name="nombreCompleto" id="nombreCompleto" placeholder="Nombre y Apellido"/>
                    
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
