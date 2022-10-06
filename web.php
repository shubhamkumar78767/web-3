<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.6.1/web3.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <button onclick="myFunction1()">Enable Ethereum</button>
<script>
    var Eth = window.ethereum;

    function myFunction1(){
        if(Eth){
            var web = new Web3(window.ethereum);
                web.eth.requestAccounts().then(account=>{
                web.eth.getChainId().then(chainid=>{     
                    if(chainid == 97){
                        $.ajax({url: "test.php", success: function(result){
                            $("#div1").html(result);
                        }});
                    }else{
                        swal('Error','Please change network','error'); 
                    }
                });
                console.log(account[0]);
            });
        }else{
            swal('Error','Metamask is not installed','error');
        }
    }
   
</script>
</body>
</html>