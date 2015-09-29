<?php
    error_reporting(E_ALL);
    include("conn.php");
    $encKey = "Weblemo@AddyTools";
    $response = $_GET['data'];
    $response = json_decode(base64_decode($response));
    $surveyId = $response->{'surveyId'};
    $query_survey = mysql_query("select * from survey where surveyDisplayId = '".$surveyId."'");
    $survey = mysql_fetch_array($query_survey);
    $query_project = mysql_query("select * from project where id = '".$survey['projectId']."'");
    $project = mysql_fetch_array($query_project);
    $query_client = mysql_query("select * from client where id = '".$survey['clientId']."'");
    $client = mysql_fetch_array($query_client);
    $query_language = mysql_query("select * from language where id = '".$survey['languageId']."'");
    $language = mysql_fetch_array($query_language);
    $query_country = mysql_query("select * from country where id = '".$survey['countryId']."'");
    $country = mysql_fetch_array($query_country);
    $query_validation = mysql_query("select * from validation where id = '".$survey['validationId']."'");
    $validation = mysql_fetch_array($query_validation);
    $query_linkLive = mysql_query("select * from shorturl where id = '".$survey['liveLinkId']."'");
    $linkLive = mysql_fetch_array($query_linkLive);
    $query_linkTest = mysql_query("select * from shorturl where id = '".$survey['testLinkId']."'");
    $linkTest = mysql_fetch_array($query_linkTest);
    
?>
<!DOCTYPE html>
<html>
<head>
<title>Weblemo-Survey</title>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="css/3353.css" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.png">
<link rel="icon" sizes="57x57" href="images/favicon-32x32.png">
<link rel="icon" sizes="57x57" href="images/favicon-57x57.png">
<link rel="icon" sizes="72x72" href="images/favicon-72x72.png">
<link rel="icon" sizes="76x76" href="images/favicon-76x76.png">
<link rel="icon" sizes="114x114" href="images/favicon-114x114.png">
<link rel="icon" sizes="120x120" href="images/favicon-120x120.png">
<link rel="icon" sizes="144x144" href="images/favicon-144x144.png">
<link rel="icon" sizes="152x152" href="images/favicon-152x152.png">

<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="images/favicon-144x144.png">
<meta name="application-name" content="Addy Tools">
<style>
td{
	padding: 5px; 5px; 5px; 5px;
}
</style>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <p><a href="index.htm"><img  src="images/logo.png"/></a></p>
        </div>
        <div id="navigation">
            <div id="tabs1">
				<ul>
				<li><a href="survey.php" title="Survey"><span>Survey</span></a></li>
				<li><a href="quota_details.php" title="Quota Details"><span>Quota</span></a></li>
				<li><a href="user_detail.php" title="User Corner"><span>Users</span></a></li>
				<li><a href="reports.php" title="Report"><span>Reports</span></a></li>
				<li><a href="qualification.php" title="Qualification"><span>Qualification</span></a></li>
				<li><a href="restriction.php" title="Restrictions"><span>Restriction</span></a></li>
				<li><a href="invite.php" title="Send invite"><span>Invite</span></a></li>
				<li><a href="dashboard.php" title="User Dashboard"><span>Dashboard</span></a></li>
				</ul>
			</div>
        </div>
        <div id="leftcolumn">
			<h3>Menu</h3>
			<ul>
				<li><a href="survey.php">Survey Management</a></li>
				<li><a href="select_survey.php">Details</a></li>
				<li><a href="#">Qualification</a></li>
				<li><a href="#">Setup Quotas</a></li>
				<li><a href="#">Vendor Setup</a></li>
				<li><a href="#">Send Invites</a></li>
				<li><a href="#">Tracking</a></li>
			</ul>

			<h3>Admin Tools</h3>
			<ul>
				<li><a href="#">Admin</a></li>
				<li><a href="#">Users</a></li>
				<li><a href="#">Reports</a></li>
			</ul>
        </div>
        <div id="content">
<form id="form1" name="form1" method="post" action="">
			  <table width="100%" border="1">
				<tr>
				  <td style="width:15%;">Project Name</td>
				  <td><?php echo $project['projectName'];?></td>
				  <td>Start Date</td>
				  <td><?php echo $survey['startDate'];?></td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>Survey Name</td>
				  <td><?php echo $survey['surveyName'];?></td>
				  <td>End Date</td>
				  <td><?php echo $survey['endDate'];?></td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>Client Name</td>
				  <td><?php echo $client['name'];?></td>
				  <td>Sales</td>
				  <td><?php echo $survey['sales'];?></td>
				  <td>CPI</td>
				  <td><?php echo $survey['cpi'];?></td>
				</tr>
				<tr>
				  <td>Client Contact</td>
				  <td><?php echo $client['name'];?></td>
				  <td>Project Manager</td>
				  <td><?php echo $project['projectManagerName'];?></td>
				  <td>Margin</td>
				  <td><?php echo $survey['margin'];?></td>
				</tr>
				<tr>
				  <td>Client Contact Number</td>
				  <td><?php echo $client['phone'];?></td>
				  <td>Product Line</td>
				  <td><?php echo $project['productLine'];?></td>
				  <td>Revenue</td>
				  <td><?php echo $survey['revenue'];?></td>
				</tr>
				<tr>
				  <td>Client Contact Email</td>
				  <td><?php echo $client['email'];?></td>
				  <td>ProductType</td>
				  <td><?php echo $project['productType'];?></td>
				  <td>Gross Profit</td>
				  <td><?php echo $survey['grossProfit'];?></td>
				</tr>
				<tr>
				  <td>Client PO#</td>
				  <td><?php echo $client['po'];?></td>
				  <td>LOI</td>
				  <td><?php echo $survey['loi'];?></td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>Completes Needed</td>
				  <td><?php echo $survey['completesNeeded'];?></td>
				  <td>IR</td>
				  <td><?php echo $survey['ir'];?></td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>Study Description</td>
				  <td><?php echo $survey['description'];?></td>
				  <td>Country</td>
				  <td><?php echo $country['name'];?></td>
				  <td>Language</td>
				  <td><?php echo $language['name'];?></td>
				</tr>
				<tr>
				  <td>Notes</td>
                                  <td colspan="5"><textarea name="notes" id="notes" cols="100" rows="5" accesskey="notes" tabindex="notes" disabled="disabled"><?php echo $survey['notes'];?></textarea></td>
				</tr>
				<tr>
				  <th colspan="6" bgcolor="#C9E1FF">Validations</th>
				</tr>
				<tr>
                                  <td style="text-align:right;"><input type="checkbox" name="uniqueIp" id="uniqueIp" accesskey="uniqueIp" tabindex="uniqueIp" disabled="disabled" <?php if($validation['Ip']==1){echo "checked";}else{echo "unchecked";} ?>/></td>
				  <td>Unique IP</td>
				  <td style="text-align:right;"><input type="checkbox" name="relevantId" id="relevantId" accesskey="relevantId" tabindex="relevantId"  disabled="disabled" <?php if($validation['relevantId']==1){echo "checked";}else{echo "unchecked";} ?>/></td>
				  <td>Relevant ID</td>
				  <td style="text-align:right;"><input type="checkbox" name="geoIP" id="geoIP" accesskey="geoIP" tabindex="geoIP"  disabled="disabled" <?php if($validation['geoLocation']==1){echo "checked";}else{echo "unchecked";} ?>/></td>
				  <td>GeoIP</td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td colspan="5">&nbsp;</td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td colspan="5">&nbsp;</td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td colspan="5">&nbsp;</td>
				</tr>
				<tr>
				  <th colspan="6">&nbsp;</th>
				</tr>
				<tr>
				  <td>Client Test Link</td>
				  <td colspan="5"><?php echo $linkTest['baseURL'];?></td>
				</tr>
				<tr>
				  <td>Client Live Link</td>
				  <td colspan="5"><?php echo $linkLive['baseURL'];?></td>
				</tr>
				<tr>
				  <th colspan="6">&nbsp;</th>
				</tr>
				<tr>
				  <td>Test Link</td>
				  <td colspan="5"><?php echo $linkTest['newURL'];?></td>
				</tr>
				<tr>
				  <td>Live Link</td>
				  <td colspan="5"><?php echo $linkLive['newURL'];?></td>
				</tr>
				<tr>
				  <th colspan="6">&nbsp;</th>
				</tr>
				<tr>
				  <td>Client Reporting Link</td>
				  <td colspan="5"><?php echo $survey['reportingLink'];?></td>
				</tr>
				<tr>
				  <th colspan="8" style="text-align: right;">
                                      <a href="editSurvey.php?data=<?php echo $_GET['data']; ?>"><img src="images/update.png"  alt="Update Survey" title="Update Survey"/></a>
                                      <a href="listSurvey.php"><img src="images/list.png" alt="List All Survey" title="List All Survey"/></a>
                                      <a href="deleteSurvey.php?data=<?php echo $_GET['data']; ?>"><img src="images/delete.png"  alt="Delete Survey" title="Delete Survey"/></a>
                                  </th>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td colspan="5">&nbsp;</td>
				</tr>
				<tr>
				  <td colspan="6">&nbsp;</td>
				</tr>
			  </table>
			</form>
       </div>
        <div id="footer">
            <p>This is the Footer</p>
        </div>
    </div>
</body>
</html>

