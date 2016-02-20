<div style="position:absolute; width:230px; height:500px; border:solid 0px #666666; float:right; right:20px; top:70px;">


    
<div class="adright_container" style="border:solid 0px #FF0000;">
<!--    <span>Advertisement</span>-->
    <div class="adleftaccordiaon_top">Advertisement</div>
<div class="newsticker-jcarousellite" style="border:solid 0px #33CC00; width:225px;">

<ul>
<?php 
$selectadquery1 = db_query("SELECT PS_CoverImg,PS_Description,PS_Display FROM ".TABLE_PRODUCTSERVICE." ORDER BY rand()");
while(list($ps_coverImg,$ps_description,$ps_Display) = db_fetch_array($selectadquery1))
{
$adv_imagepath   = $ps_coverImg;
$adv_description = $ps_description;
$adv_title = $ps_Display;
?>
<li>

<div class="thumbnail">
<div class="right_singlead">
<div class="right_adtitle" style="font-size:14px; font-weight:bold; color:#FF6600; border:solid 0px #993333;">

<?php 
$adv_count=strlen($adv_title);
$adv_title1=(substr($adv_title,0,20));
if($adv_count>20){ 
 echo $adv_title1.= '<a href="#" class="topopup1" style="font-weight:bold; color:#F90;text-decoration:none;"><span  >.. </span></a>'; 
}
else {  echo $adv_title1; }
?>


</div>
<div style="width:290px;min-height:107px;">
<div class="right_adimg">

<?php if($adv_imagepath !="") { ?>
<img width="107" height="107" src="<?php echo $adv_imagepath;?>" style="border:solid 1px #999;"/>
<?php } else { ?>
<img width="107" height="107" src="images/no_image.png" style="border:solid 1px #999;"/>
<?php } ?>

</div>

<div class="right_addesp">

<?php 
$count=strlen($adv_description);
$displaydata=(substr($adv_description,0,50));
if($count>70){ 
 echo $displaydata.= '<a href="#" class="topopup1" style="font-weight:bold; color:#F90;text-decoration:none;"><span  > <br>View More.. </span></a>'; 
}
else {  echo $displaydata; }
?>

</div>
</div>
</div>

</div></li>

<?php } ?>

</ul></div>

   
    </div>
	
</div>