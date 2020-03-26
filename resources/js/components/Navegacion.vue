
<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">

            <a class="navbar-brand abs" href="#">testApp</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="collapsingNavbar">
                <ul class="navbar-nav ml-auto">
                    <router-link to="/" tag="li" class="nav-item">
                        <a class="nav-link" data-toggle="collapse">Home</a>
                    </router-link>
                    <router-link to="/registro" tag="li" class="nav-item">
                        <a class="nav-link" data-toggle="collapse">Registro</a>
                    </router-link>
                    <router-link to="/login" tag="li" class="nav-item">
                        <a class="nav-link" data-toggle="collapse">Login</a>
                    </router-link>
                    
                </ul>
            </div>
        </nav>
 
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    
}
</script>

<style>

</style>
