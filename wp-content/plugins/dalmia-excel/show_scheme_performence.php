<?php
global $wpdb;
$table = NCL_TABLE_PREFIX."scheme_performance";
?>

<div style="margin-bottom:15px;margin-top:15px;">

<style>
.showres2{
display:none;
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
<script type="text/javascript" src="http://dalmiaadvisory.com/wp-content/themes/dalmia/js/jquery-2.1.1.min.js"></script>



<script>
$(document).ready(function(){
    $("button").click(function(){
        $(".showres2").toggle('slow');
    });
});
</script>

<?php     
	$sql = "SELECT *FROM $table";
	
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	//echo $count;
	if(!empty($count)){
	?>
    
<div style="margin:0 auto;width:605px">

<div class="rl">
<button style="cursor:pointer;background:#0A0A0A;text-align:center;color:#FFFFFF;font-family:calibri;padding:15px 50px;outline:none;font-size:16px;text-transform:capitalize;border:none;border-radius:3px;width:300px;">Show Records</button>
</div>
    
<div class="fl">   
<form name="em" method="post">
<input type="hidden" value="1" name="confrm" />
<input type="submit" value="Clear All Previous Data" style="cursor:pointer;background:#E42424;text-align:center;color:#FFFFFF;font-family:calibri;padding:15px 20px;outline:none;font-size:16px;text-transform:capitalize;border:none;border-radius:3px;width:300px;"/>
</form>
</div>


<div class="clear"></div>
</div>
<?php 
    }	
?>

<div class="showres">

<div class="showres2">
<h2>Results of Scheme Performance :</h2>
<table width='100%' cellpadding='5' cellspacing='5' background='#FFF' style="text-align:left;font-size:13px;">
<tr>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Sl. No.</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Category</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>Fund</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>3-Month</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>1-Year</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>3-Year</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>5-Year</td>
<td style='background:#212121;text-align:center;color:#FFF;font-size:14px;'>10-Year</td>
</tr>

<?php
$sql = "SELECT *FROM $table WHERE scheme_performance_id>1";
$results = $wpdb->get_results($sql);

$path= "?page=ncl_scheme_performance";

$i=1;

foreach($results as $result)
	{
		echo "<tr>";
		echo "<td style='background:#FFFAF4;text-align:center;'>".$i."</td>";		
		echo "<td style='background:#FFFAF4;text-align:center;'>".$result->scheme_cat."</td>";
		echo "<td style='background:#FFFAF4;text-align:center;'>".$result->scheme_name."</td>";
		echo "<td style='background:#FFFAF4;text-align:center;'>".$result->one_yr."</td>";
		echo "<td style='background:#FFFAF4;text-align:center;'>".$result->three_yr."</td>";
		echo "<td style='background:#FFFAF4;text-align:center;'>".$result->five_yr."</td>";
		echo "<td style='background:#FFFAF4;text-align:center;'>".$result->ten_yr."</td>";
		echo "<td style='background:#FFFAF4;text-align:center;'>".$result->fifteen_yr."</td>";
		echo "</tr>";
		$i++;
		}	
?>
</table>
</div><!--showres2 ends-->
</div><!--showres ends-->

<?php
 if(isset($_POST['confrm']))
   {
   $sql = "TRUNCATE TABLE `$table`";
   $results= mysql_query($sql);
   $pathp= $_SERVER['PHP_SELF']."?page=ncl_scheme_performance";
   header( 'refresh: 0.1; url='.$pathp);
   }
?>

<?php
//$pathp = $_SERVER['PHP_SELF']."?page=ncl_scheme_performance";
//echo $pathp;
 ?>
</div>