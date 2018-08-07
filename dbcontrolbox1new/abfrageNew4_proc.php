<?php
session_start();

 $abfrage43 = $_POST['abfrage43'];
 $abfrage42 = $_POST['abfrage42'];
 $abfrage41 = $_POST['abfrage41'];

 $_SESSION['abfrage41'] =  $abfrage41;
 $_SESSION['abfrage42'] =  $abfrage42;
 $_SESSION['abfrage43'] =  $abfrage43;
 
 
 $_SESSION['ab7'] = "1";
header("location:abschlussfragebogen-8.php");


?>