<?php
require_once("connect.php");

$userInputEmail = $_REQUEST["userInputEmail"];
$usrInpPwd = $_REQUEST["userINputpassword"];

$select = "SELECT * FROM stdn_signup WHERE usr_email='$userInputEmail' AND usr_pwd='$usrInpPwd' ";
$run = mysqli_query($conn,$select);

$chakeLogIn = mysqli_num_rows($run);

if($chakeLogIn===1){
	header("location:Home.php");
		setcookie("usr_email",$userInputEmail,time()+(86400*7));
}else{
	header("location:index.php?Notmatch=true");
}