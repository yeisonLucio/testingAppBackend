<template>
    <div>
        
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="card" id="card_login">
                    <div class="card-body">
                        <h3 class="card-title">iniciar sesión</h3>
                        <form v-on:submit.prevent>
                            <div class="form-group">
                                <label  for="usuario">Usuario</label>
                                <input type="text" id="usuario" class="form-control" v-model="usuario" placeholder="Ingrese Nombre de usuario">
                            </div>
                            <div class="form-group">
                                <label for="contrasena">Contraseña</label>
                                <input type="password" id="contrasena" class="form-control" v-model="contrasena" placeholder="Ingrese Contraseña">
                            </div>
                            <button v-on:click="login" class="btn btn-primary" id="btn_ingresar">ENTRAR</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"></div>
            <pre>{{ $data }}</pre>
        </div>
        
    </div>
    
</template>
<script>
import axios from 'axios';

export default {
    data: function () {
        return {
            usuario: null,
            contrasena: null
        }
    },
    methods: {
        login(){
            axios.post('api/login',{
                username: this.usuario,
                password: this.contrasena
            })
            .then((respuesta)=>{
                console.log(respuesta);
            });
        }
        
    }
}
</script>
<style>
#card_login{
    margin-top:100px;

}
    
    
</style>