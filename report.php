<?php
if(isset($_COOKIE['bettingsiteuser'])){
	echo "<script>window.location.href='home.php';</script>";
}else{
include_once 'header.php';
?>
<div class="super-info-header">
	<ul class="list-inline list-unstyled">
		<li><a href="index.php" style="color:white; text-decoration:none;">Home</a></li>
		<li>About Us</li>
		<li><a href='tutorial.php'>Tutorial</a></li>
		<li>FAQ</li>
		<li>Results</li>
		<li>Contact Us</li>
	</ul>
<div class="container-fluid" style="background-color:white;">
	<form action='report.php'>
		<h3>Whats going on? Report Problem Here.</h3>
		<div class="form-group">
			<textarea name="problem" style="resize:none; height:500px;" class="form-control input-lg"></textarea>
		</div>
		<button class="btn btn-md btn-success" style="margin-bottom:10px;" name="report" type='submit'>Report</button>
	</form>
</div>

				
	
				

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="folder/users/js/bootstrap.min.js"></script>
<script type="text/javascript" src="folder/users/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/sitehandler.js"></script>
<script type="text/javascript" src="js/submit.js"></script>
<script type="text/javascript" src="js/getbookies.js"></script>
<noscript>
<meta http-equiv="Refresh" content="0; URL=noscript.htm">
</noscript>
</body>
</html>
<?php
}
?>