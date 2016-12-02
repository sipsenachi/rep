<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
	include("dbconect.php");








$inc = <<<inc
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td>

<form name="form1" method="post" action="inc-ac.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td colspan="3"><strong>Introducere incasari </strong></td>
</tr>
<tr>
<td width="71">Partida</td>
<td width="6">:</td>
<td width="301"><input name="par" type="number" id="par">
</td>
</tr>
<tr>
<td>Nume</td>
<td>:</td>
<td><input name="nume" type="text" id="nume"></td>
</tr>
<tr>
<td>Data</td>
<td>:</td>
<td><input name="data" type="date" id="data" </td>
</tr>
<tr>
</tr>
<tr>
<td width="71">Perioada</td>
<td width="6">:</td>
<td width="301"><input name="per" type="text" id="per"></td>
</tr>
<tr>
<td>Chitanta</td>
<td>:</td>
<td><input name="chit" type="number" id="nrch"></td>
</tr>
<tr>
<td>Taxa inscriere</td>
<td>:</td>
<td><input name="txi" type="number" id="txi" </td>
</tr>

<tr>
<td>Cot.1%</td>
<td>:</td>
<td><input name="cot" type="number" id="cot" </td>
</tr>
<tr>
<td>Rata</td>
<td>:</td>
<td><input name="rata" type="number" id="rata" </td>
</tr>

<tr>
<td>SAD</td>
<td>:</td>
<td><input name="cotd" type="number" id="cotd" </td>
</tr>
<tr>
<td>Dobinda</td>
<td>:</td>
<td><input name="dob" type="number" id="dob" </td>
</tr>
<tr>
<td>Cot.benevole</td>
<td>:</td>
<td><input name="cotb" type="number" id="cotb" </td>
</tr>

<tr>
<td>Alte incasari</td>
<td>:</td>
<td><input name="ainc" type="number" id="ainc" </td>
</tr>

<tr>

<td colspan="2" align="center">
	<td><input type=button ID="btnConf" ONCLIK="Conf()"  value="Confirmare"></td>
	<td><input type=button ID="btnClear" ONCLIK="Clear()" value="Renunt"></td>
	<td><input type=button ID="btnModif" ONCLIK="Cmodif()"  value="Modific"></td>
</td>

</tr>


</table>
</form>
</td>
</tr>
</table> 
inc;
echo $inc;
?>
