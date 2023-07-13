<?php
if(isset($_COOKIE["usr_email"])){
	header("location:Home.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="asset/image/fabicon.png" type="image/png">

<style>
	body{
	margin:0;
	color:#6a6f8c;
	background:#c8c8c8;
	font:600 16px/18px 'Open Sans',sans-serif;
    background:url(asset/image/logo.png)  center;
    background-size: cover;
}
a{color:red;text-decoration:none}
</style>

</head>


<body>

			<!-- login section start -->
 <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<form action="chikLogin.php" method="POST">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input name="userInputEmail" id="user" type="email" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input name="userINputpassword" id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input name ="check" id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="Loginbutton" value="Sign In">
				</div>
				<div class="hr"></div>
			
				<?php
					if(isset($_REQUEST["sign"])){
						if($_REQUEST["sign"]){
							echo "<h5 style='color:#09f2ff;'class='pwdNtMch'>Sign up succesfull please log in now</h5>";
						}
					}

					if(isset($_REQUEST["action"])){
						if($_REQUEST["action"]==true){
							echo "<h5 class='pwdNtMch'>Password not match!</h5>";
						}
					}
					if(isset($_REQUEST["input"])){
						if($_REQUEST["input"]==true){
							echo "<h5 class='pwdNtMch'>Please fill up all sections!</h5>";
						}
					}
					if(isset($_REQUEST["exist"])){
						if($_REQUEST["exist"]==true){
							echo "<h5 class='pwdNtMch'>This email is already exist!</h5>";
						}
					}
					if(isset($_REQUEST["Notmatch"])){
						if($_REQUEST["Notmatch"]==true){
							echo "<h5 class='pwdNtMch'>Invalid Email or Password!</h5>";
						}
					}

					
				?>
			</div>
		</form>
			<!-- login section end -->

			<!-- signUp section start -->
		<form action="action.php" method="POST">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input name="username" id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="roll" class="label">Roll</label>
					<input name="roll" id="roll" type="text" class="input">
				</div>
				<div class="group">
					<label for="regs" class="label">Registration</label>
					<input name="regs" id="regs" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input name="usrEmail" id="pass" type="email" class="input" data-type="email">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input name="password" id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input name="rpt_password" id="pass" type="password" class="input">
				</div>
				<div class="group">
					<input type="submit" class="Loginbutton" value="Sign Up">
				</div>
				<div class="hr"></div>

				<?php 
					if(isset($_REQUEST["action"])){
						if($_REQUEST["action"]==true){
							echo "<h5 class='pwdNtMch'>Password not match!</h5>";
						}
					}
					if(isset($_REQUEST["input"])){
						if($_REQUEST["input"]==true){
							echo "<h5 class='pwdNtMch'>Please fill up all sections!</h5>";
						}
					}
					if(isset($_REQUEST["exist"])){
						if($_REQUEST["exist"]){
							echo "<h5 class='pwdNtMch'>This email is already exist!</h5>";
						}
					}


				?>
				
			</div>
		</div>
	</div>
 </div>
 							<!-- signUp section end -->
 </form>
</body>
</html>
