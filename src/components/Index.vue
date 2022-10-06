<template>
    <div>
        <button @click="checkweb3()">Enable Ethereum</button>
        <p>{{ address }}</p>
    </div>
    
</template>
<script>
import Web3 from 'web3/dist/web3.min.js'
import axios from 'axios';
     var web = new Web3(window.ethereum);
export default {
   name:"IndexVue",
   data(){
       return{
           address:''
       }
   },
   methods:{
       checkweb3(){
            if (typeof window.ethereum !== 'undefined') {
               console.log('MetaMask is installed!');
                web.eth.requestAccounts().then(account=>{
                    var address = account[0];
                    this.address = address;
                 if(address){ 
                     axios.post('http://127.0.0.1:8000/api/login', {user_address:this.address}).then(({data})=>{
                        if(data){
                            this.$swal('Success','Login Successfully').then((result)=>{
                            console.log(result);
                            this.$router.push('/dashboard');
                        }); 
                        }else{
                            axios.post('http://127.0.0.1:8000/api/register', {user_address:this.address})
                            .then(({data}) => {
                                this.$swal('Success','Register Successfully').then((result)=>{
                                    console.log(result);
                                    this.$router.push('/dashboard');
                                }); 
                                console.log(data);
                            })
                            .catch((error) => {
                                console.log(error);
                            });
                        }
                     })
                     console.log(window.location.href);
                 }
                });
             }else{
                this.$swal('Error','MetaMask is not installed','error'); 
             }
       }
   }
}
</script>
<style scoped>

</style>
