<?php
include_once("include/Configuration.php");
include_once(PAGE_DBCONNECTION);
db_connect();

$UId=trim($_SESSION["LID"])!=""?trim($_SESSION["LID"]):session_id();
$eveid=trim($_GET["eveid"])!=""?trim($_GET["eveid"]):'eve1';


$sql = "Select EVS_Id,EVS_ImgPath,EVS_PSFk,EVS_Mode FROM ".TABLE_EVENTGALLERY." WHERE EVS_UserFk='".$UId."' and EVS_PSFk='".$eveid."'";

$SelectSlot=db_query($sql);
if($_GET['count']=='filecount')
echo $NumSlot=db_num_rows($SelectSlot);
else
{
while($FetchSlot=db_fetch_array($SelectSlot))
{
if($FetchSlot["EVS_Mode"]==1)
$Idd = 'EGalleryList';
else
$Idd = 'EGalleryList';
	
?>
<a href="javascript:void(0)" onClick="EdeleteGallery('<?php echo $FetchSlot['EVS_Id']; ?>','<?php echo $FetchSlot['EVS_PSFk']; ?>','<?php echo $Idd;?>');"><img src="<?php echo $FetchSlot['EVS_ImgPath']; ?>" height="30"  width="30" style="margin:5px;" /></a><?php 
}
$NumSlotct=db_num_rows($SelectSlot);
if($NumSlotct>0)
echo '<em><span class="alertmsg">Click on the image to delete</span></em>';
}?>

