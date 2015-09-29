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
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>

 <script language = "javascript">
       /*    function addTextField(){
                var element = document.createElement("input");
                element.setAttribute("type", "text");
                element.setAttribute("name", "ca[]");
                element.setAttribute("id", "ca[]");

                var country = document.getElementById("countries");
                country.appendChild(element);

            } */

        </script>
</head>

<body>

    <div id="wrapper">
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">Add Project</a>
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
                              <?php
                              include("conn.php");
                              $q = "Select name from country Where id='".$_GET['country']."'";
                              $rq1=mysql_query($q,$con);
                              $rrq1=mysql_fetch_array($rq1);
                               echo '<form id="form" name="form" method="post" action="service_country.php?name=addState&&country='.$_GET['country'].'">';
                                 echo "Add states to ".$rrq1['name'];   ?>
                                          
                                      </div>
                                    <div class="row">
                                            <div class="large-4 columns">
                                              <label>State</label>
                                              1.<input type="text" name="ca[]" id="ca[]"/><div class="result" id="result"></div>
                                            </div>
                                        <div class="large-4 columns">
                                              <label>State</label>
                                              2.<input type="text" name="ca[]" id="ca[]"/><div class="result" id="result"></div>
                                            </div>
                                        
                                       </div>
                            <div class="row">
                                            <div class="large-4 columns">
                                              <label>State</label>
                                              3.<input type="text" name="ca[]" id="ca[]"/><div class="result" id="result"></div>
                                            </div>
                                        <div class="large-4 columns">
                                              <label>State</label>
                                              4.<input type="text" name="ca[]" id="ca[]"/><div class="result" id="result"></div>
                                            </div>
                                        
                                       </div>
                            <div class="row">
                                            <div class="large-4 columns">
                                              <label>State</label>
                                              5.<input type="text" name="ca[]" id="ca[]"/><div class="result" id="result"></div>
                                            </div>
                                        <div class="large-4 columns">
                                              <label>State</label>
                                              6.<input type="text" name="ca[]" id="ca[]"/><div class="result" id="result"></div>
                                            </div>
                                        
                                       </div>
                            <div class="row">
                                            <div class="large-4 columns">
                                              <label>State</label>
                                              7.<input type="text" name="ca[]" id="ca[]"/><div class="result" id="result"></div>
                                            </div>
                                        <div class="large-4 columns">
                                              <label>State</label>
                                              8.<input type="text" name="ca[]" id="ca[]"/><div class="result" id="result"></div>
                                            </div>
                                        
                                       </div>
                            <div class="row">
                                            <div class="large-4 columns">
                                              <label>State</label>
                                              9.<input type="text" name="ca[]" id="ca[]"/><div class="result" id="result"></div>
                                            </div>
                                        <div class="large-4 columns">
                                              <label>State</label>
                                              10.<input type="text" name="ca[]" id="ca[]"/><div class="result" id="result"></div>
                                            </div>
                                        
                                       </div>
                                       
                                   
                                      
                                      <div class="column">
                                     <span id="countries">&nbsp;</span>
                                      </div>
                                     
                                      <div class="row">
                                            <div class="large-4 columns"></div>
                                            <div class="large-4 columns"></div>
                                            <div class="large-4 columns" style="text-align:center;">
                                                    <input type="submit" name="save" id="save" value="Submit" class="tiny button secondary" style="font-weight: bold; background-color: #81BEF7"/>
                                            </div>
                                      </div>
                                <?php
                              
                            echo '</form>';
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
