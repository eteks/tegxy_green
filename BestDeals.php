<?php 
$sqltot="SELECT PS_Id,PS_Display FROM ".TABLE_PRODUCTSERVICE." WHERE  PS_User_Fk 	='".$LID."' order by  PS_Id  desc";
$SqlRun=db_query($sqltot);
$Count = db_num_rows($SqlRun);
?>
<div style="width:75%;margin:-3% 1% 0 1%; margin-left:40px; border:solid 0px #FF0000; padding:1% 0 1% 0;text-align:center;background:url(images/title_ornage.png) no-repeat center;color:#fff;"><b>Product</b></div>
<div style="width:70%;margin:-2px 1% 0 1%; margin-left:40px; border:1px solid #666666; border-radius:5px 5px; padding:0px 7px; text-align:justify;font-size:13px;background:#F1F1F1;height:<?php if($Count>0) echo '180px'; else ''; ?>;">
<div style="width:96%;height:5px;"></div>
<div style="width:96%;height:130px;" align="center">
<div id="lista1" class="als-container">
<span class="als-prev"><img src="images/left_arrow.png" alt="prev" title="previous" /></span>
<div class="als-viewport" align="center">
<ul class="als-wrapper">
<?php
if($Count>0){
 while(list($PS_Id,$PS_Display) = db_fetch_array($SqlRun)){?>
<li class="als-item" style="margin-top:10px;"><a onclick="ProfileViewGrid('BestDealsView.php?user=<?php echo $_REQUEST['user'];?>');">

<?php if(XbitImage($PS_Id)!='') {?>
<img src="<?php echo XbitImage($PS_Id);?>" width="140" height="125" /><?php } else {?><img src="images/no_image.png"  width="140" height="125" /><?php }?><hr style="color:#eee;" /><span style="line-height:16px;"><?php echo $PS_Display;?></span></a></li>
<?php }} else echo '<div  style="height:55px;"></div><div style="height:75px;text-align:center;"><li class="als-item coldefault">No Product</li></div>' ;?>
</ul>
</div>
<span class="als-next"><img src="images/right_arrow.png" alt="next" title="next" /></span>
</div>
</div>
</div>
<div style="width:90%;height:27px;background:url(images/shadow.png) no-repeat center top;margin-left:auto;margin-right:auto;
z-index:-100px;position:relative;top:-15px;"></div> 
