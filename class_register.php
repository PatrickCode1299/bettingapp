<?php
date_default_timezone_set('Africa/Lagos');
class register{
	private $username;
	private $email;
	private $password;
   function __construct($username,$email,$password){
   $this->username=$username;
   $this->email=$email;
   $this->password=$password;

   }
   function getinfo(){
   	require 'db.php';
   $username=trim(htmlspecialchars(stripcslashes(lcfirst($this->username))));
   $email=trim(htmlspecialchars(stripcslashes($this->email)));
   $password=trim(htmlspecialchars(stripcslashes($this->password)));
   $day=date('Y-m-d H:i:s');
  $sql="INSERT INTO registration(username,email,pass,join_day) VALUES(?,?,?,?)";
   $stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
	echo "Sorry Something Went Wrong";
}else{
	mysqli_stmt_bind_param($stmt,"ssss",$username,$email,$password,$day);
	mysqli_stmt_execute($stmt);
   mysqli_close($conn);

}
   }
}


?>
