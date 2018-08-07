<?php
session_start();
$q2 = $_POST['q2'];
$_SESSION['q2'] = $q2;
$_SESSION['i2'] = "2";
header("location:questionnaire2.php");



?>