<?php 
$PageName = basename($_SERVER['SCRIPT_FILENAME'],'.php');

if($_SESSION['LID']=='')
{
$SP = 'Login.php';
$SPT = 'Sign In';
}
else
{
$SP = 'Logout.php';
$SPT = 'Sign Out';
}
$Chk = "RGT_PK='".$_SESSION['LID']."'";

$ProfileDetails=db_query("SELECT * FROM ".TABLE_REGISTRATION." WHERE ".$Chk." AND RGT_Type=2");
$FetProfileDetails = db_fetch_array($ProfileDetails);
include("ScriptStyleView.php");

$searchkey=$_REQUEST['searchkey'];
$usercity=$_REQUEST['usercity'];


?>
<link href="css/homepage.css" rel="stylesheet" type="text/css" media="all" />
<!--------LOGIN FORM----------->
<script src="js/jquery-1.5.2.js"></script>
<script>setInterval("update()", 5000); // Update every 10 seconds 
//to find online user status
function update() 
{ 
$.post("sessionupdate.php"); // Sends request to update.php 
} 
</script>
<script type="text/javascript">
var $login = jQuery.noConflict();
$login(document).ready(function(){
	
	
	$login('.main_container').click(function(){
		$login('#login-content').hide();
		})
	
	$login('#login-trigger').click(function(){
		$login(this).next('#login-content').slideToggle();
		$login(this).toggleClass('active');					
		
		if ($login(this).hasClass('active')) $login(this).find('span').html('&#x25B2;')
			else $login(this).find('span').html('&#x25BC;')
		})
});
function ValidateLogin()
{
if(DocId('UserName').value=='')
{
alert("Please Enter the User Name / Email Id / Mobile Number");	
DocId('UserName').focus();
return false;
}
else if(DocId('PassWord').value=='')
{
alert("Please Enter the Password");	
DocId('PassWord').focus();
return false;
}
	
}
</script>


<!------------LOGIN FORM---------------->

<div style="padding-top:10px;">

<div style="width:800px; height:100px; position:absolute;"> 

<div class="adlogo">
<a href="index.php"><img src="images/logo_admin.png" width="273" height="71" style="position:relative;" /></a>
</div>

<!--------------------------------------------------------------------------------Search box---------------------------------------------------->

<div style="width: 740px; height:30px; position:absolute; top:20px; left:279px;">
<div class="adsearch_txbox">
<input type="text" autocomplete="off" name="searchkey" id="searchlist"  style="width:600px;height:30px;border:1px solid #999;" placeholder="Please Enter Company Name / Sector / Keyword to Search" autofocus value="<?php echo $searchkey;?>"  onkeyup="Searchusingenterkey(event);"  />
<!-- onkeypress="Searchusingenterkey(event);" -->

<div id="SearchListRes"></div>

</div>
<input id="searchsubmit" type="button" onclick="Searchpage();" value="Search" class="btnstyle" style="left:-19px; top:-0px; height:32px;"/>
</div>

<!--------------------------------------------------------------------------------Search box---------------------------------------------------->

<div style="width:250px;height:20px; top:65px; float:left; position:absolute; left:320px;">
<a onclick="Togglecity();" id="cityvalue" ></a>
<input name="userCity" id="userCity"  type="hidden"  />
<input name="type2" id="type2"  type="hidden" value="<?php echo $_REQUEST['type2'] ;?>"  />

<input name="userCityselect" placeholder="Select City" autocomplete="off" id="userCityselect"  type="text"  value="" style="width:220px;height:20px;border:1px solid #C8C8C8;color:#000000; display:none;" /><div id="ListCityRes"></div>
<input type="hidden" name="citylisthidden" id="citylisthidden" value="" />
<div id="citysuggestions" style="display: none;"> <div style="position: relative; width: 260px;  max-height: 300px; z-index: 9999; display: block;background: none repeat scroll 0 0 #FFFFFF;text-align:left;list-style: none outside none;border: 1px solid rgba(0, 51, 255, 0.5);cursor:pointer;" id="citysuggestionlist"> &nbsp; </div></div>
<span style="display:none;">Select Area in <span id="citydisplayname"  >Pondicherry</span>?</span>
</div>

<div style="width:200px; height:20px; top:66px; float:left; left:560px; position:absolute;">

<select name="selectarea" id="selectarea"  style="color:#007088; background:#F4F4F4;text-align:right; height:25px;  border:none;" >
	<?php 
	$cityyidd=get_Search_Id(TABLE_GENERALAREAMASTER,"Id","Area",$usercity);
    if($cityyidd!='')
	$cityyidd = $cityyidd;
	else
	$cityyidd =1;
	$queryarea=db_query("SELECT AM_Id, AM_Area, AM_Status  FROM ".TABLE_AREAMASTER." WHERE AM_City ='".$cityyidd."' ");
echo '<option>Select Area in '.CityName($cityyidd).'</option>';
while($fetchquery=mysql_fetch_array($queryarea)){
	$selectid = ($fetchquery['AM_Id'] == $_REQUEST['userarea']) ? 'selected=selected':'';
    echo '<option value="'.$fetchquery['AM_Id'].'" '.$selectid.'>'.$fetchquery['AM_Area'].'</option>';
	} ?>
</select>

</div>


 </div>

<?php if($_SESSION['LID']==''){?>

<div style="width:190px;height:29px;float:right; border:solid 0px #FF0000;">
<div style="width:70px;height:10px;float:left; border:solid 0px #0C0;">

<?php if($PageName!='Login' && $PageName!='ForgotPassword'){?>

<nav>
	<ul>
		<li id="login">
		<a id="login-trigger" href="#" style="margin:0px;color:#666;font-size:14px;font-weight:normal;margin-top:-5px;">
		Sign In
		</a>
		<div id="login-content" style="margin-top:20px;">
				<form  method="post" action="Login.php" onSubmit="return ValidateLogin();">
					<fieldset id="inputs" style="border:none;background:none;padding: 7px 10px;">
<input id="UserName" class="loginfont" name="UserName" style="color:#000;font-family: Arial,Helvetica,sans-serif;" type="text" placeholder="Username / Email Id / Mobile Number" autofocus autocomplete="off" />   
<input id="PassWord" class="loginfont" style="color:#000;font-family: Arial,Helvetica,sans-serif;" name="PassWord" type="password" placeholder="Password"  autocomplete="off" />
					</fieldset>
					<fieldset id="actions" style="border:none;background:none;">
                    <input type="submit" id="Submit" name="Submit" value="Sign In" style="background:#55842b;">	
                    </fieldset>
				</form>
<a href="ForgotPassword.php" style="text-decoration:none;color:#666;font-size:11px;">
<span><img src="images/forgot-passwords.png" /></span>Forgot Password ?</a>

			</div>                     
		</li>
	</ul>
</nav>
<?php }?>
</div>

<div style="width:60px;height:10px;float:left;"><a href="Register.php" style="color:#666; text-decoration:none; padding-left:10px;">Register</a></div>

<div style="width:60px;height:10px;float:left;"><a href="#" style="border:none;text-decortaion:none;">
<img src="images/home/register_icon.png" style="position:relative;left:10px;" /></a></div>
</div>

<?php } else {?>


<div style="width:250px;height:29px;float:right; margin-top:30px; margin-right:-20px; border:solid 0px #009900;">
<div style="float:left; font-size:14px;"><?php if($_SESSION['Type']==2 ){ if($FetProfileDetails['RGT_PaymentStatus']==1){?>
<a id="login-trigger"  href="<?php echo $FetProfileDetails['RGT_ProfileUrl'] ;?>" target="_blank" style="text-decoration:none;">View Profile</a> &nbsp;&nbsp;<?php }?>
<a id="login-trigger" href="ManageProfile.php" target="_blank" style="text-decoration:none;">Admin  &nbsp;&nbsp;</a>
<?php }?><a href="Logout.php" style="text-decoration:none;">Sign Out  &nbsp;&nbsp;</a>

</div>

<?php } ?>

</div>
</div>