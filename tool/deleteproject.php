<?php
    error_reporting(E_ALL);
    include("conn.php");
    $encKey = "Weblemo@AddyTools";
    $response = $_GET['data'];
    $response = json_decode(base64_decode($response));
   $projectId = $response->{'id'};
    $query_project = mysql_query("select * from project where id = '".$projectId."'");
    $project = mysql_fetch_array($query_project);
   
    

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
                                      <td><strong>Project Manager</strong></td>
                                      <td><?php echo $project['projectManagerName'];?></td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td><strong>Manager Mobile</strong></td>
                                      <td><?php echo $project['managerMobile'];?></td>
                                      <td><strong>Manager Email</strong></td>
                                      <td><?php echo $project['managerEmail'];?></td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    
                                   
                                      <th colspan="8" style="text-align: right;">
                                          <?php
                              $response = base64_encode(json_encode($response));
                            echo '<form id="form1" name="form1" method="post" action="service_project.php?name=deleteProject&&data='.$response.'">'
                                    . '<input type="submit" name="save" id="save" value="Confirm Delete" class="tiny button secondary" style="font-weight: bold; background-color: #81BEF7"/>'
                                    . '</form>';
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