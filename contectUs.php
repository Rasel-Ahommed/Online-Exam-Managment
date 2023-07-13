<?php
if(!$_COOKIE['usr_email']){
	header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contect us</title>
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
				<li><a href="Home.php">Home</a></li>
				<li><a href="Question.php">Exam</a></li>
				<li><a href="contectUs.php">Contact us</a></li>
			</ul>
			<button class="logOut"><a href="logOut_home.php">Log out</a></button>
		</nav>

		<!-- nav section end -->

		<div class="cont_Min_Bd">
			<div class="cont_area">
				<div class="contLeft">
					<div class="inputBox">
					<h5>Send massage</h5>
					<form action="massage_core.php" method="post">
						<input name="fname" type="text" placeholder="Full Name" required>
						<input name="email" type="text" placeholder="Email" required >
						<textarea name="massage"  cols="10" rows="5" placeholder="Send Massage" required></textarea>

						<?php
							if(isset($_REQUEST["action"])){
								if($_REQUEST["action"]){
									echo "<p style='text-align: center;margin:0;color: green;font-weight: bold;font-size: 15px;}'>Massage send</p>" ;
								}else{
									echo "<p style='text-align: center;margin:0;color: red;font-weight: bold;font-size: 15px;}'>Massage not send!</p>" ;
								}
							}

						?>

						<input type="submit" value="Submit"><br>
					</form>
				</div>
				</div>
				<div class="contRight">
					<h1> Contact Us </h1>
					<p>If you face any problem please <br> contact us and say your problems</p>
				</div>
			</div>
		</div>






		<!-- footer section start -->
	<div class="AdminftrContiner" style = "margin-top:0">
		<h2>O.E.M.S</h2>
		<p>This website has created for online exam resources. <br>The project has completed with the tireless work of TEAM BITS.</p>
		<p>&copyCopyright TEAM BITS</p>
	</div>
		<!-- footer section end -->

</body>
</html>