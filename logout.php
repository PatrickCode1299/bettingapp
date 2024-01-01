<?php
session_start();
session_destroy();
session_unset();
if(isset($_COOKIE['bettingsiteuser']) || isset($_COOKIE['bettingsiteemail']) || isset($_COOKIE['bettingsiteadmin'])){
unset($_COOKIE['user']);
unset($_COOKIE['email']);
unset($_COOKIE['admin']);
setcookie('bettingsiteuser',null,-1,'/');
setcookie('bettingsiteadmin',null,-1,'/');
setcookie('bettingsiteemail',null,-1,'/');
header('Location:index.php');
}
?>