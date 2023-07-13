<?php
if(!$_COOKIE['adminName']){
	header("location:Admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Admin</title>
	<link rel="icon" href="asset/image/fabicon.png" type="image/png">
	<link rel="stylesheet" href="style.css">
</head>
<body>
			<!-- nav section start -->
		<nav class="manu_bar">
		<!-- logo start -->
			<img src="asset/image/logo.png" alt="logo" class="logo">
			<span class="logo_tag">O.E.M.S</span>
		<!-- logo end -->
			<ul>
				<li><a href="Admin dasbord.php">Dashboard</a></li>
				<li><a href="Add exam.php">Add exam</a></li>
				<li><a href="adminMassage.php">Massage</a></li>
				<li><a href="Add_admin.php">Add Admin</a></li>
			</ul>
		</nav>

			<!-- nav section end -->



<div class="cont_Min_Bd">
			<div class="cont_area">
				<div class="contLeft">
					<div class="inputBox" style="margin-top: 110px;">
					<h5>ADMIN INFO</h5>
					<form action="Add_admin_core.php" method="post">
						<input name="fname" type="text" placeholder="Admin Name" required>
						<input name="password" type="text" placeholder="Admin password" required >
						<input type="submit" value="Submit"><br>
					</form>


					<?php

						if(isset($_REQUEST["exist"])){
							if($_REQUEST["exist"]){
								echo "<h4 style='color:red;text-align:center;'>Admin name is already exist!</h4>"; 
							}
						}

						if(isset($_REQUEST["action"])){
							if($_REQUEST["action"]){
								echo "<h4 style='color:green;text-align:center;'>Add successfull</h4>";
							}else{
								echo "<h4 style='color:red;text-align:center;'>Add faild!</h4>";
							}
						}
					?>

				</div>
				</div>
				<div class="contRight">
					<h1>Add a Admin</h1>
					<p>If you want to add a new admin,<br>you can do so from here</p>
				</div>
			</div>
		</div>









			<!-- footer section start -->
   <div class="AdminftrContiner" style="margin-top:0">
      <h2>O.E.M.S</h2>
      <p>This website has created for online exam resources. <br>The project has completed with the tireless work of TEAM BITS.</p>
      <p>&copyCopyright TEAM BITS</p>
   </div>
      <!-- footer section end -->