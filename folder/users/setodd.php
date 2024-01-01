<?php
if(isset($_POST['setodd'])){
	require 'db.php';
	$category=ucfirst($_POST['category']);
	$housemate=$_POST['housemates'];
	$resultday=ucfirst($_POST['resultday']);
	$odd=$_POST['odd'];
	$unique_id=$housemate.$category.$odd;
	$checkduplicate="SELECT category,housemate,odd_given,unique_id FROM oddslist WHERE category='$category' AND housemate='$housemate'";
	$runduplicate=mysqli_query($conn,$checkduplicate);
	if(mysqli_num_rows($runduplicate) > 0){
		echo "<script>
     window.location.href='ownerspanel.php?uid=".base64_encode('Superuser')."&res=Duplicate Value $housemate';
	</script>"; 
	}else{
		$sql="INSERT INTO oddslist(category,housemate,odd_given,result_day,unique_id) VALUES('$category','$housemate','$odd','$resultday','$unique_id')";
	$result=mysqli_query($conn,$sql);
	echo "<script>
     window.location.href='ownerspanel.php?uid=".base64_encode('Superuser')."&res=Success';
	</script>"; 
	mysqli_close($conn);
	}
	
}
?>