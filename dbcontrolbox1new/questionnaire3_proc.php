<?php
session_start();
 $q4a = $_POST['q4a'];
 $q4b = $_POST['q4b'];
 $_SESSION['q4a'] = $q4a;
 $_SESSION['q4b'] = $q4b;
 $_SESSION['i4'] = "1";
header("location:questionnaire4.php");



?>