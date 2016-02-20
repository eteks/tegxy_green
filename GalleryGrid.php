<?php 
$sqltot="SELECT GY_Image,GY_Title FROM ".TABLE_GALLERY." WHERE  ((GY_Type=0) || (GY_Type=1 AND GY_Type2=0)) AND GY_UserFk='".$LID."' order by  GY_Id desc";
$SqlRun=db_query($sqltot);
$Count = db_num_rows($SqlRun);
?>


<div style="width:75%; margin:-3% 1% 0 1%;  margin-left:40px; border:solid 0px #FF6666; text-align:center; padding:1% 0 1% 0; background:url(images/title_ornage.png) no-repeat center;color:#fff;"><b>Gallery</b></div>

<div style="width:70%;margin:-2px 1% 0 1%; margin-left:40px; border:1px solid #666666; border-radius:5px 5px; padding:0px 7px; text-align:justify;font-size:13px;background:#F1F1F1;height:<?php if($Count>0) echo '180px'; else ''; ?>;"><div style="width:96%;height:5px;"></div>
<div style="width:96%;height:130px;" align="center">
<div id="lista2" class="als-container">
<span class="als-prev"><img src="images/left_arrow.png" alt="prev" title="previous" /></span>
<div class="als-viewport" align="center">
<ul class="als-wrapper">
<?php if($Count>0){ while(list($GY_Image,$GY_Title) = db_fetch_array($SqlRun)){
?>
<li class="als-item" style="margin-top:10px;"><a onclick="ProfileViewGrid('GalleryView.php?user=<?php echo $_REQUEST['user'];?>');"><img src="<?php echo $GY_Image;?>" width="140" height="125"  /><!--<span style="line-height:16px;"><?php //if(strlen(stripslashes($GY_Title))>10){ echo substr(stripslashes($GY_Title),0,20).'...' ;} else { echo stripslashes($GY_Title);} ?></span>--></a></li><?php }} else echo '<div  style="height:55px;"></div><div style="height:75px;text-align:center;"><li class="als-item coldefault">No Gallery</li></div>' ;?>
</ul>
</div>
<span class="als-next"><img src="images/right_arrow.png" alt="next" title="next" /></span>
</div>
</div>
</div>
<div style="width:90%;height:27px;background:url(images/shadow.png) no-repeat center top;margin-left:auto;margin-right:auto;
z-index:-100px;position:relative;top:-15px;"></div>