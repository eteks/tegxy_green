<script>
function view_product(pro,com_city,comp_area,req_type)
{ 
//alert(pro);
//alert(com_city);
//alert(comp_area);
//alert(req_type);
//
//var searchKery1 = pro;
//alert(searchKey1);
//var userCity = com_city;
//alert(userCity);
//var userArea = comp_area;
//alert(userArea);
//var requestType = req_type;
//alert(requestType);
//alert(searchKey);
//
//var userCity = document.getElementById('comp_city').value;
////alert(userCity);
//var userArea = document.getElementById('comp_area').value;
////alert(userArea);
//var requestType = document.getElementById('requestType').value;
////alert(requestType);

window.open("Searchpage.php?action=Add&searchkey="+pro+"&requesttype="+req_type+"&usercity="+com_city+"&userarea="+comp_area+"&type2=1");

//window.location.href="Searchpage.php?action=Add&searchkey="+searchKery+"";

}

</script>
<div class="adright_container">
<script type="text/javascript" src="js/Searchlist.js"></script>
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




<div class="newsticker-jcarousellite" style="width:300px; height:500px;">
<ul>

<?php
$selectadquery1 = db_query("SELECT PS_CoverImg,PS_Description,PS_Display,PS_User_Fk FROM ".TABLE_PRODUCTSERVICE." ORDER BY rand()");
while(list($ps_coverImg,$ps_description,$ps_Display,$ps_user_Fk) = db_fetch_array($selectadquery1))
{
$adv_imagepath   = $ps_coverImg;
$adv_description = $ps_description;
$adv_title = $ps_Display;
$ps_id = $ps_user_Fk;

?>
<input type="hidden" value="<?php echo $adv_title; ?>" name="search_product1" id="search_product1" />

<?php
$selectcompname = db_query("SELECT RGT_CompName,RGT_State,RGT_City,RGT_Area FROM ".TABLE_REGISTRATION." where RGT_PK='$ps_id'");
if(list($RGT_CompName,$RGT_State,$RGT_City,$RGT_Area) = db_fetch_array($selectcompname))
{
$comp_name  = $RGT_CompName;
$comp_state  = $RGT_State;
$comp_city  = $RGT_City;
$comp_area  = $RGT_Area;
?>

<li>

<div style="cursor:pointer;">

<div class="right_singlead">
<div class="right_adtitle">

<input type="hidden" value="<?php getCitydetails($comp_city);?>" name="comp_city" id="comp_city" />
<input type="hidden" value="<?php getAreadetails($comp_area); ?>" name="comp_area" id="comp_area" />
<input type="hidden" value="bestdeals" name="requestType" id="requestType"/>
<?php 
$comp_count=strlen($comp_name);
$company_name=(substr($comp_name,0,30));
if($comp_count>30){ 
?>

<span  onclick="view_product('<?php echo $adv_title; ?>','<?php echo getCitydetails($comp_city);?>','<?php echo getAreadetails($comp_area); ?>','<?php echo "bestdeals"; ?>');"><?php echo $company_name.='..'; ?> </span>
 
<?php } else { ?> <span onclick="view_product()"> <?php echo $company_name; ?></span> <?php  } ?>

</div>
<?php } ?>



<div style="width:290px;min-height:107px;">
<div class="right_adimg">

<?php if($adv_imagepath !="") { ?>
<img width="107" height="107" src="<?php echo $adv_imagepath;?>" style="border:solid 1px #999;"  onclick="view_product('<?php echo $adv_title; ?>','<?php echo getCitydetails($comp_city);?>','<?php echo getAreadetails($comp_area); ?>','<?php echo "bestdeals"; ?>');"/>
<?php } else { ?>

<img width="107" height="107" src="images/no_image.png" style="border:solid 1px #999;" onclick="view_product('<?php echo $adv_title; ?>','<?php echo getCitydetails($comp_city);?>','<?php echo getAreadetails($comp_area); ?>','<?php echo "bestdeals"; ?>');"/>


<?php } ?>
</div>

<div class="right_addesp" onclick="view_product('<?php echo $adv_title; ?>','<?php echo getCitydetails($comp_city);?>','<?php echo getAreadetails($comp_area); ?>','<?php echo "bestdeals"; ?>');">

<span style="font-weight:bold;"><?php echo $adv_title ;?></span>
<br />

<?php 
$count=strlen($adv_description);
$displaydata=(substr($adv_description,0,80));
if($count>80){ 

 echo $displaydata.= '<a href="#"  style="font-weight:bold; color:#F90;text-decoration:none;" ><span> <br>View More.. </span></a>'; 
 
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