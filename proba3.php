<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
	include("dbconect.php");


$par=$_POST['par'];
$sql="SELECT * FROM PAR where PAR='$par'";
$stmt=$cnx->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_OBJ);
$nume =$row->NUME;
echo $nume;
$data=date('d.m.Y');
?>

<html>
<head>
<title> INTRODUCERE INCASARI</title>
<body>

<form name="form1" method="POST" action="inc1.php">
<fieldset>
	<legend>Preluare</legend>
	<input type="text" name='par' value="<?php echo $par ?>" /> Partida <br/>
	
	<input type="text"  name="nume" value="<?php echo $nume ?> "/> Nume  <br/>
	<input type="date"  name="data"  value=" <?php echo $data ?> "/> Data <br/>
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

