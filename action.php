<?php
require_once("connect.php");

$usrname = $_REQUEST["username"];
$usrRoll = $_REQUEST["roll"];
$usrReg = $_REQUEST["regs"];
$usrEmail = $_REQUEST["usrEmail"];
$password = $_REQUEST["password"];
$rpt_password = $_REQUEST["rpt_password"];

if(!empty($usrname) && !empty($usrRoll) && !empty($usrReg) && !empty($usrEmail) && !empty($password) && !empty($rpt_password)){

$selectData = "SELECT id FROM stdn_signup WHERE usr_email ='$usrEmail'  ";

$runQuery = mysqli_query($conn,$selectData);
$chake = mysqli_num_rows($runQuery);

if($chake===1){
	header("location:index.php?exist=true");
}else{

if($password!==$rpt_password){
	header("location:index.php?action=passNotMtc");
}else{

 $insertQuery = "INSERT INTO stdn_signup(usr_name,usrRoll,usrReg,usr_email,usr_pwd) VALUES('$usrname','$usrRoll','$usrReg','$usrEmail','$password') ";
 $runQuery = mysqli_query($conn,$insertQuery);

if($runQuery==true){
	header("location:index.php?sign=secces");
}else{}
}
}
}else{
	header("location:index.php?input=empty");
}

