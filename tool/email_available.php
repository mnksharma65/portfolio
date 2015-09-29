
<?php
include 'conn.php';

        $email      = $_POST['email']; // Get the username values
       
            
            $result = mysql_query("SELECT email FROM members WHERE email='".$email."'", $con);
            $num_rows = mysql_num_rows($result);
            echo $num_rows;
   
?>