<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='enachi59';
$dbname='car';  //the name of the database
try {
$cnx=new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
 // echo 'Connectare reusita';
}
catch(PDOException $e) {
  echo $e->getMessage();
}
?>


