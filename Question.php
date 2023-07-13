<?php
if(!$_COOKIE['usr_email']){
	header("location:index.php");
}

session_start();
require_once("connect.php");

$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($conn,$query));
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Questions</title>
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
				<li><a href="http://localhost/O.E.M.S/">Home</a></li>
				<li><a href="Question.php">Exam</a></li>
				<li><a href="contectUs.php">Contact us</a></li>
			</ul>
			<button class="logOut"><a href="logOut_home.php">Log out</a></button>
		</nav>

		<!-- nav section end -->

		<div class="questions">
			<h3>Total questions is <?php echo $total_questions; ?></h3>
			<span class="time"><b>You have: </b> <?php echo $total_questions; ?>:00 minutes </span>

			<form action="Result.php" method = "POST">
				<?php
				for($i=1;$i<100;++$i){
				$q = "SELECT * FROM questions WHERE question_numbers = $i ";
				$query = mysqli_query($conn,$q);

				while ($rows = mysqli_fetch_assoc($query)) {?>

					<h4> <?php echo $rows['question_numbers'].". ".$rows['questions_text']; ?> </h4>

					<?php   
					$q = "SELECT * FROM options WHERE question_number = $i";
					$query = mysqli_query($conn,$q);

					while ($rows = mysqli_fetch_assoc($query)) { ?>

						<input type="radio" name="<?php echo $i.'choice'; ?>" value="<?php echo $rows['id']; ?>" required>
						<?php echo $rows["coptions"]."<br>";?>

				<?php
					} $a =$i;

				}}
				?>
				<input type="number" name="que" value="<?php echo $a; ?>" hidden>
				
				<input type="submit" value="Submit" name="submit">
			</form>	
		</div>

		

</body>
</html>