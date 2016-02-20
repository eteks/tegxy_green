<?php include_once("include/Configuration.php");
include_once(PAGE_DBCONNECTION);
db_connect();

include("include/BlModules/Bl_General.php");
$PageName = basename($_SERVER['SCRIPT_FILENAME'],'.php');

if(!isset($_SESSION['Admin_Id']))
header("location:Login.php");

$ModuleId = $_REQUEST['ModuleId'];
$CheckModulePrevilage = PermissionList($_SESSION['Admin_Id'],'ModuleList',$ModuleId);

include("include/BlModules/Bl_ProductType.php");
$Select=db_query("Select * from ".TABLE_PRODUCTTYPE." WHERE ProductType_Pk='".$_REQUEST['id']."' ");
$Fetch=db_fetch_array($Select);
if($_REQUEST['startdata']=='')
$_REQUEST['startdata']=0;
if($_REQUEST['startdata']==-1)
$_REQUEST['startdata']=0;
?>
<div id="ScrollText" style="overflow:auto;">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
<tr>
<td align="left" valign="top">
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
<td width="9" align="left" valign="top"><img src="images/gridbox/title_l_bg.gif" width="9" height="29" /></td>
<td align="left" valign="top" class="title">Product Type</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="left" valign="top" class="tdcom">
<form method="post" enctype="multipart/form-data" name="FrmGovtDept" id="FrmGovtDept" action="index.php" onsubmit="return ValidateProducttype();"> 
<input type="hidden" value="<?php echo $Fetch['ProductType_Pk']; ?>" id="ExistId" name="ExistId" />
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr><td colspan="3" align="center"><span id="msgdisplay">&nbsp;<span id="Req"><?php 
if($_REQUEST['s']==1){ echo "Added Successfully!"; }
if($_REQUEST['s']==2){ echo "This Product Type Name Already Exist!"; }
if($_REQUEST['s']==3){ echo "Deleted Successfully"; }
if($_REQUEST['s']==4){ echo "Status Updated Successfully"; }
if($_REQUEST['s']==5){ echo "Updated Successfully"; } ?></span></span></td></tr>
<tr>
<td height="24" align="right">
<table border="0" cellspacing="2" cellpadding="2" width="100%">
<tr>
<td height="24" align="right" class="feildstxt"><span id="mustrequired">* </span>Product Category </td>
<td height="24" align="center"><span class="feildstxt">:</span></td>
<td height="24" align="left">
<?php 
if($_REQUEST['action']=='view' || $_REQUEST['action']=='edit' )
{  ?>
<select id="Selpcat" name="Selpcat" class="dropdown"  <?php if($_REQUEST['action']=='view')	{ ?> disabled <?php } ?> onchange="return OnclickPCategory4type(this.value);"  >
<option value="" selected="selected">--Select Product Category--</option>
<?php 
$SelectCategory=db_query("Select ProductCat_Pk,ProductCat_Name From ".TABLE_PRODUCTCATEGORY." WHERE Status='1'"); 
while($FetchCat=db_fetch_array($SelectCategory))
{ ?>
<option  value="<?php echo $FetchCat['ProductCat_Pk']; ?>" <?php if($FetchCat['ProductCat_Pk']==$Fetch['ProductCat_Fk']){ ?> selected <?php }?> ><?php echo $FetchCat['ProductCat_Name']; ?></option>
<?php 
}?>
</select>
<?php 
} else { ?>

<select id="Selpcat" name="Selpcat" class="dropdown" onchange="return OnclickPCategory4type(this.value);"  >
<option value="" selected="selected">--Select Product Category--</option>
<?php 
$SelectCategory=db_query("Select ProductCat_Pk,ProductCat_Name From ".TABLE_PRODUCTCATEGORY." WHERE Status='1'"); 
while($FetchCat=db_fetch_array($SelectCategory))
{ ?>
<option  value="<?php echo $FetchCat['ProductCat_Pk']; ?>" ><?php echo $FetchCat['ProductCat_Name']; ?></option>
<?php 
}?>
</select>
<?php } ?>
</td>
</tr>
<tr>
<td height="24" align="right" class="feildstxt">Product Sub Category </td>
<td height="24" align="center"><span class="feildstxt">:</span></td>
<td height="24" align="left">
<span id="ShowProductSubCategory">
<?php 
if($_REQUEST['action']=='view' || $_REQUEST['action']=='edit' )
{  ?>
<select id="CboSubCatName" name="CboSubCatName" class="dropdown"  <?php if($_REQUEST['action']=='view')	{ ?> disabled <?php } ?>  >
<option value="" selected="selected">--Select Product Sub Category--</option>
<?php 
$SelectSubCategory=db_query("Select ProductSubCat_Pk,ProductSubCat_Name From ".TABLE_PRODUCTSUBCATEGORY." WHERE Status='1' AND ProductCat_Fk='".$Fetch['ProductCat_Fk']."'"); 
while($FetchCat=db_fetch_array($SelectSubCategory))
{ ?>
<option value="<?php echo $FetchCat['ProductSubCat_Pk']; ?>" <?php if($FetchCat['ProductSubCat_Pk']==$Fetch['ProductSubCat_Fk']){ ?> selected <?php }?> ><?php echo $FetchCat['ProductSubCat_Name']; ?></option>
<?php 
}?>
</select>
<?php 
} else { ?>

<select id="CboSubCatName" name="CboSubCatName" class="dropdown"  >
<option value="" selected="selected">--Select Product Sub Category--</option>
<?php 
$SelectSubCategory=db_query("Select ProductSubCat_Pk,ProductSubCat_Name From ".TABLE_PRODUCTSUBCATEGORY." WHERE Status='1'"); 
while($FetchCat=db_fetch_array($SelectSubCategory))
{ ?>
<option value="<?php echo $FetchCat['ProductSubCat_Pk']; ?>" ><?php echo $FetchCat['ProductSubCat_Name']; ?></option>
<?php 
}?>
</select>

<?php } ?>    

</span>
</td>
</tr>
<tr>
<td height="24" align="right" class="feildstxt"><span id="mustrequired">* </span>Product Type Code</td>
<td height="24" align="center"><span class="feildstxt">:</span></td>
<td height="24" align="left">
<?php
$autoCode = getMaxId(TABLE_PRODUCTTYPE, 'ProductType_Pk') + 1;
$autoCode = 'PTYP'.$autoCode;
if ($_REQUEST['action']=='edit' && $Fetch['ProductType_Code'] == '')
$autoCode = 'SER'.$_REQUEST['id'];
else if ($_REQUEST['action']=='view' || $_REQUEST['action']=='edit')
$autoCode = $Fetch['ProductType_Code'];
?>
<input type="text" name="TxtPtypeCode" id="TxtPtypeCode" class="input"  <?php if($_REQUEST['action']=='view'){ ?> readonly <?php } ?> value="<?php if($_REQUEST['action']=='view' || $_REQUEST['action']=='edit') echo $autoCode; else echo $autoCode; ?>" autocomplete="off"/></td>
</tr>
<tr>
<td height="24" align="right" class="feildstxt"><span id="mustrequired">* </span>
Product Type</td>
<td height="24" align="center"><span class="feildstxt">:</span></td>
<td height="24" align="left"><input name="TxtProdtypeName" type="text" id="TxtProdtypeName" autocomplete="off"  value="<?php echo $Fetch['ProductType_Name'] ?>" <?php if($_REQUEST['action']=='view' ){ ?> readonly="" <?php } ?> class="input" /></td>
</tr>
<tr>
<td height="24" align="right" class="feildstxt">Product Type Description</td>
<td height="24" align="center"><span class="feildstxt">:</span></td>
<td height="24" align="left" colspan="5"><textarea name="TxtDesc" id="TxtDesc" <?php if($_REQUEST['action']=='view' ){ ?> readonly="" <?php } ?> class="input" style="width:300px;height:35px;"><?php echo $Fetch['ProductType_Desc']; ?></textarea></td>
</tr>
<tr>
<td height="24" align="right"><span class="feildstxt">Active Status</span></td>
<td height="24" align="center"><span class="feildstxt">:</span></td>
<td height="24" align="left"><input type="checkbox" name="ActiveStatus" id="ActiveStatus" style="width:20px;border:0px;" value="1" autocomplete="off" class="input" <?php if($Fetch['Status']=='1' || ($_REQUEST['action']!='view' && $_REQUEST['action']!='edit')){ ?> checked="checked"<?php }?> <?php if($_REQUEST['action']=='view')	{ ?> disabled="disabled" <?php } ?>  />
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td height="30" align="center">
<?php
$submitName = 'ProductType';
$fileName   = 'ProductType';
include_once('opt_Table.php'); ?>
<input type="hidden" id="formname" name="formname" value="FrmProductList" />
<input type="hidden" id="ModuleId" name="ModuleId" value="<?php echo $ModuleId ?>" />
<input type="hidden" id="fileName" name="fileName" value="<?php echo $fileName ?>" />
<input type="hidden" id="startdata" name="startdata" value="<?php echo $_REQUEST['startdata'] ?>" />
<input type="hidden" id="hidSearchFilterFieldList" name="hidSearchFilterFieldList" value="<?php echo $_REQUEST['SearchFilterFieldList'] ?>" />
<input type="hidden" id="hidSearchFilterField" name="hidSearchFilterField" value="<?php echo $_REQUEST['SearchFilterField'] ?>" />
</td>
</tr>
</table>
</form>
</td>
</tr>
<script type="text/javascript" language="javascript">
var cursorpointer=document.getElementById('TxtProdtypeName').focus();
</script>
<tr><td>&nbsp;</td></tr>
<tr>
<td>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td align="left" class="feildstxt"><strong>Filter</strong></td>
<td align="right">
<span class="feildstxt"> Select Filter Option&nbsp;&nbsp;:&nbsp;&nbsp;
<select name="SearchFilterFieldList" id="SearchFilterFieldList" onchange="return onchangeFilterField('Bl_ProductType');"><option value="">-- Select Filter --</option>
<option value="ProCategory" <?php if($_REQUEST['SearchFilterFieldList']=='ProCategory'){ echo 'Selected';} ?> >Product Category</option>
<option value="ProSubCategory" <?php if($_REQUEST['SearchFilterFieldList']=='ProSubCategory'){ echo 'Selected';} ?> >Product Sub Category</option>
<option value="ProType" <?php if($_REQUEST['SearchFilterFieldList']=='ProType'){ echo 'Selected'; } ?> >Product Type</option>
</select></span>&nbsp;&nbsp;<span id="FilterFieldList">
<?php if($_REQUEST['SearchFilterFieldList']=='ProCategory') 
{ ?><select id="SearchFilterField" name="SearchFilterField" class="dropdown">
<option value="" selected="selected">--Select Sector--</option>
<?php $SelectSector=db_query("Select ProductCat_Pk,ProductCat_Name From ".TABLE_PRODUCTCATEGORY." WHERE Status='1'");
while($FetchSector=db_fetch_array($SelectSector))
{ ?>
<option  value="<?php echo $FetchSector['ProductCat_Pk']; ?>" <?php if($_REQUEST['SearchFilterField']==$FetchSector['ProductCat_Pk']){ echo 'Selected'; } ?> ><?php echo $FetchSector['ProductCat_Name']; ?></option><?php 
}?>
</select><?php
} else if($_REQUEST['SearchFilterFieldList']=='ProSubCategory') 
{ ?><select id="SearchFilterField" name="SearchFilterField" class="dropdown" >
<option value="" selected="selected">--Select Pro Sub Category--</option><?php $SelectSector=db_query("Select ProductSubCat_Pk,ProductSubCat_Name From ".TABLE_PRODUCTSUBCATEGORY." WHERE Status='1'");
while($FetchSector=db_fetch_array($SelectSector))
{ ?>
<option value="<?php echo $FetchSector['ProductSubCat_Pk']; ?>" <?php if($_REQUEST['SearchFilterField']==$FetchSector['ProductSubCat_Pk']){ echo 'Selected'; } ?> ><?php echo $FetchSector['ProductSubCat_Name']; ?></option>
<?php 
}?>
</select><?php
} else if($_REQUEST['SearchFilterFieldList']=='ProType') 
{ ?><input type="text" name="SearchFilterField" id="SearchFilterField" value="<?php echo $_REQUEST['SearchFilterField'];?>" class="input"/><?php
} else { ?><input type="hidden" name="SearchFilterField" id="SearchFilterField" value="" class="input"/><?php }
?></span>&nbsp;&nbsp;
<span><input type="button" name="SearchFilter" id="SearchFilter" value="Search Filter" onclick="return OnChangeFilterElement('SearchFilterField','<?php echo $ModuleId;?>','Bl_ProductType');"/></span></td>
</tr>
</table>
</td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td align="left" valign="top">
<div id="DetailList">
<?php
$optId = $_REQUEST['optid'];
$all_Sql = "Select DISTINCT a.ProductType_Pk, b.ProductCat_Name, a.ProductType_Name, a.Status From ".TABLE_PRODUCTTYPE." a LEFT JOIN ".TABLE_PRODUCTCATEGORY." b on b.ProductCat_Pk = a.ProductCat_Fk ";
$orderBy = ' a.ProductType_Pk ';

if($_REQUEST['SearchFilterFieldList']=='ProCategory')
{
if($_REQUEST['SearchFilterField']!='')
$WhereCont = ' Where a.ProductCat_Fk ="'.$_REQUEST['SearchFilterField'].'"';
}
if($_REQUEST['SearchFilterFieldList']=='ProSubCategory')
{
if($_REQUEST['SearchFilterField']!='')
$WhereCont = ' where a.ProductSubCat_Fk  ="'.$_REQUEST['SearchFilterField'].'"';
}
if($_REQUEST['SearchFilterFieldList']=='ProType')
{
if($_REQUEST['SearchFilterField']!='')
$WhereCont = ' where a.ProductType_Name like "%'.trim(addslashes($_REQUEST['SearchFilterField'])).'%"'	;
}
if($WhereCont=='')
$WhereCont = ' where 1';

$gridHead = 'Product Type Details';
$colHead  = array("Sl.No.", "Product Category", "Product Type", "Status", "Action");
include_once('five_col_grid.php');
?>
</div>
</td>
</tr>
</table>
</div>
