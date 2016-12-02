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
$nume =$row->NUME;
echo $nume;
//$data=date();
$data=date('Y-m-d');



?>


$finc = <<< INCASARI
<form name="form1" method="post" action="inc1.php">
<fieldset>
	<legend>Preluare</legend>
	<input type="text" name='par' value = "<?php echo $par?> " /> Partida <br/>
	<input type="text"  name="nume" value="<?php echo $nume ?> "/> Nume  <br/>
	<input type="date"  name="data"  value=" <?php echo $data ?> "/> Data <br/>
	<input type="text"  name="per" /> Perioada <br/>
	<input type="int"  name="nrch" /> Numar chitanta <br/>
	<input type="number"  name="cot" /> Cot 1% <br/>
	<input type="number"  name="cotd" /> Sad <br/>
	<input type="number"  name="rata" /> Rata <br/>
	<input type="number"  name="cotb" /> Benevol <br/>
	<input type="number"  name="dob" /> Dobinda <br/>
	<input type="number"  name="ainc" /> Alte incasari <br/>
	<input type="number"  name="txins" /> Taxa inscriere <br/>
</fieldst>

<fieldset>
	<legend>Actiuni</legend>
	<input type="submit"  name="confirm"  value="Confirm" />
	<input type="reset"    value="Curat formular" />
<fieldset/>	



</form>
INCASARI;
<?php



if ( isset( $_POST[ "confirm" ] )) {

//ini_set('display_errors', 'On');
//error_reporting(E_ALL);
//	include("dbconect.php");
//sql="SELECT * FROM PAR where PAR='$par'";
//$stmt=$cnx->prepare($sql);
//$stmt->execute();
//$row = $stmt->fetch(PDO::FETCH_OBJ);
//$nume =$row->NUME;
//echo $nume;
echo $par;
}


?>

