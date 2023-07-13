<?php
require_once("connect.php");


	$usrInpName = $_REQUEST["usrName"];
	$usrInpPwd = $_REQUEST["usrPwd"];

	if(!empty($usrInpName) && !empty($usrInpPwd)){

		$selectData = "SELECT id FROM admin_info WHERE usr_name ='$usrInpName' AND usr_Pwd= '$usrInpPwd' ";
	 	$runQuery = mysqli_query($conn,$selectData);

	 	$mysqli_num_rows = mysqli_num_rows($runQuery);

	 	if($mysqli_num_rows===1){
	 		header("location:Admin dasbord.php");
	 		setcookie("adminName",$usrInpName,time()+(86400*7));
		}else{
			header("location:Admin.php?action=invalid");
		}
	}else{
		header("location:Admin.php?input=empty");
	}			


