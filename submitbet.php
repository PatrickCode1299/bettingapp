<?php
require 'db.php';
$gamevar=$_POST['games'];
$gameowner=null;
$uniqueid=$_POST['uniqueid'];
$gameday=date('Y-m-d H:i:s');
$sql="INSERT INTO usersgameholder(gamerefid,gameowner,gamedate,unique_id) VALUES('$uniqueid','$gameowner','$gameday','$gamevar');";
$result=mysqli_query($conn,$sql);
mysqli_close($conn);
?>