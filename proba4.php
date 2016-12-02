

<html>
<head>
<title> INTRODUCERE INCASARI</title>
<body>
<?php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);
	include("dbconect.php");


////$par=$_POST['par'];
//$sql="SELECT * FROM PAR where PAR='$par'";
//$stmt=$cnx->prepare($sql);
//$stmt->execute();
//$row = $stmt->fetch(PDO::FETCH_OBJ);
//$nume =$row->NUME;
//echo $nume;
$data1=date('d.m.Y');
echo $data1;
?>
<?php
if ( isset( $_POST ) && empty( $_POST[ "confirm" ] )) {
	$er=array();
$fd=array();
$fd["par"]='';
$fd["nume"]='';
$fd["data"]=date(d.m.y);
$fd["per"]='';
$fd["nrch"]=0;
$fd["cot"]=0;
$fd["cotd"]=0;
$fd["rata"]=0;
$fd["cotb"]=0;
$fd["dob"]=0;
$fd["aic"]=0;
$fd["txins"]=0;

$proc=0;
echo $data1;

	$fd=$_POST;


$par=$_POST["par"];
//$nume=$_POST["nume";
$data=$_POST["data"];
$per=$_POST["per"];
$nrch=$_POST["nrch"];
$cot=$_POST["cot"];
$cotd=$_POST["cotd"];
$rata=$_POST["rata"];
$cotb=$_POST["cotb"];
$dob=$_POST["dob";
$aic=$_POST["aic"];
$txins=$_POST["txins"];
echo $data1;
if ($par){
	$er='Introduceti partida';
}else{
$sql="SELECT * FROM PAR where PAR='$par'";
$stmt=$cnx->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_OBJ);
$nume =$row->NUME;

}
 if (!isset($er) or !count($er)) {
    $proc = 1;
  }
 
  if ($proc){
  echo 'AI reusit'
	}
}
?>
<form name="form1" method="POST" action="">
<fieldset>
	<legend>Preluare</legend>
	<input type="text" name='par' value = "<?php echo $fd["par"] ?> " /> Partida <br/>
	<input type="text"  name="nume" value="<?php echo $fd["nume"] ?> "/> Nume  <br/>
	<input type="date"  name="data"  value=" <?php echo $fd["data"] ?> "/> Data <br/>
	<input type="text"  name="per" /> Perioada <br/>
	<input type="int"  name="nrch" /> Numar chitanta <br/>
	<input type="number"  name="cot" /> Cot 1% <br/>
	<input type="number"  name="cotd" /> Sad <br/>
	<input type="number"  name="rata" /> Rata <br/>
	<input type="number"  name="cotb" /> Benevol <br/>
	<input type="number"  name="dob" /> Dobinda <br/>
	<input type="number"  name="aic" /> Alte incasari <br/>
	<input type="number"  name="txins" /> Taxa inscriere <br/>
</fieldst>

<fieldset>
	<legend>Actiuni</legend>
	<input type="submit"  name="confirm"  value="Confirm" />
	<input type="reset"    value="Curat formular" />
<fieldset/>	

</form>

</body>
</htm>

