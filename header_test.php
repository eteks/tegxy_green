<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="top_menu">

<div class="adlogo">
<a href="index.php"><img src="images/logo_admin.png" width="273" height="71" style="position:relative;" /></a>
</div>

<!--------------------------------------------------------------------------------Search box---------------------------------------------------->

<div style="width:740px; height:30px; position:absolute; top:60px; left:280px;">
<div class="adsearch_txbox">
<input type="text" autocomplete="off" name="searchkey" id="searchlist"  style="width:600px;height:30px;border:1px solid #999;" placeholder="Please Enter Company Name / Sector / Keyword to Search" autofocus value="<?php echo $searchkey;?>"  onkeyup="Searchusingenterkey(event);"  />
<!-- onkeypress="Searchusingenterkey(event);" -->
<div id="SearchListRes"></div>
</div>
<div class="adsearch" align="center"><a href="#" onclick="searchResult($('#searchlist').val(),'','<?php echo $_REQUEST['type2'];?>');">Search</a></div>
</div>

<!--------------------------------------------------------------------------------Search box---------------------------------------------------->

<div style="width:250px;height:20px; top:110px;float:left; position:absolute; left:320px;">
<a onclick="Togglecity();" id="cityvalue" ></a>
<input name="userCity" id="userCity"  type="hidden"  />
<input name="type2" id="type2"  type="hidden" value="<?php echo $_REQUEST['type2'] ;?>"  />

<input name="userCityselect" placeholder="Select City" autocomplete="off" id="userCityselect"  type="text"  value="" style="width:220px;height:20px;border:1px solid #C8C8C8;color:#000000; display:none;" /><div id="ListCityRes"></div>
<input type="hidden" name="citylisthidden" id="citylisthidden" value="" />
<div id="citysuggestions" style="display: none;"> <div style="position: relative; width: 260px;  max-height: 300px; z-index: 9999; display: block;background: none repeat scroll 0 0 #FFFFFF;text-align:left;list-style: none outside none;border: 1px solid rgba(0, 51, 255, 0.5);cursor:pointer;" id="citysuggestionlist"> &nbsp; </div></div>
<span style="display:none;">Select Area in <span id="citydisplayname"  >Pondicherry</span>?</span>
</div>

<div style="width:200px; height:20px; top:110px; float:left; left:560px; position:absolute;">

<select name="selectarea" id="selectarea"  style="background:#F4F4F4;text-align:right; height:25px;" >
	<?php 
	$cityyidd=get_Search_Id(TABLE_GENERALAREAMASTER,"Id","Area",$_REQUEST['usercity']);
    if($cityyidd!='')
	$cityyidd = $cityyidd;
	else
	$cityyidd =1;
	$queryarea=db_query("SELECT AM_Id, AM_Area, AM_Status  FROM ".TABLE_AREAMASTER." WHERE AM_City ='".$cityyidd."' ");
echo '<option>Select Area in '.CityName($cityyidd).'</option>';
while($fetchquery=mysql_fetch_array($queryarea)){
	$selectid = ($fetchquery['AM_Id'] == $_REQUEST['userarea']) ? 'selected=selected':'';
    echo '<option value="'.$fetchquery['AM_Id'].'" '.$selectid.'>'.$fetchquery['AM_Area'].'</option>';
} ?>
</select>

</div>
</div>


<div style="width:00px; height:100px; border:solid 2px #FFFF00; position:absolute;">   </div>
</body>
</html>