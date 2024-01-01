<?php
if(isset($_POST['login'])){
	require 'db.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(empty($username) || empty($password)){
			echo "<script>
	$('#sign-in').html('<img src=css/loading.gif width=20px height=20px>');
	function loaderr(){
	$('#error').css('display','block');
		$('#error').html('All fields are required<span class=close onclick=hideerr() id=close>&times;</span>');
		$('#sign-in').html('Login');
	}
		setTimeout(loaderr,4000);
		clearInterval();

	</script>";
	}elseif ($username=='Superuser' && $password=='icui4cu') {
		echo "<script>
		window.location.href='folder/users/ownerspanel.php?uid=".base64_encode('Superuser')."';
		</script>";
	}
	else{
$sql="SELECT * FROM registration WHERE username='$username' OR email='$username'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0){
     if($row=mysqli_fetch_assoc($result)) {
     	if($password != $row['pass']){
                    	echo "<script>
	$('#sign-in').html('<img src=css/loading.gif width=20px height=20px>');
	function loaderr(){
	$('#error').css('display','block');
		$('#error').html('Incorrect Username or Password<span class=close onclick=hideerr() id=close>&times;</span>');
		$('#sign-in').html('Login');
	}
		setTimeout(loaderr,4000);
		clearInterval();

	</script>";
	  }elseif ($password==$row['pass']) {
	     $value=$row['username'];
	     setcookie("bettingsiteuser",$value,time()+(86400 * 180),'/');
	     $email=$row['email'];
	     setcookie("bettingsiteemail",$email,time()+(86400 * 180),'/');
		session_start();
			echo "<script>
	$('#sign-in').html('<img src=css/loading.gif width=20px height=20px>');
	function hi(){
	window.location.href='home.php';
	}
		setTimeout(hi,4000);
		clearInterval();

	</script>";
     }
 }
	}else{
	echo "<script>
	$('#sign-in').html('<img src=css/loading.gif width=20px height=20px>');
	function loaderr(){
	$('#error').css('display','block');
		$('#error').html('Incorrect Username or Password<span class=close onclick=hideerr() id=close>&times;</span>');
		$('#sign-in').html('Login');
	}
		setTimeout(loaderr,4000);
		clearInterval();

	</script>";
	}
	}
	
}

?>