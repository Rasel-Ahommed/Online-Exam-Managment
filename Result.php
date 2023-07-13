<?php
session_start();
if(!$_COOKIE['usr_email']){
   header("location:index.php");
}

require_once("connect.php");


$rows=0;
$selectData = "SELECT * FROM options WHERE is_correct = 1";
$runQuery = mysqli_query($conn,$selectData);

$result = 0;
 for($i=1;$i<$_POST['que']+1;++$i){

 $select= $_POST[$i.'choice'];
    $ansNumber = "SELECT * FROM options WHERE is_correct = 1 and id = $select";
    $rowcu = mysqli_query($conn,$ansNumber);
    $row = mysqli_num_rows($rowcu);
   if($row ==1){
    $rows =$rows+1;
  }  
   }


$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($conn,$query));
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Result</title>
   <link rel="stylesheet" href="style.css">
   <link rel="icon" href="asset/image/fabicon.png" type="image/png">
</head>
<body>
   <!-- nav section start -->
   <section class="sec-1">
      <nav class="manu_bar">
      <!-- logo start -->
         <img src="asset/image/logo.png" alt="logo" class="logo">
         <span class="logo_tag">O.E.M.S</span>
      <!-- logo end -->
         <ul>
            <li><a href="http://localhost/O.E.M.S/">Home</a></li>
            <li><a href="Question.php">Exam</a></li>
            <li><a href="contectUs.php">Contect us</a></li>
         </ul>
      </nav>
      <!-- nav section end -->

      <!-- result section start -->

      <div class="resultHero">
         <h2>Your Result</h2>
         <p>Your result is <b><?php echo $rows; ?> out of <?php echo $total_questions;?></b></p>
      </div>


      <!-- result section end -->


      <!-- footer section start -->
   <div class="AdminftrContiner" style="margin-top: 418px">
      <h2>O.E.M.S</h2>
      <p>This website has created for online exam resources. <br>The project has completed with the tireless work of TEAM BITS.</p>
      <p>&copyCopyright TEAM BITS</p>
   </div>
      <!-- footer section end -->
</body>
</html>
