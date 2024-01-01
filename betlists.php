<?php
include_once 'header.php';
?>
<?php
if(!isset($_COOKIE['bettingsiteuser'])){
   echo "<script>window.location.href='index.php';</script>";
}
?>
<div class="container-fluid" style="background-color:white;">
<div class="ticketpaper">
   <span onclick="$('.ticketpaper').css('display','none');" class="pull-right badge badge-info" style="color:red; font-weight:bold; font-size:25px; cursor:pointer; margin-top:50px;">&times;</span>
    <div class="infohandler">
        
    </div>
</div>
<div class="lists-of-bet" style="margin-top:80px;">
      <?php
      require 'db.php';
        $accountowner=$_COOKIE['bettingsiteuser'];
        $fetchgamelist="SELECT winningstatus,gamerefid,gamedate,gameamount FROM usersgameholder WHERE gameowner='$accountowner' ORDER BY id desc";
        $getresult=mysqli_query($conn,$fetchgamelist);
        if(mysqli_num_rows($getresult) > 0){
        while($showresult=mysqli_fetch_assoc($getresult)){
         $info=$showresult['gamerefid'];
        echo "<ul class='list-inline list-block list-unstyled'>";
        if($showresult['winningstatus']==''){
        echo "<button data-toggle='collapse' style='margin-right:10px;' data-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample' onclick=fetchticketinfo('$info') class='btn btn-md btn-primary'>Ticket Id".$showresult['gamerefid']."</button>";
         echo "<li class='bg-info' style='margin-right:10px;'>Ticket Date:".$showresult['gamedate']."</li>";
         echo "<li class='bg-default' style='margin-right:10px; background:cyan;'>Game amount:".$showresult['gameamount']."</li>";
         echo "<li  style='margin-right:10px; background:lightgrey;'>Pending</li>";
         echo "   </ul><br /><br />";
        }
        elseif($showresult['winningstatus']==0){
        echo "<button data-toggle='collapse' style='margin-right:10px;' data-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample' onclick=fetchticketinfo('$info') class='btn btn-md btn-primary'>Ticket Id".$showresult['gamerefid']."</button>";
         echo "<li class='bg-info' style='margin-right:10px;'>Ticket Date:".$showresult['gamedate']."</li>";
         echo "<li class='bg-primary' style='margin-right:10px;'>Game amount:".$showresult['gameamount']."</li>";
         echo "<li class='bg-danger' style='margin-right:10px;'>Loss</li>";
         echo "   </ul><br /><br />";
        }
        elseif($showresult['winningstatus']==1){
        echo "<button data-toggle='collapse' style='margin-right:10px;' data-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample' onclick=fetchticketinfo('$info') class='btn btn-md btn-primary'>Ticket Id".$showresult['gamerefid']."</button>";
         echo "<li class='bg-info' style='margin-right:10px;'>Ticket Date:".$showresult['gamedate']."</li>";
         echo "<li class='bg-primary' style='margin-right:10px;'>Game amount:".$showresult['gameamount']."</li>";
         echo "<li class='bg-success' style='margin-right:10px; font-weight:bold;'>Won</li>";
         echo "   </ul><br /><br />";
        }
        }
        }else{
         echo "<h1 class='text-center' style='color:black; font-weight:bold;'>You haven't Made any Bets So Far</h1>";
        }
        mysqli_close($conn);
      ?>
</div>
   <div style="position:fixed; left:20px; right:20px; display:none; width:100px; margin:0 auto; z-index:1; top:50px; " id="popimage">
</div>
<script type="text/javascript" src="folder/users/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="folder/users/js/bootstrap.min.js"></script>
<script type="text/javascript" src="folder/users/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/sitehandler.js"></script>
<script type="text/javascript" src="js/submit.js"></script>
<script type="text/javascript" src="js/getbookies.js"></script>
</body>
</html>
