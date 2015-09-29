<?php
error_reporting(E_ALL);
$encKey = "Weblemo@AddyTools";
$user = "Testing";
require_once 'conn.php';
if ($_GET['name']=='editCountry')
{
    $id = $_GET['data'];
    $pmname = $_POST['country'.$id.''];
  
    
    $query = "UPDATE country SET name= '$pmname' WHERE id= '$id' ";
    
        $result = mysql_query($query);
        if (!$result) {
    die('Invalid query: ' . mysql_error());
}
  
   /* $response['responseCode'] = "00";
    $response['responseMessage'] = "SUCCESS";
    $response['surveyId'] = $surveyDisplayID;*/
  //  echo "<script type='text/javascript'>window.location.href='manage_country.php?data=success'</script>";
    
}
elseif ($_GET['name']=='addCountry')
{
    
    $ca = $_POST['ca'];
   
    $length = count($ca);
for ($i = 0; $i < $length; $i++) {
   if ($ca[$i] != '')
   {
  $query = "insert into country (name) values('".$ca[$i]."')";
  mysql_query($query) or die('Invalid query: ' . mysql_error());
   }
       
}
   echo "<script type='text/javascript'>window.location.href='manage_country.php?status=Success'</script>";
 
}
elseif ($_GET['name']=='deleteState')
{
    $id = $_POST['state'];
    $version = mysql_query("Delete from state WHERE id= $id");
    $ver = mysql_fetch_array($version);


   /* $response['responseCode'] = "00";
    $response['responseMessage'] = "SUCCESS";
    $response['surveyId'] = $surveyDisplayID;
    $response = base64_encode(json_encode($response)); */
    echo "<script type='text/javascript'>window.location.href='manage_state.php?data=Deleted'</script>";
    
}
else
{
    
}
?>
