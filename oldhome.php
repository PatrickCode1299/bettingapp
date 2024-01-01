<?php
include_once 'header.php';
?>
<?php
//echo "<h2 style='margin-top:100px;'>".$_COOKIE['bettingsiteuser']."</h2>";
?>
<div class="container-fluid" style="margin-top:50px;">
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
			<button type="submit" name="submit" class="btn btn-primary btn-sm" disabled="">Load</button>
		</form>
		<div class="betlists">
			
		</div>
		<div class="betting-service">
			<button class="btn btn-sm  btn-primary" disabled="">Multiple</button>
			<button class="btn btn-sm btn-primary" disabled="">Single</button>
				</div>
				<div class="odds-amount">
					<li><span class="badge badge-info">Odds</span><span id="rewrite"></span></li>
					<li><span class="badge badge-success">Winnings</span><span id="amountrewrite"></span></li>
				</div>
		<div class="bet-calc-holder">
			<button id="stake"   class="stake btn btn-sm btn-success" onclick="dothemaths(500)">500</button>
			<button id="stake" class="stake btn btn-sm btn-success" onclick="dothemaths(1000)">1000</button>
			<button id="stake" class="stake btn btn-sm btn-success" onclick="dothemaths(2000)">2000</button>
			<button id="stake" class="stake btn btn-sm btn-success" onclick="dothemaths(5000)">5000</button>
	</div>
	<div class="submit-bet-handler">
		<button class="btn btn-danger btn-sm" onclick="cancelBet()">Cancel</button>
		<button class="btn btn-success btn-sm" onclick="confirmBet()">BET</button>
	</div>
		</div>
	</div>
	<div style="position:fixed; left:20px; right:20px; display:none; width:100px; margin:0 auto; z-index:1; top:50px; " id="popimage">
	<img src="css/loading.gif" id="popimage" style="width:100%; height:auto;">
</div>
</div>
<script type="text/javascript" src="../influencer/css/bootstrap/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/sitehandler.js"></script>
<script type="text/javascript">
let elemtofind=1;
function checkstakebtn(){
let sitearr=this.calculations.id;
if(sitearr===undefined || sitearr.length== 0){
	let stakebtn=document.querySelectorAll("#stake");
	$(stakebtn).attr("disabled",true);
}else{
	$(stakebtn).attr("disabled",false);
}	
}
setInterval(checkstakebtn,500);


</script>
<script type="text/javascript" src="js/submit.js"></script>
<script type="text/javascript" src="js/getbookies.js"></script>
</body>
</html>
