
                                                      <?php
                                                      include("conn.php");
                                                          $query2 = "SELECT * FROM state WHERE countryId = '".$_POST['val']."'";
                                                          $rq1=mysql_query($query2,$con);
                                                          echo "<option value='0'>Select State</option>";
                                                          while($rrq1=mysql_fetch_array($rq1))
                                                          {
                                                                echo "<option value='".$rrq1['id']."' >".$rrq1['name']."</option>";
                                                           }
                                                       ?>
                                          
      
