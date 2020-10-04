<?php
global $wpdb;
$table = NCL_TABLE_PREFIX."nri_fqsubcat";
$table2 = NCL_TABLE_PREFIX."nri_ques";
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

.srchcat select {
float:right;
clear:both;
width: 285px;
outline:none;
color: #fff;
background: #7e1312;
min-height:40px;
margin-top:20px;
border:0px solid #FFF;
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
   $sql2 = mysql_query("SELECT * FROM $table,$table2 WHERE $table.nri_fqsubcat_id=$table2.nri_fqsubcat_id AND nri_ques_id=$fqpeditno");
   $results2 = mysql_fetch_array($sql2);
   ?>
   <div style="background:#FFFFFF;padding-bottom:15px;">
   <h2 style="padding-top:15px;padding-left:13px;font-weight:bold">Question Position Update :</h2>
   <form name="faqcat" method="post" enctype="multipart/form-data">
    <table width='100%' cellpadding='5' cellspacing='5' background='#FFF' style="text-align:left;" border="0">
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Questions Title:</td>
    <td ><input type="text" name="ques_title" value="<?php echo $results2['ques_name']; ?>" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" readonly="readonly"/>    
    </td>
    </tr>
      
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Subcategory Name :</td>
    <td ><input type="text" name="subfaq_title" value="<?php echo $results2['nri_fqsubcat_name']; ?>" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" readonly="readonly"/>    
    </td>
    </tr>
      
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Question Homepage Position :</td>
    <td >
    <input type="text" name="home_ques_pos" value="<?php echo $results2['home_ques_position']; ?>" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" required/>
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
if(isset($_POST['home_ques_pos']))
{	
$fqpeditno =  $_GET['fqpeditno'];

$home_ques_pos= mysql_real_escape_string(stripslashes($_POST['home_ques_pos']));

$table2 = NCL_TABLE_PREFIX."nri_ques";
$sql3 = mysql_query("UPDATE $table2 SET home_ques_position= '$home_ques_pos' WHERE nri_ques_id	='$fqpeditno'");

$pathres= "?page=ncl_hm_quesans";
header("location:".$pathres);
}
?>


<div class="clear"></div>

<div class="srchcat">
        
        <?php
		$pathsort= $_SERVER['PHP_SELF']."?page=ncl_hm_quesans";
		echo "<form name='' action='$pathsort' method='post'>";
		$sqlmain = "SELECT * FROM $table";
		$resultmain = $wpdb->get_results($sqlmain); 
		
		echo "<select name='sortcat' onchange='this.form.submit()'>"; 
		echo "<option value='0'>"."Sorting Sub-Category Wise</option>";
		foreach($resultmain as $resultmains)
		{
		echo '<option value="'. $resultmains->nri_fqsubcat_id.'">'.$resultmains->nri_fqsubcat_name.'</option>';
		}
		echo '</select>';
		echo '</form>';
		?>
        
</div>
<div class="clear"></div>


<?php 
$sortvalue = $_POST['sortcat'];
if(!empty($sortvalue)){
?>

<div class="showres4">    
<h2>Search Result :</h2>
<table width='100%' cellpadding='5' cellspacing='5' background='#FFF' style="text-align:left;font-size:13px;">
<tr>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Sl. No.</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Questions</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>SubCategory Name</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Homepage Question Position</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Update</td>
</tr>

<?php
$sql = "SELECT * FROM $table, $table2 WHERE $table.nri_fqsubcat_id = $table2.nri_fqsubcat_id  AND $table.nri_fqsubcat_id ='$sortvalue' ORDER BY $table2.nri_ques_id DESC";
$results = $wpdb->get_results($sql);
$path= "?page=ncl_hm_quesans";
$i=1;

foreach($results as $result)
	{
	echo "<tr>";
	echo "<td style='background:#FFF;text-align:center;'>".$i."</td>";		
	echo "<td style='background:#FFF;text-align:center;'>".$result->ques_name."</td>";
	echo "<td style='background:#FFF;text-align:center;'>".$result->nri_fqsubcat_name."</td>";
	echo "<td style='background:#FFF;text-align:center;'>".$result->home_ques_position."</td>";
	echo "<td style='background:#FFF;text-align:center;'><a href='".$_SERVER['PHP_SELF'].$path."&fqpeditno=".$result->nri_ques_id."' style='text-decoration: none;cursor:pointer;'>"."Edit". "</a></td>";
	echo "</tr>";
	$i++;
	}	
?>
</table>
</div><!--showres4 ends-->

<style>
.showres2{
display:none;
}
</style>

<?php 
}
?>

<div class="clear"></div>

<div class="showres2">
<?php // $x = plugins_url().'/ckeditor/'; ?>
<h2>All FAQ's Homepage Position :</h2>
<table width='100%' cellpadding='5' cellspacing='5' background='#FFF' style="text-align:left;font-size:13px;">
<tr>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Sl. No.</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Questions</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>SubCategory Name</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Homepage Question Position</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Update</td>
</tr>

<?php
$sql = "SELECT * FROM $table, $table2 WHERE $table.nri_fqsubcat_id = $table2.nri_fqsubcat_id ORDER BY $table2.nri_ques_id DESC";
$results = $wpdb->get_results($sql);
$path= "?page=ncl_hm_quesans";
$i=1;

foreach($results as $result)
	{
	echo "<tr>";
	echo "<td style='background:#FFF;text-align:center;'>".$i."</td>";		
	echo "<td style='background:#FFF;text-align:center;'>".$result->ques_name."</td>";
	echo "<td style='background:#FFF;text-align:center;'>".$result->nri_fqsubcat_name."</td>";
	echo "<td style='background:#FFF;text-align:center;'>".$result->home_ques_position."</td>";
	echo "<td style='background:#FFF;text-align:center;'><a href='".$_SERVER['PHP_SELF'].$path."&fqpeditno=".$result->nri_ques_id."' style='text-decoration: none;cursor:pointer;'>"."Edit". "</a></td>";
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
.prfaq13{

}
</style>

<?php 
}
?>

</div>

