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
	<title>Online exam management system</title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="asset/image/fabicon.png" type="image/png">

</head>
<body>
<div class="Maincontiner">

	<section class="sec-1">
			<!-- nav section start -->
		<nav class="manu_bar">
		<!-- logo start -->
			<img src="asset/image/logo.png" alt="logo" class="logo">
			<span class="logo_tag">O.E.M.S</span>
		<!-- logo end -->
			<ul>
				<li><a href="Home.php">Home</a></li>
				<li><a href="Question.php">Exam</a></li>
				<li><a href="contectUs.php">Contect us</a></li>
			</ul>
			<button class="logOut"><a href="logOut_home.php">Log out</a></button>
		</nav>

			<!-- nav section end -->


		<!-- content section start -->

		<div class="continer">
			<h1>Online Exam <span id="dgin">Management System</span></h1>
			<p class="detl"><span id="dgin">Project completed</span> by TEAM BITS</p>
		</div>

		<div class="warpper">
			<div class="static-txt">Made by :</div>
				<ul class="dinamic-txt">
					<li><span>Rasel Ahommed &nbsp</span></li>
					<li><span>Mamun Sarker</span></li>
					<li><span>Sazid Amit </span></li>
					<li><span>Rahul Biswas</span></li>
					<li><span>Raisul Islam</span></li>
				</ul>
		</div>
	</section>
</div>
	<!-- content section end -->

	<!-- exam details section start -->

	<section class="sec-2">
		<h1>All Departments</h1>
		<div class="dtlsContiner">
			<div class="exmDtls">
				<img src="asset/image/img.jpeg" alt="img"> 
				<h2>Electrical <br> Technology</h2>
			</div>
			<div class="exmDtls">
				<img src="asset/image/img.jpeg" alt="img"> 
				<h2>Computer <br> Technology</h2> 
			</div>
			<div class="exmDtls">
				<img src="asset/image/img.jpeg" alt="img"> 
				<h2>RAC <br> Technology</h2> 
			</div>
			<div class="exmDtls" id="position">
				<img src="asset/image/img.jpeg" alt="img">
				<h2>Electronics <br> Technology</h2>
			</div>
			<div class="exmDtls" id="position_2">
				<img src="asset/image/img.jpeg" alt="img">
				<h2>Food <br> Technology</h2>
			</div>
			
		</div>
	</section>
	<!-- exam details section end -->

		<!-- footer section start -->
	<div class="ftrContiner">
		<h2>O.E.M.S</h2>
		<p>This website has created for online exam resources. <br>The project has completed with the tireless work of TEAM BITS.</p>
		<p>&copyCopyright TEAM BITS</p>
	</div>
		<!-- footer section end -->
</body>
</html>