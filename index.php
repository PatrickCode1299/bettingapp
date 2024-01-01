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
		<li><a href='result.php'>Results</a></li>
		<li>Contact Us</li>
	</ul>
</div>
<section class="reg-container">
	<span class="cancel-signup-btn" onclick="cancelsignup()">&times;</span>
	<div class="register-box">
		<form method="POST" class="ajax" action="signup.php">
			<div class="form-group">
				<label id="signupid">Username</label>
				<input type="text" placeholder="Username e.g Johnekume3245" name="username" class="form-control" required>
			</div>
			<div class="form-group">
				<label id="signupid">Email</label>
				<input type="email" name="email" placeholder="Email e.g johnekume3245@gmail.com" class="form-control" required>
			</div>
			<div class="form-group">
				<label id="signupid">Password</label>
				<input type="password" name="password" placeholder="Password" class="form-control" required>
			</div>
			<button type="submit" id="reg-button" name="submit" class="btn btn-lg pull-right">Register</button>
		</form>
		<div id="responserror"></div>
	</div>
</section>
<section class="log-container">
	<span class="cancel-signup-btn" onclick="cancelogin()">&times;</span>
	<div class="register-box">
		<form method="POST" class="ajax" action="login.php">
			<div class="form-group">
				<label id="signupid">Username</label>
				<input type="text" placeholder="Username or Email" name="username" class="form-control" required>
			</div>
			<div class="form-group">
				<label id="signupid">Password</label>
				<input type="password" name="password" placeholder="Password" class="form-control" required>
			</div>
			<button type="submit" id="sign-in" name="login" class="btn btn-lg pull-right">Login</button>
		</form>
		<p style="color:white; font-weight:bold; cursor:pointer;" onclick="showRegForm()">Click me to register</p>
<div id="error">
	
</div>
	</div>
</section>
<div class="container-fluid mainpageholder">
	<div class="events-list">
		<ul class="list-group list-unstyled">
			<li class="list-group-item" onclick="handleNavigation()">Book a bet</li>
			<li class="list-group-item" onclick="showBox()">Register</li>
			<li class="list-group-item" onclick="showLogin()">Login</li>
			<li class="list-group-item" onclick="window.location.href='report.php';">Report</li>
			<li class="list-group-item">Forum</li>
			<li class="list-group-item">About us</li>
		<li class="list-group-item" onclick="window.location.href='tutorial.php';">Tutorial</li>
			<li class="list-group-item" >Faqs</li>
			<li class="list-group-item" onclick="window.location.href='terms.htm';">Terms</li>
			<li class="list-group-item" onclick="window.location.href='privacy.htm';">Privacy</li>
			<li class="list-group-item" onclick="window.location.href='response.htm';">Responsible Gaming</li>
		</ul>
	</div>
	<div class="content-holder">
		<div class="today-top-hit">
		<h2 class="header-text">Hot List</h2>
		           <?php
		           require 'db.php';
           $sql="SELECT category,housemate,odd_given FROM oddslist WHERE category='winner'  ORDER BY rand() desc LIMIT 5";
           $result=mysqli_query($conn,$sql);
           if(mysqli_num_rows($result) > 0){
              while($row=mysqli_fetch_assoc($result)){
              	echo "<ul class='hotlist-label'>";
              	echo "<li>".$row['category']."</li>";
              	echo "<li>".$row['housemate']."</li>";
              	$fetchimage=$row['housemate'];
              	switch($fetchimage){
              		case 'Angel':
			echo "<li class=''><img src='css/angel.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
		case 'Arin':
			echo "<li class=''><img src='css/arin.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Beatrice':
			echo "<li class=''><img src='css/beatrice.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Jackie':
			echo "<li class=''><img src='css/jackie.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Liquorose':
			echo "<li class=''><img src='css/liquorose.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Maria':
			echo "<li class=''><img src='css/maria.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Nini':
			echo "<li class=''><img src='css/nini.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Peace':
			echo "<li class=''><img src='css/peace.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Princess':
			echo "<li class=''><img src='css/princess.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Saskay':
			echo "<li class=''><img src='css/saskay.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Tega':
			echo "<li class=''><img src='css/tega.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Saga':
			echo "<li class=''><img src='css/saga.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Boma':
			echo "<li class=''><img src='css/boma.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Yousef':
			echo "<li class=''><img src='css/yousef.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Pere':
			echo "<li class=''><img src='css/pere.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Whitemoney':
			echo "<li class=''><img src='css/whitemoney.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Niyi':
			echo "<li class=''><img src='css/niyi.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Yerins':
			echo "<li class=''><img src='css/yerins.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'JayPaul':
			echo "<li class=''><img src='css/jaypaul.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Emmanuel':
			echo "<li class=''><img src='css/emmanuel.png' style='width:50px; height:50px; border-radius:50%;'></li>";
			break;
			case 'Sammie':
			echo "<li class=''><img src='css/sammie.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Cross':
			echo "<li class=''><img src='css/cross.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
		default:
			echo "<li class=''>Avatar</li>";
			break;
              	}
              	
              	echo "<li>".$row['odd_given']."</li>";
              	echo"<li><button onclick='handleNavigation()'   class='btn  btn-primary btn-sm hotlibtn'   style='background-color:indigo; color:white; border:1px solid indigo; width:50px;'>Bet</button></li>";
              	echo "</ul>";

              }
           }else{
               echo null;
           }
           ?>
	</div>
	<div class="today-top-hit">
		<h2 class="header-text">Live in Play</h2>
		<p style="color:black;"><marquee>Not Available</marquee></p>
	</div>
	<div class="today-top-hit">
		<h2 class="header-text">Trending</h2>
		<div class="trending">
		<div class="carousel-holder" style="margin-top:0px;   margin-left:0px; height:100%;  box-sizing:border-box;">
		<div id="myCarousel" class="carousel slide carousel-fade" data-interval="3000" data-ride="carousel">      
		<ol class="carousel-indicators">       
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>       
			<li data-target="#myCarousel" data-slide-to="1"></li>       
			<li data-target="#myCarousel" data-slide-to="2"></li>    
		</ol>         
		<div class="carousel-inner">       
			<div class="item active">          
				<img src="css/liquorose.png"  style="width:100%; height:200px; padding:0; margin:0; object-fit:center; border:none; position:relative;" alt="First Slide">
				<div class="carousel-caption" id="first-box">
					<h2 id="collection-tags">Trending </h2>
		           <button type="button" style="background-color:indigo; color:white; border:1px solid indigo;" id="col-button" onclick="handleNavigation()" class="btn btn-default btn-md">Bet Now</button>
				</div>      
			</div>       
			<div class="item">          
				<img src="css/boma.png" style="width:100%; height:200px; padding:0; margin:0; border:none; position:relative;" alt="Second slide"> 
				<div class="carousel-caption" id="first-box">
					<h2 id="collection-tags">Hot </h2>
		           <button type="button" style="background-color:indigo; color:white; border:1px solid indigo;" id="col-button" onclick="handleNavigation()" class="btn btn-default btn-md">Bet Now</button>
				</div>        
			</div>       
			<div class="item">          
				<img src="css/whitemoney.png" style="width:100%; height:200px; padding:0; margin:0; border:none; position:relative;" alt="Third slide">   
				<div class="carousel-caption" id="first-box">
					<h2 id="collection-tags">Trending</h2>
		           <button type="button" style="background-color:indigo; color:white; border:1px solid indigo;" id="col-button" onclick="handleNavigation()" class="btn btn-default btn-md">Bet Now</button>
				</div>      
			</div> 
			<div class="item">          
				<img src="css/angel.png" style="width:100%; height:200px; padding:0; margin:0; border:none; position:relative;" alt="Third slide">   
				<div class="carousel-caption" id="first-box">
					<h2 id="collection-tags">Hot </h2>
		           <button type="button" style="background-color:indigo; color:white; border:1px solid indigo;" id="col-button" onclick="handleNavigation()" class="btn btn-default btn-md">Bet Now</button>
				</div>      
			</div> 
			<div class="item">          
				<img src="css/maria.png" style="width:100%; height:200px; padding:0; margin:0; border:none; position:relative;" alt="Third slide">   
				<div class="carousel-caption" id="first-box">
					<h2 id="collection-tags">Hot </h2>
		           <button type="button" style="background-color:indigo; color:white; border:1px solid indigo;" id="col-button" onclick="handleNavigation()" class="btn btn-default btn-md">Bet Now</button>
				</div>      
			</div> 
			<div class="item">          
				<img src="css/nini.png" style="width:100%; height:200px; padding:0; margin:0; border:none; position:relative;" alt="Third slide">   
				<div class="carousel-caption" id="first-box">
					<h2 id="collection-tags">Hot </h2>
		           <button type="button" style="background-color:indigo; color:white; border:1px solid indigo;" id="col-button" onclick="handleNavigation()" class="btn btn-default btn-md">Bet Now</button>
				</div>      
			</div>    
		</div>      
	</div>
	</div>
</div>
	</div>
	<div class="footer" style="bottom:0px;
max-width:100%;
padding-top:20px;
padding-right:10px;
padding-left:10px;
padding-bottom:20px;
background-color:forestgreen;
margin-top:150px;
display:flex;
justify-content:center;
flex-direction:row;" id="web-footer">
	<ul class="list-group list-unstyled" style="flex:1;margin-right: auto;">
		<h4 style="color:white; font-weight: bold; font-family:tahoma;">BBbet</h4>
		<li style="margin-top:10px; color:white;"><a href='index.php'>Home</a></li>
		<li style="margin-top:10px; color:white;"><a href='#'>About Us</a></li>
		<li style="margin-top:10px; color:white;"><a href='#'>Contact Us</a></li>
		<li style="margin-top:10px; color:white;"><a href='result.php'>Results</a></li>
	</ul>
	<div style="flex:1;">
			<img src="css/bbbetlogo.png" style="width:100px; height:100px;">
	</div>
	<ul class="list-group list-unstyled" style="flex:1;">
		<h4 style="color:white; font-weight: bold; font-family:tahoma;">BBbet</h4>
		<li style="margin-top:10px; color:white;"><a href='terms.htm'>Terms and conditions</a></li>
		<li style="margin-top:10px; color:white;"><a href='response.htm'>Responsible Gaming</a></li>
		<li style="margin-top:10px; color:white;"><a href='privacy.htm'>Privacy</a></li>
	</ul>
	</div>
</div>
	<div class="adverts-info">
		<form class="form-inline booking" method="POST" action='getbooking.php'>
			<h5 style="color:white;">Check Coupon Code</h5>
			<input type="text" name="bookingid" class="ticketarea-text form-control"  style="resize:none;" />
			<button type="submit" name="submit" class="btn btn-primary btn-sm" disabled="">Load</button>
		</form>
		<div class="result-clips">
		<marquee>Coming soon</marquee>
	</div>
	</div>
</div>
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
<div style="position:fixed; left:20px; right:20px; display:none; width:100px; margin:0 auto; z-index:1; top:50px; " id="popimage">
	<img src="css/loading.gif" id="popimage" style="width:100%; height:auto;">
</div>
<div class="game-success-response">
	<span class="cancel-res" style="cursor:pointer;" onclick="$('.game-success-response').css('display','none');">&times;</span>
	<p class="res"></p>
</div>
<script type="text/javascript" src="folder/users/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="folder/users/js/bootstrap.min.js"></script>
<script type="text/javascript" src="folder/users/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/sitehandler.js"></script>
<script type="text/javascript" src="js/submit.js"></script>
<script type="text/javascript" src="js/getbookies.js"></script>
<script type="text/javascript">
	function hideresponse(){
		$("#responserror").css('display','none');
	}
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-203829776-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-203829776-1');
</script>
<noscript>
<meta http-equiv="Refresh" content="0; URL=noscript.htm">
</noscript>
</body>
</html>
<?php
}
?>