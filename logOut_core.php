<?php
setcookie("adminName","",time()-(86400*10));
header("location:admin.php");
