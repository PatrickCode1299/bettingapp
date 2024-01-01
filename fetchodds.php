<?php
if(!isset($_COOKIE['bettingsiteuser'])){
	echo "<script>window.location.href='index.php';</script>";
}
?>
<?php
include_once 'db.php';
$category=$_POST['category'];

$sql="SELECT * FROM oddslist WHERE category='$category'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	echo "<div>";
	echo "<h3 class='server-heading' style='color:white;'>".$category."</h3>";
	echo "<ul class='list-inline titlelist list-unstyled'>
        <li>Result Day</li>
        <li>Housemate</li>
        <li>Avatar</li>
        <li>Odds</li>
	</ul>";
	echo "<div>";
	try {
		while ($row=mysqli_fetch_assoc($result)) {
		$backenddata=array('gameinfo' => $row['category'] , 'gameid' =>$row['housemate'], 'gameodd'=>$row['odd_given'],'gameresday'=> $row['result_day']);
			 echo "<div class='gamelist list-unstyled list-inline'>";
		$odd=$row['odd_given'];
		$housemate="".$row['housemate']."'";
		$housematename=$row['housemate'];
  
	
	echo"<li class='list-item'>".$row['result_day']."</li>
	<li class='list-item'>".$row['housemate']."</li>";
	switch ($housematename) {
		case 'Angel':
			echo "<li class='list-item'><img src='css/angel.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
		case 'Arin':
			echo "<li class='list-item'><img src='css/arin.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Beatrice':
			echo "<li class='list-item'><img src='css/beatrice.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Jmk':
			echo "<li class='list-item'><img src='css/jmk.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Jackie':
			echo "<li class='list-item'><img src='css/jackie.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Liquorose':
			echo "<li class='list-item'><img src='css/liquorose.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Maria':
			echo "<li class='list-item'><img src='css/maria.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Nini':
			echo "<li class='list-item'><img src='css/nini.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Peace':
			echo "<li class='list-item'><img src='css/peace.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Queen':
			echo "<li class='list-item'><img src='css/queen.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Princess':
			echo "<li class='list-item'><img src='css/princess.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Saskay':
			echo "<li class='list-item'><img src='css/saskay.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Tega':
			echo "<li class='list-item'><img src='css/tega.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Saga':
			echo "<li class='list-item'><img src='css/saga.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Boma':
			echo "<li class='list-item'><img src='css/boma.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Yousef':
			echo "<li class='list-item'><img src='css/yousef.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Michael':
			echo "<li class='list-item'><img src='css/michael.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Kayvee':
			echo "<li class='list-item'><img src='css/kayvee.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Pere':
			echo "<li class='list-item'><img src='css/pere.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Whitemoney':
			echo "<li class='list-item'><img src='css/whitemoney.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Niyi':
			echo "<li class='list-item'><img src='css/niyi.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Yerins':
			echo "<li class='list-item'><img src='css/yerins.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'JayPaul':
			echo "<li class='list-item'><img src='css/jaypaul.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Emmanuel':
			echo "<li class='list-item'><img src='css/emmanuel.png' style='width:50px; height:50px; border-radius:50%;'></li>";
			break;
			case 'Sammie':
			echo "<li class='list-item'><img src='css/sammie.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
			case 'Cross':
			echo "<li class='list-item'><img src='css/cross.png' style='width:50px; height:50px; border-radius:50%;' loading='lazy'></li>";
			break;
		default:
			echo "<li class='list-item'>Avatar</li>";
			break;
	}
	echo"<li class='list-item'><button  id='$housematename' value='$housematename' ondbclick='remove($odd)' class='btn ".$row['category']." btn-primary btn-sm'  name='".$row['category']."' onclick=hey($odd,'$housemate) style='background-color:indigo; width:50px;'  type='submit'>".$row['odd_given']."</button>
	</div>";
	}
	} catch (Exception $e) {
		$e='Something went wrong we shall fix it soon thanks';
	}
	
}else{
	echo "<h1 class='text-center' style='color:white;'>Game Unvailable</h1>";
}
