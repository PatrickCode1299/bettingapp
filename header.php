<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="og:description" content="">
	<meta name="description" content="Bet on the most popular reality tv show in Nigeria and earn rewards">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
	<link rel="icon" type="fav/ico" href="icon.ico">

<link rel="stylesheet" href="folder/users/css/bootstrap.min.css">
<link rel="stylesheet" href="folder/users/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="apple-touch-icon" sizes="57x57" href="css/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="css/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="css/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="css/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="css/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="css/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="css/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="css/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="css/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="css/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="css/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="css/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="css/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="css/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
	<title>BB9ja Bet</title>
</head>
<body>
<nav class="navbar-inverse navbar-fixed-top">
	<?php
     if(isset($_COOKIE['bettingsiteuser'])){
     	
     	echo "<div class='login-infos-holder' navbar-header>
           <li><a href='home.php'>Home</a></li>
     	   <li><a href='fundaccount.php'>Fund Account</a></li>
     	    <li><a href='betlists.php'>Bet lists</a></li>
     	    <li><a href='winnings.php'>Winnings</a></li>";
     	    require 'db.php';
     	$loggedinuser=$_COOKIE['bettingsiteuser'];
     	$getuserbalance="SELECT account_balance FROM account_details WHERE username ='$loggedinuser'";
     	$request=mysqli_query($conn,$getuserbalance);
     	if(mysqli_num_rows($request) > 0){
        if($row=mysqli_fetch_assoc($request)){
        	if($row['account_balance']=='' || $row['account_balance'] < 0){
              echo "<li>Balance (0)</li>";
        	}else{
        		echo "<li class='balance'>Balance ".$row['account_balance']."</li>";
        	}
        }
        mysqli_close($conn);
     	}
         echo "<a class='btn btn-md btn-primary' href='logout.php'>Logout</a>
     	</div>";
     }else{
     	echo 	"<div  id='flex-home-header'>
		<a  href='index.php'><img src='css/bbbetlogo.png' style='margin-right:20px; margin-left:10px; width:50px; height:50px;'></a>
		<li>ABOUT US</li>
		<li><a href='tutorial.php'>TUTORIAL</a></li>
		<li>FAQ</li>
		<li><a href='result.php'>RESULTS</a></li>
		<li>CONTACT US</li>

	</div>";
     }
	?>
</nav>

