<?php  ob_start();
$ModuleId = $_REQUEST['ModuleId'];
if($_REQUEST['action']=='FilterFieldList')
{ 
include_once("../Configuration.php");
include_once("../DatabaseConnection.php");
db_connect();
if($_REQUEST['SearchFilterFieldList']=='ProName') 
{ ?><input type="text" name="SearchFilterField" id="SearchFilterField" value="" class="input"/><?php }exit;
}
if(($_POST['Productlist']=='Submit') || ($_REQUEST['Productlist']=='Update'))
{

$TxtProductCode= addslashes(trim($_POST['TxtProductCode']));
$TxtProductName= addslashes(trim($_POST["TxtProductName"]));
$ExistId=$_POST['ExistId']; 
$ActiveStatus=$_POST['ActiveStatus'];
$startdata=$_POST['startdata'];
$SearchFilterFieldList=$_POST['hidSearchFilterFieldList'];
$SearchFilterField=$_POST['hidSearchFilterField'];

if($ExistId=='')
{

$ValidCheck=db_query("Select * FROM ".TABLE_ADMINPRODUCT." WHERE ProductName='".$TxtProductName."' ");
$CountValid=db_num_rows($ValidCheck);
if($CountValid!=0)
{
db_query("DELETE FROM ".TABLE_PRODUCTRELATIVITY."  WHERE  Ses_Id='".session_id()."' ");
echo "<script>var serty=OnclickMenu('2','$ModuleId','Productlist','0','');</script>";
}
else
{
$Product_Query="INSERT INTO ".TABLE_ADMINPRODUCT." SET `ProductCode`='".$TxtProductCode."',`ProductName`='".$TxtProductName."',`Status`='".$ActiveStatus."',`Createdby`='".$_SESSION['Admin_Id']."',`Createdon`=NOW(),`Modifiedby`='".$_SESSION['Admin_Id']."',`Modifiedon`=NOW()";
$ProductType_Insert=db_query($Product_Query); 
$optId=mysql_insert_id();
db_query("UPDATE ".TABLE_PRODUCTRELATIVITY." SET  Product_fk='".$optId."',Ses_Id='' WHERE  Ses_Id='".session_id()."' ");
echo "<script>var serty=OnclickMenu('1','$ModuleId','Productlist','0','$optId');</script>";
}
}
else
{
$ProductType_Query="UPDATE ".TABLE_ADMINPRODUCT." SET `ProductCode`='".$TxtProductCode."',`ProductName`='".$TxtProductName."',`Status`='".$ActiveStatus."',`Modifiedby`='".$_SESSION['Admin_Id']."',`Modifiedon`=NOW() Where Id='".$ExistId."'";
$ProductType_Update=db_query($ProductType_Query); 
$optId=$ExistId; 
db_query("UPDATE ".TABLE_PRODUCTRELATIVITY." SET  Product_fk='".$optId."',Ses_Id='' WHERE  Ses_Id='".session_id()."' ");
echo "<script>var serty=OnclickMenu_Edit('5','$ModuleId','Productlist','$startdata', '$optId', '$SearchFilterFieldList', '$SearchFilterField');</script>";
}
exit;
} 

if($_REQUEST['action']=='delete' || $_REQUEST['action']=='status' || $_REQUEST['action']=='Page' || $_REQUEST['Action']=='Filter' || $_REQUEST['action']=='verify')
{
include_once("../Configuration.php");
include_once("../DatabaseConnection.php");
db_connect();

$CheckModulePrevilage = PermissionList($_SESSION['Admin_Id'],'ModuleList',$ModuleId);

if($_REQUEST['action']=='delete')
{
db_query("DELETE FROM ".TABLE_ADMINPRODUCT." where Id=".$_REQUEST['id']."");
db_query("DELETE FROM ".TABLE_PRODUCTRELATIVITY." where Product_fk =".$_REQUEST['id']."");?>
<?php echo "<script>var serty=OnclickMenu('3','".$ModuleId."','Productlist','".$_REQUEST['startdata']."');</script>";
}

if($_REQUEST['action']=='status')
{
db_query("UPDATE ".TABLE_ADMINPRODUCT." SET Status='".$_REQUEST['val']."' where Id=".$_REQUEST['id']."");

$optId = $_REQUEST['id'];
}
if($_REQUEST['action']=='verify')
{
db_query("UPDATE ".TABLE_ADMINPRODUCT." SET Verify='".$_REQUEST['val']."' where Id=".$_REQUEST['id']."");

$optId = $_REQUEST['id'];
} 

$all_Sql = "Select DISTINCT a.Id, a.ProductCode, a.ProductName, a.Status,a.Verify From ".TABLE_ADMINPRODUCT." a ";
$orderBy = ' a.Id ';

if($_REQUEST['SearchFilterFieldList']=='ProName')
{
if($_REQUEST['SearchFilterField']!='')
$WhereCont = ' where a.ProductName like "%'.addslashes(trim($_REQUEST['SearchFilterField'])).'%"';
}
if($WhereCont=='')
$WhereCont = ' where 1';
$Verified='A';		
$gridHead = 'Product List Details';
$colHead  = array("Sl.No.", "Product Code", "Product Name", "Status","Verification","Action");
include_once('../../five_col_grid.php');
} 


if(isset($_REQUEST["Pcatid"])) {  // sub product search

include_once("../Configuration.php");
include_once("../DatabaseConnection.php");
db_connect();
?>
<select id="CboSubCatName" name="CboSubCatName" class="dropdown"  <?php if($_REQUEST['action']=='view')	{ ?> disabled <?php } ?> onchange="return OnclickPSubCategory(this.value);"  >
<option value="" selected="selected">--Select Sub Product Category--</option>
<?php 
$SelectSubCategory=db_query("Select ProductSubCat_Pk,ProductSubCat_Name From ".TABLE_PRODUCTSUBCATEGORY." WHERE Status='1' AND ProductCat_Fk='".$_REQUEST["Pcatid"]."'"); 
while($FetchCat=db_fetch_array($SelectSubCategory))
{ ?>
<option  value="<?php echo $FetchCat['ProductSubCat_Pk']; ?>" <?php if($FetchCat['ProductSubCat_Pk']==$Fetch['SubCategory_fk']){ ?> selected <?php }?> ><?php echo $FetchCat['ProductSubCat_Name']; ?></option>
<?php 
}?>
</select>
<?php  exit; } ?>
<?php 
if(isset($_REQUEST["PSubcatid"])) { // product type search
include_once("../Configuration.php");
include_once("../DatabaseConnection.php");
db_connect();
?>
<select id="CboPtpeCode" name="CboPtpeCode" class="dropdown"  <?php if($_REQUEST['action']=='view')	{ ?> disabled <?php } ?>>
<option value="" selected="selected">--Select Product Type--</option>
<?php 
$SelectProductType=db_query("Select ProductType_Pk,ProductType_Name From ".TABLE_PRODUCTTYPE." WHERE Status='1' AND ProductCat_Fk='".$_REQUEST["pid"]."' AND ProductSubCat_Fk='".$_REQUEST["PSubcatid"]."'"); 
while($FetchCat=db_fetch_array($SelectProductType))
{ ?>
<option  value="<?php echo $FetchCat['ProductType_Pk']; ?>" <?php if($FetchCat['ProductType_Pk']==$Fetch['ProductType_fk']){ ?> selected <?php }?> ><?php echo $FetchCat['ProductType_Name']; ?></option>
<?php 
}?>
</select>
<?php exit; }
