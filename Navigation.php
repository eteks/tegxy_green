<div class="midmenubg" style="width:655px; ">
<ul class="menu" style="border:solid 0px #00FF00;">
   <div style="float:left;padding:0px 20px 0px 15px; border:solid 0px #FF00FF;"><a href="index.php" ><img src="images/home_icon.png" style="position:relative;top:3px;" /></a></div>
    <?php /*?><li><a <?php  if($HL==1){?> class="current" <?php }?> onclick="ProfileViewGrid('ProfileViewajax.php?user=<?php echo $_REQUEST['user'];?>');">Profile</a></li><?php */?>
     <li><a <?php  if($HL==1){?> class="current" <?php }?> href="<?php echo $_REQUEST['user'];?>">Profile</a></li>
   <li><a <?php if($HL==2){?> class="current" <?php }?> onclick="ProfileViewGrid('BestDealsView.php?user=<?php echo $_REQUEST['user'];?>');" >Showcase</a></li>
    <li><a <?php if($HL==3){?> class="current" <?php }?> onclick="ProfileViewGrid('EventsView.php?user=<?php echo $_REQUEST['user'];?>');">Events</a></li>
    <?php /*?><li><a href="#" >Network</a></li><?php */?>
    <li><a <?php if($HL==4){?> class="current" <?php }?> onclick="ProfileViewGrid('GalleryView.php?user=<?php echo $_REQUEST['user'];?>');">Gallery</a></li>
    <li><a <?php if($HL==5){?> class="current" <?php }?> onclick="ProfileViewGrid('Contactus.php?user=<?php echo $_REQUEST['user'];?>');">Contact us</a></li>
    
    </ul>
</div>
<!-- <?php if($sessionuserprofile!=$_REQUEST['user']){ ?>
    <li><a href="javascript:void(0)" onclick="javascript:chatWith('<?php echo $LID; ?>','<?php echo $pageusername; ?>')">Chat</a></li> <?php } ?>
    -->