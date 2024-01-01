<?php
include_once 'header.php';
?>
<div class="container-fluid " style="background-color:white; ">
	<?php
       require 'db.php';
       $fetchresult="SELECT DISTINCT result_day, result_category, result_info FROM results";
       $checkresult=mysqli_query($conn,$fetchresult);
       if(mysqli_num_rows($checkresult) > 0){
              echo "<h2 style='margin-top:60px;'>Results</h2>";
             while($getresult=mysqli_fetch_assoc($checkresult)){
              $fetchimage=$getresult['result_info'];
              echo "<ul class='list-inline flex-result list list-unstyled '>";
              echo "<li>".$getresult['result_day']."</li>";
              echo "<li>".$getresult['result_category']."</li>";
              switch($fetchimage){
                            case 'Angel':
                     echo "<li class=''><img src='css/angel.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
              case 'Arin':
                     echo "<li class=''><img src='css/arin.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Beatrice':
                     echo "<li class=''><img src='css/beatrice.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Jackie':
                     echo "<li class=''><img src='css/jackie.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Liquorose':
                     echo "<li class=''><img src='css/liquorose.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Maria':
                     echo "<li class=''><img src='css/maria.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Nini':
                     echo "<li class=''><img src='css/nini.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Peace':
                     echo "<li class=''><img src='css/peace.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Princess':
                     echo "<li class=''><img src='css/princess.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Saskay':
                     echo "<li class=''><img src='css/saskay.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Tega':
                     echo "<li class=''><img src='css/tega.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Saga':
                     echo "<li class=''><img src='css/saga.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Boma':
                     echo "<li class=''><img src='css/boma.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Yousef':
                     echo "<li class=''><img src='css/yousef.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Pere':
                     echo "<li class=''><img src='css/pere.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Whitemoney':
                     echo "<li class=''><img src='css/whitemoney.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Niyi':
                     echo "<li class=''><img src='css/niyi.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Yerins':
                     echo "<li class=''><img src='css/yerins.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'JayPaul':
                     echo "<li class=''><img src='css/jaypaul.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Emmanuel':
                     echo "<li class=''><img src='css/emmanuel.png' style='width:80px; height:80px; border-radius:50%;'></li>";
                     break;
                     case 'Sammie':
                     echo "<li class=''><img src='css/sammie.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
                     case 'Cross':
                     echo "<li class=''><img src='css/cross.png' style='width:80px; height:80px; border-radius:50%;' loading='lazy'></li>";
                     break;
              default:
                     echo "<li class=''>Avatar</li>";
                     break;
                     }
                     echo "<li>".$getresult['result_info']."</li>";
                     echo "</ul>";
             }
       }else{
              echo "<h2>There are no results available</h2>";
       }
       mysqli_close($conn);
       ?>
</ul>
</div>