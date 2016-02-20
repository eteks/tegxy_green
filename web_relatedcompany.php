
<div style="position:absolute; width:200px; height:500px; border:solid 0px #666666; float:left; left:15px; top:160px;">

<div id="relatedresultsbox">
<!--<div class="adleftaccordiaon_top" >Related Profile</div>-->
<!--<div style="width:220px;height:auto;border:1px solid #C0C0C0;" >
<ul class="relatedsearch_ul">
<div id="show_all_industry" style="height:300px;"> 

<?php
$queryrelated=db_query("SELECT RGT_CompName,RGT_ProfileUrl FROM ".TABLE_REGISTRATION." WHERE RGT_Status=1 AND RGT_Type=2 AND  RGT_CompType =2 AND RGT_PaymentStatus=1");
$countresult=mysql_num_rows($queryrelated);
while($Fetchrelated=mysql_fetch_array($queryrelated))
{
$orginal = $Fetchrelated['RGT_CompName'];

$count=strlen($Fetchrelated['RGT_CompName']);
if($count>25){
$CompName=(substr($Fetchrelated['RGT_CompName'],0,25));
$CompName.='...';
}
else
{
$CompName=$Fetchrelated['RGT_CompName'];
}
?>
 <li> 
 <a <?php  if(isset($_SESSION['LID'])){?>href="<?php echo $Fetchrelated['RGT_ProfileUrl']?>" <?php } else {?> class="pop firstviewmore" onClick="getUserProfile('<?php echo $Fetchrelated['RGT_ProfileUrl']?>','','');" <?php }?>   target="_blank"> 
 <?php echo $CompName; ?>
 
  </a> </li> 

<?php } ?> 
 </div>
</ul>
</div>-->
</div>

</div>