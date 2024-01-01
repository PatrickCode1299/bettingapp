<?php
if(isset($_POST['submit'])){
require 'db.php';
$bookingidref=trim($_POST['bookingid']);
if(empty($bookingidref)){
  echo "<script>alert('Please Enter a booking Code');</script>";
}else{
$sql="SELECT * FROM usersgameholder WHERE gamerefid=?";
   $stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
	echo "Sorry Something Went Wrong";
}else{
	mysqli_stmt_bind_param($stmt,"s",$bookingidref);
	if(mysqli_stmt_execute($stmt)){
		$result=mysqli_stmt_get_result($stmt);
      while($row=mysqli_fetch_assoc($result)){
      	$fetchnewdb=array($row['unique_id']);
        foreach($fetchnewdb as $gamedetails) { 
      $sql2="SELECT * FROM oddslist WHERE unique_id='$gamedetails'";
        $result2=mysqli_query($conn,$sql2);
        while($row2=mysqli_fetch_assoc($result2)){
          //echo "<script>alert('".$row2['unique_id']."');</script>";
          echo"<li class='".$row2['odd_given']."' id='".$row2['unique_id']."'><span>".$row2['category']."</span><span>".$row2['housemate']."</span><span class='badge badge-primary pull-right'>".$row2['odd_given']."</span><span class='cancelevent' id='".$row2['odd_given']."' onclick=hithere('".$row2['unique_id']."','".$row2['odd_given']."')>x</span></li>";
          echo "<script>
          this.calculations.id.push(".$row2['odd_given'].");
           let stakebtn=document.querySelectorAll('#stake');
  $(stakebtn).prop('disabled',false);
          </script>";
        } 
        } 
      }
	}else{
      echo "<script>alert('No');</script>";
	}
   mysqli_close($conn);

}
  
}
}else{
	echo "<script>
    alert('no');
	</script>";
}
?>