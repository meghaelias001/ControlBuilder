<?php
session_start();

 $q3a = $_POST['q3a'];
 $q3a1= $_POST['q3a1'];
 $q3b = $_POST['q3b'];
 $_SESSION['q3a'] = $q3a;
 $_SESSION['q3b'] = $q3b;
  $_SESSION['q3a1'] = $q3a1;
  $_SESSION['i3'] = "3";

						
 //$cookie_name = "user";
//$cookie_value = "John Doe";
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

header("location:questionnaire3.php");
?>