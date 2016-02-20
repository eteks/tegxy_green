<div style="width:100%; border:solid 0px #FF0000;">
<?php
$HL=1;
include("ProfileHeader.php");?>


<?php include("web_relatedcompany.php"); ?>

<div style="width:850px;height:auto;clear:left;margin-top:0px;margin-left:auto;margin-right:auto; border:solid 0px #00CC00;">
<div id="contentwrapper" style="border:solid 0px red; width:850px;">
<div id="contentcolumn" style="border:solid 0px blue;  width:570px;">
<div class="innertube"><br />
<center>
<h1 style="position:relative;font-style:italic; width:400px;height:auto;margin-left:auto;margin-right:auto;left:50px;padding-left:50px;margin-bottom:10px;margin-top:10px;">
<?php echo $FetProfileDetails['RGT_CompName'] ;?> Welcomes You !!!  </h1></center>
<?php /*if($EnableCount4>0) {*/?>
<div style="width:100%;height:18px; border:solid 0px #FF0000; width:570px;" align="right" >
<div style="width:48px;height:18px;background:url(images/updown-arrow.png) no-repeat;">
<div id="show_all" onClick="close_all();" title="Hide All" style="width:24px;height:18px;float:left;cursor:pointer;"></div>
<div id="close_all" onClick="view_all();" title="Show All" style="width:24px;height:18px;float:left;cursor:pointer;"></div>
</div>
</div>   
<div id="multiAccordion" style="border:solid 0px #0000FF; width:570px;">
<?php 
$ProfileDetails=db_query("SELECT * FROM ".TABLE_REGISTRATION." WHERE RGT_PK='".$LID."' AND RGT_Type!=1");
$FetProfileDetails = db_fetch_array($ProfileDetails);
?>
<h3><a href="#" style="font-size: 13px;font-weight: bold;">Info</a></h3>
<div>
<table  border="0" cellpadding="0" cellspacing="0" style="line-height:25px;">
<?php  if($FetProfileDetails['RGT_CompName']!==''){
if (strlen($FetProfileDetails['RGT_CompName']) > 35)	
$dispcompname =  substr($FetProfileDetails['RGT_CompName'],0,35).'...';
else
$dispcompname = $FetProfileDetails['RGT_CompName'];
?>
<tr>
<td>Company Name</td>
<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
<td><span style="cursor:pointer;" title="<?php echo $FetProfileDetails['RGT_CompName'];?>"><?php  echo $dispcompname;?></span></td>
</tr>
<?php }
if($FetProfileDetails['RGT_GroupName']!==''){
if (strlen($FetProfileDetails['RGT_GroupName']) > 35)	
$dispgroupname=  substr($FetProfileDetails['RGT_GroupName'],0,35).'...';
else
$dispgroupname = $FetProfileDetails['RGT_GroupName'];
?>
<tr>
<td>Group Name</td>
<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
<td><span style="cursor:pointer;" title="<?php echo $FetProfileDetails['RGT_GroupName'];?>"><?php  echo $dispgroupname;?></span></td>
</tr>
<?php }
if($FetProfileDetails['RGT_Sector']!==''){?>
<tr>
<td>Industry</td>
<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
<td><?php  echo getSectordetails($FetProfileDetails['RGT_Sector']);?></td>
</tr>
<?php }
if(getMemberKeywords($FetProfileDetails['RGT_PK'])!=''){
if (strlen(getMemberKeywords($FetProfileDetails['RGT_PK'])) > 35)	
$dispkeyword =  substr(getMemberKeywords($FetProfileDetails['RGT_PK']),0,35).'...';
else
$dispkeyword = getMemberKeywords($FetProfileDetails['RGT_PK']);
?>
<tr>
<td>offers</td>
<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
<td><span style="cursor:pointer;" title="<?php echo getMemberKeywords($FetProfileDetails['RGT_PK']);?>"><?php  echo $dispkeyword;?></span></td>
</tr>
<?php }
if($FetProfileDetails['RGT_CompType']){?>
<tr>
<td>Type of Company</td>
<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
<td><?php  echo CompanyType($FetProfileDetails['RGT_CompType']);?></td>
</tr>
<?php }
if($FetProfileDetails['RGT_YrofEstablish']){?>
<tr>
<td>Year of Establishment</td>
<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
<td><?php  echo $FetProfileDetails['RGT_YrofEstablish'];?></td>
</tr>
<?php }
if($FetProfileDetails['RGT_EmpStrength']){?>
<tr>
<td>Company Strength</td>
<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
<td><?php  echo $FetProfileDetails['RGT_EmpStrength'];?></td>
</tr>
<?php }
if(getOperatingAreas($FetProfileDetails['RGT_PK'])!=''){
if (strlen(getOperatingAreas($FetProfileDetails['RGT_PK'])) > 35)	
$dispareas =  substr(getOperatingAreas($FetProfileDetails['RGT_PK']),0,35).'...';
else
$dispareas = getOperatingAreas($FetProfileDetails['RGT_PK']);
?>
<tr>
<td>Operating Areas</td>
<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
<td><span style="cursor:pointer;" title="<?php echo getOperatingAreas($FetProfileDetails['RGT_PK']);?>"><?php  echo $dispareas;?></span></td>
</tr>
<?php }
if($FetProfileDetails['RGT_WorkingdayFrom']){?>
<tr>
<td>Working Days</td>
<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
<td><?php  echo $FetProfileDetails['RGT_WorkingdayFrom'].' - '.$FetProfileDetails['RGT_WorkingdayTo'];?></td>
</tr>
<?php }
if($FetProfileDetails['RGT_OfficetimeFrom']){?>
<tr>
<td>Business Timing</td>
<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
<td><?php  echo $FetProfileDetails['RGT_OfficetimeFrom'].' - '.$FetProfileDetails['RGT_OfficetimeTo'];?></td>
</tr>
<?php }
if($FetProfileDetails['RGT_BreaktimeFrom']){?>
<tr>
<td>Break Time</td>
<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
<td><?php  echo $FetProfileDetails['RGT_BreaktimeFrom'].' - '.$FetProfileDetails['RGT_BreaktimeTo'];?></td>
</tr>
<?php }?>
</table>
</div>
<?php 
$Profile=db_query("SELECT PFE_Pk, PFE_Title FROM ".TABLE_PROFILE." WHERE PFE_CreatedBy='".$LID."' order by  PFE_Pk asc");
while($Profile_Fetch = db_fetch_array($Profile))
{?>
<h3><a href="#" style="font-size: 13px;font-weight: bold;"><?php echo $Profile_Fetch['PFE_Title'];?></a></h3>

<div style="border:solid 1px #333333;">
<?php
$SubProfile=db_query("SELECT PDS_SubTitle,PDS_Desc FROM ".TABLE_PROFILEDETAILS." WHERE PDS_Fk='".$Profile_Fetch['PFE_Pk']."'  order by  PDS_Pk asc");
while($SubProfile_Fetch = db_fetch_array($SubProfile)){?>
<h3><?php echo $SubProfile_Fetch['PDS_SubTitle'];?></h3>
<?php echo stripslashes($SubProfile_Fetch['PDS_Desc']);?>
<?php
}?></div><?php }?>
</div>
<?php /*} else echo '<center class="msgalert">No Record Found</center>'; */?>     
</div>
</div>
<?php include("ProfileRight.php");?>




<?php include('web_advertisementcolimn.php'); ?>




</div>


</div>

</div>



<!-- Footer -->
<!----footer------>


<link rel="stylesheet" href="css/wb_related.css" type="text/css" />
<!--------vertical accordion----------->
<link type="text/css" rel="stylesheet" href="vaccordian/css/jquery-ui-1.8.9.custom.css" />
	<script type="text/javascript" src="vaccordian/jquery-1.4.3.min.js"></script>	
	<script type="text/javascript" src="vaccordian/jquery-ui-1.8.13.custom.min.js"></script>
	<script type="text/javascript" src="vaccordian/jquery.multi-accordion-1.5.3.js"></script>
<!--------vertical accordion----------->
<script type="text/javascript">
		$(function(){
			$('#multiAccordion').multiAccordion({
				active: [1, 2],
				click: function(event, ui) {
					//console.log('clicked')
				},
				init: function(event, ui) {
					//console.log('whoooooha')
				},
				tabShown: function(event, ui) {
					//console.log('shown')
				},
				tabHidden: function(event, ui) {
					//console.log('hidden')
				}
			});
			$('#multiAccordion').multiAccordion("option", "active", [0]);
		});
	</script>
	<script>
    function close_all()
		{
		$('#multiAccordion').multiAccordion("option", "active", "none");
		}
	function view_all()
		{
		$('#multiAccordion').multiAccordion("option", "active", "all");
		}
    </script>



<!-------------------------------------------------------------------Advertisement Slide------------------------------------------------------------------------------>

<link rel="stylesheet" href="adver/style.css" type="text/css" media="screen" />
<script src="adver/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
$(".newsticker-jcarousellite").jCarouselLite({
vertical: true,
hoverPause: true,
visible: 4,
auto: 5000,
speed: 1000
});
});
</script>
<!-------------------------------------------------------------------Advertisement Slide End------------------------------------------------------------------------------>