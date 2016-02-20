<?php

$userid=$_SESSION['Memberid'];
$q="select count(*) \"total\"  from upload WHERE Memberid='".$userid."'";
$ros=mysql_query($q);
	$row=(mysql_fetch_array($ros));
	$total=$row['total'];
	$dis=3;
	$total_page=ceil($total/$dis);
	$page_cur=(isset($_GET['page']))?$_GET['page']:1;
	$k=($page_cur-1)*$dis;
	
	$q="select * from upload WHERE Memberid='".$userid."' LIMIT $k,$dis";
	$ros=mysql_query($q);
	while($row=mysql_fetch_array($ros))
{
$id=$row["id"];

echo '<tr>';
echo "<td align=center width=300><a href='download.php?filename={$row['name']}'>{$row['name']} </a>"; 

 
echo "<td align=center>  
<a href='update.php?id={$row['id']}'> <img src='images/edit.png' width=16 height=16 title='Delete Image'; style='cursor:pointer;'> </a> ";

echo"<td align=center>  <img src='images/drop.png' width=16 height=16 title='Delete Link Info'; style='cursor:pointer'; onclick='del_link({$row['id']})'; >";
		
echo '</tr>';
}
echo '</table>';

echo '<br/>';
echo '<div align=center>';
echo '<tr align="center">';
if($page_cur>1)
	{
		
		echo '<a href="files.php?page='.($page_cur-1).'" style="cursor:pointer;color:black;" ><input style="cursor:pointer;background-color:black;border:1px black solid;border-radius:5px;width:120px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Previous "></a> ';
        
	}
	else
	{
	  
	  echo '<input style="background-color:black;border:1px black solid;border-radius:5px;width:120px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Previous "> ';
	  
	}
	for($i=1;$i<=$total_page;$i++)
	{
		if($page_cur==$i)
		{
			echo '<input style="background-color:black;border:2px black solid;border-radius:5px;width:30px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> ';
		}
		else
		{
		echo '<a href="files.php?page='.$i.'"> <input style="cursor:pointer;background-color:black;border:1px black solid;border-radius:5px;width:30px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> </a> ';
		
		}
	}
	if($page_cur<$total_page)
	{
		
		echo '<a href="files.php?page='.($page_cur+1).'"><input style="cursor:pointer;background-color:black;border:1px black solid;border-radius:5px;width:90px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Next "></a>';
  	 
	}
	else
	{

	 echo '<input style="background-color:black;border:1px black solid;border-radius:5px;width:90px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value="   Next "> ';
 
	 }
   echo '</tr>';
echo '</div>';
?>