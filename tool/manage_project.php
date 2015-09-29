<?php
    error_reporting(E_ALL);
    include("conn.php");
    $encKey = "Weblemo@AddyTools";
    $page_name="manage_project.php"; //  If you use this code with a different page ( or file ) name then change this
    $start=$_GET['start'];
    if(strlen($start) > 0 and !is_numeric($start)){
    echo "Data Error";
    exit;
    }


    $table = "project";
    $eu = ($start - 0);
    $limit = 12;                                
    $this1 = $eu + $limit;
    $back = $eu - $limit;
    $next = $eu + $limit;

    $nume_query = mysql_query("select count(id) from $table");
    $nume_result = mysql_fetch_array($nume_query);
    $nume = $nume_result[0];
    $query_project = mysql_query("select * from $table limit $eu, $limit");
    
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
		  <a class="navbar-brand" href="#">Manage projects</a>
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
                <li><b>Master</b></li>
                <li><a href="manage_project.php">Project</a></li>
                <li><a href="manage_members.php">Members</a></li>
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
                               <tr><th>ID</th><th>Project Name</th><th>Project Manager Name</th><th>Mobile</th><th>Email</th><th>&nbsp;</th></tr>
                                <?php
                                    $i = $start+1;
                                    while($project = mysql_fetch_array($query_project))
                                        {
                                            $project = mysql_query("select * from project where id = '".$project['id']."' ");
                                            $result_project = mysql_fetch_array($project);
                                            
                                            echo '<tr><td>'.$i.'</td><td>'.$result_project['projectName'].'</td>';
                                            echo '<td>'.$result_project['projectManagerName'].'</td>';
                                            echo '<td>'.$result_project['managerMobile'].'</td>';
                                            echo '<td>'.$result_project['managerEmail'].'</td>';
                                            $response['id'] = $result_project['id'];
                                            $response['projectName'] = $result_project['projectName'];
                                            $response = base64_encode(json_encode($response));
                                            echo '<td><a href="edit_project.php?data='.$response.'"><img src="images/update.png"  alt="Update Survey" title="Update Survey"/></a>
                                                
                                                <a href="deleteproject.php?data='.$response.'"><img src="images/delete.png"  alt="Delete Survey" title="Delete Survey"/></a>
                                                </td></tr>';
                                            $response = "";
                                            $i++;
                                    }
                                ?>
                            </table>
                              <?php
                                echo '<a href="addProject.php" class="tiny button secondary" style="background-color: #81BEF7">Add Project</a>';
                                if($nume > $limit ){
                                    echo "<table id='responsive' class='responsive' style='width:100% !important; border-width: 0px !important;' ><tr><td>";
                                    
                                    if($back >=0) {
                                    print "<a href='$page_name?start=$back'><font face='Verdana' size='2'>PREV</font></a>";
                                    }
                                    echo "</td><td>";
                                    $i=0;
                                    $l=1;
                                    for($i=0;$i < $nume;$i=$i+$limit){
                                    if($i <> $eu){
                                    echo " <a href='$page_name?start=$i'><font face='Verdana' size='2'>$l</font></a> ";
                                    }
                                    else { echo "<font face='Verdana' size='4' color=blue>$l</font>";}
                                    $l=$l+1;
                                    }
                                    echo "</td><td>";
                                    if($this1 < $nume) {
                                    print "<a href='$page_name?start=$next'><font face='Verdana' size='2'>NEXT</font></a>";}
                                    echo "</td></tr></table>";
                                }
                                
                                ?>
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