<?php include('dbconect.php'); 
$par = $_POST['par'];

$sql="SELECT * FROM PAR where PAR='$par'";
$stmt=$cnx->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_OBJ);

$nume =$row->NUME;
$loca =$row->LOCA;
echo $par;
echo '    ';
echo $nume;
echo '    ';
echo $loca;
mysql_close($cnx);
$data=date('d.m.Y');
echo $data;
?>

<html>
<head>
<title> INTRODUCERE INCASARI</title>
<body>

<form name="form1" method="post" action="inc-ac.php">
<fieldset>
	<legend>Preluare</legend>

	<input type="text"  name="par" value="<?php echo $par ?>"/> Partida <br/>
	<input type="text"  name="nume" value="<?php echo $nume ?>" /> Nume <br/>
	<input type="date"  name="data"  value=" <?php echo $data ?> "/> Data <br/>
	<input type="text"  name="per" /> Perioada <br/>
	<input type="int"  name="nrch" /> Numar chitanta <br/>
	<input type="number"  name="txins" /> Taxa inscriere <br/>
	<input type="number"  name="cot" VALUE=0,0 /> Cot 1% <br/>
	<input type="number"  name="rata" /> Rata <br/>
	<input type="number"  name="cotd" /> Sad <br/>
	<input type="number"  name="dob" /> Dobinda <br/>
	<input type="number"  name="rata" /> Rata <br/>
	<input type="number"  name="cotb" /> Benevol <br/>
	<input type="number"  name="aic" /> Alte incasari <br/>
</fieldst>

<fieldset>
	<legend>Actiuni</legend>
	<input type="submit"  name="confirm"  value="Confirm" />
	<input type="reset"    value="Curat formular" />
<fieldset/>	

</form>
</body>
</htm>



