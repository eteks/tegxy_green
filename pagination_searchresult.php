<script type="text/javascript" src="js/Searchlist.js"></script>
<link href="css/popup.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/popupbox.js"></script>
<script type="text/javascript">


function Searchpage()
{
var searchKey = $("#searchlist").val();

if(searchKey=="")
{ 
alert("Please Enter the Search Box Value");
DocId('searchlist').focus();
return false;
}
else{

var requestType=$("input[name='requestType']:checked").val();
var userCity=$("#userCity").val();
//alert(userCity);
var userArea;
if(selectarea=='')
userArea=$("#selectarea").val();

else
userArea=selectarea;
window.location.href="Searchpage.php?action=Add&searchkey="+searchKey+"&requesttype="+requestType+"&usercity="+userCity+"&userarea="+userArea+"&type2=1";
}
}



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




<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
        <script type="text/javascript">
            $(document).ready(function(){
                            
                function loadData(page){                
                    $.ajax
                    ({
                        type: "POST",
                        url: "searchresult.php",
                        data: "page="+page,
		
                        success: function(msg)
                        {
                            $("#container").ajaxComplete(function(event, request, settings)
                            {
                             
                                $("#container").html(msg);
                            });
                        }
                    });
                }
				
                loadData(1);  // For first time page load default results
				
                $('#container .pagination li.active').('click',function(){
				
                    var page = $(this).attr('p');
					
					
                    loadData(page);
                    
                });    
				       
                $('#go_btn').live('click',function(){
                    var page = parseInt($('.goto').val());
                    var no_of_pages = parseInt($('.total').attr('a'));
                    if(page != 0 && page <= no_of_pages){
                        loadData(page);
                    }else{
                        alert('Enter a PAGE between 1 and '+no_of_pages);
                        $('.goto').val("").focus();
                        return false;
                    }
                    
                });
            });
        </script>

        <style type="text/css">
          
            #container .pagination ul li.inactive,
            #container .pagination ul li.inactive:hover{
                background-color:#ededed;
                color:#bababa;
                border:1px solid #bababa;
                cursor: default;
            }
            #container .data ul li{
                list-style: none;
                font-family: verdana;
                margin: 5px 0 5px 0;
                color: #000;
                font-size: 13px;
            }

            #container .pagination{
                width: 800px;
                height: 25px;
            }
            #container .pagination ul li{
                list-style: none;
                float: left;
                border: 1px solid #006699;
                padding: 2px 6px 2px 6px;
                margin: 0 3px 0 3px;
                font-family: arial;
                font-size: 14px;
                color: #006699;
                font-weight: bold;
                background-color: #f2f2f2;
            }
            #container .pagination ul li:hover{
                color: #fff;
                background-color: #006699;
                cursor: pointer;
            }
			.go_button
			{
			background-color:#f2f2f2;border:1px solid #006699;color:#cc0000;padding:2px 6px 2px 6px;cursor:pointer;position:absolute;margin-top:-1px;
			}
			.total
			{
			float:right;font-family:arial;color:#999;
			}

        </style>

<?php

if(isset($_REQUEST['searchkey'])){
	
$searchkey=$_REQUEST['searchkey'];
$industry=$_REQUEST['industry']; 
$requestType=$_REQUEST['requesttype']; 
$userCity=$_REQUEST['usercity'];
$userArea=AreaName($_REQUEST['userarea']);
$type2 = $_REQUEST['type2'];

if($industry !='')
{
$industry_view ="AND RGT_Sector IN (".$industry.")";
}

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



//include('ps_pagination.php');
	
$page = $_POST['page'];
if($page=="") $page=1;
$cur_page = $page;
$page -= 1;
$per_page = 5;
$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;
$start = $page * $per_page;

//echo '<script>alert('.$page.');<//script>';
//echo '<script>alert('.$start.');<//script>';
//echo '<script>alert('.$per_page.');<//script>';
	
	

	
	
$searchquery= mysql_query("SELECT * FROM  ".TABLE_REGISTRATION." WHERE  $searchsql RGT_Status=1 AND RGT_Type=2 $querycitymatch  $queryareamatch $industry_view  LIMIT $start, $per_page");

$searchquery1=db_query("SELECT * FROM  ".TABLE_REGISTRATION." WHERE  $searchsql RGT_Status=1 AND RGT_Type=2 $querycitymatch  $queryareamatch");

$searchquery2=db_query("SELECT * FROM  ".TABLE_REGISTRATION." WHERE  $searchsql RGT_Status=1 AND RGT_Type=2 $querycitymatch  $queryareamatch");

$countresult=mysql_num_rows($searchquery);

while($fetchquery=mysql_fetch_array($searchquery1)){

$relatedsearch.=$fetchquery['RGT_Sector'].',';

}
}


else if($requestType=='bestdeals'){ $searchtTitle="Product List";
//db connection
if(isset($findcitymatch) || isset($findareamatch)){

//$wherec = "AND RGT_City= $findcitymatch $queryareamatch"; 	

$wherec = "$querycitymatch  $queryareamatch"; 	

$querycitymatch1=db_query("SELECT RGT_PK FROM ".TABLE_REGISTRATION." WHERE  RGT_Status=1 ".$wherec." $industry_view");
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

<div style="width:100%;height:20px;float:left;" align="right"></div>

<!-----250------->
<div style="width:250px;height:auto;float:left;">

<!-----relatedsearch------->

<div class="adrelatedsearch" >
<div id="relatedresultsbox" style="display:<?php if($searchkey=='' ){echo 'none';} else echo 'block'; ?>" >

<div class="adleftaccordiaon_top" >Related Company</div>

<div style="width:245px;height:auto;border:1px solid #C0C0C0;" >
<ul class="relatedsearch_ul">

<?php
if($requestType=='company'){

if($_REQUEST['type2']==1){ getKeywordCompListFromSearchedCompany($_REQUEST['searchkey']);  }  
if($_REQUEST['type2']==2){ getKeywordListFromSearchedIndustry($_REQUEST['searchkey']);     }
if($_REQUEST['type2']==3){ getKeywordCompListFromSearchedKeyword($_REQUEST['searchkey']);  }
} 
//getRelatedSearchComp($relatedsearch,$finaldetails,$findcitymatch,$findareamatch);
?> 
 
</ul>
</div>
</div>



<!-----------------------------------------------------------------------RELATED INDUSTRYS---------------------------------------------------------->


<br /><br /><br />

<div id="relatedresultsbox" style="display:<?php if($searchkey=='' ){echo 'none';} else echo 'block'; ?>" >
<div class="adleftaccordiaon_top" >Other Industry</div>
<div style="width:245px;height:auto;border:1px solid #C0C0C0;" >
<ul class="relatedsearch_ul">
<div id="show_all_industry" style="height:200px;"> 
<?php
 $SelectSector=db_query("Select Id,S_Name From ".TABLE_SECTOR." WHERE Status=1 order by S_Name asc");
while(list($MSeId,$MSeName)=db_fetch_array($SelectSector))
{?>

 <li><a onClick="view_related_industrys('<?php echo $MSeId; ?>');" style="cursor:pointer;"> <?php echo $MSeName; ?> </a> </li> 

<?php }
?> 
 </div>
</ul>
</div>
</div>

<!-----------------------------------------------------------------------RELATED INDUSTRYS---------------------------------------------------------->



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
<div class="adleftaccordion_btm" ></div>
</div>
<!-----relatedsearch------->



</div>
<!-----250------->

<!-----740------->
<div style="width:740px;height:auto;float:left;">

<div style="width:740px; height:30px;display:none;" align="center">
<input type="radio" id="requestTypeCom" name="requestType" checked="checked" value="company" title="Company" onClick="changesearchtype();" /><label for="requestTypeCom" >Company</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="radio" name="requestType" id="requestTypedeals"  value="bestdeals" title="Xbit"onclick="changesearchtype();" /><label for="requestTypedeals" >Product</label>
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





<?php if($countresult>0){?>
<div class="adsearchresult_menu"><a id="Searchdisplaytypelist" class="active" href="#" onClick="SearchListStyle(<?php echo '\''.$requestType.'\''.','.'\''.$searchkey.'\''; ?>,'1',<?php echo $type2 ;?>);">List</a> | <a href="#" id="Searchdisplaytypegrid" onClick="SearchListStyle(<?php echo '\''.$requestType.'\''.','.'\''.$searchkey.'\''; ?>,'2',<?php echo $type2 ;?>);" >View Gallery</a></div>

<!------ad---------->
<div id="mainsearchcontent">

 <div id="container">
<div class="data">

<?php 
if($requestType=='company'){ 

//while($fetchquery=mysql_fetch_array($searchquery)){


while($fetchquery = mysql_fetch_assoc($searchquery)) {


$yearofestablishment = explode('-',$fetchquery['RGT_YrofEstablish']);

 if(strlen(stripslashes($fetchquery['RGT_CompName']))>25){ $Compnamefixlimit = substr(stripslashes($fetchquery['RGT_CompName']),0,25).'...' ;} else { $Compnamefixlimit =  stripslashes($fetchquery['RGT_CompName']);} 
$Compnamedisp = '<span style="cursor:pointer;" title="'.$fetchquery['RGT_CompName'].'">'.$Compnamefixlimit.'</span><span style="color:#007088;"> (Since - '.$yearofestablishment[2].')</span>'; 
?>

<div class="singlead">
<!----title---->
<div class="adtitle">
<div style="width:550px;color:#EC5324;float:left;"><b>

<?php if($fetchquery['RGT_PaymentStatus']=='1'){?><a <?php  if(isset($_SESSION['LID'])){?>href="<?php echo $fetchquery['RGT_ProfileUrl']?>" <?php } else {?> class="pop firstviewmore" onClick="getUserProfile('<?php echo $fetchquery['RGT_ProfileUrl']?>','','');" <?php }?>   target="_blank" style="text-decoration:none;"> <?php } ?>
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
<a <?php  if(isset($_SESSION['LID'])){?>href="<?php echo $fetchquery['RGT_ProfileUrl']?>" <?php } else {?> class="pop firstviewmore" onClick="getUserProfile('<?php echo $fetchquery['RGT_ProfileUrl']?>','','');" <?php }?>   target="_blank"> View Services</a></div>
</div>
<?php }?>
</div>	
<!------addetails--------->

</div><br/><br/>

<?php }    }  ?>



<!------ad---------->
</div> <!--date div close-->

<?php } else{ echo '<center class="msgalert">No Company Found</center>' ;}?>


<div class="pagination">

<?php 
/* --------------------------------------------- */
$query_pag_num = "SELECT COUNT(*) AS count  FROM  ".TABLE_REGISTRATION." WHERE  $searchsql RGT_Status=1 AND RGT_Type=2 $querycitymatch  $queryareamatch $industry_view";
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

$goto = "<input type='text' class='goto' size='1' style='margin-top:-1px;margin-left:60px;'/><input type='button' id='go_btn' class='go_button' value='Go'  style='cursor:pointer;'/>";
$total_string = "<span class='total' a='$no_of_paginations'>Page <b>" . $cur_page . "</b> of <b>$no_of_paginations</b></span>";
$msg = $msg . "</ul>" . $goto . $total_string . "</div>";  // Content for pagination
echo $msg

?>

</div>


</div>  <!--container dov close-->

<!-----740------->

</div>  

   
     
</div>

</div>


<!-----adleft_container-------->




<?php } 


if($requestType=='bestdeals'){?>
<!-----adleft_container-------->
<div class="adleft_container">

<a <?php  if(isset($_SESSION['LID'])){?> target="_blank"  href="<?php echo 'ManageProfile.php?user='.base64_encode($_SESSION['Type']);?>" <?php } else {?> class="pop firstviewmore" onClick="Postafreead();" <?php }?> title="View More" style="text-decoration: none;">
<div style="width:100%;height:55px;float:left;" align="right">

<!--<div class="post_anadd">
<div class="post_addtxt">Post a Free Ad</div>
<div class="post_findtxt">To find your Best Deal</div>
</div>-->

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





<!--<div id="featuredlistings" style="display:<?php if($searchkey=='' ){echo 'block';} else echo 'none'; ?>" >
<div class="adleftaccordiaon_top" >Featured Products</div>
<div style="width:245px;height:auto;border:1px solid #C0C0C0;" >
<ul class="relatedsearch_ul">
<?php if ($requestType=='bestdeals'){?>
<li class="deal" style="height:45px;"><div style="float:left;"><img src="images/atomic_erp.png" width="35" height="45" /></div>&nbsp;<div style="float:left;line-height:14px;padding-left:10px;">Atomic ERP<br/><span style="font-size:10px;">Information Technology</span></div></li>
<li class="deal" style="height:45px;"><div style="float:left;"><img src="images/atomic_hms.png" width="35" height="45" /></div>&nbsp;<div style="float:left;line-height:14px;padding-left:10px;">Atomic HRMS<br/><span style="font-size:10px;">Information Technology</span></div></li>
<li class="deal" style="height:45px;"><div style="float:left;"><img src="images/academicka.png" width="35" height="45" /></div>&nbsp;<div style="float:left;line-height:14px;padding-left:10px;">Atomic Academica<br/><span style="font-size:10px;">Information Technology</span></div></li>
<?php }?></ul>
</div>
</div>-->






<div class="adleftaccordion_btm" ></div>
</div>
<!-----relatedsearch------->



</div>
<!-----250------->

<!-----740------->
<div style="width:740px;height:auto;float:left;">

<div style="width:740px; height:30px;display:none;" align="center">
<input type="radio" id="requestTypeCom" name="requestType"  value="company" title="Company" onClick="changesearchtype();" /><label for="requestTypeCom" >Company</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="radio" name="requestType" id="requestTypedeals" checked="checked" value="bestdeals" title="Product" onClick="changesearchtype();" /><label for="requestTypedeals">Xbit</label>
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
<div style="width:550px;color:#EC5324;float:left;"><b>  <?php echo $Compnamedisp; ?></b></div>

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
<div>

<span style="font-weight:bold;"><?php echo $fetchquery['PS_Display']?></span><br />



<?php if(strlen($fetchquery['PS_Description'])>150){ echo substr($fetchquery['PS_Description'],0,150).'...'; } else {echo $fetchquery['PS_Description']; } ?>

</div>     
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

 <?php echo $Compnamedisp; ?>
</div>
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
<div class="chat_style"><img src="images/chat_online.png" style="position:relative;top:3px;" />&nbsp;&nbsp;<a href="#">Offline</a>
</div>
<div class="chat_fullcurve"></div>

<?php  
if(get_data_from_registration($fetchquery['PS_User_Fk'],RGT_Type)==3)
$user_id = $fetchquery['PS_User_Fk'];
else
$user_id = get_data_from_registration($fetchquery['PS_User_Fk'],RGT_ProfileUrl);
?>

<div class="full_det"><a <?php  if(isset($_SESSION['LID'])){?> target="_blank"  href="<?php echo 'Bestdealsajax.php?type='.base64_encode(get_data_from_registration($fetchquery['PS_User_Fk'],RGT_Type)).'&user='.$user_id.'&BDId='.$fetchquery['PS_Id'];?>" <?php } else {?> class="pop firstviewmore" onClick="getUserProfile('<?php echo $user_id ;?>','<?php echo $fetchquery['PS_Id'];?>','<?php echo base64_encode(get_data_from_registration($fetchquery['PS_User_Fk'],RGT_Type));?>');" <?php }?> >View Full Products</a></div>
</div>
</div>





<!------addetails--------->
</div><br/><br/>
<?php }}?>
<!------ad---------->
</div>
<?php } else{ echo '<center class="msgalert">No Products Found</center>' ;}?>

</div>
<!-----740------->
</div>





<!-----adleft_container-------->
<?php }?>