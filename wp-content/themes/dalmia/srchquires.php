<?php /*Template Name: Search Queries*/ ?>
<?php get_header(); ?>

<?php
global $wpdb;
$table = NCL_TABLE_PREFIX."nri_fqcat";
$table2 = NCL_TABLE_PREFIX."nri_fqsubcat";
$table3 = NCL_TABLE_PREFIX."nri_ques";
$pathurl= site_url().'/faq-on-personal-investment-and-finance?page=&subcatid=';
$srchq=$_POST['srchq'];
?>

<link href="<?php bloginfo('template_directory'); ?>/stylenri.css" rel="stylesheet" />
<link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslidernri.css" rel="stylesheet" />
<link href="<?php bloginfo('template_directory'); ?>/styleblog.css" rel="stylesheet" />

<div class="content">
<div class="container">

<div class="content-Area-left">
<div class="home-block-content">

<h2 style="font-size:16px;">Search result: <?php echo $srchq; ?></h2>

<div class="hbc">
<div class="faq">
		<?php
		$sql="SELECT * FROM $table2";
		$results = $wpdb->get_results($sql);
		foreach($results as $result)
        {
		$subfaqcatsrch='';
		
		$subfaqcatsrch=$result->nri_fqsubcat_id;
		?>
     
        <?php 
		$sql5="SELECT * FROM $table3 WHERE nri_fqsubcat_id = '$subfaqcatsrch' AND (`ques_name` LIKE '%$srchq%' OR `ques_ans` LIKE '%$srchq%')";
		$result2=mysql_query($sql5);
		$count=mysql_num_rows($result2);
		$results5 = $wpdb->get_results($sql5);
		if(!empty($count))
		{?>
           <h6><a href="<?php echo $pathurl.$result->nri_fqsubcat_id.'&parentfaqid=1'; ?>"><?php echo $result->nri_fqsubcat_name; ?></a></h6>
        <?php
		}
		
		foreach($results5 as $result5)
        {
		 //echo $subfaqcatsrch=$result->nri_fqsubcat_id;
        ?>
        
        <h4 id="<?php echo $result5->nri_ques_id; ?>" class="q"><?php echo $result5->ques_name; ?></h4>
        <h5><?php echo $result5->ques_ans; ?></h5>
        <?php
		 }
		}
        ?>
<br />
</div><!--faq ends-->


<div class="clear"></div>
</div><!--hbc ends--> 
<div class='clear'></div> 
</div><!--home-block-content ends-->   

<div class="clear"></div>
</div><!--content-Area-left ends-->

<div class="content-Area-right">
<?php include 'sidebar2.php'; ?>
<div class="clear"></div>
</div><!--content-Area-right ends-->

<div class="clear"></div>
</div><!--container ends-->
<div class="clear"></div>
</div><!--content ends-->

<?php get_footer(); ?>