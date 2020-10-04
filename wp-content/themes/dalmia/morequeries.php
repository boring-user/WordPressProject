<?php /*Template Name: More Queries*/ ?>

<?php get_header(); ?>



<link href="<?php bloginfo('template_directory'); ?>/stylenri.css" rel="stylesheet" />

<link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslidernri.css" rel="stylesheet" />

<link href="<?php bloginfo('template_directory'); ?>/styleblog.css" rel="stylesheet" />

<style>
.content h4{
margin-bottom: 5px;
}
</style>

<div class="content">

<div class="container">



<div class="content-Area-left">



<?php

$pathurlnewrss= site_url().'/faq-on-personal-investment-and-finance?page=&subcatid=';

$parentfaqid=$_GET['parentfaqid'];



global $wpdb;

$table = NCL_TABLE_PREFIX."nri_fqcat";

$table2 = NCL_TABLE_PREFIX."nri_fqsubcat";

$table3 = NCL_TABLE_PREFIX."nri_ques";



$subcatid=$_GET['subcatid'];

$sql2 = "SELECT * FROM $table,$table2 WHERE $table.nri_fqcat_id=$table2.nri_fqcat_id AND nri_fqsubcat_id = '$subcatid'";

$results = $wpdb->get_results($sql2);

foreach($results as $result)

{

$parentcatname = $result->nri_fqcat_name;

$childcatname = $result->nri_fqsubcat_name;

}

?>



<div class="home-block-content">


<?php 
if($parentfaqid=='1'){
?>
<h2 style="font-size:16px;">Top 20 &nbsp;Investment&nbsp; FAQ</h2>
<?php 
}else{
?>
<h2 style="font-size:16px;">Top 20 &nbsp;NRI&nbsp; FAQ</h2>
<?php
}
?>



<div class="hbc">



<div class="faq">

<?php

/*$sql="SELECT * FROM $table2";

$results = $wpdb->get_results($sql);

foreach($results as $result)

{

$subfaqcatsrch='';	

$subfaqcatsrch=$result->nri_fqsubcat_id;*/

?>

        

<?php 

//$sql2 = "SELECT * FROM $table,$table2,$table3 WHERE $table2.nri_fqsubcat_id = $table3.nri_fqsubcat_id AND $table2.nri_fqcat_id = $table.nri_fqcat_id AND $table.nri_fqcat_id ='$parentfaqid' AND $table2.nri_fqsubcat_id = '$subfaqcatsrch' ORDER BY $table3.ques_views DESC LIMIT 20 ";

$sql2 = "SELECT * FROM $table,$table2,$table3 WHERE $table2.nri_fqsubcat_id = $table3.nri_fqsubcat_id AND $table2.nri_fqcat_id = $table.nri_fqcat_id AND $table.nri_fqcat_id ='$parentfaqid' ORDER BY $table3.ques_views DESC LIMIT 20 ";

$rssql=mysql_query($sql2);

$count=mysql_num_rows($rssql);

$results2 = $wpdb->get_results($sql2);
if(!empty($count))

{

?>

  <!-- <h6><a href="<?php echo $pathurlnewrss.$results2->nri_fqsubcat_id.'&parentfaqid=1'; ?>"><?php echo $results2->nri_fqsubcat_name; ?></a></h6>-->

<?php

}

		

foreach($results2 as $result2)

{

?>
 

<h4 id="<?php echo $result2->nri_ques_id; ?>" class="q"><?php echo $result2->ques_name; ?><!--<h8><span><a href="<?php echo $pathurlnewrss.$result2->nri_fqsubcat_id.'&parentfaqid='.$parentfaqid; ?>"><?php echo "&nbsp;&nbsp;----&nbsp;&nbsp;".$result2->nri_fqsubcat_name; ?></a></span> | <span><?php echo $result2->ques_views." Views"; ?></span></h8>--></h4>

<h5><?php echo $result2->ques_ans; ?></h5>
<h8><a href="<?php echo $pathurlnewrss.$result2->nri_fqsubcat_id.'&parentfaqid='.$parentfaqid; ?>"><span><?php echo "----&nbsp;&nbsp;".$result2->nri_fqsubcat_name; ?></span></a> | <span><?php echo $result2->ques_views." Views"; ?></span></h8>
<?php

 } 

/*}*/

?>

</div><!--faq ends-->



<div class="clear"></div>

</div><!--hbc ends--> 

<div class='clear'></div> 

</div><!--home-block-content ends-->   



<div class="clear"></div>

</div><!--content-Area-left ends-->



<div class="content-Area-right">

<?php //include 'sidebar2.php'; ?>



<div class="serachdivpras">

<h2>Search FAQ</h2>

<div class="insrchpras">

<form action="<?php echo site_url().'/search-queries/';?>" method="post" >

<input type="text" name="srchq" placeholder="Type Your Query..."  />

<input type="submit" name="subbtn" value=" " />

</form>

<div class="clear"></div>

</div>

<div class="clear"></div>

</div><!--serachdivpras ends-->



<div class="topqueries">

<?php 

global $wpdb;

$table = NCL_TABLE_PREFIX."nri_fqcat";



$sql5 = "SELECT * FROM $table WHERE $table.nri_fqcat_id='$parentfaqid'";

$results5 = $wpdb->get_results($sql5);

foreach($results5 as $result5)

{

?>

<h2>Top <?php echo $result5->nri_fqcat_name; ?> </h2>

<?php 

}

?>

<div class="topqueries-info" id="rl">

<ul>

<?php

global $wpdb;

$table = NCL_TABLE_PREFIX."nri_fqcat";

$table2 = NCL_TABLE_PREFIX."nri_fqsubcat";

$table3 = NCL_TABLE_PREFIX."nri_ques";



$sql2 = "SELECT * FROM $table,$table2,$table3 WHERE $table2.nri_fqsubcat_id = $table3.nri_fqsubcat_id AND $table2.nri_fqcat_id = $table.nri_fqcat_id AND $table.nri_fqcat_id = '$parentfaqid' ORDER BY $table3.ques_views DESC LIMIT 5 ";



$results2 = $wpdb->get_results($sql2);



foreach($results2 as $result2)

{

$pathurl= site_url().'/faq-on-personal-investment-and-finance?page=&subcatid=';



?>



<li><a href="<?php echo $pathurl.$result2->nri_fqsubcat_id.'&parentfaqid='.$result2->nri_fqcat_id.'&quesid='.$result2->nri_ques_id.'#'.$result2->nri_ques_id; ?>"><?php echo $result2->ques_name; ?>
<?php echo "<span class='vwsfaq'>".$result2->ques_views." Views"."</span>"; ?></a>

</li>

<?php

}

?>

</ul>



<div class="clear"></div>

<a href="<?php echo site_url().'/more-queries/'.'?page=&parentfaqid='.$parentfaqid ;?>" class="mr">View More</a>

</div>



<div class="clear"></div>

</div>









<!--<div class="topqueries">

<h2>Top queries of NRIs</h2>

<div class="topqueries-info">

<ul>

<?php

/*$i=0;

	query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');

	if (have_posts()) : while (have_posts()) : the_post(); if($i<5){ */?>

    

	<li><a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a></li>

<?php

/*}

$i++;

	endwhile; endif;

	wp_reset_query();*/

?>

</ul>



<div class="clear"></div>

<a href="<?php //echo site_url().'/top-queries/'; ?>" class="mr">More Queries</a>

</div>



<div class="clear"></div>

</div>-->





<!--<div class="mfundslide">

<h2><?php echo get_the_category_by_id(22); ?></h2>



<div class="mfundslide-info">



<div class="slidercar">



<?php

	global $post;

	$args = array( 'posts_per_page' => -1, 'category' => 22, 'order' => 'DESC');

	$myposts = get_posts( $args );

	foreach ( $myposts as $post ) : 

  	setup_postdata( $post ); 

?>



<div>

<div class="tfund-cont">

<a href="<?php the_permalink() ?>">

<div class="mpic">

<?php $thumbmfund=wp_get_attachment_image_src( get_post_thumbnail_id(), 'mfundthumb'); ?> 

<img src="<?php echo $thumbmfund[0]; ?>" alt="" />

</div>

</a>

<div class="mfund-des">

<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

<?php

$limitp=150; 

$messagep=get_the_content();

$postp = substr($messagep, 0, $limitp);

echo "<p>".$postp."...</p>";

?>



<a href="<?php the_permalink() ?>" class="mufud-rdmr">Read More</a>

</div>

<div class="clear"></div>

</div>

<div class="clear"></div>

</div>



<?php 

endforeach;

wp_reset_postdata(); 

?> 

            





</div>

<div class="clear"></div>

</div>-->




<br />
<?php 
if($parentfaqid=='1'){
?>
<div class="switchbutton">
<a href="<?php echo site_url().'/more-queries/?page=&parentfaqid=2'; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/btn-2.png" alt="" /></a>
</div><!--switchbutton ends-->
<?php 
}else{
?>
<div class="switchbutton">
<a href="<?php echo site_url().'/more-queries/?page=&parentfaqid=1'; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/btn-1.png" alt="" /></a>
</div><!--switchbutton ends-->
<?php
}
?>
<br />

<div class="hc-3">

    	

        <div class="form-wrapper">

        <div class="formbox">

        <!--<h3>GET IN TOUCH</h3>-->

        <h3>Have a Query</h3>

        

        <!--<form method="post" action="#">

        <div class='f-title'>Name <span class='required'>*</span></div>

        <input type='text' name='name' value='' class='f-control' />

        <div class='f-title'>Email Address <span class='required'>*</span></div>

        <input type='email' name='email' value='' class='f-control' />

        <div class='f-title'>Phone <span class='required'>*</span></div>

        <input type='text' name='phone' value='' class='f-control' />

        <div class='f-title'>Message <span class='required'>*</span></div>

        <textarea name='message' class='f-control'></textarea>

        <input type='submit' value='Send Message' class='transition' />

        </form>-->

        

      <?php echo do_shortcode('[contact-form-7 id="470" title="NRI page contact form"]'); ?>

        </div>

        </div>

        

</div>

    

<div class="clear"></div>

<!--<div class="tabcarrow"></div>-->





<?php

/*$args = array( 'post_type' => 'page', 'meta_key' => 'nrisidepic', 'orderby' => 'meta_value_num', 'order'=>'ASC' );

$loop = new WP_Query( $args );

$count=$loop->post_count;

while ( $loop->have_posts() ) : $loop->the_post(); */

?>

<!--<div class="sidepicnri">

<?php $sidenri=wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>

<a href="<?php the_permalink(); ?>">

<img src="<?php echo $sidenri[0]; ?>" alt="<?php the_title(); ?>" />

</a>

</div>-->

<?php

/*endwhile;

wp_reset_query();*/

?>





<div class="clear"></div>

</div><!--content-Area-right ends-->



<div class="clear"></div>

</div><!--container ends-->

<div class="clear"></div>

</div><!--content ends-->



<?php get_footer(); ?>