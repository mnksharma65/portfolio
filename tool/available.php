
<?php
include 'conn.php';

        $username       = $_POST['username']; // Get the username values
       
            
            $result = mysql_query("SELECT username FROM members WHERE username='".$username."'", $con);
            $num_rows = mysql_num_rows($result);
            echo $num_rows;
   
?>