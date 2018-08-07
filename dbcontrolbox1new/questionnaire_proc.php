<?php
session_start();

 $q1a = $_POST['q1a'];
 $q1b = $_POST['q1b'];
 $q1c = $_POST['q1c'];
 
 $_SESSION['q1a'] = $q1a;
 $_SESSION['q1b'] = $q1b;
 $_SESSION['q1c'] = $q1c;
 
 $_SESSION['i1'] = "1";
 
header("location:questionnaire1.php");


?>