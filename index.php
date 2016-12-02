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
	<title>APLICATIE CARP FOCSANI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<head>
<body>

<div id="page">
	<ul>
		<?php
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
		$sub_sql = "SELECT * FROM smeniu WHERE m_id=:id";
		$sub_stmt = $cnx->prepare($sub_sql);
		$sub_stmt->bindParam(':id',$row->id,PDO::PARAM_INT);
		$sub_stmt->execute();
		?>
		<li><a href=""><?php echo $row->opt;?></a>
		<?php
		if($sub_stmt->rowCount()){
		?>
		<ul>
        		<?php
                	while($sub_row = $sub_stmt->fetch(PDO::FETCH_OBJ)){
                        ?>
                        <li><a href="<?php echo $sub_row->leg;?>">
                            <?php echo $sub_row->snume;?>        </a>
                        </li>

                        <?php
                        }
                        ?>
		</ul>
                        <?php		
                        }
                        ?>
                      </li>
                        <?php		
                        }
                        ?>
                 
	</ul>
</div>

</body>
</html>



