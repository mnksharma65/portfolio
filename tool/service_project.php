<?php
error_reporting(E_ALL);
$encKey = "Weblemo@AddyTools";
$user = "Testing";
require_once 'conn.php';
if ($_GET['name']=='editProject')
{
    $response = $_GET['data'];
    $response = json_decode(base64_decode($response));
   $projectId = $response->{'id'};
    $projectName = $response->{'projectName'};
    $projectNameupdate = $_POST['projectName'];
    $pmname = $_POST['pmName'];
    $pmmobile = $_POST['pmMobile'];
    $email = $_POST['email'];
   
    
    $query = "UPDATE project SET projectName= '$projectNameupdate', projectManagerName= '$pmname', managerMobile= $pmmobile, managerEmail= '$email' WHERE id= '$projectId' ";
    
        $result = mysql_query($query);
        if (!$result) {
    die('Invalid query: ' . mysql_error());
}
  echo $result;
   /* $response['responseCode'] = "00";
    $response['responseMessage'] = "SUCCESS";
    $response['surveyId'] = $surveyDisplayID;*/
    $response = base64_encode(json_encode($response)); 
    echo "<script type='text/javascript'>window.location.href='manage_project.php?data=".$response."'</script>";
    
}
elseif ($_GET['name']=='addProject')
{
    
    $projectNameupdate = $_POST['projectName'];
    $pmname = $_POST['pmName'];
    $pmmobile = $_POST['pmMobile'];
    $email = $_POST['email'];
   
    
    $query = "insert into project (projectName, projectManagerName, managerMobile, managerEmail) values(
        '".$projectNameupdate."','".$pmname."','".$pmmobile."','".$email."')";
    

    mysql_query($query);
     
   /* $response['responseCode'] = "00";
    $response['responseMessage'] = "SUCCESS";
    $response['surveyId'] = $surveyDisplayID;*/
    //$response = base64_encode(json_encode($response)); 
    echo "<script type='text/javascript'>window.location.href='manage_project.php?status=Success'</script>";
    
}
elseif ($_GET['name']=='deleteProject')
{
    $response = $_GET['data'];
    $response = json_decode(base64_decode($response));
   $projectId = $response->{'id'};
    
    $version = mysql_query("Delete from project WHERE id= $projectId");
    $ver = mysql_fetch_array($version);


   /* $response['responseCode'] = "00";
    $response['responseMessage'] = "SUCCESS";
    $response['surveyId'] = $surveyDisplayID;
    $response = base64_encode(json_encode($response)); */
    echo "<script type='text/javascript'>window.location.href='manage_project.php?data=Deleted'</script>";
    
}
else
{
    
}
?>
