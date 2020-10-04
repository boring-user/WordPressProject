<?php
global $wpdb;
$table = NCL_TABLE_PREFIX."nri_fqcat";
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
   $sql2 = mysql_query("SELECT * FROM $table WHERE nri_fqcat_id=$fqpeditno");
   $results2 = mysql_fetch_array($sql2);
   ?>
   <div style="background:#FFFFFF;padding-bottom:15px;">
   <h2 style="padding-top:15px;padding-left:13px;font-weight:bold">Edit Details :</h2>
   <form name="faqcat" method="post" enctype="multipart/form-data">
    <table width='100%' cellpadding='5' cellspacing='5' background='#FFF' style="text-align:left;" border="0">
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Edit FAQ Category Name :</td>
    <td ><input type="text" name="ncl_edit_faq_title" value="<?php echo $results2['nri_fqcat_name']; ?>" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" required/>    
    </td>
    </tr>
     
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Edit FAQ Category Position :</td>
    <td >
    <input type="text" name="ncl_edit_faq_pos" value="<?php echo $results2['nri_fqcat_position']; ?>" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" readonly="readonly"/>    
    </td>
    </tr>
    
    <tr>
    <td >&nbsp;</td>
    <td style='text-align:left;'><input type="submit" value="Edit Details" style="cursor:pointer;background:#212121;text-align:center;color:#FFFFFF;font-family:calibri;padding:10px 20px;outline:none;font-size:16px;text-transform:capitalize;border:none;border-radius:3px;"/></td>
    </tr>
    
    </table>
</form>
 </div>  

<?php
	 }
	  if(isset($_POST['ncl_edit_faq_title']))
   		{	
		$fqpeditno =  $_GET['fqpeditno'];
		$ncl_edit_faq_title= mysql_real_escape_string(stripslashes($_POST['ncl_edit_faq_title']));
		$ncl_edit_faq_pos= mysql_real_escape_string(stripslashes($_POST['ncl_edit_faq_pos']));
		
		$table = NCL_TABLE_PREFIX."nri_fqcat";
		
		$sql3 = mysql_query("UPDATE $table SET nri_fqcat_name= '$ncl_edit_faq_title',nri_fqcat_position= '$ncl_edit_faq_pos' WHERE nri_fqcat_id='$fqpeditno'");
		
		$pathres= "?page=ncl_faq_cat";
		header("location:".$pathres);

		}
		?>


<div class="showres2">
<h2>All FAQ Categories Details :</h2>
<table width='100%' cellpadding='5' cellspacing='5' background='#FFF' style="text-align:left;font-size:13px;">
<tr>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Sl. No.</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Category Name</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Position</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Image</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Edit</td>
<!--<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Delete</td>-->
</tr>

<?php
$sql = "SELECT * FROM $table";
$results = $wpdb->get_results($sql);

$upload_dir = wp_upload_dir();
$file_path=$upload_dir['baseurl']."/faq/";
$path= "?page=ncl_faq_cat";

$i=1;

foreach($results as $result)
	{
		echo "<tr>";
		echo "<td style='background:#FFF;text-align:center;'>".$i."</td>";		
		echo "<td style='background:#FFF;text-align:center;'>".$result->nri_fqcat_name."</td>";
		echo "<td style='background:#FFF;text-align:center;'>".$result->nri_fqcat_position."</td>";
		echo "<td  style='background:#FFF;text-align:center;'><img src='".$file_path.$result->nri_fqcat_img."'/></td>";
		echo "<td style='background:#FFF;text-align:center;'><a href='".$_SERVER['PHP_SELF'].$path."&fqpeditno=".$result->nri_fqcat_id."' style='text-decoration: none;cursor:pointer;'>"."Edit". "</a></td>";
		//echo "<td style='background:#FFF;text-align:center;'><a href='".$_SERVER['PHP_SELF'].$path."&fqpdelno=".$result->nri_fqcat_id."' style='text-decoration: none;cursor:pointer;'>"."Delete". "</a></td>";
		echo "</tr>";
		$i++;
		}	
?>
</table>
</div><!--showres2 ends-->

<?php 
$fqpeditno =  $_GET['fqpeditno'];
if(!empty($fqpeditno)){
?>

<style>
.prfaq1{
display:none;
}
</style>

<?php 
}
?>
</div><!--showres ends-->




<?php
 if(isset($_GET['fqpdelno']))
   {
   $fqpdelno =  $_GET['fqpdelno'];
   $sql4 = "DELETE FROM $table WHERE nri_fqcat_id='$fqpdelno'";
   $results4= mysql_query($sql4);
      
    $pathres= "?page=ncl_faq_cat";
	//header("location:".$pathres);
    header( 'refresh: 0.2; url='.$pathres);
}


?>



</div>