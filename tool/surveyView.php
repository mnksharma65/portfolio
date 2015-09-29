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
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
	.date:-webkit-inner-spin-button {
		display: none;
		-webkit-appearance: none;
	}
	.date:-webkit-calendar-picker-indicator {
		display: none;
		-webkit-appearance: none;
	}
	body {
			padding-left: 20px !important;
			}
	table {
			align: center !important;
	}
        table#responsive tr:hover, tr.hover{
                    background: #fff !important;
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
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">Market Essc</a>
		</div>
              <div style="margin-top: 20px; text-align: right; margin-right: 50px;">
                  Anuj Panwar <a href=""><img src="images/logout.png" height="32px;" width="32px;"/></a>
              </div>
	  </div>
	</nav>
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Survey Management</a></li>
                <li><a href="#">Qualification</a></li>
                <li><a href="#">Quota Management</a></li>
                <li><a href="#">Vendor</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Invites</a></li>
                <li><a href="#">Tracking</a></li>
                <li><a href="#">Admin</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                          <div class="large-12 medium-12 columns">
                              <table class="responsive">
                                    <tr>
                                        <td><strong>Project Name</strong></td>
                                      <td><?php echo $project['projectName'];?></td>
                                      <td><strong>Start Date</strong></td>
                                      <td><?php echo $survey['startDate'];?></td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td><strong>Survey Name</strong></td>
                                      <td><?php echo $survey['surveyName'];?></td>
                                      <td><strong>End Date</strong></td>
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
                                      <td><strong>Client Name</strong></td>
                                      <td><?php echo $client['name'];?></td>
                                      <td><strong>Sales</strong></td>
                                      <td><?php echo $survey['sales'];?></td>
                                      <td><strong>CPI</strong></td>
                                      <td><?php echo $survey['cpi'];?></td>
                                    </tr>
                                    <tr>
                                      <td><strong>Client Contact</strong></td>
                                      <td><?php echo $client['name'];?></td>
                                      <td><strong>Project Manager</strong></td>
                                      <td><?php echo $project['projectManagerName'];?></td>
                                      <td><strong>Margin</strong></td>
                                      <td><?php echo $survey['margin'];?></td>
                                    </tr>
                                    <tr>
                                      <td><strong>Client Contact Number</strong></td>
                                      <td><?php echo $client['phone'];?></td>
                                      <td><strong>Product Line</strong></td>
                                      <td><?php echo $project['productLine'];?></td>
                                      <td><strong>Revenue</strong></td>
                                      <td><?php echo $survey['revenue'];?></td>
                                    </tr>
                                    <tr>
                                      <td><strong>Client Contact Email</strong></td>
                                      <td><?php echo $client['email'];?></td>
                                      <td><strong>ProductType</strong></td>
                                      <td><?php echo $project['productType'];?></td>
                                      <td><strong>Gross Profit</strong></td>
                                      <td><?php echo $survey['grossProfit'];?></td>
                                    </tr>
                                    <tr>
                                      <td><strong>Client PO#</strong></td>
                                      <td><?php echo $client['po'];?></td>
                                      <td><strong>LOI</strong></td>
                                      <td><?php echo $survey['loi'];?></td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td><strong>Completes Needed</strong></td>
                                      <td><?php echo $survey['completesNeeded'];?></td>
                                      <td><strong>IR</strong></td>
                                      <td><?php echo $survey['ir'];?></td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td><strong>Study Description</strong></td>
                                      <td><?php echo $survey['description'];?></td>
                                      <td><strong>Country</strong></td>
                                      <td><?php echo $country['name'];?></td>
                                      <td><strong>Language</strong></td>
                                      <td><?php echo $language['name'];?></td>
                                    </tr>
                                    <tr>
                                      <td><strong>Notes</strong></td>
                                      <td colspan="5"><textarea name="notes" id="notes" cols="100" rows="5" accesskey="notes" tabindex="notes" disabled="disabled"><?php echo $survey['notes'];?></textarea></td>
                                    </tr>
                                    <tr>
                                      <th colspan="6" bgcolor="#C9E1FF"><strong>Validations</strong></th>
                                    </tr>
                                    <tr>
                                      <td style="text-align:right;"><input type="checkbox" name="uniqueIp" id="uniqueIp" accesskey="uniqueIp" tabindex="uniqueIp" disabled="disabled" <?php if($validation['Ip']==1){echo "checked";}else{echo "unchecked";} ?>/></td>
                                      <td><strong>Unique IP</strong></td>
                                      <td style="text-align:right;"><input type="checkbox" name="relevantId" id="relevantId" accesskey="relevantId" tabindex="relevantId"  disabled="disabled" <?php if($validation['relevantId']==1){echo "checked";}else{echo "unchecked";} ?>/></td>
                                      <td><strong>Relevant ID</strong></td>
                                      <td style="text-align:right;"><input type="checkbox" name="geoIP" id="geoIP" accesskey="geoIP" tabindex="geoIP"  disabled="disabled" <?php if($validation['geoLocation']==1){echo "checked";}else{echo "unchecked";} ?>/></td>
                                      <td><strong>GeoIP</strong></td>
                                    </tr>
                                    <tr>
                                      <th colspan="6">&nbsp;</th>
                                    </tr>
                                    <tr>
                                      <td><strong>Client Test Link</strong></td>
                                      <td colspan="5"><?php echo $linkTest['baseURL'];?></td>
                                    </tr>
                                    <tr>
                                      <td><strong>Client Live Link</strong></td>
                                      <td colspan="5"><?php echo $linkLive['baseURL'];?></td>
                                    </tr>
                                    <tr>
                                      <td><strong>Test Link</strong></td>
                                      <td colspan="5"><?php echo $linkTest['newURL'];?></td>
                                    </tr>
                                    <tr>
                                      <td><strong>Live Link</strong></td>
                                      <td colspan="5"><?php echo $linkLive['newURL'];?></td>
                                    </tr>
                                    <tr>
                                      <td><strong>Client Reporting Link</strong></td>
                                      <td colspan="5"><?php echo $survey['reportingLink'];?></td>
                                    </tr>
                                    <tr>
                                      <th colspan="8" style="text-align: right;">
                                          <?php
                                         $response = base64_encode(json_encode($response));
                                            echo '<tr><th colspan="8" style="text-align: right;"><a href="editSurvey.php?data='.$response.'"><img src="images/update.png"  alt="Update Survey" title="Update Survey"/></a>
                                                <a href="listSurvey.php"><img src="images/list.png" alt="List All Survey" title="List All Survey"/></a>
                                                <a href="deleteSurvey.php?data='.$response.'"><img src="images/delete.png"  alt="Delete Survey" title="Delete Survey"/></a>
                                                </td></tr>';
                                            ?>
                                          
                                         
                                      </th>
                                    </tr>
                              </table>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>