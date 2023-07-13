<?php
setcookie("usr_email",$userInputEmail,time()-(86400*10));
header("location:index.php");