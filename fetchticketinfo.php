<?php
require 'db.php';
$gamerefid=$_POST['gamereference'];
$fetchinfo="SELECT DISTINCT unique_id, gameowner,gamerefid,gamedate,gameamount,winningamount,oddamount FROM usersgameholder WHERE gamerefid='$gamerefid' AND gameamount !=''";
$query=mysqli_query($conn,$fetchinfo);
while ($row=mysqli_fetch_assoc($query)) {
		
	echo "<li><b>Game owner</b>:  ".$row['gameowner']."</li>";
	echo "<li><b>Ticket id</b>:  ".$row['gamerefid']."</li>";
	echo "<li><b>Date Played</b>:  ".$row['gamedate']."</li>";
	echo "<li><b>Game Amount</b>: ".$row['gameamount']."</li>";
  echo "<li><b>Winning Amount</b>: ".$row['winningamount']."</li>";
	echo "<li><b>Odd Amount</b>: ".$row['oddamount']."</li>";
	echo "<li><b>Unique_id</b>: ".$row['unique_id']."</li>";
	echo "<h3>Event</h3>";
	echo "<div style='border:2px solid green; padding:4px 4px;'>";

	 echo"<li style='list-style:none;'>".$row['unique_id']."</li>";
     echo "</div>";
	echo "<p style='font-weight:bold; font-style:italic;'>Always take screenshots or print this pop up window in case of winnings</p>";

}
mysqli_close($conn);
?>