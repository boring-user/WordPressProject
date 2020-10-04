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

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-2.1.1.min.js"></script>




<div class="showres">

<?php
if(isset($_GET['fqpeditno']))
   {
   $fqpeditno =  $_GET['fqpeditno'];
   $sql2 = mysql_query("SELECT * FROM $table,$table2 WHERE $table.nri_fqsubcat_id=$table2.nri_fqsubcat_id AND nri_ques_id=$fqpeditno");
   $results2 = mysql_fetch_array($sql2);
   ?>
   <div style="background:#FFFFFF;padding-bottom:15px;">
   <h2 style="padding-top:15px;padding-left:13px;font-weight:bold">Edit Details :</h2>
   <form name="faqcat" method="post" enctype="multipart/form-data">
    <table width='100%' cellpadding='5' cellspacing='5' background='#FFF' style="text-align:left;" border="0">
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Edit Questions Title:</td>
    <td ><input type="text" name="ncl_edit_ques_title" value="<?php echo $results2['ques_name']; ?>" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" required/>    
    </td>
    </tr>
      
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Edit Answer :</td>
    <td >
    <textarea name="ncl_edit_ans" style="width: 280px;height:100px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;"> <?php echo $results2['ques_ans']; ?> </textarea>
    </td>
    </tr>
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Edit Sub Category :</td>
    <td >
    <?php 
    $table=NCL_TABLE_PREFIX."nri_fqsubcat";
    $query = mysql_query("SELECT * FROM $table");
	echo "<select name='edit_childfqcat' style='width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;'>";
	echo '<option value="'.$results2['nri_fqsubcat_id'].'">'.$results2['nri_fqsubcat_name'].'</option>';	
	while ($row = mysql_fetch_array($query)) 
	{
	 echo '<option value="'.$row['nri_fqsubcat_id'].'">'.$row['nri_fqsubcat_name'].'</option>';
	}	
	?>
    </td>
    </tr>
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Edit Position :</td>
    <td >
    <input type="text" name="ncl_edit_ques_pos" value="<?php echo $results2['ques_position']; ?>" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" required/>
    </td>
    </tr>

    <tr>
    <td >&nbsp;</td>
    <td style='text-align:left;'><input type="submit" value="Update Details" style="cursor:pointer;background:#212121;text-align:center;color:#FFFFFF;font-family:calibri;padding:10px 20px;outline:none;font-size:16px;text-transform:capitalize;border:none;border-radius:3px;"/></td>
    </tr>
    
    </table>
</form>
 </div>  

<?php
}
if(isset($_POST['ncl_edit_ques_title']))
{	
$fqpeditno =  $_GET['fqpeditno'];

$ncl_edit_ques_title= mysql_real_escape_string(stripslashes($_POST['ncl_edit_ques_title']));
$ncl_edit_ans= mysql_real_escape_string(stripslashes($_POST['ncl_edit_ans']));
$edit_childfqcat= mysql_real_escape_string(stripslashes($_POST['edit_childfqcat']));
$ncl_edit_ques_pos= mysql_real_escape_string(stripslashes($_POST['ncl_edit_ques_pos']));

$table2 = NCL_TABLE_PREFIX."nri_ques";
$sql3 = mysql_query("UPDATE $table2 SET ques_name= '$ncl_edit_ques_title',ques_ans= '$ncl_edit_ans',nri_fqsubcat_id= '$edit_childfqcat',ques_position= '$ncl_edit_ques_pos' WHERE nri_ques_id	='$fqpeditno'");

$pathres= "?page=ncl_ques_ans";
header("location:".$pathres);
}
?>

<div class="clear"></div>

<div class="srchcat">
        
        <?php
		$pathsort= $_SERVER['PHP_SELF']."?page=ncl_ques_ans";
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
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Question. id.</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Questions</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Answers</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Views</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Sub-Category Name</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Position</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Edit</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Delete</td>
</tr>

<?php
$sql = "SELECT * FROM $table, $table2 WHERE $table.nri_fqsubcat_id = $table2.nri_fqsubcat_id AND $table.nri_fqsubcat_id ='$sortvalue' ORDER BY $table2.nri_ques_id DESC";
$results = $wpdb->get_results($sql);
$path= "?page=ncl_ques_ans";
$i=1;

foreach($results as $result)
	{
	echo "<tr>";
	echo "<td style='background:#FFF;text-align:center;'>".$i."</td>";
	echo "<td style='background:#FFF;text-align:center;'>".$result->nri_ques_id."</td>";		
	echo "<td style='background:#FFF;text-align:center;'>".$result->ques_name."</td>";
	echo "<td style='background:#FFF;text-align:center;'>".$result->ques_ans."</td>";
	echo "<td style='background:#FFF;text-align:center;'>".$result->ques_views."</td>";
	echo "<td style='background:#FFF;text-align:center;'>".$result->nri_fqsubcat_name."</td>";
	echo "<td style='background:#FFF;text-align:center;'>".$result->ques_position."</td>";
	echo "<td style='background:#FFF;text-align:center;'><a href='".$_SERVER['PHP_SELF'].$path."&fqpeditno=".$result->nri_ques_id."' style='text-decoration: none;cursor:pointer;'>"."Edit". "</a></td>";
	echo "<td style='background:#FFF;text-align:center;'><a href='".$_SERVER['PHP_SELF'].$path."&fqpdelno=".$result->nri_ques_id."' style='text-decoration: none;cursor:pointer;'>"."Delete". "</a></td>";
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


    
<h2>All  FAQ :</h2>
<table width='100%' cellpadding='5' cellspacing='5' background='#FFF' style="text-align:left;font-size:13px;">
<tr>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Sl. No.</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Questions</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Answers</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Views</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Sub-Category Name</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Position</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Edit</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Delete</td>
</tr>

<?php
$sql = "SELECT * FROM $table, $table2 WHERE $table.nri_fqsubcat_id = $table2.nri_fqsubcat_id ORDER BY $table2.nri_ques_id DESC";
$results = $wpdb->get_results($sql);
$path= "?page=ncl_ques_ans";
$i=1;

foreach($results as $result)
	{
	echo "<tr>";
	echo "<td style='background:#FFF;text-align:center;'>".$i."</td>";		
	echo "<td style='background:#FFF;text-align:center;'>".$result->ques_name."</td>";
	echo "<td style='background:#FFF;text-align:center;'>".$result->ques_ans."</td>";
	echo "<td style='background:#FFF;text-align:center;'>".$result->ques_views."</td>";
	echo "<td style='background:#FFF;text-align:center;'>".$result->nri_fqsubcat_name."</td>";
	echo "<td style='background:#FFF;text-align:center;'>".$result->ques_position."</td>";
	echo "<td style='background:#FFF;text-align:center;'><a href='".$_SERVER['PHP_SELF'].$path."&fqpeditno=".$result->nri_ques_id."' style='text-decoration: none;cursor:pointer;'>"."Edit". "</a></td>";
	echo "<td style='background:#FFF;text-align:center;'><a href='".$_SERVER['PHP_SELF'].$path."&fqpdelno=".$result->nri_ques_id."' style='text-decoration: none;cursor:pointer;'>"."Delete". "</a></td>";
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
display:none;
}
</style>

<?php 
}
?>



<?php
 if(isset($_GET['fqpdelno']))
   {
   $fqpdelno =  $_GET['fqpdelno'];
   $sql4 = "DELETE FROM $table2 WHERE nri_ques_id='$fqpdelno'";
   $results4= mysql_query($sql4);
      
    $pathres= "?page=ncl_ques_ans";
	//header("location:".$pathres);
    header( 'refresh: 0.1; url='.$pathres);
}


?>

</div>
