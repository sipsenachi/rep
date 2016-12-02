<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
	include("dbconect.php");
//public $data=date('Y.m.d');

$par=$_POST['par'];
$sql="SELECT * FROM PAR where PAR='$par'";
$stmt=$cnx->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_OBJ);

// preluare date in variabile din partide;

$nume =$row->NUME;
$dins =date_format($row->DINS,"Y-m-d");
$decp =$row->DECP;
$loca =$row->LOCA;
$dins =$row->DINS;
$adr =$row->ADR;
$dins =$row->DINS;
$ser =$row->SER;
$nr =$row->NR;
$cnp =$row->CNP;
$delib =$row->DELIB;
$pol =$row->POL;
$pen =$row->PEN;
$discre =$row->DISCRE;
$sot =$row->SOT;
$disdec =$row->DISDEC;
$soldi =$row->SOLDI;
$cot =$row->COT;
$depb =$row->DEPB;

// creare tabela temporara cu miscarile partidei;

$sql="DROP TABLE IF EXISTS `tempinc`";
$stmt=$cnx->prepare($sql);
$stmt->execute();

$sql="CREATE TABLE `tempinc` LIKE `INC`";
$stmt=$cnx->prepare($sql);
$stmt->execute();

//preluare din tabela incasari;

$sql="INSERT INTO `tempinc` SELECT * FROM `INC` WHERE PAR='$par'";
$stmt=$cnx->prepare($sql);
$stmt->execute();

$sql="INSERT INTO `tempinc` SELECT * FROM `EX` WHERE PAR='$par'";
$stmt=$cnx->prepare($sql);
$stmt->execute();

//$sql="INSERT INTO `tempinc` SELECT * FROM `NC` WHERE PAR='$par'";
//$stmt=$cnx->prepare($sql);
//$stmt->execute();

//$stmt=$cnx->prepare($sql);
//$stmt->execute();

//$sql="SELECT * FROM INC FOR PAR='$par'";
//$stmt=$cnx->prepare($sql);
//$stmt->execute();
//$res = $stmt->fetch(PDO::FETCH_OBJ);


require('fpdf.php');

//create a FPDF object
$pdf=new FPDF();

//set document properties
$pdf->SetAuthor('CORCIOVA ENACHI');
$pdf->SetTitle('FISA PARTIDEI');
//set font for the entire document
$pdf->SetFont('Helvetica','B',10);
//$pdf->SetTextColor(50,60,100);

//set up a page
$pdf->AddPage('P');
//$pdf->SetDisplayMode(real,'default');

//display the title with a border around it
//$pdf->SetXY(50,20);
//$pdf->SetDrawColor(50,60,100);
$pdf->Write(7,'CASA DE AJUTOR RECIPROC A PENSIONARILOR DIN FOCSANI SI JUDETUL VRANCEA');
//$pdf->Ln(2);
$pdf->SetFont('Helvetica','B',12);
$pdf->SetXY(10,15);
//$pdf->Ln(3);
$s=" ";
$r2=$s."Partida nr:  ".$par."  Nume:    ".$nume."  CNP: ".$cnp;
$pdf->Write(7,$r2);
$pdf->SetFont('Helvetica','B',10);
$pdf->SetXY(10,20);
$r3=$s."CI/BI: ".$ser."  ".$nr." Elib  ".$delib."  Pol.   ".$pol."  din  ".$loca."  Adresa: ".$adr;
$pdf->Write(7,$r3);

//$pdf->Write(7,'C.E.C.nr. ');
//$pdf->Write(7,$decp);
$r4=$s."Data inscrierii:  ".$dins."  Sectia credit:  ".$discre."  Sotul:  ".$sot."  Sectia deces: ".$disdec;
$pdf->SetFont('Helvetica','B',10);
$pdf->SetXY(10,25);
$pdf->Write(7,$r4);
$r5=$s."Decizie nr.  ".$decp."  Pensie lunara: ".$pen;
$pdf->SetXY(10,30);
$pdf->Write(7,$r5);


$pdf->Line(10,36,200,36);

$r6=$s."Data    Perioda   NR.ch.    Acordat   Restituit        Sold     Cot 1%   Cot Dec.   Dep ben.    Alt chel.   Total";
$pdf->SetXY(10,35);
$pdf->Write(7,$r6);

$pdf->Line(10,41,200,41);
$datai=date('Y-m-d');
$r7=$s."Sold la data de:  ".$datai."                                    ".$soldi."         ".$cot."                              ".$depb;        
$pdf->SetXY(10,40);
$pdf->Write(7,$r7);
$pdf->Line(10,46,200,46);
//Output the document
$pdf->Output('FP.pdf','I');


//$fh=fopen('fp.txt',"w+r");
//fwrite($fh,'CASA DE AJUTOR RECIPROC A PENSIONARILOR DIN FOCSANI ');

//fputs($fh,'                SI JUDETUL VRANCEA ');
//fputs($fh,$nume );
//fclose($fh);
//print_r($_SERVER);
//$data=date();
$data=date('Y-m-d H:i:s');



?>
