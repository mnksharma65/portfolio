<?php
    error_reporting(E_ALL);
    include("conn.php");
    $encKey = "Weblemo@AddyTools";
    $query_survey = mysql_query("select * from survey");
?>
<html>
<head>
<link rel="stylesheet" href="css/pure-min.css">
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="css/grids-responsive-min.css">
<style>
li {
 height: auto !important;
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
<body background="student.jpg">
    <div class="pure-menu pure-menu-horizontal row">
    <ul class="pure-menu-list" style="font-size: 1.25em;">
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Survey</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Quota</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Qualification</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Vendor</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Reports</a></li>
        <li class="pure-menu-item" style="width: 60px;"></li>
	<li class="pure-menu-item"><a href="#" class="pure-menu-link">Anuj Panwar</a></li>
	<li class="pure-menu-item"><a href="survey1.php"><img src="images/logout.png" height="32px;" width="32px;"/></a></li>
    </ul>
	</div>
	<div style="height:50px;"></div>

    <div class="row" style="width: 100% !important;">
      <div class="large-12 medium-12 columns">
            <table class="responsive">
               <tr><th>ID</th><th>Survey Name</th><th>Survey Display ID</th><th>Project Name</th><th>Client Name</th><th>Completes Needed</th><th>&nbsp;</th></tr>
                <?php
                    $i = 1;
                    while($survey = mysql_fetch_array($query_survey))
                        {
                            $project = mysql_query("select * from project where id = '".$survey['projectId']."' ");
                            $result_project = mysql_fetch_array($project);
                            $client = mysql_query("select * from client where id = '".$survey['clientId']."' ");
                            $result_client = mysql_fetch_array($client);
                            echo '<tr><td>'.$i.'</td><td>'.$survey['surveyName'].'</td><td>'.$survey['surveyDisplayId'].'</td>';
                            echo '<td>'.$result_project['projectName'].'</td>';
                            echo '<td>'.$result_client['name'].'</td>';
                            echo '<td>'.$survey['completesNeeded'].'</td>';
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
    </div>
</body>
</html>