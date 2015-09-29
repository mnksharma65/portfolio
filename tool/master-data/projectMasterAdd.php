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
    <form action="service.php?name=addProject" method="post" name="form" id="form">
        <table style="width:50%; margin-top: 20px; padding:  20px 20px 20px 20px;">
            <tr>
                <td><strong>Project Name</strong></td>
                <td><input type="text" id="projectName" name="projectName" /></td>
            </tr>
            <tr>
                <td><strong>Project Manager Name</strong></td>
                <td><input type="text" name="projectManagerName"  id="projectManagerName" /></td>
            </tr>
            <tr>
                <td><strong>Manager's Mobile Number</strong></td>
                <td><input type="text" name="mobile" id="mobile" /></td>
            </tr>
            <tr>
                <td><strong>Manager's Email</strong></td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td><strong>Product Line</strong></td>
                <td><input type="text" id="productLine" name="productLine" /></td>
            </tr>
            <tr>
                <td><strong>Product Type</strong></td>
                <td><input type="text" name="productType" id="productType" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="image" name="submit" id="submit" src="images/save.jpg"></td>
            </tr>
        </table>
    </form>
</div>
</body>
<html>