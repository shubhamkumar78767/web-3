<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.6.1/web3.min.js"></script>
</head>
<body>
    <button onclick="myFunction()">click here</button>
    <button onclick="myFunction1()">Enable Ethereum</button>
    <button class="enableEthereumButton">Get Account</button>
    <h2>Account: <span class="showAccount"></span></h2>

   <script>
       var web = new Web3(window.ethereum);
    //    console.log(web);
       web.eth.getAccounts().then(console.log);
       web.eth.getAccounts().then(account=>{
           console.log(account[0])
       });

        function myFunction() {
          if (typeof window.ethereum !== 'undefined') {
               console.log('MetaMask is installed!');
             }
        }
        function myFunction1(){
            ethereum.request({ method: 'eth_requestAccounts' });
        }

        const ethereumButton = document.querySelector('.enableEthereumButton');
        const showAccount = document.querySelector('.showAccount');

        ethereumButton.addEventListener('click', () => {
            getAccount();
        });

        async function getAccount() {
        const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
        const account = accounts[0];
        showAccount.innerHTML = account;
        web.eth.getChainId().then(console.log);
        web.eth.getBalance(account).then(console.log);

        web.eth.sendTransaction({
            from: '0x6C341E0435138dBcb2d623f77AC4a0D8D9F54a19',
            to: '0x1C913bf1F34daA8b51D397f7b29DF375EEa917A1',
            value: '1000000000000000'
        })
        .then(function(receipt){
            console.log("Transaction done");
        });
        }
   </script> 

</body>
</html>



