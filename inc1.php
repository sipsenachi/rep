<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
	include("dbconect.php");

$par=$_POST['par'];
$nume=$_POST['nume'];
//$data=$_POST['data'];
$per=$_POST['per'];
$nrch=$_POST['nrch'];
$cot=$_POST['cot'];
$cotd=$_POST['cotd'];
$rata=$_POST['rata'];
$depb=$_POST['cotb'];
$dob=$_POST['dob'];
$ainc=$_POST['ainc'];
$txins=$_POST['txins'];
$rest=0;
$chad=0;
$txcar=0;
$ach=0;
$data1=date("Y-m-d",strtotime($_POST['data']));
//$mysqlFormat = date('Y-m-d H:i:s', strtotime($_POST['my_date']));

$total=$cot+$cotd+$rata+$depb+$dob+$ainc+$txins;


echo "partida=$par";

echo "nume=$nume";
//echo "data=$data";
echo "per=$per";
echo "nrch=$nrch";
echo "cot=$cot";
echo "cotd=$cotd";
echo "rata=$rata";
echo "total=$total";
//echo $cnx;
$sql="INSERT INTO INC (PAR,NUME,DATA,PER,NRCH,TXINS,COT,REST,RATA,CHAD,COTD,TXCAR,DEPB,DOB,ACH,AINC,TOTAL) 
VALUES ('$par','$nume','$data1','$per','$nrch','$txins','$cot','$rest','$rata','$chad','$cotd','$txcar','$depb','$dob','$ach','$ainc','$total')";
//$sql="INSERT INTO INC (PAR,NUME,DATA,PER) VALUES ('$par','$nume','$data','$per')";
$stmt=$cnx->prepare($sql);
$stmt->execute();


?>

