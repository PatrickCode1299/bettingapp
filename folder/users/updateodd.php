<?php
if(isset($_POST['setodd'])){
	require 'db.php';
	$category=ucfirst($_POST['category']);
	$housemate=$_POST['housemates'];
	$resultday=ucfirst($_POST['resultday']);
	$odd=$_POST['odd'];
	$unique_id=$housemate.$category.$odd;
	$sql="UPDATE oddslist SET odd_given ='$odd', unique_id='$unique_id' WHERE category='$category' AND housemate='$housemate' ";
	$result=mysqli_query($conn,$sql);
	echo "<script>
     window.location.href='ownerspanel.php?uid=".base64_encode('Superuser')."&res=Odd Updated';
	</script>"; 
	mysqli_close($conn);
}
?>