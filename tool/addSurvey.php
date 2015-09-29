<?php
    include("conn.php");
    $date = date('Y-m-d');
    
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
	.date::-webkit-inner-spin-button {
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

        .subside:link, .subside:visited {
            display: block;
            color: #999999;
            text-decoration: none;
            background-color: transparent;
        }

        .subside:hover, .subside:active {
            color: #000;
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
                <li><a href="#">Survey Management</a>
                    <ul type="none" class="subside">
                        <li><a href="#">Quota Management</a></li>
                        <li><a href="#">Quota Management</a></li>
                    </ul>
                </li>
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
                            <form id="form1" name="form1" method="post" action="service.php?name=addSurvey">
                                    <div class="row">
                                            <div class="large-4 columns">
                                              <label>Project Name</label>
                                              <select id="projectName" name="projectName" >
                                                <?php
                                                  $query1="SELECT id, projectName FROM project";
                                                  $rq1=mysql_query($query1,$con);
                                                  echo "<option value='2'>Select</option>";
                                                  while($rrq1=mysql_fetch_array($rq1))
                                                  {
                                                        echo "<option value='".$rrq1['id']."' >".$rrq1['projectName']."</option>";
                                                   }
                                                 ?>
                                              </select>
                                            </div>
                                            <div class="large-4 columns">
                                              <label>Start Date</label>
                                              <input type="date" class="date" name="startDate" id="startDate" value="<?php echo $date; ?>" required="required"/>
                                            </div>
                                            <div class="large-4 columns">
                                              <label>End Date</label>
                                              <input type="date" class="date" name="endDate" id="endDate" value="<?php echo $date; ?>" required="required"/>
                                            </div>
                                      </div>
                                    <div class="row">
                                            <div class="large-4 columns">
                                              <label>Survey Name</label>
                                              <input type="text" name="surveyName" id="surveyName" />
                                            </div>
                                            <div class="large-4 columns">
                                              <label>Client Name</label>
                                              <select id="clientName" name="clientName" >
                                                <?php
                                                  $query2="SELECT * FROM client";
                                                  $rq1=mysql_query($query2,$con);
                                                  echo "<option value='0'>Select Client</option>";
                                                  while($rrq1=mysql_fetch_array($rq1))
                                                  {
                                                        echo "<option value='".$rrq1['id']."' >".$rrq1['name']."</option>";
                                                   }
                                                ?>
                                              </select>
                                            </div>
                                            <div class="large-4 columns">
                                              <label>Country</label>
                                                      <select id="country" name="country" >
                                                          <?php
                                                              $query2="SELECT * FROM country";
                                                              $rq1=mysql_query($query2,$con);
                                                              echo "<option value='0'>Select Country</option>";
                                                              while($rrq1=mysql_fetch_array($rq1))
                                                              {
                                                                    echo "<option value='".$rrq1['id']."' >".$rrq1['name']."</option>";
                                                               }
                                                           ?>
                                                      </select>
                                            </div>
                                      </div>
                                    <div class="row">
                                            <div class="large-3 columns">
                                              <label>Sales</label>
                                              <input type="text" name="sales" id="sales" />
                                            </div>
                                            <div class="large-3 columns">
                                              <label>CPI</label>
                                              <input type="text" id="cpi" name="cpi" />
                                            </div>
                                            <div class="large-3 columns">
                                              <label>Margin</label>
                                                      <input type="text" id="margin" name="margin" />
                                            </div>
                                            <div class="large-3 columns">
                                              <label>Revenue</label>
                                                      <input type="text" id="revenue" name="revenue" />
                                            </div>
                                      </div>
                                      <div class="row">
                                            <div class="large-3 columns">
                                              <label>Gross Profit</label>
                                              <input type="text" name="grossProfit" id="grossProfit" />
                                            </div>
                                            <div class="large-3 columns">
                                              <label>LOI</label>
                                              <input type="text" id="loi" name="loi" />
                                            </div>
                                            <div class="large-3 columns">
                                              <label>Completes Needed</label>
                                                      <input type="text" id="completesNeeded" name="completesNeeded" />
                                            </div>
                                            <div class="large-3 columns">
                                              <label>IR</label>
                                                      <input type="text" id="ir" name="ir" />
                                            </div>
                                      </div>
                                      <div class="row">
                                            <div class="large-6 columns">
                                              <label>Study Description</label>
                                              <input type="text" name="studyDescription" id="studyDescription" />
                                            </div>
                                            <div class="large-6 columns">
                                              <label>Language</label>
                                                    <select id="language" name="language" >
                                                      <?php
                                                          $query2="SELECT * FROM language";
                                                          $rq1=mysql_query($query2,$con);
                                                          echo "<option value='0'>Select Language</option>";
                                                          while($rrq1=mysql_fetch_array($rq1))
                                                          {
                                                                echo "<option value='".$rrq1['id']."' >".$rrq1['name']."</option>";
                                                           }
                                                       ?>
                                                    </select>
                                            </div>
                                      </div>
                                      <div class="row">
                                            <div class="large-12 columns">
                                              <label>Notes</label>
                                                    <textarea id="notes" name="notes"></textarea>
                                            </div>
                                      </div>
                                      <div class="row">
                                            <div class="large-12 columns">
                                              <strong>Validations</strong>
                                              <br/>
                                            </div>
                                      </div>
                                      <div class="row" style="margin-top: 10px;">
                                            <div class="large-4 columns">
                                              <input id="uniqueIp" name="uniqueIp" type="checkbox"><label for="uniqueIp">Unique IP</label>
                                            </div>
                                            <div class="large-4 columns">
                                              <input id="relevantId" name="relevantId" type="checkbox"><label for="relevantId">Relevant ID</label>
                                            </div>
                                            <div class="large-4 columns">
                                              <input id="geoIp" name="geoIp" type="checkbox"><label for="geoIp">Geo IP</label>
                                            </div>
                                      </div>
                                      <div class="row">
                                            <div class="large-12 columns">
                                              <label>Client Test Link</label>
                                              <input type="text" name="clientTestLink" id="clientTestLink" />
                                            </div>
                                      </div>
                                      <div class="row">
                                            <div class="large-12 columns">
                                              <label>Client Live Link</label>
                                              <input type="text" name="clientLiveLink" id="clientLiveLink" />
                                            </div>
                                      </div>
                                      <div class="row">
                                            <div class="large-12 columns">
                                              <label>Client Reporting Link</label>
                                              <input type="text" name="clientReportingLink" id="clientReportingLink" />
                                            </div>
                                      </div>
                                      <div class="row">
                                            <div class="large-4 columns"></div>
                                            <div class="large-4 columns"></div>
                                            <div class="large-4 columns" style="text-align:center;">
                                                    <input type="submit" name="save" id="save" value="Save Survey" class="tiny button secondary" style="font-weight: bold; background-color: #81BEF7"/>
                                            </div>
                                      </div>
                                </form>
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