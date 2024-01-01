<?php
require 'db.php';
$result_day=htmlspecialchars($_POST['result_day']);
$result_cat=htmlspecialchars($_POST['result_category']);
$housemate=htmlspecialchars($_POST['housemate']);
$runresult="INSERT INTO results (result_day,result_category,result_info) VALUES('$result_day','$result_cat','$housemate')";
$announce=mysqli_query($conn,$runresult);
mysqli_close($conn);
echo "<script>alert('Result has been announced');</script>"

?>