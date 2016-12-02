<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
	include("dbconect.php");
$sql="SELECT * FROM meniu ORDER BY id";
$stmt=$cnx->prepare($sql);
$stmt->execute();

?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
<head>
<body>

<div id="page">
	<ul>
		<?php
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
		?>
		<li><a href=""><?php echo $row->opt;?></a></li>
		<?php
		}
		?>
	</ul>
</div>



</body>
</html>



