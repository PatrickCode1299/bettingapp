<div class="container-fluid" id="betting-container">
	<div class="list-infos">
		<li onclick="accountinfo()">Account Info</li>
		<li onclick="loadaccount()">Load Account</li>
		<li onclick="withdrawfunds()">Withdraw Funds</li>
		<li onclick="bet()">Bet</li>
		<li onclick="betrecord()">Bet Record</li>
		<li onclick="betresults()">Bet Results</li>
	</div>
	<div class="account-info">
		<div class="user-heading-info">Your Info</div>
		<div class="circle-img">User</div>
		<ul class="list-unstyled list-group">
			<?php
			require 'db.php';
			$accountuser=$_COOKIE['bettingsiteuser'];
			$fetchinfos="SELECT DISTINCT username,email, join_day FROM registration WHERE username='$accountuser'";
			$getinfos=mysqli_query($conn,$fetchinfos);
			if(mysqli_num_rows($getinfos) > 0){
              while($row=mysqli_fetch_assoc($getinfos)){
               echo "<li class='list-group-item'>Username -> ".$row['username']."</li> <li class='list-group-item'>Email -> ".$row['email']."</li> <li class='list-group-item'> Date Registered -> ".$row['join_day']."</li>";
              }
               mysqli_close($conn);
			}else{
              echo "<h3 class='text-center'>No Records Found</h3>";
			}
			?>
			<li></li>
		</ul>
	</div>
	<div class="betting-list">
		
	</div>
	<div class="betdetails-holder">
		
	</div>
	<div class="betresult-li">
		
	</div>
</div>
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
		<li>Tutorial</a></li>
		<li>FAQ</li>
		<li>Results</li>
		<li>Contact Us</li>
	</ul>
</div>
<section class="main-wrapper" style="margin-top:0px;">
<div class="container-fluid first-container">
	<div class="long-list">
		<ul class="list-group list-unstyled">
			<li class="list-group-item" onclick="handleNavigation()">Book a bet</li>
			<li class="list-group-item" onclick="showBox()">Register</li>
			<li class="list-group-item">Login</li>
			<li class="list-group-item">Report</li>
			<li class="list-group-item">Forum</li>
			<li class="list-group-item">About us</li>
			<li class="list-group-item">Tutorial</li>
			<li class="list-group-item">Faqs</li>
		</ul>
	</div>
	<section class="site-info">
	<div class="today-top-hit">
		<h2 class="header-text">Hot List</h2>
		<ul class="hotlist-label">
			<li>Winner</li>
			<li>Avala</li>
			<li>20.0</li>
			<li><button onclick="handleNavigation()"   class='btn  btn-primary btn-sm hotlibtn'   style='background-color:indigo; width:50px;'>Bet</button></li>
		</ul>
		<ul class="hotlist-label">
			<li>Winner</li>
			<li>Avala</li>
			<li>20.0</li>
			<li><button onclick="handleNavigation()"   class='btn  btn-primary btn-sm hotlibtn'   style='background-color:indigo; width:50px;'>Bet</button></li>
		</ul>
		<ul class="hotlist-label">
			<li>Winner</li>
			<li>Avala</li>
			<li>20.0</li>
			<li><button   onclick="handleNavigation()" class='btn  btn-primary btn-sm hotlibtn'   style='background-color:indigo; width:50px;'>Bet</button></li>
		</ul>
		<ul class="hotlist-label">
			<li>Winner</li>
			<li>Avala</li>
			<li>20.0</li>
			<li><button  onclick="handleNavigation()"  class='btn  btn-primary btn-sm hotlibtn'   style='background-color:indigo; width:50px;'>Bet</button></li>
		</ul>
		<ul class="hotlist-label">
			<li>Winner</li>
			<li>Avala</li>
			<li>20.0</li>
			<li><button  onclick="handleNavigation()"  class='btn  btn-primary btn-sm hotlibtn'   style='background-color:indigo; width:50px;'>Bet</button></li>
		</ul>
	</div>
	<div class="today-top-hit">
		<h2 class="header-text">Live in Play</h2>
		<p style="color:black;"><marquee>Not Available</marquee></p>
	</div>
	<div class="today-top-hit">
		<h2 class="header-text">Trending</h2>
	<div class="trending">
		<div class="carousel-holder" style="margin-top:0px;  width:400px;  margin-left:0px; height:100%;  box-sizing:border-box;">
		<div id="myCarousel" class="carousel slide carousel-fade" data-interval="3000" data-ride="carousel">      
		<ol class="carousel-indicators">       
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>       
			<li data-target="#myCarousel" data-slide-to="1"></li>       
			<li data-target="#myCarousel" data-slide-to="2"></li>    
		</ol>         
		<div class="carousel-inner">       
			<div class="item active">          
				<img src="css/slideimg/Screenshot_20210402-224029.png" style="width:100%; height:200px; padding:0; margin:0; object-fit:center; border:none; position:relative;" alt="First Slide">
				<div class="carousel-caption" id="first-box">
					<h2 id="collection-tags">Trending </h2>
		           <button type="button" id="col-button" class="btn btn-default btn-md">Bet Now</button>
				</div>      
			</div>       
			<div class="item">          
				<img src="css/slideimg/Screenshot_20210402-224251.png" style="width:100%; height:200px; padding:0; margin:0; border:none; position:relative;" alt="Second slide"> 
				<div class="carousel-caption" id="first-box">
					<h2 id="collection-tags">Hot </h2>
		           <button type="button" id="col-button" class="btn btn-default btn-md">Bet Now</button>
				</div>        
			</div>       
			<div class="item">          
				<img src="css/slideimg/Screenshot_20210402-224228.png" style="width:100%; height:200px; padding:0; margin:0; border:none; position:relative;" alt="Third slide">   
				<div class="carousel-caption" id="first-box">
					<h2 id="collection-tags">Trending</h2>
		           <button type="button" id="col-button" class="btn btn-default btn-md">Bet Now</button>
				</div>      
			</div> 
			<div class="item">          
				<img src="css/slideimg/Screenshot_20210402-224145.png" style="width:100%; height:200px; padding:0; margin:0; border:none; position:relative;" alt="Third slide">   
				<div class="carousel-caption" id="first-box">
					<h2 id="collection-tags">Hot </h2>
		           <button type="button" id="col-button" class="btn btn-default btn-md">Bet Now</button>
				</div>      
			</div> 
			<div class="item">          
				<img src="css/slideimg/Screenshot_20210402-223951.png" style="width:100%; height:200px; padding:0; margin:0; border:none; position:relative;" alt="Third slide">   
				<div class="carousel-caption" id="first-box">
					<h2 id="collection-tags">Hot </h2>
		           <button type="button" id="col-button" class="btn btn-default btn-md">Bet Now</button>
				</div>      
			</div> 
			<div class="item">          
				<img src="css/slideimg/Screenshot_20210402-223914.png" style="width:100%; height:200px; padding:0; margin:0; border:none; position:relative;" alt="Third slide">   
				<div class="carousel-caption" id="first-box">
					<h2 id="collection-tags">Hot </h2>
		           <button type="button" id="col-button" class="btn btn-default btn-md">Bet Now</button>
				</div>      
			</div>    
		</div>      
	</div>
	</div>
</div>
	</section>
	
	<div class="coupon-and-details">
		<form class="form-inline booking" method="POST" action='getbooking.php'>
			<h5 style="color:white;">Insert Booking Number</h5>
			<input type="text" name="bookingid" class="ticketarea-text form-control"  style="resize:none;" />
			<button type="submit" name="submit" class="btn btn-primary btn-sm">Load</button>
		</form>
		<div class="result-clips">
		<marquee>Coming soon</marquee>
	</div>
	</div>
	
</div>
</section>
<section class="booking-wrapper">
	<div class="booking-grid">
		<div class="category-bar">
			<h4>Categories</h4>
			<ul class="list-unstyled list-group">
				<li onclick="fetchQuery('winner')" class="list-group-item">Winner</li>
				<li onclick="fetchQuery('weeklyhoh')" class="list-group-item">Weekly HOH and Assistant</li>
				<li onclick="fetchQuery('taskwinner')" class="list-group-item">Group Weekly Task Winner</li>
				<li onclick="fetchQuery('evictingnext')" class="list-group-item">Evicting Next</li>
				<li onclick="fetchQuery('lastman')" class="list-group-item">Last Man Standing</li>
				<li onclick="fetchQuery('lastwoman')" class="list-group-item">Last Woman Standing</li>
				<li onclick="fetchQuery('runnerup')" class="list-group-item">Runner up</li>
				<li onclick="fetchQuery('hated')" class="list-group-item">Most Hated Housemate</li>
				<li onclick="fetchQuery('firsttowin')" class="list-group-item">First To Win A Task</li>
				<li onclick="fetchQuery('mostloved')" class="list-group-item">Most Loved Housemate</li>
			</ul>
		</div>
		<div class="book-holder">
	<h4>Please select at least one event from the left hand list to display odds. </h4>
		</div>
		<div class="coupon-detail">
		<form class="form-inline booking" method="POST" action='getbooking.php'>
			<h5>Insert Booking Number</h5>
			<input type="text" name="bookingid" class="ticketarea-text form-control"  style="resize:none;" />
			<button type="submit" name="submit" class="btn btn-primary btn-sm">Load</button>
		</form>
		<div class="betlists">
			
		</div>
		<div class="betting-service">
			<button class="btn btn-sm  btn-primary">Multiple</button>
			<button class="btn btn-sm btn-primary">Single</button>
				</div>
				<div class="odds-amount">
					<li><span class="badge badge-info">Odds</span><span id="rewrite"></span></li>
					<li><span class="badge badge-success">Winnings</span><span id="amountrewrite"></span></li>
				</div>
		<div class="bet-calc-holder">
			<button class="btn btn-sm btn-success" onclick="dothemaths(500)">500</button>
			<button class="btn btn-sm btn-success" onclick="dothemaths(1000)">1000</button>
			<button class="btn btn-sm btn-success" onclick="dothemaths(2000)">2000</button>
			<button class="btn btn-sm btn-success" onclick="dothemaths(5000)">5000</button>
	</div>
	<div class="submit-bet-handler">
		<button class="btn btn-danger btn-sm" onclick="cancelBet()">Cancel</button>
		<button class="btn btn-success btn-sm" onclick="submitBet()">BET</button>
	</div>
		</div>
	</div>
</section>
</div>
<script type="text/javascript" src="../influencer/css/bootstrap/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../influencer/css/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/sitehandler.js"></script>
<script type="text/javascript" src="js/submit.js"></script>
<script type="text/javascript" src="js/getbookies.js"></script>
</body>
</html>
<?php
}
?>