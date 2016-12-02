<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
	include("dbconect.php");

public $par,$dins,$decp,$nume,$loca,$adr,$ser,$nr,$cnp,$delib,$pol,$pen,$discre,$sot,$disdec,$data,$per,$stare;
public $nrch,$soldi,$imp,$rest,$sold,$cot,$cotd,$depb,$dob,$ach,$total;
public $ajd,$imp,$nrbp,$txins,$chad,$txcar,$ainc,$nract;

function executequery($par)
{
$sql="SELECT * FROM PAR where PAR="+$par;
$stmt=$cnx->prepare($sql);

$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ALL);
}

?>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td><form name="form1" method="post" action="inc-ac.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td colspan="3"><strong>Preluare partida </strong></td>
</tr>
<tr>
<td width="71">Partida</td>
<td width="6">:</td>
<td width="301"><input name="par" type="number" id="par">
<?php
$par=$_POST'par'];
if(isset $par))
{
executequery($par);

}
?>
<tr>
<td colspan="3" align="center"><input type="submit" name="Submit" value="Confirmare"></td>
</tr>
</table>
</form>
</td>
</tr>
</table> 
