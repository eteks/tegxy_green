<?php
include_once("include/Configuration.php");
include_once(PAGE_DBCONNECTION);
db_connect();

$UId=trim($_SESSION["LID"])!=""?trim($_SESSION["LID"]):session_id();

$eveid=trim($_REQUEST["eveid1"])!=""?trim($_REQUEST["eveid1"]):'eve1';
$result1 = process_image_upload('uploadfile','Document/InnerImages/','Document/InnerImages/WaterMarkInImg/',$UId);
if ($result1) 
{
	$sqle = "INSERT INTO ".TABLE_EVENTGALLERY." set EVS_Mode=1, EVS_UserFk='".$UId."', EVS_ImgPath='".$result1[0]."',EVS_PSFk='".$eveid."'";
	$inserte=db_query($sqle) or die(db_error());
	$cc=db_insert_id();
	
db_query("INSERT INTO ".TABLE_STOREFILESIZE." SET SFS_UserFk='".$UId."',SFS_Fk='".$eveid."',`SFS_MainFk` ='".$cc."',SFS_Mode='7',SFS_FileSize='".filesize($result[0])."',SFS_CreatedOn=NOw(),SFS_ModifiedOn=NOw()");

	echo "success".$cc."###".$Thumbnail."###".UserFileSize($UId);
} else {
	echo "error";
}
?>