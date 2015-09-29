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
<script type="text/javascript">
$(document).ready(function(){
    $('#username').keyup(function(){
        var username = $(this).val(); // Get username textbox using $(this)
        var Result = $('#result'); // Get ID of the result DIV where we display the results
        if(username.length > 2) { // if greater than 2 (minimum 3)
            Result.html('Loading...'); // you can use loading animation here
            var dataPass = 'username='+username;
            $.ajax({ // Send the username val to available.php
            type : 'POST',
            data : dataPass,
            url  : 'available.php',
            success: function(responseText){ // Get the result
                if(responseText == 0){
                    Result.html('<span class="success">Username is available</span>');
                    document.getElementById("save").disabled = false;
                }
                else if(responseText > 0){
                    Result.html('<span class="error">Username already taken</span>');
                    document.getElementById("save").disabled = true;
                }
                else{
                    alert('Problem with sql query');
                }
            }
            });
        }else{
            Result.html('Enter atleast 3 characters');
        }
        if(username.length == 0) {
            Result.html('');
        }
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('#Email').keyup(function(){
        var Email = $(this).val(); // Get username textbox using $(this)
        var Result = $('#resulte'); // Get ID of the result DIV where we display the results
        if(Email.length > 0) { 
            Result.html(' '); // if greater than 2 (minimum 3)
            var dataPass = 'email='+Email;
            $.ajax({ // Send the username val to available.php
            type : 'POST',
            data : dataPass,
            url  : 'email_available.php',
            success: function(responseText){ // Get the result
                if(responseText > 0){
                    Result.html('<span class="error">This email is already Registered</span>');
                    document.getElementById("save").disabled = true;
                }
                else if(responseText == 0){
                     document.getElementById("save").disabled = false;
                }
                else{
                    alert('Problem with sql query');
                }
            }
            });
        }else{
            Result.html('This Field is mandatory');
        }
        if(username.length == 0) {
            Result.html('');
        }
    });
});
</script>
<script>
  $(document).foundation();
 function password()
 {
     $('#RetypePassword').on('keyup', function () {
    if ($(this).val() == $('#Password').val()) {
        $('#message').html('Passwords Match').css('color', 'green');
        document.getElementById("save").disabled = false;
    } else 
    {
        $('#message').html('Password not match').css('color', 'red');
        document.getElementById("save").disabled = true;
    }
     
});
 }
var validate = (function() {
  var reClass = /(^|\s)required(\s|$)/;  // Field is required
  var reValue = /^\s*$/;                 // Match all whitespace

  return function (form) {
    var elements = form.elements;
    var el;

    for (var i=0, iLen=elements.length; i<iLen; i++) {
      el = elements[i];

      if (reClass.test(el.className) && reValue.test(el.value)) {
        // Required field has no value or only whitespace
        // Advise user to fix
        alert(el.name + ' should not be left blank');
        return false;
      }
    }
  };
}());

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
                              
                            echo '<form id="form" name="form" method="post" onsubmit="return validate(this);" action="service_member.php?name=addMember">';
                                    ?>
                                          
                                      </div>
                                    <div class="row">
                                            <div class="large-6 columns">
                                              <label>Username</label>
                                              <input type="text" name="username" id="username" class="required" /><div class="result" id="result"></div>
                                            </div>
                                            
                                          <div class="large-6 columns">
                                              <label>Email</label>
                                              <input type="text" name="Email" id="Email" class="required" /><div class="resulte" id="resulte"></div>
                                            </div>
                                        
                                      </div>
                                   
                                      
                                      <div class="row">
                                            <div class="large-6 columns">
                                              <label>Password</label>
                                              <input type="password" id="Password" class="required" name="Password" />
                                            </div>
                                          <div class="large-6 columns">
                                              <label>Retype Password</label>
                                              <input type="password" id="RetypePassword" name="RetypePassword" class="required" onkeyup="password()"/><span id="message"></span>
                                            </div>
                                      </div>
                            <div class="row">
                                            <div class="large-6 columns">
                                              <label>Salt</label>
                                              <input type="text" id="salt" name="salt" />
                                            </div>
                                          
                                      </div>
                                     
                                      <div class="row">
                                            <div class="large-4 columns"></div>
                                            <div class="large-4 columns"></div>
                                            <div class="large-4 columns" style="text-align:center;">
                                                    <input type="submit" name="save" id="save" value="Add Member" class="tiny button secondary" style="font-weight: bold; background-color: #81BEF7"/>
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
