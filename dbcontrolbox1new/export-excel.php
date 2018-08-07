<?php
include_once "admin/dbconfig.php";
$headers = array('Date', 'ID', 'Group');

$headers[3] =  'Frage11';

$headers[4] =  'Frage11Points';

$headers[5] =  'Frage12';

$headers[6] =  'Frage12Points';

$headers[7] =  'Frage13';

$headers[8] =  'Frage13Points';

$headers[9] =  'Frage1TotalPoints';



$headers[10] =  'Frage2';

$headers[11] =  'Frage2TotalPoints';



$headers[12] =  'Frage31';

$headers[13] =  'Frage31Points';

$headers[14] =  'Frage31a';

$headers[15] =  'Frage31aPoints';

$headers[16] =  'Frage32';

$headers[17] =  'Frage32Points';

$headers[18] = 'Frage3TotalPoints';



$headers[19] = 'Frage41';

$headers[20] = 'Frage41Points';

$headers[21] = 'Frage42';

$headers[22] = 'Frage42Points';

$headers[23] = 'Frage4TotalPoints';



$headers[24] = 'Frage51';

$headers[25] = 'Frage51Points';

$headers[26] = 'Frage52';

$headers[27] = 'Frage52Points';

$headers[28] = 'Frage5TotalPoints';



$headers[29] = 'Frage61';

$headers[30] = 'Frage61Points';

$headers[31] = 'Frage62';

$headers[32] = 'Frage62Points';

$headers[33] = 'Frage63';

$headers[34] = 'Frage63Points';

$headers[35] = 'Frage64';

$headers[36] = 'Frage64Points';

$headers[37] = 'Frage65';

$headers[38] = 'Frage65Points';

$headers[39] = 'Frage66';

$headers[40] = 'Frage66Points';

$headers[41] = 'Frage6TotalPoints';

$headers[42] = 'SumFrage61Frage64';



$headers[43] = 'Investitionsempfehlung';



$headers[44] = 'Satisfaction1';

$headers[45] = 'Satisfaction2';

$headers[46] = 'Satisfaction3';

$headers[47] = 'Satisfaction4';

$headers[48] = 'Satisfaction5';



$headers[49] = 'Abschlussfragebogen11';

$headers[50] = 'Abschlussfragebogen12';

$headers[51] = 'Abschlussfragebogen13';

$headers[52] = 'Abschlussfragebogen14';

$headers[53] = 'Abschlussfragebogen15';

$headers[54] = 'Abschlussfragebogen16';



$headers[55] = 'LotteryValue1';

$headers[56] = 'LotteryValue2';

$headers[57] = 'LotteryValue3';

$headers[58] = 'LotteryValue4';

$headers[59] = 'LotteryValue5';

$headers[60] = 'LotteryValue6';

$headers[61] = 'LotteryValue7';

$headers[62] = 'LotteryValue8';

$headers[63] = 'LotteryValue9';

$headers[64] = 'LotteryValue10';



$headers[65] = 'GneezyTask';

$headers[66] = 'Abschlussfragebogen5';



$headers[67] = 'Literacy1';

$headers[68] = 'Literacy2';

$headers[69] = 'Literacy3';



$headers[70] = 'Literacy4';

$headers[71] = 'Literacy5';

$headers[72] = 'Literacy6';



$headers[73] = 'Literacy7';

$headers[74] = 'Literacy8';

$headers[75] = 'Literacy9';

$headers[76] = 'Literacy10';

$headers[77] = 'Literacy11';



$headers[78] = 'Sex';

$headers[79] = 'Age';

$headers[80] = 'Income';

$headers[81] = 'Savings';

$headers[82] = 'Place';
$headers[83] = 'IP';
         

$setValueArray = array();

$date = date('d-m-Y');

$setValueArray[0]=$date;

$result=$db->query("select MAX(id) AS id from files_control");
if(count($result)>0)
{
	$id = (int)$result[0]["id"]+1;
}
else 
{
	$id=1;
}

$setValueArray[1] = $id;

$setValueArray[2]="ControlGroup";



$setValueArray[3] = $_SESSION['q1a'];

$setValueArray[4] = $_SESSION['q1apoints'];

$setValueArray[5] = $_SESSION['q1b'];

$setValueArray[6] = $_SESSION['q1bpoints'];

$setValueArray[7] = $_SESSION['q1c'];

$setValueArray[8] = $_SESSION['q1cpoints'];

$setValueArray[9] = $_SESSION['frage1Points']; 

  

$setValueArray[10] = $_SESSION['q2'];

$setValueArray[11] = $_SESSION['q2points'];



$setValueArray[12] = implode("&",$_SESSION['q3a']);

$setValueArray[13] = implode("&",$_SESSION['q3apoints']);



$setValueArray[14] = implode("&",$_SESSION['q3a1']);

$setValueArray[15] = implode("&",$_SESSION['q3a1points']);



$setValueArray[16] = $_SESSION['q3b'];

$setValueArray[17] = $_SESSION['q3bpoints'];



$setValueArray[18] = $_SESSION['frage3Points'];



$setValueArray[19] = implode("&",$_SESSION['q4a']);

$setValueArray[20] = implode("&",$_SESSION['q4apoints']);



$setValueArray[21] = $_SESSION['q4b'];

$setValueArray[22] = $_SESSION['q4bpoints'];



$setValueArray[23] = $_SESSION['frage4Points'];



$setValueArray[24]= implode("&",$_SESSION['q5a']);

$setValueArray[25] = implode("&",$_SESSION['q5apoints']);



$setValueArray[26]= $_SESSION['q5b'];

$setValueArray[27]= $_SESSION['q5bpoints'];

$setValueArray[28] =$_SESSION['frage5Points'];



$setValueArray[29] =$_SESSION['q6a'];

$setValueArray[30] =$_SESSION['q6apoints'];

$setValueArray[31] =$_SESSION['q6b'];

$setValueArray[32] =$_SESSION['q6bpoints'];

$setValueArray[33] =$_SESSION['q6c'];

$setValueArray[34] =$_SESSION['q6cpoints'];

$setValueArray[35] =$_SESSION['q6d'];

$setValueArray[36] =$_SESSION['q6dpoints'];

$setValueArray[37] =$_SESSION['q6e'];

$setValueArray[38] =$_SESSION['q6epoints'];

$setValueArray[39] =$_SESSION['q6f'];

$setValueArray[40] =$_SESSION['q6fpoints'];



$setValueArray[41] =$_SESSION['frage6Total'];

$setValueArray[42] =$_SESSION['sumFrage61Frage64'];



$setValueArray[43] =$_SESSION['output'];



$setValueArray[44] =  $_SESSION['abfrageNew11'];

$setValueArray[45] =  $_SESSION['abfrageNew12'];

$setValueArray[46] =  $_SESSION['abfrageNew13'];

$setValueArray[47] =  $_SESSION['abfrageNew14'];

$setValueArray[48] =  $_SESSION['abfrageNew15'];



$setValueArray[49] =  $_SESSION['abfrage21'];

$setValueArray[50] =  $_SESSION['abfrage1'];

$setValueArray[51] =  $_SESSION['abfrage2'];

$setValueArray[52] =  $_SESSION['abfrage3'];

$setValueArray[53] =  $_SESSION['abfrage4'];

$setValueArray[54] =  $_SESSION['abfrage5'];







$setValueArray[55] =  $_SESSION['lotteryRow1'];

$setValueArray[56] =  $_SESSION['lotteryRow2'];

$setValueArray[57] =  $_SESSION['lotteryRow3'];

$setValueArray[58] =  $_SESSION['lotteryRow4'];

$setValueArray[59] =  $_SESSION['lotteryRow5'];

$setValueArray[60] =  $_SESSION['lotteryRow6'];

$setValueArray[61] =  $_SESSION['lotteryRow7'];

$setValueArray[62] =  $_SESSION['lotteryRow8'];

$setValueArray[63] =  $_SESSION['lotteryRow9'];

$setValueArray[64] =  $_SESSION['lotteryRow10'];





$setValueArray[65] =  $_SESSION['euro'];



$setValueArray[66] =  $_SESSION['abfrageNew2'];



$setValueArray[67] =  $_SESSION['abfrage31'];

$setValueArray[68] =  $_SESSION['abfrage32'];

$setValueArray[69] =  $_SESSION['abfrage33'];



$setValueArray[70] =  $_SESSION['abfrage41'];

$setValueArray[71] =  $_SESSION['abfrage42'];

$setValueArray[72] =  $_SESSION['abfrage43'];



$setValueArray[73] =  $_SESSION['abfrageNew51'];

$setValueArray[74] =  $_SESSION['abfrageNew52'];

$setValueArray[75] =  $_SESSION['abfrageNew53'];

$setValueArray[76] =  $_SESSION['abfrageNew54'];

$setValueArray[77] =  $_SESSION['abfrageNew55'];



$setValueArray[78] =  $_SESSION['sex'];

$setValueArray[79] =  $_SESSION['age'];

$setValueArray[80] =  $_SESSION['yearlyIncome'];

$setValueArray[81] =  $_SESSION['privateSavings'];

$setValueArray[82] =  $_SESSION['lebensmittelpunkt'];
$setValueArray[83] =  $_SESSION['ipaddress'];


//$_SESSION['random_no']  = $random_no;

$filename = "user-files/ControlGroupUser-" . $date . date('-H-i-s-') . $id . '.csv';

$file = fopen($filename, 'w+');


fputcsv($file, $headers, ',');

fputcsv($file, $setValueArray, ',');

fclose($file);

$dataArray = array('filename' => $filename);

$db->insert('files_control', $dataArray);

header("location:finalScreen.php");

?>