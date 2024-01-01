<?php
if(!isset($_COOKIE['bettingsiteuser'])){
	echo "<script>window.location.href='index.php';</script>";
}
?>
<?php
require 'db.php';
$gamevar=$_POST['games'];
$gameowner=$_COOKIE['bettingsiteuser'];
$winningamount=$_POST['gameprice'];
$totalgameodds=$_POST['totalgameodds'];
$gameprice=$_POST['winnings'];
$gameday=date('Y-m-d H:i:s');
$uniqueid=$_POST['uniqueid'];
if($winningamount > 2500000){
	echo "<script>alert('Maximum Payout is 2,500,000.');</script>";
}else{
$checkerrors="SELECT username,account_balance FROM account_details WHERE username='$gameowner'";
$fetchinfo=mysqli_query($conn,$checkerrors);
if(mysqli_num_rows($fetchinfo) > 0){
	if($row=mysqli_fetch_assoc($fetchinfo)){
		if(empty($row['account_balance'])){
			echo "<script>alert('Fund your account to place bet');</script>";
		}elseif($row['account_balance'] < 500){
          echo "<script>alert('You can only place bet with an account balance greater than 500');</script>";
		}elseif($row['account_balance'] < $gameprice){
			echo "<script>alert('Your Account Balance is less than the stake to bet this game please kindly fund your account');</script>";
		}
		else{
	$accountbalance=$row['account_balance'];
	$newbalance=$accountbalance-$gameprice;
$sql="INSERT INTO usersgameholder(gamerefid,gameowner,gamedate,unique_id,gameamount,winningamount,oddamount) VALUES('$uniqueid','$gameowner','$gameday','$gamevar','$gameprice','$winningamount','$totalgameodds');";
$result=mysqli_query($conn,$sql);
$updatebalance="UPDATE account_details SET account_balance ='$newbalance' WHERE username='$gameowner'";
$runupdate=mysqli_query($conn,$updatebalance);
mysqli_close($conn);
echo"<script>alert('Your bet has been played kindly await your result thanks, your Winning amount is:$winningamount,Game odds is:$totalgameodds, Gamepriceis:$gameprice');</script>";
		}
	}
}
}

?>