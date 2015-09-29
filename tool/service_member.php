<?php
error_reporting(E_ALL);
$encKey = "Weblemo@AddyTools";
$user = "Testing";
require_once 'conn.php';
if ($_GET['name']=='editMember')
{
    $response = $_GET['data'];
    $response = json_decode(base64_decode($response));
   $id = $response->{'id'};
    $pass = $_POST['Password'];
    $salt = $_POST['salt'];
   
    
    $query = "UPDATE members SET password= '$pass', salt= '$salt' WHERE id= '$id' ";
    
        $result = mysql_query($query);
        if (!$result) {
    die('Invalid query: ' . mysql_error());
}
  echo $result;
   /* $response['responseCode'] = "00";
    $response['responseMessage'] = "SUCCESS";
    $response['surveyId'] = $surveyDisplayID;*/
    $response = base64_encode(json_encode($response)); 
    echo "<script type='text/javascript'>window.location.href='manage_members.php?data=".$response."'</script>";
    
}
elseif ($_GET['name']=='addMember')
{
    
    $username = $_POST['username'];
    $email = $_POST['Email'];
    $pass = $_POST['Password'];
    $salt = $_POST['salt'];
   
    
    $query = "insert into members (username, email, password, salt) values(
        '".$username."','".$email."','".$pass."','".$salt."')";
    

    mysql_query($query);
     
   /* $response['responseCode'] = "00";
    $response['responseMessage'] = "SUCCESS";
    $response['surveyId'] = $surveyDisplayID;*/
    //$response = base64_encode(json_encode($response)); 
    echo "<script type='text/javascript'>window.location.href='manage_members.php?status=Success'</script>";
    
}
elseif ($_GET['name']=='deleteMember')
{
    $response = $_GET['data'];
    $response = json_decode(base64_decode($response));
   $id= $response->{'id'};
    
    $version = mysql_query("Delete from members WHERE id= $id");
    $ver = mysql_fetch_array($version);


   /* $response['responseCode'] = "00";
    $response['responseMessage'] = "SUCCESS";
    $response['surveyId'] = $surveyDisplayID;
    $response = base64_encode(json_encode($response)); */
    echo "<script type='text/javascript'>window.location.href='manage_members.php?data=Deleted'</script>";
    
}
else
{
    
}
?>
