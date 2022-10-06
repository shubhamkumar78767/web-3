<template>
    <div class="background">
        <div class="overlay"></div>
        <div class="contanier">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <router-link class="navbar-brand nav-link text-white" to="/home" aria-current="page">Home</router-link>
                                <button class="btn btn-sm btn-info text-white" style="margin-left:1200px;" @click="Logout">Logout</button>

                            </div>
                        </div>
                    </div>
                </nav>
                <div class="col-6 mt-5">
                    <div id="box" class="mt-5" style="margin-left:500px;">
                        <div class="form-group">
                            <label for="" style="font-size:20px;margin-top:100px;font-style:italic;">Token Price $</label>

                            <input type="text" class="form-control mt-4" id="tokenPrice" style="width:200px;margin-left:50px;text-align:center;" :value="copy_token_Prize" readonly>

                        </div>
                    </div>
                </div>
                <div class="col-6 mt-5">
                    <div id="box" class="mt-5">
                        <div class="form-group">
                            <label for="" style="font-size:20px;margin-top:80px;font-style:italic;">Buy Token</label>
                            <input type="number" class="form-control mt-3" :disabled="disabled"   v-model="buy_token" id="token" style="width:200px;margin-left:50px;">
                            <input type="button" :disabled="disabled" value="Buy" id="buy" @click="BuyToken" class="form-control text-white mt-4 btn btn-info" style="width:200px;">
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-5">
                    <div id="box" class="mt-5" style="margin-left:500px;">
                        <div class="form-group">
                            <label for="" style="font-size:20px;margin-top:80px;font-style:italic;">Set Token Price $</label>
                            <input type="number" class="form-control mt-3" id="price" v-model="token_prize" style="width:200px;margin-left:50px;    text-align: center;" min="0">
                            <input type="button"  id="update_price" value="Update Price" class="form-control text-white mt-4 btn btn-info" style="width:200px;" @click="set_price">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// import { defineComponent } from '@vue/composition-api'

export default {
    name:"DashboardVue"
}
</script>
<style scoped>
#box {
        background: darkorange;
        color: white;
        width: 300px;
        height: 300px;
        margin-left: 100px;
        text-align: center;
        border-radius: 20px;
        box-shadow: 10px 10px 10px orange;
    }

    .overlay {
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 999;
        background: rgba(255, 255, 255, 0.8) url("") center no-repeat;
        /* background: rgba(255,255,255,0.8) url("http://localhost/laravel8/Project/web3/frontend/themes/loader2.gif") center no-repeat;
        / http://localhost/laravel8/Project/web3/frontend/themes/loader2.gif / */
    }

    body {
        text-align: center;
        background-color: lavenderblush;
    }

    /* / Turn off scrollbar when body element has the loading class / */
    body.loading {
        overflow: hidden;
    }

    /* / Make spinner image visible when body element has the loading class / */
    body.loading .overlay {
        display: block;
    }

    .background {
        background-color: lightsteelblue;
    }
</style>
