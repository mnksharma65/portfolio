<?php
    error_reporting(E_ALL);
    $encKey = "Weblemo@AddyTools";
    $user = "Testing";
    require_once '../conn.php';
    if($_GET['name']=='addProject')
    {
        $projectName = $_POST['projectName'];
        $projectManagerName = $_POST['projectManagerName'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $productLine = $_POST['productLine'];
        $productType = $_POST['productType'];
        $query = "insert into project (projectName, projectManagerName, managerMobile, managerEmail, masterId, productLine, productType,
            version) values('".$projectName."','".$projectManagerName."','".$mobile."','".$email."',0,'".$productLine."',
                '".$productType."',0)";
        mysql_query($query);

        $query = mysql_query("select * from project where projectName='".$projectName."'");
        $project=mysql_fetch_array($query);
        
        $response['responseCode'] = "00";
        $response['responseMessage'] = "SUCCESS";
        $response['projectId'] = $project['id'];
        $response = base64_encode(json_encode($response));
        echo "<script type='text/javascript'>window.location.href='projectMasterShow.php?data=".$response."'</script>";
    }
?>
