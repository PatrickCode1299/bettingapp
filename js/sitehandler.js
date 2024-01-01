function handleNavigation(){
//$(".mainpageholder").css('display','none');
$(".log-container").css('display','block');

}
function showRegForm(){
  $(".reg-container").css('display','block');
  $(".log-container").css('display','none');
}
function fetchQuery(info){
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
}
calculations = {
id:[],
id2:'',
betamount:'',
hidebuttonmenu:'',
oddamount:'',
hiddenid:'',
staticprice:'',
betlistsid:[],
//sum:this.calculations.id * this.calculations.id2,
}

function dothemaths(amount){
let sum=1;
this.calculations.betamount=amount;
for(var i=0; i<this.calculations.id.length; i++){
  sum=sum*this.calculations.id[i];
}
/* let oddslist=document.createElement('li');
let oddspan=document.createElement('span');
oddspan.setAttribute('class','pull-left badge badge-info');
let text=document.createTextNode(sum);
oddspan.appendChild(text);
oddslist.appendChild(oddspan); **/
$('#rewrite').html(sum);
let serverprice=sum * amount;
this.calculations.oddamount=sum;
this.calculations.staticprice=serverprice;
newamountowrite=sum * amount;
$('#amountrewrite').html(newamountowrite.toLocaleString("en") + '\nNaira');
$('#stakerewrite').html(amount.toLocaleString("en"));
/*let arraysum=this.calculations.id.reduce(function(a,b){
let price=amount;
let sum= a*b;
return sum * price;
},1); **/
//alert(arraysum);

}
function cancelBet(){
  $(".betlists").html('');
  this.calculations.id.length=0;
  $('#rewrite').html('');
$('#amountrewrite').html('');
let info=this.calculations.id2;
/* let returnbtn=this.calculations.hidebuttonmenu;
let alleventsreturn=document.querySelectorAll(returnbtn);
$(alleventsreturn).attr('disabled',"");
console.log(alleventsreturn); **/
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
/** let stakebtn=document.querySelectorAll("#stake");
  $(stakebtn).prop("disabled",false); **/
}
function hideresponse(){
	$('.responseerror').css('display','none');
}
function showBox(){
	$(".reg-container").css('display','block');
}
function showLogin(){
    $(".log-container").css('display','block');
}
function hideerr(){
  $('#error').css('display','none');
}
function remove(data){
  alert("yes");
}
/** function removearrElem(arr,value){
  return arr.filter(function(value){
     value !=value;
  });
  alert(this.calculations.id);
} */
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
function submitBet(){
    let id='x'+Math.floor(Math.random() * 1000)+'y'+'z';
  for (var i =0; i < this.calculations.betlistsid.length;  i++) {
   let newvariable=this.calculations.betlistsid[i];
   $.ajax({
      url:'submitbet.php',
       beforeSend: function (){
        $("#popimage").show();
      },
      complete: function(){
        $("#popimage").hide();
      },
      data:{
        games:newvariable,
        uniqueid:id,


      },
      type:'post',
      success:function(response){
        $("body").append(response);
      }
  });
  }
  
  $('.game-success-response').css('display','block');
  $('.res').html('Your Bet Has Been Booked Please Login To Validate Your Bet with bookingid:' +id);
}
function accountinfo(){
  $(".account-info").toggle();
}
function cancelsignup(){
  $(".reg-container").css("display","none");
}
function cancelogin(){
  $(".log-container").css("display","none");
}

function fetchticketinfo(info){
let details=info;
$.ajax({
url:'fetchticketinfo.php',
 beforeSend: function (){
        $("#popimage").show();
      },
      complete: function(){
        $("#popimage").hide();
      },
data:{
  gamereference:details
},
type:'post',
success:function(response){
  $(".infohandler").html(response)
}
});
$(".ticketpaper").css('display','block');
}
/** function loadbookies(){
let bookingnumber=$(".ticketarea-text").val();
 $.ajax({
      url:'getbooking.php',
      data:{
       bookingid:bookingnumber,


      },
      type:'post',
      success:function(response){
        $("body").append(response);
      }
  });
} */

 


