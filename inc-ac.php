<?php

include(dbconect.php);
// Get values from form
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];

// Insert data into mysql
$sql="INSERT INTO $inc(name, lastname, email)VALUES('$name', '$lastname', '$email')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='insert.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?>

<?php
// close connection
mysql_close();
?>
