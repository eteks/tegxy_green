<?php 
include_once("include/Configuration.php");
include_once(PAGE_DBCONNECTION);
db_connect();
$HL=5;

include("CommonHeader.php");?>


<!-------------------------------------------------------------------related site css------------------------------------------------------------------------------>

<link rel="stylesheet" href="css/wb_related.css" type="text/css" />

<!-------------------------------------------------------------------related site css end------------------------------------------------------------------------------>


<!-------------------------------------------------------------------Advertisement Slide------------------------------------------------------------------------------>
<script type="text/javascript" src="adver/jquery.min.js"></script>

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


<?php include("web_relatedcompany.php"); ?>

<div style="width:850px;height:auto;clear:left;margin-top:0px;margin-left:auto;margin-right:auto; border:solid 0px #0000FF;">
<div id="contentwrapper" style="width:850px; border: solid 0px #FFFF00;">
<div id="contentcolumn" style="width:580px; border:solid 0px #999933;">
<div class="innertube" style="width:580px; border:solid 0px #FF6600;">
<center><h2 style="position:relative;color:#E76524;font-weight:bold;text-align:center;padding:5px 0px;"><!--Contact Us--></h2></center>

<div class="comment more" style="border:0px solid #E76524;border-radius:5px; width:550px;">

<?php
$sqltot="SELECT CI_Title,CI_Address,CI_Address2,CI_Country,CI_State,CI_City,CI_Area,CI_Pincode,CI_Phone, 	CI_Email,CI_Person,CI_Fax FROM ".TABLE_CONTACT."  WHERE  CI_UserFk 	='".$LID."' order by  CI_Id  desc";

$SqlRun=db_query($sqltot);
$Count = db_num_rows($SqlRun);
if($Count>0){
?>

<center>
<table width="100%" border="0" cellpadding="5" cellspacing="0">
<?php 
while(list($CI_Title,$CI_Address,$CI_Address2,$CI_Country,$CI_State,$CI_City,$CI_Area,$CI_Pincode,$CI_Phone,$CI_Email,$CI_Person,$CI_Fax) = db_fetch_array($SqlRun)){
?>
  <tr>
<td style="color:#136578;font-size:16px;font-weight:bold;" colspan="3"> <?php echo $CI_Title;?></td>
  </tr>
  <tr>
    <td width="29%">&nbsp;</td>
    <td width="4%">&nbsp;</td>
    <td width="67%">&nbsp;</td>
  </tr>
  <tr>
    <td><b> Contact Person  </b></td>
    <td><b>:</b></td>
    <td><?php echo $CI_Person;?></td>
  </tr>
  <tr>
    <td><b> Address : </b></td>
    <td><b>:</b></td>
    <td><?php echo $CI_Address;?><?php if($CI_Address2 !="") { ?>, <?php echo $CI_Address2;?> <?php } ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
<?php echo AreaName($CI_Area) ;?>  , <?php if((PincodeName($CI_Pincode)) != "") { echo  CityName($CI_City)."-". PincodeName($CI_Pincode);  }
else
{ 
echo CityName($CI_City);
}
?> 

 </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo StateName($CI_State);?> , <?php echo CountryName($CI_Country);?></td>
  </tr>
  
  
  <tr>
    <td><b>Phone</b></td>
    <td><b>:</b></td>
    <td><?php echo $CI_Phone;?></td>
  </tr>
  
  <tr>
    <td><b>Email: </b></td>
    <td><b>:</b></td>
    <td><?php echo StateName($CI_State);?> , <?php echo CountryName($CI_Country);?></td>
  </tr>
  
  <tr><?php if($CI_Fax !="") { ?>
    <td><b>Fax </b></td>
    <td><b>:</b></td>
    <td><?php echo $CI_Fax;?> <?php } else { } ?></td>
  </tr>
  
  
  <?php $Pid++;  } ?>
</table>

</center>

<?php } else echo '<center class="msgalert">No Record Found</center>'; ?>     

</div>
</div>
</div>

<?php include("ProfileRight.php");?>

</div>

<?php include('web_advertisementcolimn.php'); ?>

</div>
