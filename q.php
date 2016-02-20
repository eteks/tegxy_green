<?php include_once("include/Configuration.php");
include_once(PAGE_DBCONNECTION);
db_connect();
include("Mailer/class.phpmailer.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<title>jQuery UI Time Picker by Francois Gelinas</title>



<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/Common.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.js"></script>-->
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>



<link rel="StyleSheet" href="Tagedit-master/css/ui-lightness/jquery-ui-1.9.2.custom.min.css" type="text/css" media="all"/>
<link rel="StyleSheet" href="Tagedit-master/css/jquery.tagedit.css" type="text/css" media="all"/>

<script type="text/javascript" src="Tagedit-master/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="Tagedit-master/js/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="Tagedit-master/js/jquery.autoGrowInput.js"></script>
<script type="text/javascript" src="Tagedit-master/js/jquery.tagedit.js"></script>
<link rel="stylesheet" href="jquery-ui-timepicker-0.3.3/include/ui-1.10.0/ui-lightness/jquery-ui-1.10.0.custom.min.css" type="text/css" />
<link rel="stylesheet" href="jquery-ui-timepicker-0.3.3/jquery.ui.timepicker.css?v=0.3.3" type="text/css" />

<!--<script type="text/javascript" src="jquery-ui-timepicker-0.3.3/include/jquery-1.9.0.min.js"></script>-->
<script type="text/javascript" src="jquery-ui-timepicker-0.3.3/include/ui-1.10.0/jquery.ui.core.min.js"></script>
<script type="text/javascript" src="jquery-ui-timepicker-0.3.3/jquery.ui.timepicker.js?v=0.3.3"></script>
<style type="text/css">
/* some styling for the page */
body { font-size: 10px; /* for the widget natural size */ }
#content { font-size: 1.2em; /* for the rest of the page to show at a normal size */
font-family: "Lucida Sans Unicode", "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;
width: 950px; margin: auto;
}
.code { margin: 6px; padding: 9px; background-color: #fdf5ce; border: 1px solid #c77405; }
fieldset { padding: 0.5em 2em }
hr { margin: 0.5em 0; clear: both }
a { cursor: pointer; }
#requirements li { line-height: 1.6em; }
</style>

<script type="text/javascript" src="js/Register.js"></script>
<script type="text/javascript" src="js/CalendarControl.js"></script>


</head>
<body>

<div>
<label for="timepicker_6">Time picker with period (AM/PM) in input and with hours leading 0s :</label>
<input type="text" style="width: 70px;" id="timepicker_6" value="01:30 PM" />
<script type="text/javascript">
$(document).ready(function() {
$('#timepicker_6').timepicker({
showPeriod: true,
showLeadingZero: true
});
});
</script>

<a onclick="$('#script_6').toggle(200)">[Show code]</a>
<pre id="script_6" style="display: none" class="code">$('#timepicker').timepicker({
showPeriod: true,
showLeadingZero: true
});</pre>
</div>

</body>
</html>
