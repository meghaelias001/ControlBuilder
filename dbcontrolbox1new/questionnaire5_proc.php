<?php
session_start();
 $q6a = $_POST['q6a'];
 $q6b = $_POST['q6b'];
 $q6c = $_POST['q6c'];
 $q6d = $_POST['q6d'];
 $q6e = $_POST['q6e'];
 $q6f = $_POST['q6f'];
 
 $_SESSION['q6a'] = $q6a;
 $_SESSION['q6b'] = $q6b;
 $_SESSION['q6c'] = $q6c;
 $_SESSION['q6d'] = $q6d;
 $_SESSION['q6e'] = $q6e;
 $_SESSION['q6f'] = $q6f;
 $_SESSION['i6'] = "1";
 
 $q3apoints=array();
 $q3a1points=array();
 $q4apoints=array();
 $q5apoints=array();
 
 //question q1a
 if($_SESSION['q1a']=='1')
	 $q1apoints=10;
 else if ($_SESSION['q1a']=='2')
	 $q1apoints=20;
 else if ($_SESSION['q1a']=='3')
	 $q1apoints=30;
 else if ($_SESSION['q1a']=='4')
	$q1apoints=40;
 else
	$q1apoints=50;

//question q1b
if($_SESSION['q1b']=='1')
	 $q1bpoints=10;
 else if ($_SESSION['q1b']=='2')
	 $q1bpoints=20;
 else if ($_SESSION['q1b']=='3')
	 $q1bpoints=30;
 else if ($_SESSION['q1b']=='4')
	$q1bpoints=40;
 else
	$q1bpoints=50;

//question q1c
if($_SESSION['q1c']=='1')
	 $q1cpoints=10;
 else if ($_SESSION['q1c']=='2')
	 $q1cpoints=20;
 else if ($_SESSION['q1c']=='3')
	 $q1cpoints=30;
 else if ($_SESSION['q1c']=='4')
	$q1cpoints=40;
 else
	$q1cpoints=50;

//question q6a
if($q6a=='1')
	 $q6apoints=0;
 else if ($q6a=='2')
	 $q6apoints=10;
 else 
	 $q6apoints=0;
 
//question q6b
if($q6b=='1')
	 $q6bpoints=0;
 else if ($q6a=='2')
	 $q6bpoints=10;
 else if ($q6a=='3')
	 $q6bpoints=0;
 else if ($q6a=='4')
	 $q6bpoints=0;
 else 
	 $q6bpoints=10;
 
//question q6c
 if($q6c=='1')
	 $q6cpoints=0;
 else if ($q6c=='2')
	 $q6cpoints=-10;
 else 
	 $q6cpoints=-20;
 
//question q6d
 if($q6d=='1')
	 $q6dpoints=20; 
 else 
	 $q6dpoints=0;
 
//question q6e
 if($q6e=='1')
	 $q6epoints=20;
 else if ($q6e=='2')
	 $q6epoints=10;
 else 
	 $q6epoints=0;
 
//question q6f
 if($q6f=='1')
	 $q6fpoints=0;
 else if ($q6c=='2')
	 $q6fpoints=-10;
 else 
	 $q6fpoints=-15;
 
 //question q2
 if($_SESSION['q2']=='1')
	 $q2points=0;
 else if ($_SESSION['q2']=='2')
	 $q2points= 10;
 else if ($_SESSION['q2']=='3')
	 $q2points= 20;
 else if ($_SESSION['q2']=='4')
	 $q2points=30;
 else if ($_SESSION['q2']=='5')
	 $q2points=40;
 else 
	 $q2points=50;
 
 //question q3a
 
 if (in_array('1', $_SESSION['q3a'])) {
    array_push($q3apoints,40);
}
if (in_array('2', $_SESSION['q3a'])) {
    array_push($q3apoints,30);
}
if (in_array('3', $_SESSION['q3a'])) {
    array_push($q3apoints,20);
}
if (in_array('4', $_SESSION['q3a'])) {
    array_push($q3apoints,10);
}
if (in_array('5', $_SESSION['q3a'])) {
    array_push($q3apoints,5);
}
if (in_array('6', $_SESSION['q3a'])) {
    array_push($q3apoints,0);
}

//question q3a1
if (in_array('7', $_SESSION['q3a1'])) {
    array_push($q3a1points,40);
}
if (in_array('8', $_SESSION['q3a1'])) {
    array_push($q3a1points,30);
}
if (in_array('9', $_SESSION['q3a1'])) {
    array_push($q3a1points,20);
}
if (in_array('10', $_SESSION['q3a1'])) {
    array_push($q3a1points,10);
}
if (in_array('11', $_SESSION['q3a1'])) {
    array_push($q3a1points,5);
}
if (in_array('12', $_SESSION['q3a1'])) {
    array_push($q3a1points,0);
}

 //question q4a
 
 if (in_array('1', $_SESSION['q4a'])) {
    array_push($q4apoints,10);
}
if (in_array('2', $_SESSION['q4a'])) {
    array_push($q4apoints,10);
}
if (in_array('3', $_SESSION['q4a'])) {
    array_push($q4apoints,10);
}
if (in_array('4', $_SESSION['q4a'])) {
    array_push($q4apoints,10);
}
if (in_array('5', $_SESSION['q4a'])) {
    array_push($q4apoints,10);
}
if (in_array('6', $_SESSION['q4a'])) {
    array_push($q4apoints,10);
}
if (in_array('7', $_SESSION['q4a'])) {
    array_push($q4apoints,10);
}
	if (in_array('8', $_SESSION['q4a'])) {
    array_push($q4apoints,10);
}
if (in_array('9', $_SESSION['q4a'])) {
    array_push($q4apoints,10);
}
 if (in_array('10', $_SESSION['q4a'])) {
    array_push($q4apoints,10);
}
if (in_array('11', $_SESSION['q4a'])) {
    array_push($q4apoints,10);
}
if (in_array('12', $_SESSION['q4a'])) {
    array_push($q4apoints,10);
}
//question q3b
 if($_SESSION['q3b']=='1')
	 $q3bpoints=0.25;
 else if ($_SESSION['q3b']=='2')
	 $q3bpoints= 0.5;
 else if ($_SESSION['q3b']=='3')
	 $q3bpoints= 0.75;
 else 
	 $q3bpoints=1;
 
 
 if($_SESSION['q4b']=='1')
	 $q4bpoints=0.25;
 else if ($_SESSION['q4b']=='2')
	 $q4bpoints= 0.5;
 else if ($_SESSION['q4b']=='3')
	 $q4bpoints= 0.75;
 else 
	 $q4bpoints=1;
 
  if($_SESSION['q5b']=='1')
	 $q5bpoints=0.25;
 else if ($_SESSION['q5b']=='2')
	 $q5bpoints= 0.5;
 else if ($_SESSION['q5b']=='3')
	 $q5bpoints= 0.75;
 else 
	 $q5bpoints=1;
 
 //$q5
 if (in_array('1', $_SESSION['q5a'])) {
    array_push($q5apoints,50);
}
if (in_array('2', $_SESSION['q5a'])) {
    array_push($q5apoints,50);
}
if (in_array('3', $_SESSION['q5a'])) {
    array_push($q5apoints,50);
}
if (in_array('4', $_SESSION['q5a'])) {
    array_push($q5apoints,0);
}
if (in_array('5', $_SESSION['q5a'])) {
    array_push($q5apoints,0);
}

$points_q1=min($q1apoints,$q1bpoints,$q1cpoints);

$q6avalues=array($q6apoints,$q6bpoints,$q6cpoints,$q6dpoints,$q6epoints,$q6fpoints);

$points_q6total=array_sum($q6avalues);

$points_q2=$q2points;

$points_q3=max(max($q3apoints),max($q3a1points))* $q3bpoints;

$points_q4=array_sum($q4apoints)* $q4bpoints;

$points_q5=array_sum($q5apoints)* $q5bpoints;
$points_q6ad= $q6apoints + $q6dpoints;
$result= min($points_q1, $points_q2, (50 - $points_q3), (50 - $points_q4 + $points_q6total), (50 - $points_q5 + $points_q6ad));
if($result<=8)
	$output= 0;
else if($result>8 & $result<=18)
	$output= 25;
else if($result>18 & $result<=28)
	$output= 50;
else if($result>28 & $result<=40)
	$output= 75;
else 
	$output= 100;

$_SESSION['output'] =$output;
$_SESSION['q6apoints']=$q6apoints;
$_SESSION['q6bpoints']=$q6bpoints;
$_SESSION['q6cpoints']=$q6cpoints;
$_SESSION['q6dpoints']=$q6dpoints;
$_SESSION['q6epoints']=$q6epoints;
$_SESSION['q6fpoints']=$q6fpoints;
$_SESSION['q5bpoints']=$q5bpoints;
$_SESSION['q5apoints']=$q5apoints;
$_SESSION['q4bpoints']=$q4bpoints;
$_SESSION['q4apoints']=$q4apoints;
$_SESSION['q3bpoints']=$q3bpoints;
$_SESSION['q3apoints']=$q3apoints;
$_SESSION['q3a1points']=$q3a1points;
$_SESSION['q2points'] =$q2points;
$_SESSION['q1apoints']=$q1apoints;
$_SESSION['q1bpoints']=$q1bpoints;
$_SESSION['q1cpoints']=$q1cpoints;
$_SESSION['frage1Points'] =$points_q1;
$_SESSION['frage3Points'] =$points_q3;
$_SESSION['frage4Points'] =$points_q4;
$_SESSION['frage5Points'] =$points_q5;
$_SESSION['frage6Total'] = $points_q6total;
$_SESSION['sumFrage61Frage64'] =$points_q6ad;
header("location:empfehlung.php");
?>