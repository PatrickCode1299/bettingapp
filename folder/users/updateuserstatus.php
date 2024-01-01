<?php
require 'db.php';
if(isset($_POST['lossticket'])){
$lossticket=$_POST['lossticket'];
$updateticketstatus="UPDATE usersgameholder SET winningstatus=0 WHERE gamerefid='$lossticket'";
mysqli_query($conn,$updateticketstatus);
mysqli_close($conn);
echo "<script>alert('Completed');</script>";
}elseif(isset($_POST['winticket'])){
$winticket=$_POST['winticket'];
$updateticketstatus="UPDATE usersgameholder SET winningstatus=1 WHERE gamerefid='$winticket'";
mysqli_query($conn,$updateticketstatus);
mysqli_close($conn);
echo "<script>alert('Completed');</script>";
}

