<?php
if(isset($_COOKIE['adminName']))
	header("location:Admin dasbord.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="asset/image/fabicon.png" type="image/png">
</head>
<body>
	<div class="fromBodyBckg">
		<!-- log in form start -->
		<div class="formContiner">
			<form action="Admin_Login_core.php" method="POST">
				<h1>Admin Panel</h1>
				<input type="text" name="usrName" placeholder="Enter User Name" class="AdminInput"><br><br>
				<input type="password" name="usrPwd" placeholder="Enter Password" class="AdminInput"><br><br>
				<input type="submit" value="Log In">

				<?php
				if(isset($_REQUEST["action"])){
					if($_REQUEST["action"]==true){
						echo "<h5 style='color:red ;margin:5px 10px 10px 70px;'> invalid user or password!</h5>";
					}
				}

				if(isset($_REQUEST["input"])){
					if($_REQUEST["input"]==true){
						echo "<h5 style='color:red ;margin:5px 10px 10px 70px;'> Please fill up all section!</h5>";
					}
				}

				?>
			</form>
		</div>		
	</div>

</body>
</html>

