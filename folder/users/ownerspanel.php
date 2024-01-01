<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
	<link rel="icon" type="fav/ico" href="icon.ico">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
	<title>User Panel</title>
</head>
<body>
<nav class="nav navbar-inverse">
	<div class="navbar-header">
		<h3 class="text-center">Welcome Owner</h3>
	</div>
</nav>
<div class="container-fluid">
<h2 style="color:white;">Set Odd</h2>
<form method="POST" action="setodd.php" class="owner-flex-form">
<div class="form-group">
<label class="label" for="country">Housemates</label>
<select name="housemates" class="form-control" required>
<option class="" value="Angel" onclick="addtorandominput('Angel')">Angel</option>
<option class="" value="Arin" onclick="addtorandominput('Arin')">Arin</option>
<option class="" value="Jmk" onclick="addtorandominput('Jmk')">Jmk</option>
<option class="" value="Jackie" onclick="addtorandominput('Jackie')">Jackie</option>
<option class="" value="Liquorose" onclick="addtorandominput('Liquorose')">Liquorose</option>
<option class="" value="Maria" onclick="addtorandominput('Maria')">Maria</option>
<option class="" value="Nini" onclick="addtorandominput('Nini')">Nini</option>
<option class="" value="Peace" onclick="addtorandominput('Peace')">Peace</option>
<option class="" value="Princess" onclick="addtorandominput('Princess')">Princess</option>
<option class="" value="Queen" onclick="addtorandominput('Queen')">Queen</option>
<option class="" value="Saskay" onclick="addtorandominput('Saskay')">Saskay</option>
<option class="" value="Tega" onclick="addtorandominput('Tega')">Tega</option>
<option class="" value="Saga" onclick="addtorandominput('Saga')">Saga</option>
<option class="" value="Boma" onclick="addtorandominput('Boma')">Boma</option>
<option class="" value="Yousef" onclick="addtorandominput('Yousef')">Yousef</option>
<option class="" value="Pere" onclick="addtorandominput('Pere')">Pere</option>
<option class="" value="Whitemoney" onclick="addtorandominput('Whitemoney')">White Money</option>
<option class="" value="Kayvee" onclick="addtorandominput('Kayvee')">Kayvee</option>
<option class="" value="Michael" onclick="addtorandominput('Michael')">Michael</option>
<option class="" value="JayPaul" onclick="addtorandominput('JayPaul')">JayPaul</option>
<option class="" value="Emmanuel" onclick="addtorandominput('Emmanuel')">Emmanuel</option>
<option class="" value="Sammie" onclick="addtorandominput('Sammie')">Sammie</option>
<option class="" value="Cross" onclick="addtorandominput('Cross')">Cross</option>
</select>
</div>
<div class="form-group">
<label class="label" for="category">Category</label>
<select name="category" class="form-control" required>
<option class="" id="champion" onclick="execute('Winner')" value="winner">Winner</option>
<option class="" id="headofhouse" onclick="execute('Weeklyhoh')" value="weeklyhoh">Weekly HOH and Assistant</option>
<option class="" id="winnertask" onclick="execute('Taskwinner')" value="taskwinner">Group Weekly Task Winner</option>
<option class="" id="winnertask" onclick="execute('Arenawinner')" value="arenawinner">Friday Night Arena Games Winner</option>
<option class="" id="nextevicting" onclick="execute('Evictingnext')" value="evictingnext">Evicting Next</option>
<option class="" id="manlast" onclick="execute('Lastman')" value="lastman">Last Man Standing</option>
<option class="" id="womanlast" onclick="execute('Lastwoman')" value="lastwoman">Last Woman Standing</option>
<option class="" id="uprunner" onclick="execute('Runnerup')" value="runnerup">Runner up</option>
<option class="" id="disqualified" onclick="execute('Disqualified')" value="disqualified">Getting disqualified</option>
</select>
</div>
<div class="form-group">
<label class="label" for="country">Odds</label>
<select name="odd" class="form-control" required>
<option class="" value="1.2"  onclick="addtoodds('1.2')">1.2</option>
<option class="" value="1.3"  onclick="addtoodds('1.3')">1.3</option>
<option class="" value="1.4"  onclick="addtoodds('1.4')">1.4</option>
<option class="" value="1.5"  onclick="addtoodds('1.5')">1.5</option>
<option class="" value="1.6"  onclick="addtoodds('1.6')">1.6</option>
<option class="" value="1.7"  onclick="addtoodds('1.7')">1.7</option>
<option class="" value="1.8"  onclick="addtoodds('1.8')">1.8</option>
<option class="" value="1.9"  onclick="addtoodds('1.9')">1.9</option>
<option class="" value="2"  onclick="addtoodds('2')">2</option>
<option class="" value="2.2"  onclick="addtoodds('2.2')">2.2</option>
<option class="" value="2.5"  onclick="addtoodds('2.5')">2.5</option>	
<option class="" value="3"  onclick="addtoodds('3')">3</option>
<option class="" value="4" onclick="addtoodds('4')">4</option>
<option class="" value="5" onclick="addtoodds('5')">5</option>
<option class="" value="6" onclick="addtoodds('6')">6</option>
<option class="" value="7" onclick="addtoodds('7')">7</option>
<option class="" value="8" onclick="addtoodds('8')">8</option>
<option class="" value="9" onclick="addtoodds('9')">9</option>
<option class="" value="10" onclick="addtoodds('10')">10</option>
<option class="" value="11" onclick="addtoodds('11')">11</option>
<option class="" value="12" onclick="addtoodds('12')">12</option>
<option class="" value="13" onclick="addtoodds('13')">13</option>
<option class="" value="14" onclick="addtoodds('14')">14</option>
<option class="" value="15" onclick="addtoodds('15')">15</option>
<option class="" value="16" onclick="addtoodds('16')">16</option>
<option class="" value="17" onclick="addtoodds('17')">17</option>
<option class="" value="18" onclick="addtoodds('18')">18</option>
<option class="" value="19" onclick="addtoodds('19')">19</option>
<option class="" value="20" onclick="addtoodds('20')">20</option>
<option class="" value="21" onclick="addtoodds('21')">21</option>
<option class="" value="22" onclick="addtoodds('22')">22</option>
<option class="" value="23" onclick="addtoodds('23')">23</option>
<option class="" value="24" onclick="addtoodds('24')">24</option>
<option class="" value="25" onclick="addtoodds('25')">25</option>
<option class="" value="50" onclick="addtoodds('50')">50</option>
<option class="" value="100" onclick="addtoodds('100')">100</option>
</select>
</div>
<!--<div class="form-group">
<label class="label" for="country">Random Input</label>
<input type="text" id="randomize" value="AvalaWinner2" class="form-control" placeholder="yes" name="uniqueid">
</div> -->
<div class="form-group">
<label class="label" for="country">Result Day</label>
<input type="text" class="form-control" placeholder="result day" name="resultday">
</div>
<div class="form-group" id="button-div">
<button type="submit" name="setodd" class="btn btn-primary btn-md">Set</button>
</div>
<script type="text/javascript">
	/**
	housemateskeeper={
     member:'',
     cat:'',
     odd:'',
	};


	let randominput=document.getElementById('randomize');
	let champion=document.getElementById('champion');
	let headofhouse=document.getElementById('headofhouse');
	let winnertask=document.getElementById('winnertask');
	let nextevicting=document.getElementById('nextevicting');
	let manlast=document.getElementById('manlast');
	let womanlast=document.getElementById('womanlast');
	let uprunner=document.getElementById('uprunner');
	let hatedd=document.getElementById('hatedd');
	let towinfirst=document.getElementById('towinfirst');
	let lovedmost=document.getElementById('lovedmost');

	function addtorandominput(info){
     this.housemateskeeper.member=info;
     //alert(this.housemateskeeper.member);
		
	}
	function addtoodds(input){
		this.housemateskeeper.odd=input;
		let housemember=this.housemateskeeper.member;
		let catid=this.housemateskeeper.cat;
		let oddid=this.housemateskeeper.odd;
		randominput.value=housemember+catid+oddid;


	}
	function execute(id){
		this.housemateskeeper.cat=id;
		
        
		
	}
	**/

</script>
</form>
<h2 style="color:white;">Update Odd</h2>
<form method="POST" action="updateodd.php" class="owner-flex-form">
<div class="form-group">
<label class="label" for="country">Housemates</label>
<select name="housemates" class="form-control" required>
<option class="" value="Angel" onclick="addtorandominput('Angel')">Angel</option>
<option class="" value="Arin" onclick="addtorandominput('Arin')">Arin</option>
<option class="" value="Jmk" onclick="addtorandominput('Jmk')">Jmk</option>
<option class="" value="Jackie" onclick="addtorandominput('Jackie')">Jackie</option>
<option class="" value="Liquorose" onclick="addtorandominput('Liquorose')">Liquorose</option>
<option class="" value="Maria" onclick="addtorandominput('Maria')">Maria</option>
<option class="" value="Nini" onclick="addtorandominput('Nini')">Nini</option>
<option class="" value="Peace" onclick="addtorandominput('Peace')">Peace</option>
<option class="" value="Princess" onclick="addtorandominput('Princess')">Princess</option>
<option class="" value="Queen" onclick="addtorandominput('Queen')">Queen</option>
<option class="" value="Saskay" onclick="addtorandominput('Saskay')">Saskay</option>
<option class="" value="Tega" onclick="addtorandominput('Tega')">Tega</option>
<option class="" value="Saga" onclick="addtorandominput('Saga')">Saga</option>
<option class="" value="Boma" onclick="addtorandominput('Boma')">Boma</option>
<option class="" value="Yousef" onclick="addtorandominput('Yousef')">Yousef</option>
<option class="" value="Pere" onclick="addtorandominput('Pere')">Pere</option>
<option class="" value="Whitemoney" onclick="addtorandominput('Whitemoney')">White Money</option>
<option class="" value="Kayvee" onclick="addtorandominput('Kayvee')">Kayvee</option>
<option class="" value="Michael" onclick="addtorandominput('Michael')">Michael</option>
<option class="" value="JayPaul" onclick="addtorandominput('JayPaul')">JayPaul</option>
<option class="" value="Emmanuel" onclick="addtorandominput('Emmanuel')">Emmanuel</option>
<option class="" value="Sammie" onclick="addtorandominput('Sammie')">Sammie</option>
<option class="" value="Cross" onclick="addtorandominput('Cross')">Cross</option>
</select>
</div>
<div class="form-group">
<label class="label" for="category">Category</label>
<select name="category" class="form-control" required>
<option class="" id="champion" onclick="execute('Winner')" value="winner">Winner</option>
<option class="" id="headofhouse" onclick="execute('Weeklyhoh')" value="weeklyhoh">Weekly HOH and Assistant</option>
<option class="" id="winnertask" onclick="execute('Taskwinner')" value="taskwinner">Group Weekly Task Winner</option>
<option class="" id="winnertask" onclick="execute('Arenawinner')" value="arenawinner">Friday Night Arena Games Winner</option>
<option class="" id="nextevicting" onclick="execute('Evictingnext')" value="evictingnext">Evicting Next</option>
<option class="" id="manlast" onclick="execute('Lastman')" value="lastman">Last Man Standing</option>
<option class="" id="womanlast" onclick="execute('Lastwoman')" value="lastwoman">Last Woman Standing</option>
<option class="" id="uprunner" onclick="execute('Runnerup')" value="runnerup">Runner up</option>
<option class="" id="disqualified" onclick="execute('Disqualified')" value="disqualified">Getting disqualified</option>
</select>
</div>
<div class="form-group">
<label class="label" for="country">Odds</label>
<select name="odd" class="form-control" required>
<option class="" value="1.2"  onclick="addtoodds('1.2')">1.2</option>
<option class="" value="1.3"  onclick="addtoodds('1.3')">1.3</option>
<option class="" value="1.4"  onclick="addtoodds('1.4')">1.4</option>
<option class="" value="1.5"  onclick="addtoodds('1.5')">1.5</option>
<option class="" value="1.6"  onclick="addtoodds('1.6')">1.6</option>
<option class="" value="1.7"  onclick="addtoodds('1.7')">1.7</option>
<option class="" value="1.8"  onclick="addtoodds('1.8')">1.8</option>
<option class="" value="1.9"  onclick="addtoodds('1.9')">1.9</option>
<option class="" value="2"  onclick="addtoodds('2')">2</option>
<option class="" value="2.2"  onclick="addtoodds('2.2')">2.2</option>
<option class="" value="2.5"  onclick="addtoodds('2.5')">2.5</option>	
<option class="" value="3"  onclick="addtoodds('3')">3</option>
<option class="" value="4" onclick="addtoodds('4')">4</option>
<option class="" value="5" onclick="addtoodds('5')">5</option>
<option class="" value="6" onclick="addtoodds('6')">6</option>
<option class="" value="7" onclick="addtoodds('7')">7</option>
<option class="" value="8" onclick="addtoodds('8')">8</option>
<option class="" value="9" onclick="addtoodds('9')">9</option>
<option class="" value="10" onclick="addtoodds('10')">10</option>
<option class="" value="11" onclick="addtoodds('11')">11</option>
<option class="" value="12" onclick="addtoodds('12')">12</option>
<option class="" value="13" onclick="addtoodds('13')">13</option>
<option class="" value="14" onclick="addtoodds('14')">14</option>
<option class="" value="15" onclick="addtoodds('15')">15</option>
<option class="" value="16" onclick="addtoodds('16')">16</option>
<option class="" value="17" onclick="addtoodds('17')">17</option>
<option class="" value="18" onclick="addtoodds('18')">18</option>
<option class="" value="19" onclick="addtoodds('19')">19</option>
<option class="" value="20" onclick="addtoodds('20')">20</option>
<option class="" value="21" onclick="addtoodds('21')">21</option>
<option class="" value="22" onclick="addtoodds('22')">22</option>
<option class="" value="23" onclick="addtoodds('23')">23</option>
<option class="" value="24" onclick="addtoodds('24')">24</option>
<option class="" value="25" onclick="addtoodds('25')">25</option>
<option class="" value="50" onclick="addtoodds('50')">50</option>
<option class="" value="100" onclick="addtoodds('100')">100</option>
</select>
</div>
<!--<div class="form-group">
<label class="label" for="country">Random Input</label>
<input type="text" id="randomize" value="AvalaWinner2" class="form-control" placeholder="yes" name="uniqueid">
</div> -->
<div class="form-group">
<label class="label" for="country">Result Day</label>
<input type="text" class="form-control" placeholder="result day" name="resultday">
</div>
<div class="form-group" id="button-div">
<button type="submit" name="setodd" class="btn btn-primary btn-md">Update Odd</button>
</div>
</form>
<h2 style="color:white;">Delete Odd</h2>
<form method="POST" action="deleteodd.php" class="owner-flex-form">
<div class="form-group">
<label class="label" for="country">Housemates</label>
<select name="housemates" class="form-control" required>
<option class="" value="Angel" onclick="addtorandominput('Angel')">Angel</option>
<option class="" value="Arin" onclick="addtorandominput('Arin')">Arin</option>
<option class="" value="Jmk" onclick="addtorandominput('Jmk')">Jmk</option>
<option class="" value="Jackie" onclick="addtorandominput('Jackie')">Jackie</option>
<option class="" value="Liquorose" onclick="addtorandominput('Liquorose')">Liquorose</option>
<option class="" value="Maria" onclick="addtorandominput('Maria')">Maria</option>
<option class="" value="Nini" onclick="addtorandominput('Nini')">Nini</option>
<option class="" value="Peace" onclick="addtorandominput('Peace')">Peace</option>
<option class="" value="Princess" onclick="addtorandominput('Princess')">Princess</option>
<option class="" value="Queen" onclick="addtorandominput('Queen')">Queen</option>
<option class="" value="Saskay" onclick="addtorandominput('Saskay')">Saskay</option>
<option class="" value="Tega" onclick="addtorandominput('Tega')">Tega</option>
<option class="" value="Saga" onclick="addtorandominput('Saga')">Saga</option>
<option class="" value="Boma" onclick="addtorandominput('Boma')">Boma</option>
<option class="" value="Yousef" onclick="addtorandominput('Yousef')">Yousef</option>
<option class="" value="Pere" onclick="addtorandominput('Pere')">Pere</option>
<option class="" value="Whitemoney" onclick="addtorandominput('Whitemoney')">White Money</option>
<option class="" value="Kayvee" onclick="addtorandominput('Kayvee')">Kayvee</option>
<option class="" value="Michael" onclick="addtorandominput('Michael')">Michael</option>
<option class="" value="JayPaul" onclick="addtorandominput('JayPaul')">JayPaul</option>
<option class="" value="Emmanuel" onclick="addtorandominput('Emmanuel')">Emmanuel</option>
<option class="" value="Sammie" onclick="addtorandominput('Sammie')">Sammie</option>
<option class="" value="Cross" onclick="addtorandominput('Cross')">Cross</option>
</select>
</div>
<div class="form-group">
<label class="label" for="category">Category</label>
<select name="category" class="form-control" required>
<option class="" id="champion" onclick="execute('Winner')" value="winner">Winner</option>
<option class="" id="headofhouse" onclick="execute('Weeklyhoh')" value="weeklyhoh">Weekly HOH and Assistant</option>
<option class="" id="winnertask" onclick="execute('Taskwinner')" value="taskwinner">Group Weekly Task Winner</option>
<option class="" id="winnertask" onclick="execute('Arenawinner')" value="arenawinner">Friday Night Arena Games Winner</option>
<option class="" id="nextevicting" onclick="execute('Evictingnext')" value="evictingnext">Evicting Next</option>
<option class="" id="manlast" onclick="execute('Lastman')" value="lastman">Last Man Standing</option>
<option class="" id="womanlast" onclick="execute('Lastwoman')" value="lastwoman">Last Woman Standing</option>
<option class="" id="uprunner" onclick="execute('Runnerup')" value="runnerup">Runner up</option>
<option class="" id="disqualified" onclick="execute('Disqualified')" value="disqualified">Getting disqualified</option>
</select>
</div>
<div class="form-group">
<label class="label" for="country">Odds</label>
<select name="odd" class="form-control" required>
<option class="" value="1.2"  onclick="addtoodds('1.2')">1.2</option>
<option class="" value="1.3"  onclick="addtoodds('1.3')">1.3</option>
<option class="" value="1.4"  onclick="addtoodds('1.4')">1.4</option>
<option class="" value="1.5"  onclick="addtoodds('1.5')">1.5</option>
<option class="" value="1.6"  onclick="addtoodds('1.6')">1.6</option>
<option class="" value="1.7"  onclick="addtoodds('1.7')">1.7</option>
<option class="" value="1.8"  onclick="addtoodds('1.8')">1.8</option>
<option class="" value="1.9"  onclick="addtoodds('1.9')">1.9</option>
<option class="" value="2"  onclick="addtoodds('2')">2</option>
<option class="" value="2.2"  onclick="addtoodds('2.2')">2.2</option>
<option class="" value="2.5"  onclick="addtoodds('2.5')">2.5</option>	
<option class="" value="3"  onclick="addtoodds('3')">3</option>
<option class="" value="4" onclick="addtoodds('4')">4</option>
<option class="" value="5" onclick="addtoodds('5')">5</option>
<option class="" value="6" onclick="addtoodds('6')">6</option>
<option class="" value="7" onclick="addtoodds('7')">7</option>
<option class="" value="8" onclick="addtoodds('8')">8</option>
<option class="" value="9" onclick="addtoodds('9')">9</option>
<option class="" value="10" onclick="addtoodds('10')">10</option>
<option class="" value="11" onclick="addtoodds('11')">11</option>
<option class="" value="12" onclick="addtoodds('12')">12</option>
<option class="" value="13" onclick="addtoodds('13')">13</option>
<option class="" value="14" onclick="addtoodds('14')">14</option>
<option class="" value="15" onclick="addtoodds('15')">15</option>
<option class="" value="16" onclick="addtoodds('16')">16</option>
<option class="" value="17" onclick="addtoodds('17')">17</option>
<option class="" value="18" onclick="addtoodds('18')">18</option>
<option class="" value="19" onclick="addtoodds('19')">19</option>
<option class="" value="20" onclick="addtoodds('20')">20</option>
<option class="" value="21" onclick="addtoodds('21')">21</option>
<option class="" value="22" onclick="addtoodds('22')">22</option>
<option class="" value="23" onclick="addtoodds('23')">23</option>
<option class="" value="24" onclick="addtoodds('24')">24</option>
<option class="" value="25" onclick="addtoodds('25')">25</option>
<option class="" value="50" onclick="addtoodds('50')">50</option>
<option class="" value="100" onclick="addtoodds('100')">100</option>
</select>
</div>
<!--<div class="form-group">
<label class="label" for="country">Random Input</label>
<input type="text" id="randomize" value="AvalaWinner2" class="form-control" placeholder="yes" name="uniqueid">
</div> -->
<div class="form-group" id="button-div">
<button type="submit" name="setodd" class="btn btn-primary btn-md">Delete Odd</button>
</div>
</form>
<ul class="list-inline">
	<li style="cursor:pointer; font-size:18px; color:white; font-weight:bold; font-family:tahoma;" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">All Tickets</li>
	<div class="collapse" id="collapseExample">
	<ul class="list-group">
		<?php
		require 'db.php';
		$fetchallsitetickets="SELECT unique_id,gamerefid,gamedate,gameowner,gameamount,winningamount,oddamount FROM usersgameholder ORDER BY id desc";
		$querytickets=mysqli_query($conn,$fetchallsitetickets);
		if(mysqli_num_rows($querytickets) > 0){
			while($row=mysqli_fetch_assoc($querytickets)){
				echo "<li data-toggle='collapse' data-target='#".$row['gamerefid']."' aria-expanded='false' aria-controls='ticketinfo' style='cursor:pointer;' class='pointer list-group-item'>".$row['gamerefid']."</li>";
				echo "<div class='ticket-references  well-md collapse' id='".$row['gamerefid']."'>
                  <li class='list-group-item' style='background-color:blue; color:white;'><span class='badge badge-default'>Account Owner:</span>".$row['gameowner']."</li>
                  <li class='list-group-item' style='background-color:green; color:white;'><span class='badge badge-default'>Game Date:</span>".$row['gamedate']."</li>
                  <li class='list-group-item' style='background-color:red; color:white;'><span class='badge badge-default'>Game Amount:</span>".$row['gameamount']."</li>
                  <li class='list-group-item' style='background-color:brown; color:white;'><span class='badge badge-default'>Winning Amount:</span>".$row['winningamount']."</li>
                  <li class='list-group-item' style='background-color:brown; color:white;'><span class='badge badge-default'>Unique Id:</span>".$row['unique_id']."</li>
                  <li class='list-group-item' style='background-color:lightgreen; color:white;'><span class='badge badge-default'>Odd Selected:</span>".$row['oddamount']."</li>";
                  echo "<h4 style='color:white; font-weight:bold;'>Event / Events</h4>";
                    $fetchnewdb=array($row['unique_id']);
        foreach($fetchnewdb as $gamedetails) { 
      $sql2="SELECT * FROM oddslist WHERE unique_id='$gamedetails'";
        $result2=mysqli_query($conn,$sql2);
        while($row2=mysqli_fetch_assoc($result2)){
          //echo "<script>alert('".$row2['unique_id']."');</script>";
          echo"<li class='list-group-item' style='background-color:forestgreen; font-weight:bold; color:white;'>".$row2['category']."</span>\n<span>".$row2['housemate']."</span><span class='badge badge-primary pull-right'>".$row2['odd_given']." odd</span></li>";
        } 
        } 
        $key=$row['gamerefid'];
                 echo "<li class='list-group-item'>Set Status: <button class='btn btn-md btn-danger' onclick=loss('$key')>Loss</button> <button onclick=won('$key') class='btn btn-md btn-success'>Won</button></li>";
				echo"</div>";
			}
			mysqli_close($conn);
		}
		?>
	</ul>
</div>
	<li style="cursor:pointer; font-size:18px; color:white; font-weight:bold; font-family:tahoma;" data-toggle="collapse" data-target="#paymentdiv" aria-expanded="false" aria-controls="paymentdiv">Payment Request</li>
	<div class="collapse" id="paymentdiv">
	<ul class="list-group">
		<?php
		require 'db.php';
		$fetchallsitetickets="SELECT unique_id,gamerefid,gamedate,gameowner,gameamount,winningamount,oddamount,payment_request,payment_status,gamerefid,gameowner FROM usersgameholder WHERE payment_request ='yes' AND payment_status IS NULL";
		$querytickets=mysqli_query($conn,$fetchallsitetickets);
		if(mysqli_num_rows($querytickets) > 0){
			while($row=mysqli_fetch_assoc($querytickets)){
				echo "<li data-toggle='collapse' data-target='#".$row['gamerefid']."yes' aria-expanded='false' aria-controls='ticketinfo' style='cursor:pointer;' class='pointer list-group-item'>".$row['gamerefid']."</li>";
				echo "<div class='ticket-references  well-md collapse' id='".$row['gamerefid']."yes'>
                  <li class='list-group-item' style='background-color:blue; color:white;'><span class='badge badge-default'>Account Owner:</span>".$row['gameowner']."</li>
                  <li class='list-group-item' style='background-color:green; color:white;'><span class='badge badge-default'>Game Date:</span>".$row['gamedate']."</li>
                  <li class='list-group-item' style='background-color:red; color:white;'><span class='badge badge-default'>Game Amount:</span>".$row['gameamount']."</li>
                  <li class='list-group-item' style='background-color:brown; color:white;'><span class='badge badge-default'>Winning Amount:</span>".$row['winningamount']."</li>
                  <li class='list-group-item' style='background-color:lightgreen; color:white;'><span class='badge badge-default'>Odd Selected:</span>".$row['oddamount']."</li>";
                  echo "<h4 style='color:white; font-weight:bold;'>Event / Events</h4>";
                    $fetchnewdb=array($row['unique_id']);
        foreach($fetchnewdb as $gamedetails) { 
      $sql2="SELECT * FROM oddslist WHERE unique_id='$gamedetails'";
        $result2=mysqli_query($conn,$sql2);
        while($row2=mysqli_fetch_assoc($result2)){
          //echo "<script>alert('".$row2['unique_id']."');</script>";
          echo"<li class='list-group-item' style='background-color:forestgreen; font-weight:bold; color:white;'>".$row2['category']."</span>\n<span>".$row2['housemate']."</span><span class='badge badge-primary pull-right'>".$row2['odd_given']." odd</span></li>";
        } 
        } 
        $key=$row['gamerefid'];
                 echo "<li class='list-group-item'>Set Payment Status: <button onclick=paymentstatus('$key') class='btn btn-md btn-success'>Pay</button></li>";
				echo"</div>";
			}
			mysqli_close($conn);
		}else{
			echo "<h1 style='color:white;'>There are no payment request yet.</h1>";
		}
		?>
	</ul>
</div>
<li style="cursor:pointer; font-size:18px; color:white; font-weight:bold; font-family:tahoma;" data-toggle="collapse" data-target="#payouts" aria-expanded="false" aria-controls="payouts">Payouts</li>
	<div class="collapse" id="payouts">
		<h3 style="color:white;">Disburse account</h3>
		<form class="form-inline" method="POST" action="disburse.php">
			<label style='color:white;'>Account Owner</label>
			<input type="text" placeholder="accountowner" name="accountowner" class="form-control">
			<label style='color:white;'>Amount</label>
			<input type="text" placeholder="amount" name="amount" class="form-control">
			<button type="submit" class="btn btn-md btn-primary" name="disburse">Disburse</button>
		</form>
	<ul class="list-group">
		<?php
		require 'db.php';
		$fetchallsitetickets="SELECT gamerefid,gameowner,payment_status FROM usersgameholder WHERE payment_status='paid'";
		$querytickets=mysqli_query($conn,$fetchallsitetickets);
		if(mysqli_num_rows($querytickets) > 0){
			echo "<h2 style='color:white;'>Already Paid Tickets</h2>";
			while($row=mysqli_fetch_assoc($querytickets)){
				echo "<li style=' font-weight:bold;' data-toggle='collapse' data-target='#".$row['gamerefid']."yes' aria-expanded='false' aria-controls='ticketinfo' style='cursor:pointer;' class='pointer list-group-item text-success'><p>Ticket id:".$row['gamerefid']."</p> <p>Played by:".$row['gameowner']."</p> <p>already paid out</p></li>";
			
			}
			mysqli_close($conn);
		}else{
			echo "<h1 style='color:white;'>There are no payments made yet</h1>";
		}
		?>
	</ul>
</div>
<li style="cursor:pointer; font-size:18px; color:white; font-weight:bold; font-family:tahoma;" data-toggle="collapse" data-target="#resultform" aria-expanded="false" aria-controls="resultform">Announce Results</li>
<div class="well well-md collapse" id="resultform">
	<form class="form-inline resultannounce" method="POST" action="announceresult.php">
		<div class="form-group">
			<input type="text" name="result_day" placeholder="Week in active" class="form-control form-md">
		</div>
		<div class="form-group">
			<input type="text" name="result_category" placeholder="Category" class="form-control form-md">
		</div>
		<div class="form-group">
			<input type="text" name="housemate" placeholder="Housemate" class="form-control form-md">
		</div>
		<button type="submit" name="submitform" class="btn btn-md btn-primary">Announce</button>
	</form>
</div>
<li><form class="form-inline find navbar-form" method="POST" action="showticketinfo.php">
	<input type="text" class="form-control" name="ticketid" placeholder="search games"> 
	<button type="submit" name="search" class="btn btn-success">Find</button>
</form></li>
</ul>
</div>
<div>
	<div class="ticketpaper">
   <span onclick="$('.ticketpaper').css('display','none');" class="pull-right badge badge-info" style="color:red; font-weight:bold; font-size:25px; cursor:pointer; margin-top:50px;">&times;</span>
    <div class="infohandler">
        
    </div>
</div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
	function loss(refid){
    $.ajax({
      url:'updateuserstatus.php',
      data:{lossticket:refid},
      type:'post',
      success:function(response){
        $("body").append(response);
      }
	});
	}
	function won(refid){
    $.ajax({
      url:'updateuserstatus.php',
      data:{winticket:refid},
      type:'post',
      success:function(response){
        $("body").append(response);
      }
	});
	}
	function paymentstatus(refid){
 $.ajax({
      url:'updatepay.php',
      data:{tickettobepaid:refid},
      type:'post',
      success:function(response){
        $("body").append(response);
      }
	});
	}
	$('form.resultannounce').on('submit' ,function(e){
var that= $(this),
url= that.attr('action'),
type=that.attr('method'),
data={};
that.find('[name]').each(function(index, value){
  var that = $(this),
    name=that.attr('name'),
    value=that.val();
    data[name]=value;

});
e.stopImmediatePropagation();
$.ajax({
  url:url,
  beforeSend: function (){
        $("#popimage").show();
      },
      complete: function(){
        $("#popimage").hide();
      },
  type:type,
  data:data,
  success:function(response){
    $("body").append(response);
  
  }
});

return false;
});

</script>
</body>
</html>
<?php
if(isset($_GET['res'])){
	$res=$_GET['res'];
	echo "<script>alert('$res');</script>";
}
?>
