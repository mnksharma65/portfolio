<?php
    include '../conn.php';
    $query = mysql_query("select * from project");
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="js/jquery-latest.min.js" type="text/javascript"></script>
   <title>Market Ess Master Management Utility</title>
</head>
<body>

<div id='cssmenu'>
<ul>
   <li><a href='#'><span>Home</span></a></li>
   <li class='active has-sub'><a href='#'><span>Master</span></a>
      <ul>
         <li class='has-sub'><a href='projectMasterList.php'><span>Project</span></a></li>
         <li class='has-sub'><a href='#'><span>Client</span></a></li>
      </ul>
   </li>
   <li><a href='#'><span>About</span></a></li>
   <li class='last'><a href='#'><span>Contact</span></a></li>
</ul>
</div>
<div>
    <table style="width:100%; margin-top: 20px; padding:  20px 20px 20px 20px;" border="0">
        <tr><th>ID</th><th>Project Name</th><th>Project Manager Name</th><th>Product Type</th></tr>

            <?php
                $i = 1;
                while($project = mysql_fetch_array($query))
                    {
                        $response['projectId'] = $project['id'];
                        $response = base64_encode(json_encode($response));
                        echo '<tr>
                            <td>'.$i.'</td>
                            <td>'.$project['projectName'].'</td>
                            <td>'.$project['projectManagerName'].'</td>
                            <td>'.$project['productType'].'</td>
                            <td>
                                <a href="projectMasterEdit.php?data='.$response.'"><img src="images/update.png"  alt="Update Master" title="Update Master"/></a>
                                <a href="projectMasterShow.php?data='.$response.'"><img src="images/show.png" alt="Show Master" title="Show Master"/></a>
                                <a href="projectMasterDelete.php?data='.$response.'"><img src="images/delete.png"  alt="Delete Master" title="Delete Master"/></a>
                            </td>
                        </tr>';
                        $i++;
                    }
            ?>
        <tr><td><a href="projectMasterAdd.php"><img src="images/add1.jpg"  alt="Add Project" title="Add Project"/></a></td></tr>
    </table>
</div>
</body>
<html>
