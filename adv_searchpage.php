<script type="text/javascript" src="js/Searchlist.js"></script>
<link href="css/popup.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/popupbox.js"></script>


<script>

function Searchpage()
{
var pro_search =$("#searchid").val();

var comp_name = $("#comp_searchid").val();
//alert(comp_name);

if(comp_name !="" && pro_search !="")
{
var searchKey = $("#searchid").val();
//alert("enter1");
}

if(comp_name !="" && pro_search =="")
{
var searchKey = $("#comp_searchid").val();
//alert("enter2");	
}

if(comp_name =="" && pro_search !="")
{
var searchKey = $("#searchid").val();
//alert("enter3");	
}


if(pro_search =="" && comp_name =="")
{
var requestType="company";
//alert(requestType);

alert("Please Enter Company Name OR Product Name");
return false;


}
else if(pro_search =="" && comp_name !="")
{
var requestType="company";
//alert(requestType);
}
else if(pro_search !="" && comp_name =="")
{
var requestType="bestdeals";
//alert(requestType);
}
else if(pro_search !="" && comp_name !="")
{
var requestType="bestdeals";
//alert(requestType);
}

var userCity1=$("#city_name").val();
//var userCity;
var userCity = userCity1.replace(",", ""); 
alert(userCity);
if(userCity =="")
{
var userCity="ALL City";
//alert(requestType);
}

var industry_c=$("#Sector_id").val();
var industry_p=$("#Sector").val();
//var userCity;
if(industry_c=="" && industry_p=="")
{
var industry="";
//alert(requestType);
}
else if(industry_c !="" && industry_p=="")
{
var industry=$("#Sector_id").val();
}

else if(industry_c =="" && industry_p !="")
{
var industry=$("#Sector").val();
}



//alert(industry);

if(selectarea=='')
{
userArea=$("#selectarea").val();
}
else
{
userArea=selectarea;
}

window.location.href="Searchpage.php?action=Add&searchkey="+searchKey+"&requesttype="+requestType+"&usercity="+userCity+"&userarea="+userArea+"&industry="+industry+"&type2=1";


}
</script>


<!--<script>

function get_city(city_name,city_id) 
{
alert("enter");
alert(city_name);
alert(city_id);

$.ajax(
{
type: 'GET',
//url: 'http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp',
url: 'include/BI_CountryStateCity.php',
//data: 'username=atomicka&password=314074368&sendername=VALLIK&&mobileno='+no+'&message='+msg,
data: 'Action='Get_City'&City_name='+city_name+'&City='+city_id,

success: function(data)
{
alert(data);
},
});
}

</script>-->

<script>

function GET_City(city_id)
{
//alert(city_id);
	createXmlObject();
	var ran_unrounded=Math.random()*100000;
	var ran_number=Math.floor(ran_unrounded);
	//var Country = document.getElementById('SelCountry').value;
	//var State = document.getElementById('SelState').value;
	var str = "Action=Get_City&City="+city_id+"&r="+ran_number;
	var url = "include/BlModules/Bl_CountryStateCity.php";
	//alert(url);
	xmlhttp.open("POST", url, true);  
	xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
	xmlhttp.send(str);
	xmlhttp.onreadystatechange = showGeneralArea
}

function showGeneralArea() 
{ 
	if (xmlhttp.readyState == 4) 
	{
		var response = xmlhttp.responseText;
		if (response != "") 
		{
	//alert(response);
			document.getElementById('ShowAreaList').innerHTML = response;
		}
	}
}

</script>


<!---------------------------------------------------------Advance Search Start-------------------------------------------------------------------->


<script type="text/javascript" src="autocomplete/jquery-1.8.0.min.js"></script>

<script type="text/javascript">

$(function(){
$(".comp_search").keyup(function() 
{ 
var comp_searchid = $(this).val();
var dataString = 'comp_search='+ comp_searchid;
//alert(dataString);

if(comp_searchid!='')
{
	$.ajax({
	type: "POST",
	url: "autocomplete/search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#comp_result").html(html).show();
	//alert(comp_result);
	}
	});
}return false;    
});

jQuery("#comp_result").live("click",function(c){ 

	var $comp_clicked = $(c.target);	
	var $comp_name = $comp_clicked.find('.comp_name').html();	
	var $comp_id_show = $comp_clicked.find('.id_show').html();
	var $indus_id_show = $comp_clicked.find('.indus_show').html();
	var $indus_name_show = $comp_clicked.find('.indus_name').html();
	//var $state_name_show = $comp_clicked.find('.state_name').html();
	//var $city_name_show = $comp_clicked.find('.area_name').html();
	//alert($state_name_show);
	
	var decoded = $("<div/>").html($comp_name).text();
	var decoded_id = $("<div/>").html($comp_id_show).text();
	var indus_decoded_id = $("<div/>").html($indus_id_show).text();
	var indus_decoded_name = $("<div/>").html($indus_name_show).text();
	//var state_decoded_name = $("<div/>").html($state_name_show).text();
	//var city_decoded_name = $("<div/>").html($city_name_show).text();
	
	
	$('#comp_searchid').val(decoded);
	$('#c_name').val(decoded);	
	$('#comp_id').val(decoded_id);
	$('#Sector_id').val(indus_decoded_id);
	$('#Sector_name').val(indus_decoded_name);
	//$('#state_name').val(state_decoded_name);
	//$('#city_name').val(city_decoded_name);	
	//alert(state_name);
	
	$("#Sector").hide();
	//$("#SelState").hide();
	//$("#Selcity").hide();
	//$("#CityGrid").hide();
	
	$("#Sector_name").show();
	$("#state_name").show();
	$("#city_name").show();
	//$("#SelState").show();
	//$("#city_name").show();
	
});


jQuery(document).live("click", function(c) { 
	var $comp_clicked = $(c.target);
	if (! $comp_clicked.hasClass("comp_search")){
	jQuery("#comp_result").fadeOut(); 
	}
});

$('#comp_searchid').click(function(){
	jQuery("#comp_result").fadeIn();
});
});



$(function(){
$(".search_pro").keyup(function() 
{ 
var searchid = $(this).val();
//alert(searchid);
var comp_name = $('#c_name').val();
//alert(comp_name);
var c_id = $('#comp_id').val();
//alert(c_id);
if(comp_name !="") {
var dataString = 'search='+searchid+"&c_name="+c_name+"&c_id="+c_id;
}
else { var dataString = 'search='+searchid;  } //alert(dataString);
if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "autocomplete/search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#result").html(html).show();
	//alert(result);
	}
	});
}return false;    
});


jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#searchid').click(function(){
	jQuery("#result").fadeIn();
});
});







$(function (){
$('#Sector').change(function() 
{ 
var industry_id = $(this).val();
//alert(industry_id);
var dataString = 'industry='+ industry_id;
//alert(dataString);

if(industry_id!='')
{
	$.ajax({
	type: "POST",
	url: "autocomplete/search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#industry_result").html(html).show();
	//alert(comp_result);
	}
	});
}return false;    
});

});



$(function (){
$('#SelState').change(function() 
{ 
var state_id = $(this).val();
//alert(state_id);
var dataString = 'state='+ state_id;
//alert(dataString);

if(state_id!='')
{
	$.ajax({
	type: "POST",
	url: "autocomplete/search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#state_result").html(html).show();	
	}
	});
}return false;    
});

});





$(function (){
$('#SelCity').change(function() 
{ 
var city_id = $(this).val();
//alert(state_id);

var dataString = 'state='+ city_id;
//alert(dataString);

if(city_id!='')
{
	$.ajax({
	type: "POST",
	url: "autocomplete/search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#city_result").html(html).show();	
	}
	});
}return false;    
});

});


</script>
<style type="text/css">

	#searchid
	{
		width:250px;
		border:solid 1px #000;
		padding:5px;
		font-size:14px;
	}
	#result
	{
		position:absolute;
		width:250px;
		padding:5px;
		display:none;
		margin-top:-1px;
		border-top:0px;
		overflow:hidden;
		border:1px #CCC solid;
		background-color: white;
	}
	.show
	{
		padding:5px; 
		border-bottom:1px #999 dashed;
		font-size:13px; 
		height:30px;
	}
	.show:hover
	{
		background:#FFD7AE;
		color:#005900;
		cursor:pointer;
	}
	
	
	
	
	

	#comp_searchid
	{
		width:250px;
		border:solid 1px #000;
		padding:5px;
		font-size:14px;
	}
	#comp_result
	{
		position:absolute;
		width:250px;
		padding:5px;
		display:none;
		margin-top:-1px;
		border-top:0px;
		overflow:hidden;
		border:1px #CCC solid;
		background-color: white;
	}
	.comp_show
	{
		padding:5px; 
		border-bottom:1px #999 dashed;
		font-size:13px; 
		height:30px;
	}
	.comp_show:hover
	{
		background:#FFD7AE;
		color:#005900;
		cursor:pointer;
	}
	
	
</style>

<!---------------------------------------------------------Advance Search End-------------------------------------------------------------------->



</head>

<body>
<script type="text/javascript">
function Searchusingenterkey(e)
{
// look for window.event in case event isn't passed in
if (typeof e == 'undefined' && window.event) { e = window.event; }
if (e.keyCode == 13)
searchResult($('#searchlist').val(),'','');
}
</script>
<style type="text/css">
ul.leftsidebarlist
{
list-style:none;width:180px;height:20px;margin:0 0 0 0px;padding:0;
}

ul.leftsidebarlist li
{
border-bottom:1px solid #EBEBEB;padding:10px 0px;
}

ul.leftsidebarlist li.deal
{
border-bottom:1px solid #EBEBEB;padding:15px 0px 15px 0px;height:30px;
}
ul.leftsidebarlist li.deal img
{
float:left;border:1px solid #ccc;
position:relative;top:-9px;
margin-right:8px;
}
</style>
<?php
if(isset($_REQUEST['searchkey'])){
	
$searchkey=$_REQUEST['searchkey'];
//echo $searchkey;

$requestType=$_REQUEST['requesttype']; 
//echo $requesttype;

$userCity=$_REQUEST['usercity'];
//echo $usercity;

$userArea=AreaName($_REQUEST['userarea']);
//echo $userarea;

$type2 = $_REQUEST['type2'];
//echo $type2;

//TO SEARCH AND FIND THE MERGED SQL
$findcitymatch=get_Search_Id(TABLE_GENERALAREAMASTER,"Id","Area",$userCity);
if($findcitymatch!='')
{
$querycitymatch ="AND RGT_City IN (".$findcitymatch.")";
//echo $querycitymatch;
}
else
{
$querycitymatch='';
$findareamatch=get_Search_Id(TABLE_AREAMASTER,"AM_Id","AM_Area",$userArea);
//echo $findcitymatch;
}

if($findareamatch!='')
{
$queryareamatch ="AND RGT_Area IN (".$findareamatch.")";
}
else
{
$queryareamatch ='';
}

if($type2 == 1)
{
if($searchkey!=''){
$searchsql = "`RGT_CompName` LIKE  '$searchkey%'  AND";
//echo $searchsql;
}
else{
$searchsql ="";
}

}
else if($type2 == 3)
{
$findkeywordmatch=get_Search_Id(TABLE_KEYWORDMST,"Kd_Id","Kd_Keyword",$searchkey);
if($findkeywordmatch!='')
$findkeywordmatchIds=get_Search_Id(TABLE_MEMBERKEYWORD,"Mk_MemFk","Mk_KeywordFk",$findkeywordmatch);
if($findkeywordmatchIds!='')
$searchsql = "`RGT_PK` IN (".$findkeywordmatchIds.") AND";
else
$searchsql ="";
}
else
{
$findsectormatch=get_Search_Id(TABLE_SECTOR,"Id","S_Name",$searchkey);
if($findsectormatch!='')
$searchsql ="RGT_Sector IN (".$findsectormatch.") AND";
else
$searchsql ='';
}

if($requestType=='company'){
$searchtTitle="Company List";
//db connection

$searchquery= db_query("SELECT * FROM  ".TABLE_REGISTRATION." WHERE  $searchsql RGT_Status=1 AND RGT_Type=2 $querycitymatch  $queryareamatch");

//echo $searchquery.'</br>';

//echo $searchsql.'</br>';

//echo $querycitymatch.'null'.'</br>';

//echo $queryareamatch.'null'.'</br>';

$searchquery1=db_query("SELECT * FROM  ".TABLE_REGISTRATION." WHERE  $searchsql RGT_Status=1 AND RGT_Type=2 $querycitymatch  $queryareamatch");

$searchquery2=db_query("SELECT * FROM  ".TABLE_REGISTRATION." WHERE  $searchsql RGT_Status=1 AND RGT_Type=2 $querycitymatch  $queryareamatch");

$countresult=mysql_num_rows($searchquery);

while($fetchquery=mysql_fetch_array($searchquery1)){
$relatedsearch.=$fetchquery['RGT_Sector'].',';
}
}
else if($requestType=='bestdeals'){
$searchtTitle="Product List";
//db connection

if(isset($findcitymatch) || isset($findareamatch)){
$wherec = "AND RGT_City= $findcitymatch $queryareamatch "; 	
$querycitymatch1=db_query("SELECT RGT_PK FROM ".TABLE_REGISTRATION." WHERE  RGT_Status=1 ".$wherec."");
while($fetchcitymatch=mysql_fetch_array($querycitymatch1)){
$citymatchdata.=$fetchcitymatch['RGT_PK'].',';
}
$citymatchdata=substr($citymatchdata,0,-1);
}

$queryprodname=db_query("SELECT Id FROM ".TABLE_ADMINPRODUCT." WHERE ProductName LIKE '$searchkey%'");
while($fetchprodid=mysql_fetch_array($queryprodname)){

$matchingids.=$fetchprodid['Id'].',';
}
$matchingids=substr($matchingids,0,-1);


if($searchkey!='')
{
// Based On Keyword, Display
$findproductmatch     = get_Search_Id(TABLE_ADMINPRODUCT, "Id", "ProductName", $searchkey);
$findkeywordmatch     = get_Search_Id(TABLE_PRODUCTSERVICE, "PS_Id", "PS_Keyword", $searchkey);
$finddisplaymatch     = get_Search_Id(TABLE_PRODUCTSERVICE, "PS_Id", "PS_Display", $searchkey);

if($findproductmatch!='' || $findkeywordmatch!='' || $finddisplaymatch!='' )
{
$con = " AND (PS_Display=''";
if($findproductmatch!='')
{
$con .=" OR ";	
$con .="PS_Fk IN (".$findproductmatch.")";
}
if($findkeywordmatch!='')
{
$con .=" OR ";	
$con .="PS_Id IN (".$findkeywordmatch.")";
}
if($finddisplaymatch!='')
{
$con .=" OR ";	
$con .="PS_Id IN (".$finddisplaymatch.")";
}
$con .= ")";
}
else
$con = "AND PS_Display=''";
}

if($citymatchdata!=''){
$searchquery=db_query("SELECT * FROM ".TABLE_PRODUCTSERVICE." WHERE PS_User_Fk IN (".$citymatchdata.") $con");
$searchquery1=db_query("SELECT * FROM ".TABLE_PRODUCTSERVICE." WHERE PS_User_Fk IN (".$citymatchdata.") $con");
$searchquery2=db_query("SELECT * FROM ".TABLE_PRODUCTSERVICE." WHERE PS_User_Fk IN (".$citymatchdata.") $con");
$searchquery3=db_query("SELECT * FROM ".TABLE_PRODUCTSERVICE." WHERE PS_User_Fk IN (".$citymatchdata.") $con");

$countresult=mysql_num_rows($searchquery);
while($fetchquery=mysql_fetch_array($searchquery1)){
$relatedsearch.=$fetchquery['PS_Id'].',';
}
while($fetchquery1=mysql_fetch_array($searchquery3)){
$relatedsearch1.=$fetchquery1['PS_Fk'].',';
}
}}

$relatedsearch=substr($relatedsearch, 0, -1);
$relatedsearch1=substr($relatedsearch1, 0, -1);
}

if(isset($searchquery2)){
while($fetchquery=db_fetch_array($searchquery2)){    
if($requestType=='company'){
$alreadylisteddetails .=$fetchquery['RGT_PK'].',';

}
if($requestType=='bestdeals'){
$alreadylisteddetails.=$fetchquery['PS_Id'].',';
}
$finaldetails=substr($alreadylisteddetails, 0, -1);;    
}
}
if($requestType=='company'){?>
<!-----adleft_container-------->
<div class="adleft_container">
<div style="width:100%;height:40px;float:left;" align="right"></div>
<!-----250------->
<div style="width:250px;height:auto;float:left;">

<!-----relatedsearch------->
<div class="adrelatedsearch">
<div id="relatedresultsbox" style="display:<?php if($searchkey=='' ){echo 'none';} else echo 'block'; ?>" >
<div class="adleftaccordiaon_top" >Related Searches</div>
<div style="width:245px;height:auto;border:1px solid #C0C0C0;" >
<ul class="relatedsearch_ul">

<?php if($requestType=='company'){ if($_REQUEST['type2']==1){ getKeywordCompListFromSearchedCompany($_REQUEST['searchkey']);  }  if($_REQUEST['type2']==2){ getKeywordListFromSearchedIndustry($_REQUEST['searchkey']);  }if($_REQUEST['type2']==3){  getKeywordCompListFromSearchedKeyword($_REQUEST['searchkey']);  } } //getRelatedSearchComp($relatedsearch,$finaldetails,$findcitymatch,$findareamatch);
?> 
 
</ul>
</div>
</div>
<div id="featuredlistings" style="display:<?php if($searchkey=='' ){echo 'block';} else echo 'none'; ?>" >
<div class="adleftaccordiaon_top" >Featured Companies</div>
<div style="width:245px;height:auto;border:1px solid #C0C0C0;" >
<ul class="relatedsearch_ul">

<?php
if ($requestType=='company'){	
list_featured();
} 
?>

</ul>
</div>
</div>
<div class="adleftaccordion_btm"></div>
</div>
<!-----relatedsearch------->



</div>
<!-----250------->

<!-----740------->


<div style="position:absolute; left:320px; top:150px;" align="center">

<fieldset style="width:650px;">
<legend style="font-size:18px;">Advance Search</legend>

<table width="600" border="0" cellpadding="5" cellspacing="5" align="center">
  <tr>
    <td colspan="3" align="right">
    <input id="searchsubmit" type="button" onClick="window.location.href='index.php'" value="<< BACK" class=""/>    </td>
  </tr>
  
  <tr>
    <td width="129">Company Name </td>
    <td width="17">:</td>
    <td width="404" align="left">
    
<div class="comp_content">
    
<input type="text" class="comp_search" id="comp_searchid" placeholder="Search for Company Name" />

<input type="hidden"  id="c_name" name="c_name" />

<input type="hidden" id="comp_id" name="comp_id"/>

<input type="hidden" id="Sector_id" name="Sector_id"/>

<div id="comp_result"></div>
</div>    </td>
  </tr>
  <tr>
    <td>Product Name</td>
    <td>:</td>
    <td width="404" align="left">
        <div class="content">
<input type="text" class="search_pro" id="searchid" placeholder="Search for Product" />
<div id="result"></div>
</div>    </td>
  </tr>
  <tr>
    <td>Industry</td>
    <td>:</td>
    <td>
    
    
 <input type="text" id="Sector_name" name="Sector_name" style="width:260px; height:25px; display:none;"/>
    
<select name="Sector" id="Sector" class="inp-text" style="width:260px; height:28px;">
<option value="">--Select Industry--</option>
<?php $SelectSector=db_query("Select Id,S_Name From ".TABLE_SECTOR." WHERE Status=1 order by S_Name asc");
while(list($MSeId,$MSeName)=db_fetch_array($SelectSector))
{?>
<option  value="<?php echo $MSeId; ?>"  ><?php echo $MSeName; ?></option><?php 
}?>
</select>    </td>
  </tr>
  <tr>
    <td>City</td>
    <td>:</td>
    <td>
	
<?php /*?> <select name="SelCountry" style="display:none;" id="SelCountry" onChange="return OnclickCountry(this.value,'SelCountry','SelState','SelCity','BArea','BPincode');"  class="inp-text" >
<?php $SelectCountry=db_query("Select Id,Country_Name From ".TABLE_GENERALCOUNTRYMASTER." WHERE Status=1 order by  Country_Name asc");
while(list($MCId,$MCName)=db_fetch_array($SelectCountry))
{?>
<option  value="<?php echo $MCId; ?>" ><?php echo $MCName; ?></option><?php 
}?>
</select><?php */?>

 <!--<input type="text" id="state_name" name="state_name" style="width:260px; height:25px; display:none;"/>-->
 <select id="search_city" name="search_city" class="memberinput" style="width:260px; height:25px;" onChange="GET_City(this.value);">
   <option value="" selected="selected">--Select City--</option>
   <?php 
$SelectArea=db_query("Select Id, Area From ".TABLE_GENERALAREAMASTER." WHERE Status=1 AND A_Country='1' Order by Id asc");
while(list($Id,$Area)=db_fetch_array($SelectArea))
{ ?>
   <option  value="<?php echo $Id; ?>"><?php echo $Area; ?></option>
   <?php } ?>
 </select>
 <input type="hidden" value="<?php getCitydetails($comp_city);?>" name="comp_city" id="comp_city" />    </td>
  </tr>
  <tr>
    <td>Area</td>
    <td>:</td>
    <td>
	
	<!--<input type="text" id="city_name" name="city_name" style="width:260px; height:25px; display:none;"/>-->

	<span id="ShowAreaList"><select id="Area" style="width:260px; height:25px;" name="Area"></select>
	<input type="hidden" name="city_name" id="city_name" value="" /></span>	</td>
  </tr>
  
  
  <tr>
   
    <td colspan="3" align="center" >
    
<input id="searchsubmit" type="button" onClick="Searchpage();" value="Search" class="btnstyle" style="margin-right:30px;" /></td>
  </tr>
</table>
</fieldset>


</div>



<!-----740------->
</div>
<!-----adleft_container-------->
<?php } 
if($requestType=='bestdeals'){?>
<!-----adleft_container-------->
<div class="adleft_container">

<a <?php  if(isset($_SESSION['LID'])){?> target="_blank"  href="<?php echo 'ManageProfile.php?user='.base64_encode($_SESSION['Type']);?>" <?php } else {?> class="pop firstviewmore" onClick="Postafreead();" <?php }?> title="View More" style="text-decoration: none;">
<div style="width:100%;height:55px;float:left;" align="right">
<div class="post_anadd">
<div class="post_addtxt">Post a Free Ad</div>
<div class="post_findtxt">To find your Best Deal</div>
</div>
</div></a>

<!-----250------->
<div style="width:250px;height:auto;float:left;">

<!-----relatedsearch------->


<div class="adrelatedsearch">
<div id="relatedresultsbox" style="display:<?php if($searchkey=='' ){echo 'none';} else echo 'block'; ?>" >
<div class="adleftaccordiaon_top" >Related Searches</div>
<div style="width:245px;height:auto;border:1px solid #C0C0C0;" >
<ul class="relatedsearch_ul">
<?php if($requestType=='bestdeals') { getRelatedSearchBestdeals($relatedsearch,$relatedsearch1,$citymatchdata); } ?>  
</ul>
</div>
</div>
<div id="featuredlistings" style="display:<?php if($searchkey=='' ){echo 'block';} else echo 'none'; ?>" >
<div class="adleftaccordiaon_top" >Featured Products</div>
<div style="width:245px;height:auto;border:1px solid #C0C0C0;" >
<ul class="relatedsearch_ul">
<?php if ($requestType=='bestdeals'){?>
<li class="deal" style="height:45px;"><div style="float:left;"><img src="images/atomic_erp.png" width="35" height="45" /></div>&nbsp;<div style="float:left;line-height:14px;padding-left:10px;">Atomic ERP<br/><span style="font-size:10px;">Information Technology</span></div></li>
<li class="deal" style="height:45px;"><div style="float:left;"><img src="images/atomic_hms.png" width="35" height="45" /></div>&nbsp;<div style="float:left;line-height:14px;padding-left:10px;">Atomic HRMS<br/><span style="font-size:10px;">Information Technology</span></div></li>
<li class="deal" style="height:45px;"><div style="float:left;"><img src="images/academicka.png" width="35" height="45" /></div>&nbsp;<div style="float:left;line-height:14px;padding-left:10px;">Atomic Academica<br/><span style="font-size:10px;">Information Technology</span></div></li>
<?php }?></ul>
</div>
</div>
<div class="adleftaccordion_btm" ></div>
</div>
<!-----relatedsearch------->



</div>
<!-----250------->

<!-----740------->
<div style="width:740px;height:auto;float:left;">

<div style="width:740px; height:30px;display:none;" align="center">
<input type="radio" id="requestTypeCom" name="requestType"  value="company" title="Company" onClick="changesearchtype();" /><label for="requestTypeCom" >Company</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="radio" name="requestType" id="requestTypedeals" checked="checked" value="bestdeals" title="Product" onClick="changesearchtype();" /><label for="requestTypedeals">Product</label>
</div>
<?php /*?><div style="width:740px; height:50px;">
<div style="width:610px;height:30px;border:1px solid #999;margin-left:40px;float:left;">
<div class="adsearch_lookfor" ><select class="search_lookfor">
<option>Looking for</option>
<option>Supplier</option>
<option>Buyer</option>
</select>
</div>
<div class="adsearch_sep"></div>
<div class="adsearch_txbox" ><input autocomplete="off" name="searchkey" id="searchlist" placeholder="Please Enter Company Name to Search" autofocus value="<?php echo $searchkey;?>" type="text" style="width:390px;height:25px;border:none;padding-left:10px;" /><div id="SearchListRes"></div></div>
</div>
<div class="adsearch" align="center"><a href="#" onclick="searchResult($('#searchlist').val(),'');">Search</a></div>
</div><?php */?>
<div style="width:740px; height:50px;">
<div class="adsearch_txbox" >

<input type="text" autocomplete="off" name="searchkey" id="searchlist"  style="width:600px;height:30px;border:1px solid #999;" placeholder="Please Enter Product / Service / Job title to Search" autofocus value="<?php echo $searchkey;?>" onKeyUp="Searchusingenterkey(event);"  /><!-- onkeypress="Searchusingenterkey(event);" -->
<div id="SearchListRes"></div>

</div>
<div class="adsearch" align="center"><a href="#" onClick="searchResult($('#searchlist').val(),'','<?php echo $_REQUEST['type2'];?>');">Search</a></div>
</div>
<?php if($countresult>0){?>
<div class="adsearchresult_menu"><a id="Searchdisplaytypelist" class="active" href="#" onClick="SearchListStyle(<?php echo '\''.$requestType.'\''.','.'\''.$searchkey.'\''; ?>,'1',<?php echo $type2 ;?>);">List</a> | <a id="Searchdisplaytypegrid" href="#" onClick="SearchListStyle(<?php echo '\''.$requestType.'\''.','.'\''.$searchkey.'\''; ?>,'2',<?php echo $type2 ;?>);" >View Gallery</a></div>

<!------ad---------->
<div id="mainsearchcontent">
<?php 
if($requestType=='bestdeals'){ 
while($fetchquery=mysql_fetch_array($searchquery)){
$yearofestablishment = explode('-',get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_YrofEstablish'));
 if(strlen(stripslashes(get_company_name($fetchquery['PS_Id'])))>25){ $Compnamefixlimit = substr(stripslashes(get_company_name($fetchquery['PS_Id'])),0,25).'...' ;} else { $Compnamefixlimit =  stripslashes(get_company_name($fetchquery['PS_Id']));} 
 
if($yearofestablishment[2]!='')
$Since = '<span style="color:#007088;"> (Since - '.$yearofestablishment[2].')</span>';
else
$Since ='';
$Compnamedisp = $Compnamefixlimit.$Since; 

?>

<div class="singlead">
<!----title---->
<div class="adtitle">
<div style="width:550px;color:#EC5324;float:left;"><b><?php echo $Compnamedisp; ?></b></div>

<?php /*?><div class="rating">Rating <span><img src="images/rating_star.png" /><img src="images/rating_star.png" /><img src="images/rating_star.png" /></span> 3.0</div>
<?php */?></div>
<!----title--------->
<!------adimage--------->
<div class="adimage">
<div class="company_logo">
<a href="#thumb" class="thumbnail">
<img src="<?php if($fetchquery['PS_CoverImg']!=''){ echo $fetchquery['PS_CoverImg']; } else { echo 'images/default/no_image.png'; }?>"  width="124" height="115" /><span><img src="<?php if($fetchquery['PS_CoverImg']!=''){ echo $fetchquery['PS_CoverImg']; } else { echo 'images/default/no_image.png'; }?>" width="220" height="220" /></span></a>

</div>
<div>
<div><?php echo $fetchquery['PS_Display']?></div>     
<div><?php 
if($fetchquery['PS_Price']!=''&&$fetchquery['PS_Price']!='0'){
echo '<span> Price :'.' '.$fetchquery['PS_Price'].' '.CurrencyName($fetchquery['PS_Currency']).'</span>';
}
if($fetchquery['PS_Unit']!=''){
echo '<span> Unit :'.' '.$fetchquery['PS_Unit'].'</span>';
}

?></div> 
</div>   
</div>
<!------adimage--------->
<!------addetails--------->
<div class="addetails">
<div class="addetails_left">
<span style="color:#EC5324;"><b>Business Descriptions</b></span><div style="height:10px;"></div>
<?php if(strlen($fetchquery['PS_Description'])>150){ echo substr($fetchquery['PS_Description'],0,150).'...'; } else {echo $fetchquery['PS_Description']; } ?></div>
<div class="addetails_sep"></div>
<div class="addetails_right">
<span style="color:#EC5324;"><b>Contact Details</b></span><div style="height:10px"></div>
<?php
getAreadetails(get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_Area'));  
getCitydetails(get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_City'));
getStatedetails(get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_State'));
getPindetails(get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_Pincode'));
getCountrydetails2(get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_Country'));
?>
<div><?php if(get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_Mobile')!='') echo 'Phone: '.get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_Mobile') ;else echo  'Phone: '. get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_Landline') ;?></div>
<div><?php echo 'Email: '.get_data_from_registration($fetchquery['PS_User_Fk'],'RGT_Email') ;?></div>
</div>
</div>

<div style="width:720px;height:39px;float:left;">
<div class="chat_details">
<div class="chat_curve"></div>
<div class="chat_style"><img src="images/chat_online.png" style="position:relative;top:3px;" />&nbsp;&nbsp;<a href="#"> I'm Offline</a>
</div>
<div class="chat_fullcurve"></div>

<?php  
if(get_data_from_registration($fetchquery['PS_User_Fk'],RGT_Type)==3)
$user_id = $fetchquery['PS_User_Fk'];
else
$user_id = get_data_from_registration($fetchquery['PS_User_Fk'],RGT_ProfileUrl);
?>
<div class="full_det"><a <?php  if(isset($_SESSION['LID'])){?> target="_blank"  href="<?php echo 'Bestdealsajax.php?type='.base64_encode(get_data_from_registration($fetchquery['PS_User_Fk'],RGT_Type)).'&user='.$user_id.'&BDId='.$fetchquery['PS_Id'];?>" <?php } else {?> class="pop firstviewmore" onClick="getUserProfile('<?php echo $user_id ;?>','<?php echo $fetchquery['PS_Id'];?>','<?php echo base64_encode(get_data_from_registration($fetchquery['PS_User_Fk'],RGT_Type));?>');" <?php }?> >View Full Details</a></div>
</div>
</div>
<!------addetails--------->
</div><br/><br/>
<?php }}?>
<!------ad---------->
</div>

<?php } else{ echo '<center class="msgalert">No Product Found</center>' ;}?>

</div>
<!-----740------->
</div>
<!-----adleft_container-------->
<?php }?>