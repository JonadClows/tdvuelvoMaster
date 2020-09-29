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
            <div id="register">
                <form action="{{}}" method="POST">
                <div class="input-group-append">
                                <input type="hidden" name="id_ciudad" id="id_ciudad" value="1"/>
                                <select name="selectBanco" id="selectBanco" class=" btn btn-outline-secondary">
                                    <option value="Banco" selected="selected" disabled hidden>Banco</option>
                                </select>
                            </div>
                            <div class="input-group-append">
                                <input type="hidden" name="id_ciudad" id="id_ciudad" value="1"/>
                                <select name="selectBanco" id="selectBanco" class=" btn btn-outline-secondary">
                                    <option value="Banco" selected="selected" disabled hidden>Tipo cuenta</option>
                                </select>
                            </div>
                    <input type="text" name="cedula" placeholder="C.I./ Ruc" />
                    <input type="email" name="email" placeholder="Numero de cuenta" />
                    <input type="text" name="name" placeholder="Nombre y Apellido"/>
                    
                    <div class="row">
                        <div class="col-md-6 pl-4" style="">
                            <div class="input-group-append">
                                <input class="fondoAzul" type="submit" value="Confirmar" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
