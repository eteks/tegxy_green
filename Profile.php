<div class="heading" style="text-align:center">Profile</div>
<div id="personal" style="margin-left:80px; padding-bottom:30px;width:680px;">
<form id="ProfileForm">
<div id="ProfileEntryLevel" style="display:none;">
<div class="pagination handsym" onclick="GridShowHide('ProfileEntryLevel','ProfileEntryGrid','Grid','');" style="line-height: 49px;"><img width="30" height="30" src="images/Back-icon.png" title="Back"></div>
<div style="clear:both"></div>

<fieldset>
<legend>Profile</legend>
<table border="0" cellspacing="0" cellpadding="0">

<tr>
<td style="padding-left:35px;">Title</td>
<td style="padding-left:15px;"> :&nbsp;</td>
<td style="padding-left:5px;"><input type="text" id="ProTitle" name="ProTitle" autocomplete="off" class="inp-text" style="width:538px;" /></td>
</tr>

<tr><td colspan="3">&nbsp;</td></tr>

<tr><td colspan="3">

<table border="0" cellspacing="0" cellpadding="0" class="">
<tr>
<td> Sub Title</td>
<td> :&nbsp;</td>
<td><input type="text" id="SProTitle" name="SProTitle" autocomplete="off" class="inp-text" style="width:538px;"  /></td>
</tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr>
<td>Description</td>
<td> :&nbsp;</td>
<td>
<?php
require_once('fckeditor/fckeditor.php');
$FCKeditor = new FCKeditor('ProfDescribe');
$FCKeditor->BasePath = 'fckeditor/';
$FCKeditor->Height = 300;
$FCKeditor->Width = 550;
//$FCKeditor->Value = stripslashes($FetProfileDetails["RGT_ProfileDesp"]);
$FCKeditor->Create();
?>
</td>
</tr>  
<tr><td colspan="3">&nbsp;</td></tr>
<tr>
<td colspan="3" align="center">
<input type="button" onclick="SubProfile();" class="submit-btn" id="SubProfileSmt" name="SubProfileSmt" value="Add" />
<input type="button" onclick="SubProfileRes();" class="submit-btn" id="SubProfileReset" name="SubProfileReset" value="Reset" />
<input type="hidden" id="SProStateData" name="SProStateData" />
<input type="hidden" id="SProEdit" name="SProEdit" />

</td>
</tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3" width="95%" align="center">
<div id="SubProfileGrid" class="gridpad"></div>
</td></tr>
</table>
</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr>
<td colspan="3" align="center">
<input type="button" onclick="Profile();" id="ProfileSmt" class="submit-btn" name="ProfileSmt" value="Save Profile" />
<input type="button" onclick="ProfileResett();" class="submit-btn" id="ProfileReset" name="ProfileReset" value="Reset" />
<input type="button" value="Cancel" class="submit-btn" onclick="GridShowHide('ProfileEntryLevel','ProfileEntryGrid','Grid','');" />

<input type="hidden" id="ProStateData" name="ProStateData" />
<input type="hidden" id="ProEdit" name="ProEdit" />
</td>
</tr>
<tr><td colspan="3">&nbsp;</td></tr>
</table>
</fieldset>
</div>
<div id="ProfileEntryGrid" style="display:block;">

<div id="ProfileGrid" style="width:687px;" class="gridpad">

<table border="0" cellspacing="0" cellpadding="0" width="100%" class="mfieldset">

<tr class="pagination heading2">
<td width="90%" colspan="2">

<!--<span onclick="GridShowHide('ProfileEntryLevel','ProfileEntryGrid','Page','');ProfileResett();"><b>Add New Profile&nbsp;</b></span>--></td>

<td width="10%">

<?php
$sqltot1="SELECT PFE_Pk, PFE_Title FROM ".TABLE_PROFILE." WHERE PFE_CreatedBy='".$UId."' order by  PFE_Pk desc";
$tot1=db_query($sqltot1);
$rtot1=@db_num_rows($tot1);
$totalrecord1=$rtot1;  $pagesize=10;
$noofpages1=$totalrecord1/$pagesize;
$startdata=0;
$Profile1=db_query("SELECT PFE_Pk, PFE_Title FROM ".TABLE_PROFILE." WHERE PFE_CreatedBy='".$UId."' order by  PFE_Pk desc limit $startdata,$pagesize");
$Count1 = db_num_rows($Profile1);
?>

<?php if($Count1 < 4) { ?>
<span class="handsym" onclick="GridShowHide('ProfileEntryLevel','ProfileEntryGrid','Page','');ProfileResett();"><img src="images/Add.png" width="30" height="30" title="Add" />
</span><?php } else { } ?>

</td>
</tr>

<tr><td colspan="3" class="gridbgcolor" >





<?php
$sqltot="SELECT PFE_Pk, PFE_Title FROM ".TABLE_PROFILE." WHERE PFE_CreatedBy='".$UId."' order by  PFE_Pk desc";
$tot=db_query($sqltot);
$rtot=@db_num_rows($tot);
$totalrecord=$rtot;  $pagesize=10;
$noofpages=$totalrecord/$pagesize;
$startdata=0;
$Profile=db_query("SELECT PFE_Pk, PFE_Title FROM ".TABLE_PROFILE." WHERE PFE_CreatedBy='".$UId."' order by  PFE_Pk desc limit $startdata,$pagesize");
$Count = db_num_rows($Profile);
?>



<table border="0" cellspacing="0" cellpadding="5" width="100%" class="manageborder">
<tr height="35">
<td width="10%">S.No.</td>
<td width="70%">Title</td>
<td width="20%">Action</td>
</tr>

<tr><td colspan="3" class="gridlinebgcolor"></td></tr>


<tr class="gridcenbgcolor" height="25">
<td width="10%">0</td>
<td width="70%">Info</td>
<td width="20%">

<p class="vertical"><a id="OpenProfile_1"> View </a></p></td>
</tr>


<?php
if($Count>0){
$Pid=1;
while(list($ProId,$ProTitle) = db_fetch_array($Profile)){
?>
<tr class="gridcenbgcolor" height="25">
<td width="10%"><?php echo $Pid ;?></td>
<td width="70%"><?php if(strlen(stripslashes($ProTitle))>25){ echo substr(stripslashes($ProTitle),0,50).'...' ;} else { echo stripslashes($ProTitle);} ?></td>
<td width="20%"><span onclick="ProfileEdit(<?php echo $ProId;?>);" class="handsym" ><img width="16" border="0" height="16" src="images/b_edit.png" title="Edit"></span>&nbsp;<span onclick="ProfileDelete(<?php echo $ProId;?>,<?php echo $Count;?>,<?php echo $startdata;?>);" class="handsym"><img width="16" border="0" height="16" src="images/b_drop.png" title="Delete"></span></td>
</tr>
<?php  $Pid++;}?>
<tr><td colspan="3" class="gridlinebgcolor"></td></tr>
<tr class="gridbgcolor"  height="25"><td colspan="3"><?php echo getManagePagingLink($sqltot, $pagesize, $startdata, 'PageProfile'); ?></td></tr>
<?php } else {?>
<tr class="gridcenbgcolor" height="25"><td colspan="3" class="text-align-c">&nbsp;</td>
</tr>
<tr><td colspan="3" class="gridlinebgcolor"></td></tr>
<tr class="gridbgcolor"   height="25"><td colspan="3"></td></tr>
<?php }?>
</table>


</td></tr>

</table>
</div>
</div>
</form>
</div>
