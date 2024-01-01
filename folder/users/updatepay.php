<?php
require 'db.php';
if(isset($_POST['tickettobepaid'])){
$tickettobepaid=$_POST['tickettobepaid'];
$getuserinfo="SELECT gameowner,winningamount FROM usersgameholder WHERE gamerefid='$tickettobepaid'";
$runcheck=mysqli_query($conn,$getuserinfo);
if($row=mysqli_fetch_assoc($runcheck)){
$winningamount=$row['winningamount'];
$ticketowner=$row['gameowner'];
$fetchuseracct="SELECT account_balance FROM account_details WHERE username='$ticketowner'";
$fetchacctbal=mysqli_query($conn,$fetchuseracct);
if($getacct=mysqli_fetch_assoc($fetchacctbal)){
	$accountmoney=$getacct['account_balance'];
	$newacct=$winningamount+$accountmoney;
	$updateowneraccount="UPDATE account_details SET account_balance='$newacct' WHERE username='$ticketowner'";
mysqli_query($conn,$updateowneraccount);
	$updateticketstatus="UPDATE usersgameholder SET payment_status='paid' WHERE gamerefid='$tickettobepaid'";
mysqli_query($conn,$updateticketstatus);
mysqli_close($conn);
}
}
echo "<script>alert('This user has been paid');</script>";
}

