<?php
include_once 'header.php';
?>
<?php
if(!isset($_COOKIE['bettingsiteuser'])){
	echo "<script>window.location.href='index.php';</script>";
}
?>
<?php
//echo "<h2 style='margin-top:100px;'>".$_COOKIE['bettingsiteuser']."</h2>";
?>
<div class="container-fluid" style="margin-top:50px;">
	<div class="booking-grid">
		<div class="category-bar">
			<h4>Categories</h4>
			<ul class="list-unstyled list-group">
				<li onclick="fetchQuery('winner')"  id="winnertab" class="list-group-item">Winner</li>
				<li onclick="fetchQuery('weeklyhoh')" id="weeklyhohtab" class="list-group-item">Weekly HOH and Assistant</li>
				<li onclick="fetchQuery('taskwinner')" id="taskwinnertab" class="list-group-item">Group Weekly Task Winner</li>
				<li onclick="fetchQuery('arenawinner')" id="arenawinnertab" class="list-group-item">Friday Night Arena Games Winner</li>
				<li onclick="fetchQuery('evictingnext')" id="evictingtab" class="list-group-item">Evicting Next</li>
				<li onclick="fetchQuery('lastman')" id="lastmantab" class="list-group-item">Last Man Standing</li>
				<li onclick="fetchQuery('lastwoman')" id="lastwomantab" class="list-group-item">Last Woman Standing</li>
				<li onclick="fetchQuery('runnerup')" id="runneruptab" class="list-group-item">Runner up</li>
				<li onclick="fetchQuery('disqualified')" id="disqualifiedtab" class="list-group-item">Getting disqualified</li>

			</ul>
		</div>
		<div class="book-holder">
	<h4 id='bookinformer'>Please select at least one event from the left hand list to display odds. </h4>
		</div>
		<div class="coupon-detail">
		<form class="form-inline booking" method="POST" action='getbooking.php'>
			<h5>Insert Booking Number</h5>
			<input type="text" name="bookingid" disabled="true" class="ticketarea-text form-control"  style="resize:none;" />
			<button type="submit" name="submit" class="btn btn-primary btn-sm" disabled="">Load</button>
		</form>
		<div class="betlists">
			
		</div>
		<div class="betting-service">
			<button class="btn btn-sm  btn-primary" disabled="">Multiple</button>
			<button class="btn btn-sm btn-primary" disabled="">Single</button>
				</div>
				<div class="odds-amount">
					<li><span class="badge badge-info">Stake</span><span id="stakerewrite"></span></li>
					<li><span class="badge badge-info">Odds</span><span id="rewrite"></span></li>
					<li><span class="badge badge-success">Winnings</span><span id="amountrewrite"></span></li>
				</div>
		<div class="bet-calc-holder">
			<button id="stake"   class="stake btn btn-sm btn-success" onclick="dothemaths(500)">500</button>
			<button id="stake" class="stake btn btn-sm btn-success" onclick="dothemaths(1000)">1000</button>
			<button id="stake" class="stake btn btn-sm btn-success" onclick="dothemaths(2000)">2000</button>
			<button id="stake" class="stake btn btn-sm btn-success" onclick="dothemaths(5000)">5000</button>
			<button id="stake" class="stake btn btn-sm btn-success" onclick="dothemaths(10000)">10000</button>
			<button id="stake" class="stake btn btn-sm btn-success" onclick="dothemaths(15000)">15000</button>
			<button id="stake" class="stake btn btn-sm btn-success" onclick="dothemaths(20000)">20000</button>
	</div>
	<div class="submit-bet-handler">
		<button class="btn btn-danger btn-sm" onclick="cancelBet()" disabled="">Cancel</button>
		<button class="btn btn-success btn-sm" onclick="confirmBet()">BET</button>
	</div>
		</div>
	</div>
	<div style="position:fixed; left:20px; right:20px; display:none; width:100px; margin:0 auto; z-index:1; top:50px; " id="popimage">
	<img src="css/loading.gif" id="popimage" style="width:100%; height:auto;">
</div>
</div>
<script type="text/javascript" src="folder/users/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/sitehandler.js"></script>
<script type="text/javascript" src="js/submit.js"></script>
<script type="text/javascript" src="js/getbookies.js"></script>
<script type="text/javascript">
	function hey(odd,housemate){
 let referencename='#'+housemate;
let getnewname=$(referencename).attr("name");
switch(getnewname){
  case 'Winner':
  $("#winnertab").css('display','none');
  break;
  case 'Weeklyhoh':
 $("#weeklyhohtab").css('display','none');
  break;
  case 'Taskwinner':
  $("#taskwinnertab").css('display','none');
  break;
  case 'Arenawinner':
   $("#arenawinnertab").css('display','none');
  break;
  case 'Evictingnext':
  $("#evictingtab").css('display','none');
  break;
  case 'Lastman':
  $("#lastmantab").css('display','none');
  break;
  case 'Lastwoman':
  $("#lastwomantab").css('display','none');
  break;
  case 'Runnerup':
  $("#runneruptab").css('display','none');
  break;
  case 'Hated':
  $("#hatedtab").css('display','none');
  break;
  case 'Firsttowin':
  $("#firstowintab").css('display','none');
  break;
  case 'Disqualified':
  $("#disqualifiedtab").css('display','none');
  break;
  
}
  this.calculations.id.push(odd);
  let stakebtn=document.querySelectorAll("#stake");
  $(stakebtn).prop("disabled",false);
//alert(this.calculations.id);
let newodd=odd;
let stringodd=odd;
let newlist=document.createElement("li");
window.webvariable=odd;
newlist.setAttribute("class",odd);
let buttoninfo=document.getElementById(housemate);
var newchild=buttoninfo.value;
var buttoncat=buttoninfo.name;
switch (odd){
case 1.2:
  var switchingodd=21;
  var uniqueattribute=newchild+buttoncat+switchingodd;
  break;
  case 1.3:
  var switchingodd=31;
  var uniqueattribute=newchild+buttoncat+switchingodd;
  break;

case 1.4:
  var switchingodd=41;
  var uniqueattribute=newchild+buttoncat+switchingodd;
  break;

case 1.5:
  var switchingodd=51;
  var uniqueattribute=newchild+buttoncat+switchingodd;
  break;

case 1.6:
  var switchingodd=61;
  var uniqueattribute=newchild+buttoncat+switchingodd;
  break;

case 1.7:
  var switchingodd=71;
  var uniqueattribute=newchild+buttoncat+switchingodd;
  break;

case 1.8:
  var switchingodd=81;
  var uniqueattribute=newchild+buttoncat+switchingodd;
  break;

case 1.9:
  var switchingodd=91;
  var uniqueattribute=newchild+buttoncat+switchingodd;
  break;
  case 2.2:
  var switchingodd=222;
  var uniqueattribute=newchild+buttoncat+switchingodd;
  break;
  case 2.5:
  var switchingodd=225;
  var uniqueattribute=newchild+buttoncat+switchingodd;
  break;
  default:
  var uniqueattribute=newchild+buttoncat+odd;
  break;

}

this.calculations.betlistsid.push(uniqueattribute);
newlist.setAttribute("id",uniqueattribute);
this.calculations.id2=buttoncat;
this.calculations.hidebuttonmenu='.'+buttoncat;
let hiddenvar=this.calculations.hidebuttonmenu;

let menubtn=document.querySelectorAll(hiddenvar);
$(menubtn).attr('disabled','true');
//console.log(menubtn);
let info=document.createTextNode(newodd);
let buttondetail=document.createTextNode(newchild);
let buttonamedetail=document.createTextNode(buttoncat);
//newlist.appendChild(buttonamedetail);
//newlist.appendChild(buttondetail);


let newbadge=document.createElement("span");
let listtag1=document.createElement("span");
let listtag2=document.createElement("span");
let listag3=document.createElement("span");
let tag3elem=document.createTextNode("x");
listag3.appendChild(tag3elem);
listag3.setAttribute("class","cancelevent");
listag3.setAttribute("id",odd);
listag3.setAttribute("onclick","hithere('"+getnewname+"','"+uniqueattribute+"','"+odd+"')");
listtag1.appendChild(buttonamedetail);
listtag2.appendChild(buttondetail);
newlist.appendChild(listtag1);
newlist.appendChild(listtag2);
newbadge.setAttribute("class","badge badge-primary pull-right");
//let details=document.createTextNode("hello world");
newbadge.appendChild(info);
newlist.appendChild(newbadge);
newlist.appendChild(listag3);

//betlist=$(".betlists");
//let elementname=$(buttoninfo).attr('name');
//let  btnclass=document.getElementsByClassName(elementname);
//console.log(btnclass);
//$(elementname).attr('disabled','true');
//alert(elementname);
//$(buttoninfo).attr('disabled','true');
$(".betlists").append(newlist); 
let sum=1;
for(var i=0; i<this.calculations.id.length; i++){
  sum=sum*this.calculations.id[i];
} 
$("#rewrite").html(sum);

       $('html,body').animate({
        scrollTop: $(".coupon-detail").offset().top},
        'slow');

//alert(webvariable); 
}
function hithere(tablistname,attribute,odd){
  switch(tablistname){
  case 'Winner':
  $("#winnertab").css('display','block');
  break;
  case 'Weeklyhoh':
 $("#weeklyhohtab").css('display','block');
  break;
  case 'Taskwinner':
  $("#taskwinnertab").css('display','block');
  break;
  case 'Arenawinner':
   $("#arenawinnertab").css('display','block');
  break;
  case 'Evictingnext':
  $("#evictingtab").css('display','block');
  break;
  case 'Lastman':
  $("#lastmantab").css('display','block');
  break;
  case 'Lastwoman':
  $("#lastwomantab").css('display','block');
  break;
  case 'Runnerup':
  $("#runneruptab").css('display','block');
  break;
  case 'Hated':
  $("#hatedtab").css('display','block');
  break;
  case 'Firsttowin':
  $("#firstowintab").css('display','block');
  break;
  case 'Disqualified':
  $("#disqualifiedtab").css('display','block');
  break;
  
}
this.calculations.hiddenid=attribute;
let elem="#"+this.calculations.hiddenid;
let elemtobehidden=document.querySelectorAll(elem);
 $(elemtobehidden).hide();
 $('#rewrite').html('');
$('#amountrewrite').html('');
$('#stakerewrite').html('');

for (var i =0; i < this.calculations.id.length;  i++) {
  if(this.calculations.id[i]==odd){
   this.calculations.id.splice(i,1);
  }
}
for (var m =0; m < this.calculations.betlistsid.length;  m++) {
  if(this.calculations.betlistsid[m]==attribute){
   this.calculations.betlistsid.splice(m,1);
  }
} 
//this.calculations.id.splice(odd,1);
//alert(this.calculations.id);
let info=this.calculations.id2;
if(info==''){

}else{
  $.ajax({
      url:'fetchodds.php',
       beforeSend: function (){
        $("#popimage").show();
      },
      complete: function(){
        $("#popimage").hide();
      },
      data:{category:info},
      type:'post',
      success:function(response){
        $(".book-holder").html(response);
      }
  });
  this.calculations.id2=''; 
} 

}
function confirmBet(e){
  let winningsinfo=$("#amountrewrite").html();
  if(winningsinfo === ''){
    alert("Please select a odd and amount to place the bet");
  }else{
  let id='x'+Math.floor(Math.random() * 1000)+'y'+'z';
  let bettingamount=this.calculations.betamount;
  let bettingprice=this.calculations.staticprice;
  let oddamount=Math.floor(this.calculations.oddamount);
  
  for (var i =0; i < this.calculations.betlistsid.length;  i++) {
   let newvariable=this.calculations.betlistsid[i];
   $.ajax({
      url:'confirmbet.php',
       beforeSend: function (){
        $("#popimage").show();
      },
      complete: function(){
        $("#popimage").hide();
      },
      data:{
        games:newvariable,
        uniqueid:id,
        totalgameodds:oddamount,
        gameprice:bettingprice,
        winnings:bettingamount,


      },
      type:'post',
      success:function(response){
        $("body").append(response);
      }
  });
  }
   }
   e.stopImmediatePropagation();
}
	function checkbrowserwindow(){
		if(window.innerWidth < 620){
			$('#bookinformer').text("Please select at least one event from top to display odds");
		}else{
			$('#bookinformer').text("Please select at least one event from the left hand list to display odds");
		}
	}
	setInterval(checkbrowserwindow,500);
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
<style type="text/css">
	.category-bar > ul > li{
	background-image:linear-gradient(to right, purple,green);
	color:white;
	font-weight:bold;
	cursor:pointer;
	margin-left:0px;
}
.booking-grid > .category-bar{
	background-image:linear-gradient(to right, purple,green);
	flex:1;
}
</style>
</body>
</html>
