<?php
include('db.php');

if($_POST)
{
$com=$_POST['comp_search'];

$pro=$_POST['search'];

$comp_search=$_POST['c_name'];
$id_search=$_POST['c_id'];
$indus=$_POST['industry'];
$stat=$_POST['state'];
$city=$_POST['city'];


if($pro =="")
{
$query ="select * from tbl_registration a where RGT_Status=1 AND RGT_Type=2 AND ";

if($com !="") 
{
 $query.="a.RGT_CompName like '%$com%'"; 
}

if($indus !="")
{
 $query.="a.RGT_Sector like '%$indus%' ";
}

if($stat !="")
{
 $query.="a.RGT_OwnState like '%$indus%' ";
}

$query.="order by RGT_CompName LIMIT 5";

$sql_res=mysql_query($query); 

while($row=mysql_fetch_array($sql_res))

{
$RGT_CompName=$row['RGT_CompName'];
$RGT_PK=$row['RGT_PK'];
$RGT_Sector=$row['RGT_Sector'];
$RGT_State=$row['RGT_State'];
$RGT_City=$row['RGT_City'];

//$b_username='<strong>'.$q.'</strong>';

//$final_username = str_ireplace($q, $b_username, $RGT_CompName);
?>


<div class="comp_show" align="left">

<div class="id_show" style="display:none;"><?php echo $RGT_PK; ?></div>

<div class="indus_show" style="display:none;"><?php echo $RGT_Sector; ?></div>

<span class="comp_name"><?php echo $RGT_CompName; ?></span>&nbsp;
      
    
<?php
if($RGT_Sector !="")
{ 
$query_ind="select * from tbl_sector where status=1 AND Id='$RGT_Sector'";
$sql_res_ind=mysql_query($query_ind); 

if($row1=mysql_fetch_array($sql_res_ind))
{
$S_Name=$row1['S_Name'];
}


?>

<div class="indus_name" style="display:none;"><?php echo $S_Name; ?></div>

<?php
 } 

if($RGT_State !="")
{ 

$query_state="select * from tbl_generalstatemaster where Id = '$RGT_State' ";
$sql_res_state=mysql_query($query_state); 

if($row_state=mysql_fetch_array($sql_res_state))
{
$St_Name=$row_state['St_Name'];
}

?>

<div class="state_name" style="display:none;"><?php echo $St_Name; ?></div>


<?php
 } 

if($RGT_City !="")
{ 

$query_city="select * from tbl_generalareamaster where Id = '$RGT_City' ";
$sql_res_city=mysql_query($query_city); 

if($row_city=mysql_fetch_array($sql_res_city))
{
$Area=$row_city['Area'];
}

?>

<div class="area_name" style="display:none;"><?php echo $Area; ?></div>

</div> 

<?php 
} 
}
}
?>
    
<?php 

if($pro !="" && $comp_search =="")
{
$sql_res_pro=mysql_query("select * from tbl_productservice where PS_Display like '%$pro%' order by PS_Display LIMIT 5");

while($row_pro=mysql_fetch_array($sql_res_pro))
{
$PS_Display=$row_pro['PS_Display'];

//$b_username='<strong>'.$q.'</strong>';

//$final_username = str_ireplace($q, $b_username, $RGT_CompName);

?>

<div class="show" align="left">
<span class="name"><?php echo $PS_Display; ?></span>&nbsp;
</div>

<?php
}
} 

if($pro !="" && $comp_search !="")
{ 
$sql_res_cp=mysql_query("select PS_Display from tbl_productservice  WHERE PS_User_Fk ='$id_search' AND PS_Display like '%$pro%' order by PS_Display LIMIT 5");


while($row_cp=mysql_fetch_array($sql_res_cp))
{
$PS_Display=$row_cp['PS_Display'];
?>

<div class="show" align="left">
<span class="name"><?php echo $PS_Display; ?></span>&nbsp;
</div>

<?php
}
}

?>

<?php } ?>