<?php
if(isset($_POST['submit'])){
	$uname=$_POST['username'];
	$uemail=$_POST['email'];
	$upassword=$_POST['password'];
		if(empty($uname)  || empty($uemail)  || empty($upassword)){
	echo "<script>
	$('#reg-button').html('<img src=css/loading.gif width=20px height=20px>');
	function loaderr(){
	$('#responserror').css('display','block');
		$('#responserror').html('All fields are required');
		$('#reg-button').html('Register');
	}
		setTimeout(loaderr,4000);
		clearInterval();

	</script>";	
	}
	elseif (strlen($uname) <3) {
		echo "<script>
	$('#reg-button').html('<img src=css/loading.gif width=20px height=20px>');
	function loaderr(){
	$('#responserror').css('display','block');
		$('#responserror').html('Username is too short');
		$('#reg-button').html('Register');
	}
		setTimeout(loaderr,4000);
		clearInterval();

	</script>";	
	}elseif (strlen($uname) >16) {
		echo "<script>
	$('#reg-button').html('<img src=css/loading.gif width=20px height=20px>');
	function loaderr(){
	$('#responserror').css('display','block');
		$('#responserror').html('Username is too long <span class=cancel onclick=hideresponse() id=close>&times;</span>');
		$('#reg-button').html('Register');
	}
		setTimeout(loaderr,4000);
		clearInterval();

	</script>";
	}
	elseif(strlen($upassword) < 6){
			echo "<script>
	$('#reg-button').html('<img src=css/loading.gif width=20px height=20px>');
	function loaderr(){
	$('#responserror').css('display','block');
		$('#responserror').html('Password is too short <span class=close onclick=hideresponse() id=close>&times;</span>');
		$('#reg-button').html('Register');
	}
		setTimeout(loaderr,4000);
		clearInterval();

	</script>";	
	}elseif ($upassword==$uname || $upassword==$uemail) {
		echo "<script>
	$('#reg-button').html('<img src=css/loading.gif width=20px height=20px>');
	function loaderr(){
	$('#responserror').css('display','block');
		$('#responserror').html('Please Use a more secure Password <span class=cancel onclick=hideresponse() id=close>&times;</span>');
		$('#reg-button').html('Register');
	}
		setTimeout(loaderr,4000);
		clearInterval();

	</script>";
	}else{
		require 'db.php';
		$sql="SELECT username,email FROM registration WHERE username='$uname' OR email='$uemail'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0){
				echo "<script>
	$('#join-button').html('<img src=css/loading.gif width=20px height=20px>');
	function loaderr(){
	$('#responserror').css('display','block');
		$('#responserror').html('Username or Email already taken <span class=cancel onclick=hideresponse() id=close>&times;</span>');
		$('#reg-button').html('Register');
	}
		setTimeout(loaderr,4000);
		clearInterval();

	</script>";
		}else{
include_once 'class_register.php';
		$user=new register($_POST['username'],$_POST['email'],$_POST['password']);
		$user->getinfo();
		$addbalance="INSERT INTO account_details(username,account_balance) VALUES('$uname','400');";
		$query=mysqli_query($conn,$addbalance);
		 $value=$_POST['username'];
	     setcookie("bettingsiteuser",$value,time()+(86400 * 180),'/');
	     $email=$_POST['email'];
	     setcookie("bettingsiteemail",$email,time()+(86400 * 180),'/');
	     mysqli_close($conn);
			echo "<script>
	$('#reg-button').html('<img src=css/loading.gif width=20px height=20px>');
	function hi(){
	window.location.href='home.php';
	}
		setTimeout(hi,4000);
		clearInterval();

	</script>";
		}
		
	}
}
?>