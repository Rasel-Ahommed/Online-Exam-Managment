<?php
if(!$_COOKIE['adminName']){
	header("location:Admin.php");
}

require_once("connect.php");

if(isset($_REQUEST['submit'])){
	$question_numbers = $_REQUEST["queNo"];
	$question_text = $_REQUEST["entQue"];
	$correct_choice = $_REQUEST["Right_Option"];

$choice = array();
$choice[1] = $_REQUEST["Option_1"];
$choice[2] = $_REQUEST["Option_2"];
$choice[3] = $_REQUEST["Option_3"];
$choice[4] = $_REQUEST["Option_4"];


$query = "INSERT INTO questions(question_numbers,questions_text) VALUES ('$question_numbers','$question_text')";

$result = mysqli_query($conn,$query );

if($result){
	foreach ($choice as $option => $value) {
		if($value != ""){
			if($correct_choice == $option){
				$is_correct = 1;
			}else{
				$is_correct = 0;
			}

			$query = "INSERT INTO options(question_number,is_correct,coptions) VALUES ('$question_numbers','$is_correct','$value')";

			$insert_row = mysqli_query($conn,$query);

			if($insert_row==true){
				continue;
			}else{
				echo "Question add faild!";
			}

		}
	}
} 

$massege = "Question has been added successfully";
}

$query = "SELECT * FROM questions";
$question = mysqli_query ($conn,$query);
$total = mysqli_num_rows($question);
$next = $total+1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Exam</title>
	<link rel="icon" href="asset/image/fabicon.png" type="image/png">
	<link rel="stylesheet" href="style.css">

	<style>
		body{background: #ddd;}
	</style>

</head>
<body>
	<!-- nav section start -->
		<nav class="manu_bar">
		<!-- logo start -->
			<img src="asset/image/logo.png" alt="logo" class="logo">
			<span class="logo_tag">O.E.M.S</span>
		<!-- logo end -->
			<ul>
				<li><a href="http://localhost/O.E.M.S/Admin dasbord.php">Dashboard</a></li>
				<li><a href="http://localhost/O.E.M.S/Add exam.php">Add exam</a></li>
				<li><a href="adminMassage.php">Massage</a></li>
				<li><a href="Add_admin.php">Add Admin</a></li>
			</ul>
		</nav>

		<!-- nav section end -->	

		<div class="add_que">
			<h1 class="pgTitle">ADD EXAM</h1>

			<?php
				if(isset($massege)){
					echo "<h4>$massege</h4>";
				}
			?>

			<form action="Add exam.php" method="POST">
				<label for="queNo" class="qusLable">Question no:</label>
				<input name="queNo" type="text" value=" <?php echo $next; ?>" style="width:19px; height: 3px;text-align: center;border: 2px solid;border-radius: 5px;"><br>
				<label for="entQue" class="qusLable">Question:</label>
				<input name="entQue" type="text" ><br>
				<label for="Option_1" class="qusLable">Option 1:</label>
				<input name="Option_1" type="text"><br>
				<label for="Option_2" class="qusLable">Option 2:</label>
				<input name="Option_2" type="text"><br>
				<label for="Option_3" class="qusLable">Option 3:</label>
				<input name="Option_3" type="text"><br>
				<label for="Option_4" class="qusLable">Option 4:</label>
				<input name="Option_4" type="text"><br>
				<label for="Right_Option" class="qusLable">Enter Right Option No:</label>
				<input name="Right_Option" type="number" ><br>
				<input type="submit" value="submit" name="submit" class="button"><br>
			</form>
		</div>
		
</body>
</html>