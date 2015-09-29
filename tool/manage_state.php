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

</head>

<body>

    <div id="wrapper">
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">Manage members</a>
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
                                <tr><th></th><th></th></tr>
                             
				  
                                <form name="state" method="post" action="service_state.php?name=deleteState">
                                  <tr>
				  <td style"width:10%;">Select Country</td>
				  <td><select id="country" name="country">
                                          echo "<option value='0'>Select Country</option>";
<?php
include("conn.php");

  $query1="SELECT id, name FROM country";
  $rq1=mysql_query($query1,$con);
  while($rrq1=mysql_fetch_array($rq1))
  {
  ?>
  <option value="<?php echo $rrq1['id']; ?>" id="<?php echo $rrq1['name']; ?>"><?php echo $rrq1['name']; ?></option>
  <?php } ?></td>
 </tr>           
 <tr><td style"width:10%;">Select State</td><td><select id="state" name="state">
</select>
</td>
 </tr>
 <tr><td></td><td> <?php echo '<input type="image"  id="saveform" src="images/delete.png " alt="Submit Form" />
                                                ';
 ?></td></tr>
                                  </form>
                                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
  $('#country').change(function()
    {
        populateSecond();
        
    });
     function populateSecond()
    {
        var first = $('#country').val();
        
        var req = $.post('getState.php', {val: first});
        req.done(function(data)
        {
            $('#state').html(data);
        });
    }
    function navigate()
    {
        var val1 = $('#country').val();
        var url = "/tool/add_state.php?country="+val1;    
$(location).attr('href',url);
    }
</script>
                                  </tr>
                            </table>
                              <?php
                                echo '<a onclick="navigate()" class="tiny button secondary" style="background-color: #81BEF7">Add States</a>';
                                
                                
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