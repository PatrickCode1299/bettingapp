<div class="container-fluid first-container">
	<section class="main-wrapper">
	<div class="bubble-menu">
		<button class="btn btn-lg btn-default">Print Odds</button>
		<button class="btn btn-lg btn-default" onclick="handleNavigation()">Book A Bet</button>
		<button class="btn btn-lg btn-default">Report</button>
		<button class="btn btn-lg btn-default" onclick="showBox()">Register</button>
	</div>
<div class="form-containers">
<form method="POST" class="login-form ajax" action="login.php">
	<h4 class="text-left login-header">Login</h4>
	<div class="form-group">
		<label class="every-form-label">Username</label>
		<input type="text" placeholder="username" name="username" class="form-control">
	</div>
	<div class="form-group" style="margin-bottom:0px;">
		<label class="every-form-label">Password</label>
		<input type="password" placeholder="Password" name="password" class="form-control">
	</div>
	<button id="sign-in" class="btn btn-md btn-default btn-block every-form-btn"  type="submit" name="login">Login</button>

</form>
<form method="POST" class="register-form" action="" class="">
	<h4 class="text-left login-header">Coupon Check</h4>
		<label class="every-form-label">Check Coupon</label>
		<input type="text" placeholder="username" name="username" class="form-control">
	<button  class="btn btn-md btn-default btn-block every-form-btn">Check</button>
</form>
</div>
<div id="error" class="error">
		<span onclick="hideerr()" class="cancel">&times;</span>
	</div>
</section>