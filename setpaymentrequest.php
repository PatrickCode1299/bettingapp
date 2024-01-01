<?php
$tictketoupdate=$_POST['ticketrequest'];
require 'db.php';
$runsql="UPDATE usersgameholder SET payment_request='yes' WHERE gamerefid='$tictketoupdate'";
$sendsql=mysqli_query($conn,$runsql);
mysqli_close($conn);
echo"<script>alert('You have sent a payment request for your Ticket:".$tictketoupdate." expect your payment soon');</script>";
?>