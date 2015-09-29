<?php
    include '../conn.php';
    $response = $_GET['data'];
    $response = json_decode(base64_decode($response));
    $projectId = $response->{'projectId'};
    $query = mysql_query("select * from project where id = '".$projectId."'");
    $project = mysql_fetch_array($query);
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
   <style>
       td {
           text-align: left;
}
   </style>
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
    <table style="width:50%; margin-top: 20px; padding:  20px 20px 20px 20px;">
        <tr><td><strong>Project Name</strong></td><td><?php echo $project['projectName']; ?></td></tr>
        <tr><td><strong>Project Manager Name</strong></td><td><?php echo $project['projectManagerName']; ?></td></tr>
        <tr><td><strong>Manager's Mobile Number</strong></td><td><?php echo $project['managerMobile']; ?></td></tr>
        <tr><td><strong>Manager's Email</strong></td><td><?php echo $project['managerEmail']; ?></td></tr>
        <tr><td><strong>Product Line</strong></td><td><?php echo $project['productLine']; ?></td></tr>
        <tr><td><strong>Product Type</strong></td><td><?php echo $project['productType']; ?></td></tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
                <a href="projectMasterEdit.php?data='.$response.'"><img src="images/update.png"  alt="Update Master" title="Update Master"/></a>
                <a href="projectMasterList.php"><img src="images/list.png" alt="Show All Projects" title="Show All Projects"/></a>
                <a href="projectMasterDelete.php?data='.$response.'"><img src="images/delete.png"  alt="Delete Master" title="Delete Master"/></a>
            </td>
        </tr>
    </table>
</div>
</body>
<html>
