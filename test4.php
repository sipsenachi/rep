<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
        

	 if(isset($_POST['update'])) {
            ini_set('display_errors', 'On');
	    error_reporting(E_ALL);
	    include("dbconect.php");

            
            $par = $_POST['par'];
            $nume = $_POST['nume'];
            
            $sql = "UPDATE inc ". "SET par = $par ". "WHERE par = $par" ;
            mysql_select_db('car');
            $retval = mysql_query( $sql, $cnx );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($cnx);
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">Partida</td>
                        <td><input name = "par" type = "text" 
                           id = "par"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Nume</td>
                        <td><input name = "nume" type = "text" 
                           id = "nume"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "actualizare">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }
      ?>

