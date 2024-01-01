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
    <h3 class="text-center">Winnings</h3>
    <ul class="list-group">
        <?php 
         require 'db.php';
         $onlineuser=$_COOKIE['bettingsiteuser'];
         $fetchwinnings="SELECT winningstatus,gamerefid,gamedate,payment_request FROM usersgameholder WHERE gameowner='$onlineuser' AND winningstatus=1";
         $querysql=mysqli_query($conn,$fetchwinnings);
         if(mysqli_num_rows($querysql) > 0){
         while($getnewinfo=mysqli_fetch_assoc($querysql)){
            if($getnewinfo['winningstatus']==1 && $getnewinfo['payment_request']=='yes'){
               $gamerefid=$getnewinfo['gamerefid'];
                
               echo "<li class='list-group-item'>Ticket id:".$getnewinfo['gamerefid']." Won  <button class='btn btn-primary btn-md' onclick=setpaymentreq('".$gamerefid."') disabled='true'>You already requetsed payment </button></li>";
            }
            elseif($getnewinfo['winningstatus']==1 && $getnewinfo['payment_request']==''){
               $gamerefid=$getnewinfo['gamerefid'];
                
               echo "<li class='list-group-item'>Ticket id:".$getnewinfo['gamerefid']." Won Request For Payment <button class='btn btn-primary btn-md' onclick=setpaymentreq('".$gamerefid."')>Request</button></li>";
            }
         }
         }else{
            echo "<h3>When you place bet your winnings will appear here.</h3>";
         }
        ?>
    </ul>
</div>

</div>
<script type="text/javascript" src="folder/users/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/sitehandler.js"></script>
<script type="text/javascript">
function setpaymentreq(request){
    $.ajax({
      url:'setpaymentrequest.php',
      data:{ticketrequest:request},
      type:'post',
      success:function(response){
        $("body").append(response);
      }
   });
}
</script>
<script type="text/javascript" src="js/submit.js"></script>
<script type="text/javascript" src="js/getbookies.js"></script>
<script type="text/javascript" src="folder/users/js/bootstrap.js"></script>
</body>
</html>
