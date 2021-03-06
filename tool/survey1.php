<?php
    error_reporting(E_ALL);
    include("conn.php");
    $encKey = "Weblemo@AddyTools";
    //$response = $_GET['data'];
    //$response = json_decode(base64_decode($response));
    $query_survey = mysql_query("select * from survey");
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
<link rel="stylesheet" href="css/foundation.css" />
<script src="js/vendor/modernizr.js"></script>
<style>
	label {
		font-weight: bold;
	}
	table.responsive tr:hover, tr.hover{
			background: #E5E5F5;
		}
	.date{
	  padding-left:30px;
	  height: 22px;
	}
	.date::-webkit-inner-spin-button {
		display: none;
		-webkit-appearance: none;
	},
	.date::-webkit-calendar-picker-indicator {
		display: none;
		-webkit-appearance: none;
	}
	body {
			padding-left: 20px !important;
			background-image:url('images/bg.png');
			background-repeat:repeat;
		}
	table {
			align: center !important;
	}
</style>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>
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
            <table class="responsive">
                <tr><td>ID</td><td>Survey Name</td><td>Survey Display ID</td><td>Completes Needed</td><td>&nbsp;</td></tr>
                <?php
                    $i = 1;
                    while($survey = mysql_fetch_array($query_survey))
                        {
                            echo '<tr><td>'.$i.'</td><td>'.$survey['surveyName'].'</td><td>'.$survey['surveyDisplayId'].'</td><td>'.$survey['completesNeeded'].'</td>';
                            $response['surveyId'] = $survey['surveyDisplayId'];
                            $response = base64_encode(json_encode($response));
                            echo '<td><a href="editSurvey.php?data='.$response.'"><img src="images/update.png"  alt="Update Survey" title="Update Survey"/></a>
                                <a href="surveyView.php?data='.$response.'"><img src="images/show.png" alt="Show Survey" title="Show Survey"/></a>
                                <a href="deleteSurvey.php?data='.$response.'"><img src="images/delete.png"  alt="Delete Survey" title="Delete Survey"/></a>
                                </td></tr>';
                            $response = "";
                            $i++;
                    }
                ?>
            </table>
       </div>
        <div id="footer">
            <p>This is the Footer</p>
        </div>
    </div>
</body>
</html>
