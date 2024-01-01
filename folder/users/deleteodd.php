<?php
if(isset($_POST['setodd'])){
	require 'db.php';
	$category=ucfirst($_POST['category']);
	$housemate=$_POST['housemates'];
	$odd=$_POST['odd'];
	$unique_id=$housemate.$category.$odd;
	$sql="DELETE FROM oddslist WHERE odd_given ='$odd' AND unique_id='$unique_id'";
	$result=mysqli_query($conn,$sql);
	echo "<script>
     window.location.href='ownerspanel.php?uid=".base64_encode('Superuser')."&res=Odd Deleted';
	</script>"; 
	mysqli_close($conn);
}
?>