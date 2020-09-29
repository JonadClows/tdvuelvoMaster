<template>
    <div >
    <div class="row pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <label class="register">INGRESA TUS DATOS</label>
        </div>
    </div>   
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <p class="extra">Por favor llena los campos requeridos y regístrate</p>           
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 align-self-center">
            <div id="register">
                <form action="{{ route('register') }}" method="POST">
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
                    <div class="row">
                        <div class="col-md-6 pl-4" style="left: 28px;">
                            <div class="input-group-append">
                                <input class="fondoAzul" type="submit" value="Enviar" />
                            </div>
                        </div>
                        <div class="col-md-6 pl-4" style="right: 42px;bottom: 10px;">
                            <div class="input-group-append">
                                <a id="" class="btnIni btnG" href="{{ route('login') }}" onclick="">Si eres usuario, Inicia sesión</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    import axios from "axios";
    export default {
        mounted() {
            this.presentacion();
        },
        data(){
            return {
                provincia: [],
                datos: '',
                selccionpro: ''
            }
        },
        methods: {
            presentacion(){
                axios.get('/getGeo').then(resp => {
                    this.datos = resp.data.provincia;
                }).catch(e => {
                    console.log(e)
                });
            },
            submit() {
                axios.get('/inicio').then(resonse => {
                    window.location="/inicio"
                    console.log(resonse)
                }).catch(e=> {
                  console.log(e)
                })
            },
            cambiar(){
                axios.get('/getCantones/'+this.selccionpro)
            }
        }
    }
</script>