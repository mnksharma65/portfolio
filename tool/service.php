<?php
error_reporting(E_ALL);
$encKey = "Weblemo@AddyTools";
$user = "Testing";
require_once 'conn.php';
if($_GET['name']=='addSurvey')
{
    $projectName = $_POST['projectName'];
    $startDate = $_POST['startDate'];
    $surveyName = $_POST['surveyName'];
    $endDate = $_POST['endDate'];
    $clientName = $_POST['clientName'];
    $sales = $_POST['sales'];
    $cpi = $_POST['cpi'];
    $margin = $_POST['margin'];
    $revenue = $_POST['revenue'];
    $grossProfit = $_POST['grossProfit'];
    $loi = $_POST['loi'];
    $completesNeeded = $_POST['completesNeeded'];
    $ir = $_POST['ir'];
    $studyDescription = $_POST['studyDescription'];
    $country = $_POST['country'];
    $language = $_POST['language'];
    $notes = $_POST['notes'];
    if(isset($_POST['uniqueIp']))
        $uniqueIp = 1;
    else
        $uniqueIp = 0;
    if(isset($_POST['relevantId']))
        $relevantId = 1;
    else
        $relevantId = 0;
    if(isset($_POST['geoIp']))
        $geoIP = 1;
    else
        $geoIP = 0;
    $clientTestLink = $_POST['clientTestLink'];
    $clientLiveLink = $_POST['clientLiveLink'];
    $clientReportingLink = $_POST['clientReportingLink'];

    $baseURL = "http://weblemo.com/market-tool/getURL.php?hasId=";
    
    $surveyDisplayID = "market-essess-200-us-".$projectName."-".$surveyName;
    $query_product = mysql_query("select * from product where projectId='".$projectName."' and clientId='".$clientName."'");
    $run_product = mysql_fetch_array($query_product);
    $productId = $run_product[0];
    $query_validation = mysql_query("select * from validation where relevantId='".$relevantId."' and geoLocation='".$geoIP."' and ip='".$uniqueIp."'");
    $run_validation = mysql_fetch_array($query_validation);
    $validationId = $run_validation[0];

    mysql_query("insert into shorturl (baseURL, newURL, createdTime, updatedTime, encKey, hitCount, createdBy, version) values(
        '".$clientTestLink."','".$baseURL.$surveyDisplayID."&type=server-300',NOW(),NOW(),'".$encKey."',0,'".$user."',0)");
    $query_link_result = mysql_fetch_array(mysql_query("select * from shorturl where baseURL='".$clientTestLink."'"));
    $testLinkId = $query_link_result[0];

    mysql_query("insert into shorturl (baseURL, newURL, createdTime, updatedTime, encKey, hitCount, createdBy, version) values(
        '".$clientLiveLink."','".$baseURL.$surveyDisplayID."&type=server-200',NOW(),NOW(),'".$encKey."',0,'".$user."',0)");
    $query_link_result = mysql_fetch_array(mysql_query("select * from shorturl where baseURL='".$clientLiveLink."'"));
    $liveLinkId = $query_link_result[0];

    $query = "insert into survey (surveyDisplayId, surveyName, projectId, startDate, endDate, clientId, sales, cpi, margin, productId, revenue,
        grossProfit, loi, completesNeeded, ir, description, countryId, languageId, notes, validationId, testLinkId, liveLinkId, reportingLink, version) values(
        '".$surveyDisplayID."','".$surveyName."','".$projectName."','".$startDate."','".$endDate."',
            '".$clientName."','".$sales."','".$sales."','".$margin."','".$productId."',
                '".$revenue."','".$grossProfit."','".$loi."','".$completesNeeded."','".$ir."','".$studyDescription."',
                    '".$country."','".$language."','".$notes."','".$validationId."','".$testLinkId."','".$liveLinkId."',
                        '".$clientReportingLink."',0)";
    

    mysql_query($query);

    $response['responseCode'] = "00";
    $response['responseMessage'] = "SUCCESS";
    $response['surveyId'] = $surveyDisplayID;
    $response = base64_encode(json_encode($response));
    echo "<script type='text/javascript'>window.location.href='surveyView.php?data=".$response."'</script>";
}
elseif ($_GET['name']=='editSurvey')
{
    $response = $_GET['data'];
    $response = json_decode(base64_decode($response));
    $surveyId = $response->{'surveyId'};
    $id = $response->{'Id'};
    $projectName = $_POST['projectName'];
    $startDate = $_POST['startDate'];
    $surveyName = $_POST['surveyName'];
    $endDate = $_POST['endDate'];
    $clientName = $_POST['clientName'];
    $sales = $_POST['sales'];
    $cpi = $_POST['cpi'];
    $margin = $_POST['margin'];
    $revenue = $_POST['revenue'];
    $grossProfit = $_POST['grossProfit'];
    $loi = $_POST['loi'];
    $completesNeeded = $_POST['completesNeeded'];
    $ir = $_POST['ir'];
    $studyDescription = $_POST['studyDescription'];
    $country = $_POST['country'];
    $language = $_POST['language'];
    $notes = $_POST['notes'];
    if(isset($_POST['uniqueIp']))
        $uniqueIp = 1;
    else
        $uniqueIp = 0;
    if(isset($_POST['relevantId']))
        $relevantId = 1;
    else
        $relevantId = 0;
    if(isset($_POST['geoIp']))
        $geoIP = 1;
    else
        $geoIP = 0;
    $clientTestLink = $_POST['clientTestLink'];
    $clientLiveLink = $_POST['clientLiveLink'];
    $clientReportingLink = $_POST['clientReportingLink'];

    $baseURL = "http://weblemo.com/market-tool/getURL.php?hasId=";
    
    $surveyDisplayID = "market-essess-200-us-".$projectName."-".$surveyName;
    $query_product = mysql_query("select * from product where projectId='".$projectName."' and clientId='".$clientName."'");
    $run_product = mysql_fetch_array($query_product);
    $productId = $run_product[0];
    $query_validation = mysql_query("select * from validation where relevantId='".$relevantId."' and geoLocation='".$geoIP."' and ip='".$uniqueIp."'");
    $run_validation = mysql_fetch_array($query_validation);
    $validationId = $run_validation[0];

    mysql_query("insert into shorturl (baseURL, newURL, createdTime, updatedTime, encKey, hitCount, createdBy, version) values(
        '".$clientTestLink."','".$baseURL.$surveyDisplayID."&type=server-300',NOW(),NOW(),'".$encKey."',0,'".$user."',0)");
    $query_link_result = mysql_fetch_array(mysql_query("select * from shorturl where baseURL='".$clientTestLink."'"));
    $testLinkId = $query_link_result[0];

    mysql_query("insert into shorturl (baseURL, newURL, createdTime, updatedTime, encKey, hitCount, createdBy, version) values(
        '".$clientLiveLink."','".$baseURL.$surveyDisplayID."&type=server-200',NOW(),NOW(),'".$encKey."',0,'".$user."',0)");
    $query_link_result = mysql_fetch_array(mysql_query("select * from shorturl where baseURL='".$clientLiveLink."'"));
    $liveLinkId = $query_link_result[0];
    
    $version = mysql_query("Select version from survey WHERE id= $id");
    $ver = mysql_fetch_array($version);
    if (!$ver) {
    die('Invalid query1: ' . mysql_error());
}
    $verupdated = $ver['version'] + 1;
    $query = "UPDATE survey SET surveyDisplayId= '$surveyDisplayID', surveyName= '$surveyName', projectId= '$projectName', startDate= '$startDate', endDate= '$endDate', clientId= '$clientName', sales= '$sales', cpi= '$cpi', margin= '$margin', productId= '$productId', revenue= '$revenue', grossProfit= '$grossProfit', loi= '$loi', completesNeeded= '$completesNeeded', ir= '$ir', description= '$studyDescription', countryId= '$country', languageId= '$language', notes= '$notes', validationId= '$validationId', testLinkId= '$testLinkId', liveLinkId= '$liveLinkId', reportingLink= '$clientReportingLink', version= '$verupdated' WHERE id= $id ";
    
        $result = mysql_query($query);
        if (!$result) {
    die('Invalid query: ' . mysql_error());
}

   /* $response['responseCode'] = "00";
    $response['responseMessage'] = "SUCCESS";
    $response['surveyId'] = $surveyDisplayID;*/
    $response = base64_encode(json_encode($response)); 
    echo "<script type='text/javascript'>window.location.href='surveyView.php?data=".$response."'</script>";
    
}
elseif ($_GET['name']=='deleteSurvey')
{
    $response = $_GET['data'];
    $response = json_decode(base64_decode($response));
    $surveyId = $response->{'surveyId'};
    $id = $response->{'Id'};
    
    $version = mysql_query("Delete from survey WHERE id= $id");
    $ver = mysql_fetch_array($version);


   /* $response['responseCode'] = "00";
    $response['responseMessage'] = "SUCCESS";
    $response['surveyId'] = $surveyDisplayID;
    $response = base64_encode(json_encode($response)); */
    echo "<script type='text/javascript'>window.location.href='listSurvey.php?data=Deleted'</script>";
    
}
else
{
    
}
?>
