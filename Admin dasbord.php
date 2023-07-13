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
	<title>Admin Panel</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="asset/image/fabicon.png" type="image/png">
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

		<!-- header section start -->

		<div class="topTitle">
			<h2>Wellcome <?php
				echo $_COOKIE['adminName'];
			?></h2><hr>
			<button class="btn"><a href="logOut_core.php">Log out</a></button>
		</div>
		<!-- header section end -->

		<!-- table section start -->
		<h1 class="pgTitle">STUDENT INFO</h1>
		<table class="content-table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Roll</th>
					<th>Reginstration</th>
					<th>Email</th>
					<th>password</th>
				</tr>
				
			</thead>

			<tbody>
				<?php
				require_once("connect.php");

				$selectQuery = "SELECT * FROM stdn_signup";
				$runQuery = mysqli_query($conn,$selectQuery);

				if($runQuery==true){
					while($myData = mysqli_fetch_array($runQuery)){?>

						<tr>
							<td><?php echo $myData["id"]; ?></td>
							<td><?php echo $myData["usr_name"]; ?></td>
							<td><?php echo $myData["usrRoll"]; ?></td>
							<td><?php echo $myData["usrReg"]; ?></td>
							<td><?php echo $myData["usr_email"]; ?></td>
							<td><?php echo md5($myData["usr_pwd"]); ?></td>
						</tr>
				<?php	}
				}
				?>
			</tbody>
		</table>		

		<!-- table section end -->


		<!-- footer section start -->
	<div class="AdminftrContiner">
		<h2>O.E.M.S</h2>
		<p>This website has created for online exam resources. <br>The project has completed with the tireless work of TEAM BITS.</p>
		<p>&copyCopyright TEAM BITS</p>
	</div>
		<!-- footer section end -->

		
</body>
</html>