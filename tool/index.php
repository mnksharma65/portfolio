<!DOCTYPE html>
<html>
<head>
<title>Weblemo</title>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script>

 function populateData(str){
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","project.php?q="+str,true);
		
        xmlhttp.send();
    }

 }
</script>
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
				  <td style"width:15%;">Project Name</td>
				  <td><select class="dropdown"  name="projectName" onchange="populateData(this.value)">
	<?php
include("conn.php");
session_start();
  $query1="SELECT school_name FROM school where school_name<>''";
$rq1=mysqli_query($connection, $query1);
  while($rrq1=mysqli_fetch_array($rq1))
  {
  ?>
  <option value="<?php echo $rrq1['id']; ?>" ><?php echo $rrq1['projectName']; ?></option>
  <?php } ?></select></td>
				  <td>Start Date</td>
				  <td><input type="date" name="startDate" id="startDate" accesskey="startDate" tabindex="startDate" /></td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>Survey Name</td>
				  <td><input type="text" name="surveyName" id="surveyName" accesskey="Survey Name" tabindex="Survey Name" /></td>
				  <td>End Date</td>
				  <td><input type="date" name="endDate" id="endDate" accesskey="endDate" tabindex="endDate" /></td>
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
				  <td><select id="clientName" name="clientName">
	<?php

  $query2="SELECT * FROM client";
  $rq1=mysql_query($query2,$con);
  while($rrq1=mysql_fetch_array($rq1))
  {
  ?>
  <option name="cat" ><?php echo $rrq1['name']; ?></option>
  <?php } ?></td>
				  <td>Sales</td>
				  <td><input type="text" name="sales" id="sales" accesskey="sales" tabindex="sales" /></td>
				  <td>CPI</td>
				  <td><input type="text" name="cpi" id="cpi" accesskey="cpi" tabindex="cpi" /></td>
				</tr>
				<tr>
				  <td>Client Contact</td>
				  <td><input type="text" name="clientContact" id="clientContact" accesskey="clientContact" tabindex="clientContact" /></td>
				  <td>Project Manager</td>
				  <td><input type="text" name="projectManager" id="projectManager" readonly="readonly" accesskey="projectManager" tabindex="projectManager" value='<?php echo $_SESSION['pn']?>'/></td>
				  <td>Margin</td>
				  <td><input type="text" name="margin" id="margin" accesskey="margin" tabindex="margin" /></td>
				</tr>
				<tr>
				  <td>Client Contact Number</td>
				  <td><input type="text" name="clientContactNumber" id="clientContactNumber" accesskey="clientContactNumber" tabindex="clientContactNumber" /></td>
				  <td>Product Line</td>
				  <td><input type="text" name="projectLine" id="projectLine" accesskey="projectLine" tabindex="projectLine" /></td>
				  <td>Revenue</td>
				  <td><input type="text" name="revenue" id="revenue" accesskey="revenue" tabindex="revenue" /></td>
				</tr>
				<tr>
				  <td>Client Contact Email</td>
				  <td><input type="text" name="clientContactEmail" id="clientContactEmail" accesskey="clientContactEmail" tabindex="clientContactEmail" /></td>
				  <td>ProductType</td>
				  <td><input type="text" name="productType" id="productType" accesskey="productType" tabindex="productType" /></td>
				  <td>Gross Profit</td>
				  <td><input type="text" name="grossProfit" id="grossProfit" accesskey="grossProfit" tabindex="grossProfit" /></td>
				</tr>
				<tr>
				  <td>Client PO#</td>
				  <td><input type="text" name="clientPO" id="clientPO" accesskey="clientPO" tabindex="clientPO" /></td>
				  <td>LOI</td>
				  <td><input type="text" name="loi" id="loi" accesskey="loi" tabindex="loi" /></td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>Completes Needed</td>
				  <td><input type="text" name="completesNeeded" id="completesNeeded" accesskey="completesNeeded" tabindex="completesNeeded" /></td>
				  <td>IR</td>
				  <td><input type="text" name="ir" id="ir" accesskey="ir" tabindex="ir" /></td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td>Study Description</td>
				  <td><input type="text" name="studyDescription" id="studyDescription" accesskey="studyDescription" tabindex="studyDescription" /></td>
				  <td>Country</td>
				  <td><input type="text" name="country" id="country" accesskey="country" tabindex="country" /></td>
				  <td>Language</td>
				  <td><input type="text" name="language" id="language" accesskey="language" tabindex="language" /></td>
				</tr>
				<tr>
				  <td>Notes</td>
				  <td colspan="5"><textarea name="notes" id="notes" cols="100" rows="5" accesskey="notes" tabindex="notes"></textarea></td>
				</tr>
				<tr>
				  <th colspan="6" bgcolor="#C9E1FF">Validations</th>
				</tr>
				<tr>
				  <td style="text-align:right;"><input type="checkbox" name="uniqueIp" id="uniqueIp" accesskey="uniqueIp" tabindex="uniqueIp" /></td>
				  <td>Unique IP</td>
				  <td style="text-align:right;"><input type="checkbox" name="relevantId" id="relevantId" accesskey="relevantId" tabindex="relevantId" /></td>
				  <td>Relevant ID</td>
				  <td style="text-align:right;"><input type="checkbox" name="geoIP" id="geoIP" accesskey="geoIP" tabindex="geoIP" /></td>
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
				  <td colspan="5"><input name="clientTestLink" type="text" id="clientTestLink" accesskey="clientTestLink" tabindex="clientTestLink" size="120" /></td>
				</tr>
				<tr>
				  <td>Client Live Link</td>
				  <td colspan="5"><input name="clientLiveLink" type="text" id="clientLiveLink" accesskey="clientLiveLink" tabindex="clientLiveLink" size="120" /></td>
				</tr>    
				<tr>
				  <th colspan="6">&nbsp;</th>
				</tr>    
				<tr>
				  <td>Test Link</td>
				  <td colspan="5"><input name="testLink" type="text" id="testLink" accesskey="testLink" tabindex="testLink" size="120" /></td>
				</tr>
				<tr>
				  <td>Live Link</td>
				  <td colspan="5"><input name="liveLink" type="text" id="liveLink" accesskey="liveLink" tabindex="liveLink" size="120" /></td>
				</tr>   
				<tr>
				  <th colspan="6">&nbsp;</th>
				</tr>    
				<tr>
				  <td>Client Reporting Link</td>
				  <td colspan="5"><input name="clientReportingLink" type="text" id="clientReportingLink" accesskey="clientReportingLink" tabindex="clientReportingLink" size="120" /></td>
				</tr>
				<tr>
				  <td>User Name</td>
				  <td colspan="5"><input type="text" name="userName" id="userName" accesskey="userName" tabindex="userName" /></td>
				</tr>
				<tr>
				  <td>Password</td>
				  <td colspan="5"><input type="password" name="password" id="password" accesskey="password" tabindex="password" /></td>
				</tr>
				<tr>
				  <th colspan="6">&nbsp;</th>
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
