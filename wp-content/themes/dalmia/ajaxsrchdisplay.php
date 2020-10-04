<?php /*Template Name: Ajaxsrchdisplay*/ ?>

<?php
global $wpdb;
$table2 = NCL_TABLE_PREFIX."nri_fqsubcat";
$table3 = NCL_TABLE_PREFIX."nri_ques";
?>

<?php
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM $table3 WHERE ques_name like '%" . $_POST["keyword"] . "%' LIMIT 0,10";
$results = $wpdb->get_results($query);

if(!empty($results)) {
?>
<ul id="country-list">
<?php
foreach($results as $result) {
?>
<li onClick="selectCountry('<?php echo $result->ques_name; ?>');"><?php echo $result->ques_name; ?></li>
<?php } ?>
</ul>
<?php } } ?>



<?php
if(!empty($_POST["keyword2"])) {
$query ="SELECT * FROM $table3 WHERE ques_name like '%" . $_POST["keyword2"] . "%' LIMIT 0,10";
$results = $wpdb->get_results($query);

if(!empty($results)) {
?>
<ul id="country-list2">
<?php
foreach($results as $result) {
?>
<li onClick="selectCountry('<?php echo $result->ques_name; ?>');"><?php echo $result->ques_name; ?></li>
<?php } ?>
</ul>
<?php } } ?>