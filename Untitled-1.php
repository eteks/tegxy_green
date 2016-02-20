<?php ob_start();
session_start();
$pagename = basename(__FILE__);
require_once("include/configuration.inc");
require_once(DIR_WS_INCLUDE."database.inc");
if($_POST['callletter']=='Submit')
{
$check = db_query("Select * from centac_calllettergen where Jacno='".$_POST['centacNumber']."'");
if(db_num_rows($check)>0)
$_SESSION['centactNo'] = $_POST['centacNumber'];
else
$msg = '<span style="color:#F00;padding-left:20px;background-color:#FFFFCC;border:0px solid #FFCC00;background-image:url(images/alert.png);background-repeat:no-repeat;">&nbsp;&nbsp;Invalid Centac Number !</span>';
}   
?>
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<title>Centralised Admission Committee</title>
<link rel="shortcut icon" href="">
<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/styles.css" />
<link type="text/css" rel="stylesheet" href="css/cascade.css" />
<script src="js/vendor/custom.modernizr.js"></script>
</head>
<body>
<?php include("HeaderLateral.php");?>

<div class="row">
<div class="large-12 columns">
<table cellpadding="0" cellspacing="1" border="0" <?php if($msg!='1'){?> style="width:50%;margin-top:60px;" <?php } else{?> style="width:93%;margin-top:10px;" <?php } ?> align="center" >
<tr>
<td height="20" valign="top" style="padding:0;">
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom:0;">
<tr style="background:url(images/centac_le/head_bg.png) repeat-x;height:40px;color:#FFF;font-weight:bold;font-size:16px;"><td align="left" style="padding-left:10px;color:#fff;">Counseling Call Letter</td></tr>
</table>
</td>
</tr>

<tr>
<td valign="top" align="center" style="border:none;margin-bottom: 0;">
<div>
<form name="applicantStatus" id="applicantStatus"  method="post" style="border:none;margin-bottom: 0;" >
<table cellpadding="0" cellspacing="0" border="0" width="98%" align="center" style="border:none;margin-bottom: 0;">
<tr><td align="center" colspan="5"><span id="ErrMsg"><?php echo $msg;?></span></td></tr>
<tr>
<td class="inputtext" valign="top" align="left">Centac Number </td><td valign="top">&nbsp;<strong>:</strong>&nbsp;</td><td align="left" colspan="3"><label><input type="text" class="inputfield" name="centacNumber" id="centacNumber" value="" maxlength="11"  autocomplete="off"  size="25px" style="margin:0" /></label></td>
</tr>
<tr>
<td colspan="5" align="center" ><input type="submit" style="cursor" name="showStatus" id="" value="Show Status" class="small button" /></td>
</tr>
</table>
</form>
</div>
</td>
</tr>

</table>
</div>
</div>

<?php include("Footer.php");?>
<script src="js/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/jquery.stickyFooter.js"></script>
<script>
$(document).foundation();
</script>
<?php 
$_SESSION['centactNo']='';
unset($_SESSION['centactNo']);?>
</body>
</html>
