<?php

require_once("connect.php");

$adminName = $_REQUEST['fname'];
$adminPassword = $_REQUEST['password'];

$selectQuery = "SELECT * FROM admin_info WHERE usr_name='$adminName'";
$runQuery = mysqli_query($conn,$selectQuery);
$row = mysqli_num_rows($runQuery);
echo $row;
if($row===1){
	header("location:Add_admin.php?exist=true");
}else{
	$insartQuery = "INSERT INTO admin_info(usr_name,usr_pwd) VALUES ('$adminName','$adminPassword') ";

	$runQuery = mysqli_query($conn, $insartQuery );

	if($runQuery == true){
		header("location:Add_admin.php?action=true");
	}else{
		header("location:Add_admin.php?");
}	
}



?>