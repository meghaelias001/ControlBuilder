<?php
session_start();

 $abfrageNew51 = $_POST['abfrageNew51'];
 $abfrageNew52 = $_POST['abfrageNew52'];
 $abfrageNew53 = $_POST['abfrageNew53'];
 $abfrageNew54 = $_POST['abfrageNew54'];
 $abfrageNew55 = $_POST['abfrageNew55'];
 $_SESSION['abfrageNew51'] =  $abfrageNew51;
 $_SESSION['abfrageNew52'] =  $abfrageNew52;
 $_SESSION['abfrageNew53'] =  $abfrageNew53;
 $_SESSION['abfrageNew54'] =  $abfrageNew54;
 $_SESSION['abfrageNew55'] =  $abfrageNew55;
 
 $_SESSION['ab8'] = "1";
header("location:abschlussfragebogen-9.php");
?>