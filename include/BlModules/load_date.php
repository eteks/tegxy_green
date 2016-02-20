<?php

if($_POST['page'])
{
$page = $_POST['page'];

$cur_page = $page;
$page -= 1;
$per_page = 15;
$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;
$start = $page * $per_page;
include"db.php";



//$query_pag_data = "SELECT * from tbl_registration where RGT_Status='1' LIMIT $start, $per_page";
	
$query_pag_data= "SELECT * FROM  ".TABLE_REGISTRATION." WHERE  $searchsql RGT_Status=1 AND RGT_Type=2 $querycitymatch  $queryareamatch $industry_view  LIMIT $start, $per_page";

$result_pag_data = mysql_query($query_pag_data) or die('MySql Error' . mysql_error());

while ($row = mysql_fetch_array($result_pag_data)) {



$yearofestablishment = explode('-',$fetchquery['RGT_YrofEstablish']);

 if(strlen(stripslashes($fetchquery['RGT_CompName']))>25){ $Compnamefixlimit = substr(stripslashes($fetchquery['RGT_CompName']),0,25).'...' ;} else { $Compnamefixlimit =  stripslashes($fetchquery['RGT_CompName']);} 
$Compnamedisp = '<span style="cursor:pointer;" title="'.$fetchquery['RGT_CompName'].'">'.$Compnamefixlimit.'</span><span style="color:#007088;"> (Since - '.$yearofestablishment[2].')</span>'; 
?>

<div class="singlead">
<!----title---->
<div class="adtitle">
<div style="width:550px;color:#EC5324;float:left;"><b>

<?php if($fetchquery['RGT_PaymentStatus']=='1'){?><a <?php  if(isset($_SESSION['LID'])){?>href="<?php echo $fetchquery['RGT_ProfileUrl']?>" <?php } else {?> class="pop firstviewmore" onclick="getUserProfile('<?php echo $fetchquery['RGT_ProfileUrl']?>','','');" <?php }?>   target="_blank" style="text-decoration:none;"> <?php } ?>
<?php echo $Compnamedisp; ?></a></b> 


<?php /*?><span style="float:right;">offers : </span>
<span style="cursor:pointer;" title="<?php echo getMemberKeywords($fetchquery['RGT_PK']);?>">
<?php 
if (strlen(getMemberKeywords($fetchquery['RGT_PK'])) > 20)	
$dispkeyword =  substr(getMemberKeywords($fetchquery['RGT_PK']),0,20).'...';
else
$dispkeyword = getMemberKeywords($fetchquery['RGT_PK']);
echo $dispkeyword;?></span></span><?php */?>


</div>

<?php /*?>
<div class="rating">Rating <span><img src="images/rating_star.png" /><img src="images/rating_star.png" /><img src="images/rating_star.png" /></span> 3.0</div><?php */?>

</div>

<!----title--------->
<!------adimage--------->
<div class="adimage">
<div class="company_logo" align="right"><a href="#thumb" class="thumbnail">
<img src="<?php if($fetchquery['RGT_PK']!=''){ echo getLogodetails($fetchquery['RGT_PK'],$path); } else { echo 'images/default/no_image.png'; }?>"  width="124" height="115" /><span><img  src="<?php if($fetchquery['RGT_PK']!=''){ echo getLogodetails($fetchquery['RGT_PK'],$path); } else { echo 'images/default/no_image.png'; }?>" width="220" height="220" /></span></a><?php /*?><img src="<?php getLogodetails($fetchquery['RGT_PK'],$path);?>" width="124" height="115" /><?php */?></div>



<div class="addetails_left">
<div style="height:10px;"></div>
<span><?php if($fetchquery['RGT_CompType']!=''){?><span>Company Type : <?php if($fetchquery['RGT_CompType']=='1'){echo "Cooperative Societies"; } elseif($fetchquery['RGT_CompType']=='2'){ echo "Government Based";} elseif($fetchquery['RGT_CompType']=='3'){ echo "Joint Stock Companies";} elseif($fetchquery['RGT_CompType']=='4'){ echo "Partnership";} elseif($fetchquery['RGT_CompType']=='5'){ echo "Private Limited";} elseif($fetchquery['RGT_CompType']=='6'){ echo "Sole Proprietorship";}?></span><?php }?></span>

<div style="height:5px;"></div>


<div>

<?php 
$count_desp=strlen($fetchquery['RGT_OwnDesign']);
if($count_desp>300){
$comp_desp=(substr($fetchquery['RGT_OwnDesign'],0,300));
$comp_desp.='...';
}
else
{
$comp_desp=$fetchquery['RGT_OwnDesign'];
}
?>

Description :  &nbsp; <?php echo $comp_desp; ?> </div>

</div>



</div>
<!------adimage--------->
<!------addetails--------->
<div class="addetails" style="height:auto;">


<div class="addetails_left">

<span style="color:#EC5324;"><b>Company Details</b></span>

<div style="height:5px;"></div><span>Industry : </span> <?php getSectordetails($fetchquery['RGT_Sector']);?><br/><?php //if(getMemberKeywords($fetchquery['RGT_PK'])!=''){?>

<div style="height:5px;"></div>

<div> 
<?php if($fetchquery['RGT_Website'] !="") { ?> 
Website : <a href="<?php echo $fetchquery['RGT_Website'];?>" target="_blank"><?php echo $fetchquery['RGT_Website'];?></a>  <?php } ?>
</div>


<div style="height:5px;"></div>

<div>
<?php if($fetchquery['RGT_WorkingdayFrom'] !="") { ?> 
<span>Working Days : <?php echo $fetchquery['RGT_WorkingdayFrom'];?> - <?php echo $fetchquery['RGT_WorkingdayTo'];?></span>  <?php } ?>
</div>

<div style="height:5px;"></div>

<div>
<?php if($fetchquery['RGT_OfficetimeFrom'] !="") { ?> 
<span>Business Timing : <?php echo $fetchquery['RGT_OfficetimeFrom'];?> - <?php echo $fetchquery['RGT_OfficetimeTo'];?></span>  <?php } ?>
</div>

<!--<div style="height:5px;"></div>
<div><span> Break Time : <?php echo $fetchquery['RGT_BreaktimeFrom'];?> - <?php echo $fetchquery['RGT_BreaktimeTo'];?></span></div>-->
</div>






<div class="addetails_sep"></div>
<div class="addetails_right" style="height:auto;">
<span style="color:#EC5324;"><b>Contact Details</b></span><div style="height:10px;"></div>
<?php

if (strlen($fetchquery['RGT_Address1']) > 15)	
$dispaddress =  substr($fetchquery['RGT_Address1'],0,15).'...';
else
$dispaddress = $fetchquery['RGT_Address1'];

if (strlen($fetchquery['RGT_Address2']) > 15)	
$dispaddress2 =  substr($fetchquery['RGT_Address2'],0,15).'...';
else
$dispaddress2 = $fetchquery['RGT_Address2'];

echo '<span style="cursor:pointer;" title="'.$fetchquery['RGT_Address1'].'">'.$dispaddress.'</span>';
if($fetchquery['RGT_Address2']!=''){ echo ', <span style="cursor:pointer;" title="'.$fetchquery['RGT_Address2'].'">'.$dispaddress2.'</span><br/>';}
if($fetchquery['RGT_Area']!=''){ getAreadetails($fetchquery['RGT_Area']);}  if($fetchquery['RGT_City']!=''){ getCitydetails($fetchquery['RGT_City']); } if($fetchquery['RGT_State']!=''){  getStatedetails($fetchquery['RGT_State']); } if($fetchquery['RGT_Pincode']!=''){ getPindetails($fetchquery['RGT_Pincode']); } if($fetchquery['RGT_Country']!=''){ getCountrydetails($fetchquery['RGT_Country'],$fetchquery['RGT_Pincode']); } ?>





<?php 
$checkexist = mysql_query("SELECT Area FROM ".TABLE_OPERATINGAREA." a, ".TABLE_GENERALAREAMASTER." b WHERE Op_BusFk='".$fetchquery['RGT_PK']."' and  Op_AreaFk =Id and b.Status=1");

if(db_num_rows($checkexist)>0)
{	
while($fetch = db_fetch_array($checkexist))
{
if($fetch['Area']!='')
{
if($result=='')
{
$result = $fetch['Area'];
}
else
{
$result .=', '.$fetch['Area'];	
}
}
}
}
else
{}
?>

<div> <?php if($result !="") { ?>  <span>Operating Areas : <?php  echo $result; ?></span> <?php } else { } ?></div>






<div><?php if($fetchquery['RGT_Landline']!='') echo 'Phone: '.$fetchquery['RGT_Landline'];else echo  'Phone: '. $fetchquery['RGT_Mobile'] ;?></div>

<div><?php echo 'Email: '.$fetchquery['RGT_Email'] ;?></div>

</div>
</div>
<div style="width:720px;height:39px;float:left;">
<?php if($fetchquery['RGT_PaymentStatus']=='1'){?>
<div class="chat_details">
<div class="chat_curve"></div>
<?php 
$useronlinestatus=find_user_online($_REQUEST['user']);
?>
<div class="chat_style"><img src="images/chat_online.png" style="position:relative;top:3px;" />&nbsp;&nbsp;
<a href="#"><?php if($useronlinestatus=='0'){echo "Offline";}else {echo "Online";}?> </a>
</div>
<div class="chat_fullcurve"></div>
<div class="full_det">
<?php /*?><a href="<?php echo $fetchquery['RGT_ProfileUrl']?>" target="_blank"> View Full Details</a><?php */?>
<a <?php  if(isset($_SESSION['LID'])){?>href="<?php echo $fetchquery['RGT_ProfileUrl']?>" <?php } else {?> class="pop firstviewmore" onclick="getUserProfile('<?php echo $fetchquery['RGT_ProfileUrl']?>','','');" <?php }?>   target="_blank"> View Services</a></div>
</div>
<?php }?>
</div>	
<!------addetails--------->

</div><br/><br/>

<?php }    


/* --------------------------------------------- */

$query_pag_num = "SELECT COUNT(*) AS count FROM tbl_registration where RGT_Status='1'";
echo '<script>alert('.$query_pag_num.');</script>';

$result_pag_num = mysql_query($query_pag_num);
$row = mysql_fetch_array($result_pag_num);
$count = $row['count'];
$no_of_paginations = ceil($count / $per_page);

/* ---------------Calculating the starting and endign values for the loop----------------------------------- */

if ($cur_page >= 7) {
    $start_loop = $cur_page - 3;
    if ($no_of_paginations > $cur_page + 3)
        $end_loop = $cur_page + 3;
    else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
        $start_loop = $no_of_paginations - 6;
        $end_loop = $no_of_paginations;
    } else {
        $end_loop = $no_of_paginations;
    }
} else {
    $start_loop = 1;
    if ($no_of_paginations > 7)
        $end_loop = 7;
    else
        $end_loop = $no_of_paginations;
}

/* ----------------------------------------------------------------------------------------------------------- */

$msg .= "<div class='pagination'><ul>";

// FOR ENABLING THE FIRST BUTTON
if ($first_btn && $cur_page > 1) {
    $msg .= "<li p='1' class='active'>First</li>";
} else if ($first_btn) {
    $msg .= "<li p='1' class='inactive'>First</li>";
}

// FOR ENABLING THE PREVIOUS BUTTON
if ($previous_btn && $cur_page > 1) {
    $pre = $cur_page - 1;
    $msg .= "<li p='$pre' class='active'>Previous</li>";
} else if ($previous_btn) {
    $msg .= "<li class='inactive'>Previous</li>";
}
for ($i = $start_loop; $i <= $end_loop; $i++) {

    if ($cur_page == $i)
        $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
    else
        $msg .= "<li p='$i' class='active'>{$i}</li>";
}

// TO ENABLE THE NEXT BUTTON
if ($next_btn && $cur_page < $no_of_paginations) {
    $nex = $cur_page + 1;
    $msg .= "<li p='$nex' class='active'>Next</li>";
} else if ($next_btn) {
    $msg .= "<li class='inactive'>Next</li>";
}

// TO ENABLE THE END BUTTON
if ($last_btn && $cur_page < $no_of_paginations) {
    $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
} else if ($last_btn) {
    $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
}
$goto = "<input type='text' class='goto' size='1' style='margin-top:-1px;margin-left:60px;'/><input type='button' id='go_btn' class='go_button' value='Go'/>";
$total_string = "<span class='total' a='$no_of_paginations'>Page <b>" . $cur_page . "</b> of <b>$no_of_paginations</b></span>";
$msg = $msg . "</ul>" . $goto . $total_string . "</div>";  // Content for pagination
echo $msg;
}

