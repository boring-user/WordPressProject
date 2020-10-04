<?php
global $wpdb;
$table = NCL_TABLE_PREFIX."nri_fqsubcat";
$table2 = NCL_TABLE_PREFIX."nri_fqcat";
?>

<div style="margin-bottom:15px;margin-top:15px;">

<style>
.showres2{

}

.fl{
float:left;
}

.rl{
float:left;
}

.clear{
clear:both;
}

</style>




<div class="showres">

<?php

if(isset($_GET['fqpeditno']))
   {
   $fqpeditno =  $_GET['fqpeditno'];
   $sql2 = mysql_query("SELECT * FROM $table,$table2 WHERE $table.nri_fqcat_id=$table2.nri_fqcat_id AND nri_fqsubcat_id=$fqpeditno");
   $results2 = mysql_fetch_array($sql2);
   ?>
   <div style="background:#FFFFFF;padding-bottom:15px;">
   <h2 style="padding-top:15px;padding-left:13px;font-weight:bold">SubCategory Position Update :</h2>
   <form name="faqcat" method="post" enctype="multipart/form-data">
    <table width='100%' cellpadding='5' cellspacing='5' background='#FFF' style="text-align:left;" border="0">
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>SubCategory Name :</td>
    <td ><input type="text" name="subfaq_title" value="<?php echo $results2['nri_fqsubcat_name']; ?>" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" readonly="readonly"/>    
    </td>
    </tr>
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Parent Category Name :</td>
    <td ><input type="text" name="prntfaq_title" value="<?php echo $results2['nri_fqcat_name']; ?>" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" readonly="readonly"/>    
    </td>
    </tr>
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'> SubCategory Homepage Position :</td>
    <td ><input type="text" name="home_subcat_pos" value="<?php echo $results2['home_subcat_position']; ?>" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;"/>    
    </td>
    </tr>
    
    <tr>
    <td >&nbsp;</td>
    <td style='text-align:left;'><input type="submit" value="Update" style="cursor:pointer;background:#212121;text-align:center;color:#FFFFFF;font-family:calibri;padding:10px 20px;outline:none;font-size:16px;text-transform:capitalize;border:none;border-radius:3px;"/></td>
    </tr>
    
    </table>
</form>
 </div>  

<?php
}
if(isset($_POST['home_subcat_pos']))
{	
$fqpeditno =  $_GET['fqpeditno'];
$home_subcat_pos= mysql_real_escape_string(stripslashes($_POST['home_subcat_pos']));

$table = NCL_TABLE_PREFIX."nri_fqsubcat";

$sql3 = mysql_query("UPDATE $table SET home_subcat_position= '$home_subcat_pos' WHERE nri_fqsubcat_id='$fqpeditno'");

$pathres= "?page=ncl_hm_subcat";
header("location:".$pathres);
}
?>
        
        

<div class="showres2 prfaq12">

<table width='100%' cellpadding='5' cellspacing='5' background='#FFF' style="text-align:left;font-size:13px;">
<h2>Homepage SubCategories Position Details :</h2>
<tr>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Sl. No.</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>SubCategory Name</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Parent Category Name</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Home Page Position</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Edit</td>
</tr>

<?php
$sql = "SELECT * FROM $table, $table2 WHERE $table.nri_fqcat_id = $table2.nri_fqcat_id ORDER BY $table.nri_fqsubcat_id DESC";
$results = $wpdb->get_results($sql);
$path= "?page=ncl_hm_subcat";
$i=1;

foreach($results as $result)
	{
	echo "<tr>";
	echo "<td style='background:#FFF;text-align:center;'>".$i."</td>";		
	echo "<td style='background:#FFF;text-align:center;'>".$result->nri_fqsubcat_name."</td>";
	echo "<td style='background:#FFF;text-align:center;'>".$result->nri_fqcat_name."</td>";
	echo "<td style='background:#FFF;text-align:center;'>".$result->home_subcat_position."</td>";
	echo "<td style='background:#FFF;text-align:center;'><a href='".$_SERVER['PHP_SELF'].$path."&fqpeditno=".$result->nri_fqsubcat_id."' style='text-decoration: none;cursor:pointer;'>"."Edit". "</a></td>";
	echo "</tr>";
	$i++;
	}	
?>
</table>
</div><!--showres2 ends-->

</div><!--showres ends-->

<?php 
$fqpeditno =  $_GET['fqpeditno'];
if(!empty($fqpeditno)){
?>

<style>
.prfaq12{

}
</style>

<?php 
}
?>

</div>