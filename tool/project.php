<?php
$q=$_GET['q'];
include("conn.php");
session_start();
$sql="SELECT * FROM project WHERE id = '$q'";
$result = mysql_query($sql) or die(mysql_error());
$row=mysql_fetch_assoc($result);

$lmt=$row['id'];

$n=$row['projectManagerName'];
echo $n;

$_SESSION['pn'] = $n;
?>