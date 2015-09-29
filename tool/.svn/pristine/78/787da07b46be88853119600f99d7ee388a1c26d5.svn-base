<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>PromoteQuick Default Template</title>
<meta name="keywords" content="">
<meta name="description" content="">

<!-- these next two lines include some basic javascript and styling for PromoteQuick. We suggest that you leave these in place because they will make life much easier when you start to style and work with the modules, though you are definitely free to remove them if you so desire. -->
<script type="javascript" src="js/jquery.min.js"></script>
			<link href="css/extranet_defaults.css" media="screen" rel="stylesheet" type="text/css">
<link href="css/module_defaults.css" media="screen" rel="stylesheet" type="text/css">
<link href="css/jquery.fancybox.css" media="screen" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.css" media="screen" rel="stylesheet" type="text/css">
			<script src="js/jquery.min.js" type="text/javascript"></script><style type="text/css"></style>
<script src="js/jquery.easing.js" type="text/javascript"></script>
<script src="js/jquery.pngFix.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/jquery.fancybox.js" type="text/javascript"></script>
<script src="js/extranet_defaults.js" type="text/javascript"></script>
<script src="js/module_defaults.js" type="text/javascript"></script>
<script src="js/os_jquery.js" type="text/javascript"></script>
<script type="javascript">
function calender(){

}
</script>
	    <script type="text/javascript" charset="utf-8">
	      var $j = jQuery.noConflict()
	    </script>

<link href="css/32695_67338_stylesheet.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="container"> 
    <div id="header"> 
        <a href="#" id="logo" title="Home">Addy Tools</a><h1>Addy Tools</h1>
    </div> 

    <div id="navigation"> 
        <h3>Menu</h3>
        <ul> 
            <li><a href="survey.php">Survey Management</a></li> 
            <li><a href="#select_survey.php">Details</a></li> 
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

    <div id="content"><div id="leftside">
<div id="os_content"><h2><strong>Welcome</strong></h2>

<hr>
<p>Welcome to your public website hosted by PromoteQuick! The layout, design, and content of the website can be customized and updated from within your portal.</p>

<p>Overview</p>

<p>If you would like to customize this template to match your own site, or do something more creative, feel free. Though, making major template changes will require a basic understanding of HTML &amp; CSS. Otherwise, all content updates and general maintenance can be done via the page editor by someone with little to no code experience.</p>

<p>Locating the Website Builder</p>

<p>To access the ‘Website Builder,’ select the ‘Website’ option located along your portal’s left-hand toolbar. If you do not see this module, <a href="#">click here</a>&nbsp;to learn how to enable it.</p>

</div>

<div id="event_popup_box_wrapper" style="display:none;">
	<div id="event_popup_box" class="profile_box">
	</div>
</div>
<div id="day_popup_box_wrapper" style="display:none;">
	<div id="day_popup_box" class="profile_box">
	</div>
</div>

</div> 
<div id="rightside">
	<h3>Sidebar</h3>
	<p>This sidebar can be edited by accessing the footer portion, under the template elements section of the website builder.</p>
	<div class="module" id="module_mini_calendar">
<div class="mini_cal">
<script language="javascript" type="text/javascript">
var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

//  DECLARE AND INITIALIZE VARIABLES
var Calendar = new Date();

var year = Calendar.getFullYear();     // Returns year
var month = Calendar.getMonth();    // Returns month (0-11)
var today = Calendar.getDate();    // Returns day (1-31)
var weekday = Calendar.getDay();    // Returns day (1-31)

var DAYS_OF_WEEK = 7;    // "constant" for number of days in a week
var DAYS_OF_MONTH = 31;    // "constant" for number of days in a month
var cal;    // Used for printing

Calendar.setDate(1);    // Start the calendar day at '1'
Calendar.setMonth(month);    // Start the calendar month at now


/* VARIABLES FOR FORMATTING
NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
      tags to customize your caledanr's look. */

var TR_start = '<TR>';
var TR_end = '</TR>';
var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD WIDTH=20><B><CENTER>';
var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
var TD_start = '<TD WIDTH="30"><CENTER>';
var TD_end = '</CENTER></TD>';

/* BEGIN CODE FOR CALENDAR
NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
tags to customize your calendar's look.*/

cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=BBBBBB><TR><TD>';
cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#EFEFEF"><CENTER><B>';
cal += month_of_year[month]  + '   ' + year + '</B>' + TD_end + TR_end;
cal += TR_start;

//   DO NOT EDIT BELOW THIS POINT  //

// LOOPS FOR EACH DAY OF WEEK
for(index=0; index < DAYS_OF_WEEK; index++)
{

// BOLD TODAY'S DAY OF WEEK
if(weekday == index)
cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

// PRINTS DAY
else
cal += TD_start + day_of_week[index] + TD_end;
}

cal += TD_end + TR_end;
cal += TR_start;

// FILL IN BLANK GAPS UNTIL TODAY'S DAY
for(index=0; index < Calendar.getDay(); index++)
cal += TD_start + '  ' + TD_end;

// LOOPS FOR EACH DAY IN CALENDAR
for(index=0; index < DAYS_OF_MONTH; index++)
{
if( Calendar.getDate() > index )
{
  // RETURNS THE NEXT DAY TO PRINT
  week_day =Calendar.getDay();

  // START NEW ROW FOR FIRST DAY OF WEEK
  if(week_day == 0)
  cal += TR_start;

  if(week_day != DAYS_OF_WEEK)
  {

  // SET VARIABLE INSIDE LOOP FOR INCREMENTING PURPOSES
  var day  = Calendar.getDate();

  // HIGHLIGHT TODAY'S DATE
  if( today==Calendar.getDate() )
  cal += highlight_start + day + highlight_end + TD_end;

  // PRINTS DAY
  else
  cal += TD_start + day + TD_end;
  }

  // END ROW FOR LAST DAY OF WEEK
  if(week_day == DAYS_OF_WEEK)
  cal += TR_end;
  }

  // INCREMENTS UNTIL END OF THE MONTH
  Calendar.setDate(Calendar.getDate()+1);

}// end for loop

cal += '</TD></TR></TABLE></TABLE>';

//  PRINT CALENDAR
document.write(cal);
//return cal;
//  End -->
</script>
</div>
</div>
</div>
 </div>  

<div id="footer">
  <p>PromoteQuick Pvt. Ltd.</p>
</div> 
</div>
</body></html>