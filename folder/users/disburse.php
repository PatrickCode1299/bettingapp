<?php
if(isset($_POST['disburse'])){
	  require 'db.php';
	$owneraccount=$_POST['accountowner'];
	$owneramount=$_POST['amount'];
    $getrealuser="SELECT username,account_balance FROM account_details WHERE username='$owneraccount'";
    $runcheck=mysqli_query($conn,$getrealuser);
    if(mysqli_num_rows($runcheck) > 0){
    	if($fetchacctbal=mysqli_fetch_assoc($runcheck)){
    		$accountbal=$fetchacctbal['account_balance'];
    		$newaccountbal=$accountbal - $owneramount;
    		$runupdate="UPDATE account_details SET account_balance='$newaccountbal' WHERE username='$owneraccount'";
    		$checkrun=mysqli_query($conn,$runupdate);
    		echo "<script>
             alert('You sent $owneramount to $owneraccount and New Balance = $newaccountbal');
    		</script>";
    		echo "<script>
    	window.location.href='ownerspanel.php';
    	</script>";
    	}
    	 


    	 

    }else{
     	echo "<script>
    	alert('$owneraccount is not registered on site');
    	</script>";
    	 echo "<script>
    	window.location.href='ownerspanel.php';
    	</script>";
    }
}

?>