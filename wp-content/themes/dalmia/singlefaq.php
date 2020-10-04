<?php /*Template Name: Single FAQ*/ ?>

<?php get_header(); ?>



<link href="<?php bloginfo('template_directory'); ?>/stylenri.css" rel="stylesheet" />

<link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslidernri.css" rel="stylesheet" />

<link href="<?php bloginfo('template_directory'); ?>/styleblog.css" rel="stylesheet" />



<div class="content">
 
<div class="container">


<div class='disnon' style='display:none;'>
<ul>
<?php
$args = array( 'post_type' => 'page', 'meta_key' => 'dspnon', 'orderby' => 'meta_value_num', 'order'=>'ASC' );
$loop = new WP_Query( $args );
$count=$loop->post_count;
while ( $loop->have_posts() ) : $loop->the_post(); 
?>
<?php  
$post_thumbnail_id = get_post_thumbnail_id( $post_id );
$image_arr2 = wp_get_attachment_image_src( $post_thumbnail_id, "full" );
?>
<li><img src="<?php echo $image_arr2[0]; ?>" alt="" /></li>
<?php
endwhile;
wp_reset_query();
?>
</ul>
</div><!--disnon ends-->


<div class="content-Area-left">

<?php

global $wpdb;

$table = NCL_TABLE_PREFIX."nri_fqcat";

$table2 = NCL_TABLE_PREFIX."nri_fqsubcat";

$table3 = NCL_TABLE_PREFIX."nri_ques";



$parentfaqid=$_GET['parentfaqid'];

$subcatid=$_GET['subcatid'];

$quesid=$_GET['quesid'];



$sql2 = "SELECT * FROM $table,$table2 WHERE $table.nri_fqcat_id=$table2.nri_fqcat_id AND nri_fqsubcat_id = '$subcatid'";

$results = $wpdb->get_results($sql2);

foreach($results as $result)

{

$parentcatid = $result->nri_fqcat_id;

$parentcatname = $result->nri_fqcat_name;

$childcatname = $result->nri_fqsubcat_name;

}



$nrihome= site_url();

$tatalpathlink="<a href='".$nrihome."' class='hmln2'>Home&nbsp;&nbsp; > &nbsp;&nbsp;</a>";



$prcathome2= site_url().'/parentfaq/?page=&prntcatid='.$parentcatid;

$tatalprcathomelink="<a href='".$prcathome2."' class='hmln2'>".$parentcatname."&nbsp;&nbsp; > &nbsp;&nbsp;</a>";

?>



<div class="home-block-content">



<h2 style="font-size:16px;"><?php echo $tatalpathlink.$tatalprcathomelink.$childcatname; ?></h2>



<div class="hbc">



<div class="faq">

<?php 

$cls='';

$sql2 = "SELECT * FROM $table3 WHERE nri_fqsubcat_id = '$subcatid' ORDER BY $table3.ques_position ASC";

$results = $wpdb->get_results($sql2);

foreach($results as $result)

{

$question_id= $result->nri_ques_id;

if($question_id == $quesid)

{

$cls='active';

?>

<h4 id="<?php echo $result->nri_ques_id; ?>" class="q <?php echo $cls;?>"><?php echo $result->ques_name; ?></h4>

<h5 style="display:block;"><?php echo $result->ques_ans; ?></h5>

<?php

}

else{

$cls='';

?>

<h4 id="<?php echo $result->nri_ques_id; ?>" class="q"><?php echo $result->ques_name; ?></h4>

<h5><?php echo $result->ques_ans; ?></h5>



<?php

}

?>



<?php 

}

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

<form action="<?php echo site_url().'/search-queries/';?>" method="post"  autocomplete="off">

<input type="text" name="srchq" id="search-box2" placeholder="Type Your Query..."  />

<input type="submit" name="subbtn" value=" " />

<div id="suggesstion-box2"></div>

</form>

<div class="clear"></div>

</div>

<div class="clear"></div>

</div><!--serachdivpras ends-->

<div class="topqueries">

<?php 

global $wpdb;

//$table = NCL_TABLE_PREFIX."nri_fqcat";



$sql5 = "SELECT * FROM $table2 WHERE $table2.nri_fqsubcat_id='$subcatid'";

$results5 = $wpdb->get_results($sql5);

foreach($results5 as $result5)

{

?>

<h2>Top 5 FAQ On <?php echo $result5->nri_fqsubcat_name; ?> </h2>

<?php 

}

?>

<div class="topqueries-info">

<ul>

<?php

global $wpdb;

$table = NCL_TABLE_PREFIX."nri_fqcat";

$table2 = NCL_TABLE_PREFIX."nri_fqsubcat";

$table3 = NCL_TABLE_PREFIX."nri_ques";



$sql2 = "SELECT * FROM $table,$table2,$table3 WHERE $table2.nri_fqsubcat_id = $table3.nri_fqsubcat_id AND $table.nri_fqcat_id = $table2.nri_fqcat_id AND $table2.nri_fqsubcat_id = '$subcatid' ORDER BY $table3.ques_views DESC LIMIT 5 ";



$results2 = $wpdb->get_results($sql2);



foreach($results2 as $result2)

{

$pathurl= site_url().'/faq-on-personal-investment-and-finance?page=&subcatid=';



?>

<li><a href="<?php echo $pathurl.$result2->nri_fqsubcat_id.'&parentfaqid='.$result2->nri_fqcat_id.'&quesid='.$result2->nri_ques_id.'#'.$result2->nri_ques_id; ?>"><?php echo $result2->ques_name; ?>
<?php echo "<span class='vwsfaq'>".$result2->ques_views." Views"."</span>"; ?>
</a></li>

<?php

}

?>

</ul>



<div class="clear"></div>

</div>



<div class="clear"></div>

</div><!--topqueries ends-->

<br/>

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
<?php echo "<span class='vwsfaq'>".$result2->ques_views." Views"."</span>"; ?>
</a></li>

<?php

}

?>

</ul>



<div class="clear"></div>

<a href="<?php echo site_url().'/more-queries/'.'?page=&parentfaqid='.$parentfaqid ;?>" class="mr">View More</a>

</div>



<div class="clear"></div>

</div><!--topqueries ends-->



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