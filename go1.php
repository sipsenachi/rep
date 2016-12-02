<?php include('dbconect.php'); ?>
<?php
$par = $_POST['par'];
//$par='370'
//$sql = mysql_query("SELECT * FROM PAR WHERE PAR='$par'");
$sql="SELECT * FROM PAR where PAR='$par'";
$verifica = mysql_query($sql);
if($verifica) {
	$row = mysql_fetch_array($verifica,MYSQL_ASSOC);
	echo 'Nume:.$row['NUME'].';
}
//$row = mysql_fetch_row($sql)) ;

//print_r($row);
//print $row;
//print [NUME];
echo $par;
echo "<table border=1>";
echo "<tr><td>ID</td><td>PARTIDA</td><td>nume</td></tr>";
//$row = mysql_fetch_row($sql)) ;
//echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";

echo "</table>";
echo $par;
mysql_close($cnx);

?>

