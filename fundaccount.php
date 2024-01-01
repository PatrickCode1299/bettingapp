<?php
include_once 'header.php';
?>
<?php
if(!isset($_COOKIE['bettingsiteuser'])){
    echo "<script>window.location.href='index.php';</script>";
}
?>
<div class="container-fluid" style="margin-top:100px;">
<div class="container fund-account-container">
    <h3 class="text-center">Fund Your Account</h3>
    <ul class="list-group">
        <li class="list-group-item" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="cursor:pointer; color:blue;">Pay Online With Card</li>
<div class="collapse" id="collapseExample">
    <ul class="list-group">
        <li class="list-group-item" style="cursor:pointer;" onclick="window.location.href='https://paystack.com/pay/biz8zuzwl9'">Fund your account with 1000</li>
        <li class="list-group-item" style="cursor:pointer;" onclick="window.location.href='https://paystack.com/pay/ejljf5gord'">Fund your account with 5000</li>
        <li class="list-group-item" style="cursor:pointer;" onclick="window.location.href='https://paystack.com/pay/eod0cx52bu'">Fund your account with 10000</li>
        <li class="list-group-item" style="cursor:pointer;" onclick="window.location.href='https://paystack.com/pay/fi8j3wv0i7'">Fund your account with 20000</li>
        <li class="list-group-item" style="cursor:pointer;" onclick="window.location.href='https://paystack.com/pay/cfyeyrcs14'">Fund your account with 25000</li>
        <li class="list-group-item" style="cursor:pointer;" onclick="window.location.href='https://paystack.com/pay/gg706rznru'">Fund your account with 50000</li>
        <li class="list-group-item" style="cursor:pointer;" onclick="window.location.href='https://paystack.com/pay/gmehnoo4aj'">Fund your account with 100000</li>
    </ul>
</div>
        <li class="list-group-item" data-toggle="collapse" data-target="#showbankaccount" aria-expanded="false" aria-controls="showbankaccount" style="cursor:pointer; color:green;">Pay Through Bank</li>
        <div class="collapse" id="showbankaccount">
            <h2>Bank Payment</h2>
    <p> <img src="css/uba.png" style="width:100px; height:100px;" class="img-thumbnail img-rounded"></p>

  <p>
  Make a Bank Transfer To <b>Account Number 2090098264 UBA</b>  then, Mail us: betbbnaija@gmail.com with your Transfer Receipt and your Username on this Website.</p>
  <p><img src="css/ecobank.png" style="width:100px; height:100px;" class=" img-thumbnail img-rounded"></p>
  <p>
  Make a Bank Transfer To <b>Account Number 3850029064 ECOBANK</b> then, Mail us: betbbnaija@gmail.com with your Transfer Receipt and your Username  on this Website.</p>
</div>
    </ul>
</div>

</div>
<script type="text/javascript" src="folder/users/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="folder/users/js/bootstrap.min.js"></script>
<script type="text/javascript" src="folder/users/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/sitehandler.js"></script>
<script type="text/javascript">



</script>
<script type="text/javascript" src="js/submit.js"></script>
<script type="text/javascript" src="js/getbookies.js"></script>
<script type="text/javascript" src="../influencer/css/bootstrap/js/bootstrap.js"></script>
</body>
</html>
