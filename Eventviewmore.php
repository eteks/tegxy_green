<?php include_once("include/Configuration.php");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XYget</title>
<link rel="icon" href="images/">
</head>
<?php  include("CommonHeader.php");?>



<!-------------------------------------------------------------------related site css------------------------------------------------------------------------------>

<link rel="stylesheet" href="css/wb_related.css" type="text/css" />

<!-------------------------------------------------------------------related site css end------------------------------------------------------------------------------>


<!-------------------------------------------------------------------Advertisement Slide------------------------------------------------------------------------------>
<script type="text/javascript" src="adver/jquery.min.js"></script>

<link rel="stylesheet" href="adver/style.css" type="text/css" media="screen" />
<script src="adver/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
$(".newsticker-jcarousellite").jCarouselLite({
vertical: true,
hoverPause: true,
visible: 4,
auto: 5000,
speed: 1000
});
});
</script>
<!-------------------------------------------------------------------Advertisement Slide End------------------------------------------------------------------------------>


<?php include("web_relatedcompany.php"); ?>

<div style="width:850px;height:auto;clear:left;margin-top:0px;margin-left:auto;margin-right:auto; border:solid 0px #FF0000;">

<div id="contentwrapper" style="border:solid 0px #00FF00; width:850px;">

<div id="contentcolumn" style="border:solid 0px #660000; width:840px;">

<div class="innertube"><br /><input type="hidden" id="ELogIdd" name="ELogIdd" value="<?php echo $LID;?>" />
<input type="hidden" id="EventStartData" name="EventStartData" value="0" />

<div class="comment more" id="EventsGrid">

<?php
$sqltot="SELECT ET_Id ,ET_Image ,ET_Desp ,ET_From,ET_To,ET_Title FROM ".TABLE_EVENTS." WHERE ET_UserFk ='".$LID."' AND ET_Id = '".$_REQUEST['isd']."'order by ET_From DESC LIMIT 5";
$SqlRun=db_query($sqltot);
list($ET_Id,$ET_Image,$ET_Desp,$ET_From,$ET_To,$ET_Title) = db_fetch_array($SqlRun);


$InnerSql=db_query("SELECT EVS_Id ,EVS_ImgPath FROM ".TABLE_EVENTGALLERY." WHERE  EVS_UserFk ='".$LID."' AND EVS_PSFk ='".$_REQUEST['isd']."' order by  EVS_Id  desc limit 0,3");

?>

<div style="width:100%;height:10px;">
<p align="right">
<a <?php if($HL==3){?> class="current" <?php }?> onclick="ProfileViewGrid('EventsView.php?user=<?php echo $_REQUEST['user'];?>');" style="text-decoration:none;color:#FC5826;font-size:14px;"><img src="images/back-alt-icon.png" style="cursor:pointer;" title="Back"/></a>
</p>
</div>

<div style="height:33px;padding-top:0px;float:left;color:#016479;font-weight:600;font-size:15px;padding-bottom:0px;line-height:18px;" valign="top">
<span style="color:#E76524;font-size:16px;"><?php echo $ET_Title;?></span><br/>
<span style="font-size:12px;">Date : </span>
<span style="color:#000;font-size:12px;"><?php echo ChangeDateforShow($ET_From);?><?php echo StringLeftArrow(ChangeDateforShow($ET_To),' - ',3);?></span>
</div><br/><br/>


<span style="width:300px;min-height:265px;height:auto;float:left;padding:0px 15px 0px 0px; border:solid 0px #8080FF;">
<?php
$FetchImg = db_fetch_array($InnerSql);
$EVS_CoverImg = $FetchImg['EVS_ImgPath'];

if($EVS_CoverImg!='')
{?>
<div style="width:300px;height:220px;border:2px solid #D6D6D6;margin-top:20px;">
<a href="<?php echo $EVS_CoverImg;?>" class="jqzoom" rel='gal1'>
<img src="<?php echo $EVS_CoverImg;?>" width="300" height="220">
</a>
</div>
<?php } else {?>
<div style="width:300px;height:220px;border:2px solid #D6D6D6;margin-top:20px;">
<a href="images/noimage-large.png" class="jqzoom" rel='gal1'>
<img src="images/noimage-large.png" width="300" height="220">
</a>
</div>
<?php }?>


<?php if(db_num_rows($InnerSql)>0)
{?>
<div style="width:300px;height:100px;">

<ul id="thumblist" >
<li><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo $EVS_CoverImg;?>',largeimage: '<?php echo $EVS_CoverImg;?>'}"><img src='<?php echo $EVS_CoverImg;?>' width="80" height="70"></a></li>
<?php while(list($EVS_Id,$EVS_ImgPath) = db_fetch_array($InnerSql)){?>
<li><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo $EVS_ImgPath;?>',largeimage: '<?php echo $EVS_ImgPath;?>'}"><img src='<?php echo $EVS_ImgPath;?>' width="80" height="70"></a></li>
        <?php }?>
	</ul>
</div>
<?php }?>
</span>




<?php echo $ET_Desp;?>


</div>
</div>
</div>
</div>

<?php include('web_advertisementcolimn.php'); ?>

</div>
<!-- Footer -->
