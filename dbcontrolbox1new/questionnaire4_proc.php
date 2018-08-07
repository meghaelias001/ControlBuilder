<?php
session_start();

 $q5a = $_POST['q5a'];
 $q5b = $_POST['q5b'];
 $_SESSION['q5a'] = $q5a;
 $_SESSION['q5b'] = $q5b;
 $_SESSION['i5'] = "1";
 
header("location:questionnaire5.php");



?>