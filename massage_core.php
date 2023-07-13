<?php

require_once("connect.php");

$name = $_REQUEST["fname"];
$email = $_REQUEST["email"];
$massage = $_REQUEST["massage"];


$insartQuery = "INSERT INTO usr_massage(fullname,email,massage) VALUES ('$name','$email','$massage')";

$runQuery = mysqli_query($conn,$insartQuery);
if($runQuery==true){
	header("location:contectUs.php?action=massageSend");
}else{
	header("location:contectUs.php?");
}


?>