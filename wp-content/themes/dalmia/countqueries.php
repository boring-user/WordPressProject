<?php /*Template Name: CountQueries*/ ?>
<?php
global $wpdb;
$table = NCL_TABLE_PREFIX."nri_fqcat";
$table2 = NCL_TABLE_PREFIX."nri_fqsubcat";
$table3 = NCL_TABLE_PREFIX."nri_ques";

$id = $_POST['id'];
echo $id; 
$sql = mysql_query("SELECT ques_views FROM $table3 WHERE nri_ques_id = '$id'");
$info = mysql_fetch_array($sql);

$view= $info[ques_views]+1; 
//$view++;

$sql = mysql_query("UPDATE $table3 set ques_views = '$view' WHERE nri_ques_id = '$id'");

?>