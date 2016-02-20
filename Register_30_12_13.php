<?php include_once("include/Configuration.php");
include_once(PAGE_DBCONNECTION);
db_connect();
include("Mailer/class.phpmailer.php");



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $Title;?></title>
<link rel="icon" href="images/">

<!-- Keyword related script -->
<link rel="StyleSheet" href="Tagedit-master/css/ui-lightness/jquery-ui-1.9.2.custom.min.css" type="text/css" media="all"/>
<link rel="StyleSheet" href="Tagedit-master/css/jquery.tagedit.css" type="text/css" media="all"/>

<script type="text/javascript" src="Tagedit-master/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="Tagedit-master/js/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="Tagedit-master/js/jquery.autoGrowInput.js"></script>
<script type="text/javascript" src="Tagedit-master/js/jquery.tagedit.js"></script>

<script type="text/javascript">
jQuery.noConflict();
(function( $ ) {
$(function() {
// Fullexample
$("#tagform-full").find('input.tag').tagedit(
{
autocompleteURL: 'Tagedit-master/server/autocomplete.php',
//checkToDeleteURL: 'server/checkToDelete.php'
});
});
})(jQuery);
</script>
<!-- Keyword related script -->

<?php include("ScriptStyle.php");?>
<script type="text/javascript" src="js/Register.js"></script>
<script type="text/javascript" src="js/CalendarControl.js"></script>
<link href="css/CalendarControl.css" rel="stylesheet" type="text/css" />
</head>
<body onload="Disappear();" class="background">
<div id="wrap">

<style type="text/css">
#actions, #Submit, #inputs, #login #actions
{
	margin:0;
}
#login #actions
{
	margin:0;
}
#inputs
{
margin-left: -7px;	
}
</style>
<?php include("OuterHeader.php");?>

<div class="clear"></div>
<div id="content">

<div align="center" style="width:990px;height:82px; margin-top:20px;"><a href="index.php" style="border:none;text-decoration:none;"><img src="images/home/logo.png"></a></div>

<div id="popular" style="padding-bottom:25px; margin-top:20px">
<div id="registerform">
<div class="heading">Register</div>


<?php if($_SESSION['Tracemeinreg']=='Success')
{?>
<div>                               
<p>Dear <strong><?php echo $_SESSION['TracemeinregName'];?></strong>,</p>
<p>Thank you for showing interest in joining our tracemein.com family. You will receive a confirmation mail on approval of your registration.</p>
<p>Thanks,</p>
<p><strong>Tracemein.com Team</strong></p>
<p><a href="index.php"  style=" color:#ED5222;text-decoration: none;">Click here</a> 
to continue browsing tracemein.com</p>
</div>
<?php $_SESSION['Tracemeinreg']='';$_SESSION['TracemeinregName']=''; } else {?>

<div class="validation text-align-c" id="msgdisplay" style="height:15px;"><?php if($_REQUEST['Id']=='1'){?>Successfully Registered<?php }?></div>
<div class="text-align-c" style="height:15px;">
<input type="radio" id="Busradio" name="RegisterOpt" checked="checked" onclick="RegisterOption('Bus');RegisterReset();" />&nbsp;Business&nbsp;&nbsp;<input type="radio" id="Perradio" name="RegisterOpt" onclick="RegisterOption('Per');RegisterReset();" />&nbsp;Personal</div>
<form method="post" id="RegisterForm" name="RegisterForm" action="Register.php" ><!-- onSubmit="return Validation();" -->
<div id="BusinessGridd" style="display:block;" >
<div id="personal"  style="width:230px;">&nbsp;</div>
<div id="personal"  style="width:540px;">
<fieldset style="height:auto;">
<legend>Business</legend>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><label for="input-one" class="float">Company Name</label></td>
<td> : </td> 
<td><input class="inp-text" name="CompanyName" id="CompanyName" type="text" size="30" maxlength="85" autocomplete="off" /></td>
</tr>
<tr>
<td><label for="input-two" class="float">Year Of Establishment</label></td>
<td>:</td>
<td><input  class="inp-text" name="YearofEst"  id="YearofEst" type="text" size="30"  onFocus="return clearedate('YearofEst')" onClick="return clearedate('YearofEst')"  readonly="readonly" autocomplete="off"  /><img src="images/Cal.png" width="16" height="16" style="cursor:pointer" onclick="showCalendarControl(document.forms['RegisterForm'].YearofEst)"  />
</td>
</tr>

<tr>
<td><label for="input-two" class="float">Type Of Company</label></td>
<td>:</td>
<td><select name="TypeofComp" id="TypeofComp" class="inp-text" >
<option value="">--Select Company Type--</option>
<option value="1" >Cooperative Societies</option>
<option value="2" >Government Based</option>
<option value="3" >Joint Stock Companies</option>
<option value="4" >Partnership</option>
<option value="5" >Private Limited</option>
<option value="6" >Sole Proprietorship</option>
</select>
</td>
</tr>

<tr>
<td><label for="input-two" class="float">Owner Name</label></td>
<td>:</td>
<td><input class="inp-text" name="OwnerName"  id="OwnerName" type="text" size="30" autocomplete="off" /></td>
</tr>
<tr>
<td><label for="input-two" class="float">Designation</label></td>
<td>:</td>
<td><input class="inp-text" name="Designation"  id="Designation" type="text" size="30" autocomplete="off" /></td>
</tr>
<tr>
<td><label for="input-two" class="float">Date Of Birth</label></td>
<td>:</td>
<td><input  class="inp-text" name="DOB"  id="DOB" type="text" size="30"  onFocus="return clearedate('DOB')" onClick="return clearedate('DOB')"   autocomplete="off" readonly="readonly"  /><img src="images/Cal.png" width="16" height="16" style="cursor:pointer" onClick="showCalendarControl(document.forms['RegisterForm'].DOB)"  /></td>
</tr>
<tr>
<td><label for="input-two" class="float">Gender</label></td>
<td>:</td>
<td>Male&nbsp;<input type="radio" id="Male" name="Gender" value="1" />&nbsp;&nbsp;&nbsp;&nbsp;Female&nbsp;<input type="radio" id="Female" name="Gender" value="2"  /></td>
</tr>
<tr>
<td><label for="input-two" class="float">Industry</label></td>
<td>:</td>
<td><select name="Sector" id="Sector"   class="inp-text" onchange="setsessionvalue(this.value);">
<option value="">--Select Industry--</option>
<?php $SelectSector=db_query("Select Id,S_Name From ".TABLE_SECTOR." WHERE Status=1 order by S_Name asc");
while(list($MSeId,$MSeName)=db_fetch_array($SelectSector))
{?>
<option  value="<?php echo $MSeId; ?>"  ><?php echo $MSeName; ?></option><?php 
}?>
</select></td>
</tr>
<tr id="keywordgrid" style="display:none;">
<td><label for="input-two" class="float">Keyword</label></td>
<td>:</td>
<td id="tagform-full" ><input type="text" name="tag[]"  class="tag" />
</td>
</tr>
<tr><td><label for="input-ten" class="float">Company Email</label></td>
<td>:</td>
<td><input class="inp-text" name="Email"  id="Email" type="text" size="30" autocomplete="off" /></td></tr>
<tr>
<td><label for="input-four" class="float">User Name</label></td>
<td>:</td>
<td><input class="inp-text" name="User_Name"  id="User_Name" type="text" size="30" autocomplete="off" /><br />
</td>
</tr>
<tr>
<td><label for="input-four" class="float">Password</label></td>
<td>:</td>
<td><input class="inp-text" name="Password"  id="Password" type="Password" size="30" autocomplete="off" /></td>
</tr>
<tr>
<td><label for="input-five" class="float">Confirm Password</label></td>
<td>:</td>
<td><input class="inp-text" name="CPassword"  id="CPassword" type="Password" size="30" autocomplete="off" /></td>
</tr>
<tr>
<td><label for="input-six" class="float">Address Line 1</label></td>
<td>:</td>
<td><input class="inp-text" name="Address1"  id="Address1" type="text" size="30" autocomplete="off" /></td>
</tr>
<tr>
<td><label for="input-seven" class="float">Address Line 2</label></td>
<td>:</td>
<td><input class="inp-text" name="Address2"  id="Address2" type="text" size="30" autocomplete="off" /></td>
</tr>
<tr>
<td><label for="input-eight" class="float">Country</label></td>
<td>:</td>
<td><select name="SelCountry" id="SelCountry" onchange="return OnclickCountry(this.value,'SelCountry','SelState','SelCity','BArea','BPincode');"  class="inp-text" >
<option value="">--Select Country--</option>
<?php $SelectCountry=db_query("Select Id,Country_Name From ".TABLE_GENERALCOUNTRYMASTER." WHERE Status=1 order by  Country_Name asc");
while(list($MCId,$MCName)=db_fetch_array($SelectCountry))
{?>
<option  value="<?php echo $MCId; ?>"  ><?php echo $MCName; ?></option><?php 
}?>
</select></td>
</tr>
<tr>
<td><label for="input-eight" class="float">State</label></td>
<td>:</td>
<td><span id="StateGrid"><select></select></span></td>
</tr>
<tr>
<td><label for="input-eight" class="float">City</label></td>
<td>:</td>
<td><span id="CityGrid"><select></select></span></td>
</tr>
<tr>
<td><label for="input-eight" class="float">Area</label></td>
<td>:</td>
<td><span id="BAreaGrid"><select></select></span></td>
</tr>
<tr>
<td><label for="input-eight" class="float">Pincode</label></td>
<td>:</td>
<td><span id="BPinGrid"><select></select></span></td>
</tr>
<tr>
<td><label for="input-eight" class="float">Mobile Number</label></td>
<td>:</td>
<td><input class="inp-text" name="Mobile"  id="Mobile" type="text" size="30" autocomplete="off"  onkeyup="checkNumber(this);" /></td>
</tr>
<tr><td><label for="input-nine" class="float">Land Line</label></td>
<td>:</td>
<td><input class="inp-text" name="LandLine"  id="LandLine" type="text" size="30" autocomplete="off"  onkeyup="checkNumber(this);" /></td></tr>
<tr><td colspan="3" height="5"></td></tr>
<?php /*?><tr><td><label for="input-nine" class="float">Working Days</label></td>
<td>:</td>
<td>From <select class="inp-text" name="FromWD"  id="FromWD" style="width:100px;">
<option value="">--Select--</option>
<option value="Monday">Monday</option>
<option value="Tuesday">Tuesday</option>
<option value="Wednesday">Wednesday</option>
<option value="Thursday">Thursday</option>
<option value="Friday">Friday</option>
<option value="Saturday">Saturday</option>
<option value="Sunday">Sunday</option>
</select> To <select class="inp-text" name="ToWD"  id="ToWD" style="width:100px;">
<option value="">--Select--</option>
<option value="Monday">Monday</option>
<option value="Tuesday">Tuesday</option>
<option value="Wednesday">Wednesday</option>
<option value="Thursday">Thursday</option>
<option value="Friday">Friday</option>
<option value="Saturday">Saturday</option>
<option value="Sunday">Sunday</option></select></td></tr>
<tr><td colspan="3" height="5"></td></tr>
<tr><td><label for="input-nine" class="float">Timing</label></td>
<td>:</td>
<td>From <input class="inp-text" name="FromOT"  id="FromOT" type="text" size="30" style="width:50px;" autocomplete="off"   /> To <input class="inp-text" name="ToOT"  id="ToOT" style="width:50px;" type="text" size="30" autocomplete="off"  /></td></tr>
<tr><td colspan="3" height="5"></td></tr>
<tr><td><label for="input-nine" class="float">Break Time</label></td>
<td>:</td>
<td>From <input class="inp-text" name="FromBT"  id="FromBT" type="text" size="30" style="width:50px;" autocomplete="off"   /> To <input class="inp-text" name="ToBT"  id="ToBT" style="width:50px;" type="text" size="30" autocomplete="off"  /></td></tr><?php */?>
<?php /*?><tr><td colspan="3" align="left" style="font-weight:bold;">Please Set your Page Address here,</td>
<tr><td colspan="3" height="5"></td></tr>

<tr><td colspan="2"><label for="input-nine" class="float"><?php echo HTTP_URL ;?>/</label></td>
<td><input class="inp-text" name="ProfileLink"  autocomplete="off" id="ProfileLink" type="text" size="30" onkeyup="urlvalidate(this);showHint(this.value)" />
</td></tr>
<tr><td colspan="3" align="right"><span id="txtHint"></span></td>
</tr><tr><td colspan="3">&nbsp;</td></tr><?php */?>
<tr><td colspan="3" class="text-align-r"><input type="button" onclick="return ValidateFirstLevel();" id="Next" name="Next" value="Next" class="submit-btn" /></td></tr>

</table>

</fieldset>
</div>
</div>
<div id="PersonalGridd" style="display:none;">
<div id="personal"  style="width:230px;">&nbsp;</div>
<div id="personal" style="width:540px;">
<fieldset style="height:auto;">
<legend>Personal</legend>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><label for="input-one" class="float">Name</label></td>
<td> : </td> 
<td><input class="inp-text" name="PName" id="PName" type="text" size="30" autocomplete="off" /></td>
</tr>
<tr>
<td><label for="input-one" class="float">Date Of Birth</label></td>
<td> : </td> 
<td><input  class="inp-text" name="PDOB"  id="PDOB" type="text" size="30"  onFocus="return clearedate('PDOB')" onClick="return clearedate('PDOB')"  readonly="readonly" autocomplete="off"  />
<img src="images/Cal.png" width="16" height="16" style="cursor:pointer" onclick="showCalendarControl(document.forms['RegisterForm'].PDOB)"  /></td>
</tr>
<tr>
<td><label for="input-two" class="float">Gender</label></td>
<td>:</td>
<td>Male&nbsp;<input type="radio" id="PMale" name="PGender" value="1" />&nbsp;&nbsp;&nbsp;&nbsp;Female&nbsp;<input type="radio" id="PFemale" name="PGender" value="2"  /></td>
</tr>
<tr><td><label for="input-nine" class="float">Email</label></td>
<td>:</td>
<td><input class="inp-text" name="PEmail"  id="PEmail" type="text" size="30" autocomplete="off" /></td></tr>
<tr>
<td><label for="input-two" class="float">User Name</label></td>
<td>:</td>
<td><input class="inp-text" name="PUserName"  id="PUserName" type="text" size="30" autocomplete="off" /></td>
</tr>
<tr>
<td><label for="input-two" class="float">Password</label></td>
<td>:</td>
<td><input class="inp-text" name="PPassword"  id="PPassword" type="Password" size="30" autocomplete="off" /></td>
</tr>
<tr>
<td><label for="input-four" class="float">Confirm Password</label></td>
<td>:</td>
<td><input class="inp-text" name="PCPassword"  id="PCPassword" type="Password" size="30" autocomplete="off" /></td>
</tr>
<tr>
<td><label for="input-five" class="float">Address Line 1</label></td>
<td>:</td>
<td><input class="inp-text" name="PAddress1"  id="PAddress1" type="text" size="30" autocomplete="off" /></td>
</tr>
<tr>
<td><label for="input-six" class="float">Address Line 2</label></td>
<td>:</td>
<td><input class="inp-text" name="PAddress2"  id="PAddress2" type="text" size="30" autocomplete="off" /></td>
</tr>
<tr>
<td><label for="input-seven" class="float">Country</label></td>
<td>:</td>
<td><select name="PSelCountry" id="PSelCountry" onchange="return OnclickCountry(this.value,'PSelCountry','PSelState','PSelCity','PArea','PPincode');"  class="inp-text" >
<option value="">--Select Country--</option>
<?php $SelectCountry=db_query("Select Id,Country_Name From ".TABLE_GENERALCOUNTRYMASTER." WHERE Status=1 order by  Country_Name asc");
while(list($MCId,$MCName)=db_fetch_array($SelectCountry))
{?>
<option  value="<?php echo $MCId; ?>"  ><?php echo $MCName; ?></option><?php 
}?>
</select></td>
</tr>
<tr>
<td><label for="input-eight" class="float">State</label></td>
<td>:</td>
<td><span id="PStateGrid"><select></select></span>
</td>
</tr>
<tr>
<td><label for="input-eight" class="float">City</label></td>
<td>:</td>
<td><span id="PCityGrid"><select></select></span></td>
</tr>
<tr>
<td><label for="input-eight" class="float">Area</label></td>
<td>:</td>
<td><span id="PAreaGrid"><select></select></span></td>
</tr>
<tr>
<td><label for="input-eight" class="float">Pincode</label></td>
<td>:</td>
<td><span id="PPinGrid"><select></select></span></td>
</tr>
<tr>
<td><label for="input-eight" class="float">Mobile Number</label></td>
<td>:</td>
<td><input class="inp-text" name="PMobile"  id="PMobile" type="text" size="30" autocomplete="off"  onkeyup="checkNumber(this);" /></td>
</tr>
<tr>
<td><label for="input-eight" class="float">Land Line</label></td>
<td>:</td>
<td><input class="inp-text" name="PLandLine"  id="PLandLine" type="text" size="30" autocomplete="off"  onkeyup="checkNumber(this);" /></td>
</tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td><span id="Busback" style="display:none;"><input type="button" id="Back" name="Back" value="BACK" onclick="RegisterOption('Bus');" class="submit-btn" /></span></td><td class="text-align-c" colspan="2"><table><tr><td><input type="submit" value="SUBMIT" style="margin:0;height:auto;box-shadow:none;" name="Submit" class="submit-btn" id="Submit"><td/><td><input type="button" onclick="window.location.href='Register.php'" value="RESET" name="Reset" class="submit-btn" id="Reset"></table></td></tr></td>

</table>

</fieldset>
</div>
</div>
</form>
<?php }?>
</div>

</div></div>
<div class="clear"></div>

</div>
<?php include("Footer.php");?>

</body>
</html>

<?php
/*print_r($_POST);
exit;
*/
if($_REQUEST['PName']!='' || $_REQUEST['CompanyName']!='')
{
	
	
	
//Personal Registration

$P_Name = $_REQUEST['PName'];
if($P_Name!='')
{
	
$ToAddress = trim($_REQUEST['PEmail']);
$ToName    = $P_Name; 	

	
$P_UserName = trim($_REQUEST['PUserName']);
$P_Password = base64_encode(trim($_REQUEST['PPassword']));
$P_Address1 = trim($_REQUEST['PAddress1']);
$P_Address2 = trim($_REQUEST['PAddress2']);
$P_Country = trim($_REQUEST['PSelCountry']);
$P_State = trim($_REQUEST['PSelState']);
$P_City = trim($_REQUEST['PSelCity']);
$P_Mobile = trim($_REQUEST['PMobile']);
$P_LandLine = trim($_REQUEST['PLandLine']);
$P_Email = trim($_REQUEST['PEmail']);	
$P_DOB = trim($_REQUEST['PDOB']);

$P_Gender = trim($_REQUEST['PGender']);
$P_Area = trim($_REQUEST['PArea']);
$P_Pincode = trim($_REQUEST['PPincode']);

$P_Type="1";

$Email = trim($_REQUEST['Email']);
db_query("INSERT INTO ".TABLE_REGISTRATION." SET RGT_Name='".$P_Name."',RGT_UserName='".$P_UserName."',RGT_Password='".$P_Password."',RGT_Address1='".$P_Address1."',RGT_Address2='".$P_Address2."',RGT_Country='".$P_Country."',RGT_State='".$P_State."',RGT_City='".$P_City."',RGT_Mobile='".$P_Mobile."',RGT_Landline='".$P_LandLine."',RGT_Email='".$P_Email."',RGT_RegisterOn=NOW(),RGT_Type='".$P_Type."',RGT_DOB='".$P_DOB."',RGT_Gender='".$P_Gender."',RGT_Area='".$P_Area."',RGT_Pincode='".$P_Pincode."',RGT_Filesize='5242880',RGT_Featured='1'");//5242880==5MB
$PerId = db_insert_id();
}

//Business Registration

$CompName = $_REQUEST['CompanyName'];
if($CompName!='')
{
$ToAddress = trim($_REQUEST['Email']);
$ToName    = trim($_REQUEST['OwnerName']); 	
	
$OwnName = trim($_REQUEST['OwnerName']);
$Sector = trim($_REQUEST['Sector']);
$UserName = trim($_REQUEST['User_Name']);
$Password = base64_encode(trim($_REQUEST['Password']));
$Address1 = trim($_REQUEST['Address1']);
$Address2 = trim($_REQUEST['Address2']);
$Country = trim($_REQUEST['SelCountry']);
$State = trim($_REQUEST['SelState']);
$City = trim($_REQUEST['SelCity']);
$Mobile = trim($_REQUEST['Mobile']);
$LandLine = trim($_REQUEST['LandLine']);
$Email = trim($_REQUEST['Email']);	

$YearofEst = trim($_REQUEST['YearofEst']);
$Designation = trim($_REQUEST['Designation']);
$Gender = trim($_REQUEST['Gender']);
$DOB = trim($_REQUEST['DOB']);
$Area = trim($_REQUEST['BArea']);
$Pincode = trim($_REQUEST['BPincode']);
$TypeofComp = trim($_REQUEST['TypeofComp']);
$FromWD = trim($_REQUEST['FromWD']);
$ToWD = trim($_REQUEST['ToWD']);
$FromOT = trim($_REQUEST['FromOT']);
$ToOT = trim($_REQUEST['ToOT']);
$FromBT = trim($_REQUEST['FromBT']);
$ToBT = trim($_REQUEST['ToBT']);
//$ProfileLink = trim($_REQUEST['ProfileLink']);

$Type="2";

db_query("INSERT INTO ".TABLE_REGISTRATION." SET RGT_CompName='".$CompName."',RGT_OwnerName='".$OwnName."',RGT_UserName='".$UserName."',RGT_Password='".$Password."',RGT_Address1='".$Address1."',RGT_Address2='".$Address2."',RGT_Country='".$Country."',RGT_State='".$State."',RGT_City='".$City."',RGT_Mobile='".$Mobile."',RGT_Landline='".$LandLine."',RGT_Email='".$Email."',RGT_Sector='".$Sector."',RGT_RegisterOn=NOW(),RGT_Type='".$Type."',RGT_OwnDOB='".$DOB."',RGT_OwnGender='".$Gender."',RGT_Area='".$Area."',RGT_Pincode='".$Pincode."',RGT_YrofEstablish='".$YearofEst."',RGT_OwnDesign='".$Designation."',RGT_CompType='".$TypeofComp."',RGT_ProfileUrl='".$ProfileLink."',RGT_Filesize='5242880',RGT_Featured='1',RGT_WorkingdayFrom='".$FromWD."',RGT_WorkingdayTo='".$ToWD."',RGT_OfficetimeFrom='".$FromOT."',RGT_OfficetimeTo='".$ToOT."',RGT_BreaktimeFrom='".$FromBT."',RGT_BreaktimeTo='".$ToBT."'");
$BusId = db_insert_id();

db_query("INSERT INTO ".TABLE_CONTACT." SET CI_UserFk='".$BusId."',CI_Title='".$CompName."',CI_Address='".$Address1."',CI_Address2='".$Address2."',CI_Country='".$Country."',CI_State='".$State."',CI_City='".$City."',CI_Area='".$Area."',CI_Pincode='".$Pincode."',CI_Phone='".$LandLine."',CI_Email='".$Email."',CI_Person='".$OwnName."',CI_CreatedOn=Now(),CI_ModifiedOn=Now() ");

/*$checkexistdummy  = db_query("SELECT * FROM ".TABLE_KEYWORDMST." WHERE Kd_IndustryFk='".$Sector."' and Kd_Keyword=''");	
if(db_num_rows($checkexistdummy)>0)
echo '1';
else
db_query("INSERT INTO ".TABLE_KEYWORDMST." SET Kd_IndustryFk='".$Sector."', Kd_Keyword='', Kd_CreatedOn=Now(), Kd_ModifiedOn=Now()");*/

foreach($_POST['tag'] as $tagvalue)
{
$checkexist      = db_query("SELECT Kd_Id FROM ".TABLE_KEYWORDMST." WHERE Kd_Keyword='".$tagvalue."'");	
$fetchcheckexist = db_fetch_array($checkexist);
if(db_num_rows($checkexist)>0)
$keyid = $fetchcheckexist['Kd_Id'];
else
{
db_query("INSERT INTO ".TABLE_KEYWORDMST." SET Kd_IndustryFk='".$Sector."', Kd_Keyword='".$tagvalue."', Kd_CreatedOn=Now(), Kd_ModifiedOn=Now()");
$keyid = db_insert_id();
}
db_query("INSERT INTO ".TABLE_MEMBERKEYWORD." SET Mk_MemFk='".$BusId."', Mk_KeywordFk='".$keyid."', Mk_CreatedOn=Now(), Mk_ModifiedOn=Now()");
}


}

if($BusId!='' || $PerId!='')
{
$Message     = "<table border='0' cellpadding='0' cellspacing='0'  style='font-size: 12px; line-height: 25px;font-family:Arial, Helvetica, sans-serif;padding-left:5px;padding-bottom:10px;'>
<tr><td colspan='2' height='10'></td></tr>
<tr><td colspan='2' style='color:#006DB8;font-size:15px;'>Dear ".$ToName.",</td></tr>
<tr><td colspan='2' height='10'></td></tr>
<tr><td colspan='2' >Thank you for showing interest in joining our tracemein.com family. You will receive a confirmation mail on approval of your registration.</td></tr>
</table>";


$mailContent = file_get_contents("MailTemplate.php");
$Message = str_replace('MSGCONTENT',$Message, $mailContent);
$Message = str_replace('images/',HTTP_SERVER.'images/', $Message);
$Subject='Registration';
$FromName='Tracemein';
$FromAddress='services@tracemein.com';
PHP_Mailer($Message,$Subject,$ToAddress,$ToName,$FromAddress,$FromName,'','');
}

$_SESSION['TracemeinregName']=$ToName;
$_SESSION['Tracemeinreg']='Success';

db_query("UPDATE ".TABLE_REGISTRATION." SET RGT_Relation = '".$PerId."' WHERE RGT_PK='".$BusId."' ");
db_query("UPDATE ".TABLE_REGISTRATION." SET RGT_Relation = '".$BusId."' WHERE RGT_PK='".$PerId."' ");

header("Location:Register.php?Id=1");	
	
}



?>

