<?php get_header(); ?>


<div class="banner">
<div class="ban-shadow"><img src="<?php //bloginfo('template_directory'); ?>/images/shadow-1.png" alt="" /></div>
<ul id="slider">
<?php
/*$args = array( 'post_type' => 'page', 'meta_key' => 'slider', 'orderby' => 'meta_value_num', 'order'=>'ASC' );
$loop = new WP_Query( $args );
$count=$loop->post_count;
while ( $loop->have_posts() ) : $loop->the_post(); */
?>
<?php  
/*$post_thumbnail_id = get_post_thumbnail_id( $post_id );
$image_arr = wp_get_attachment_image_src( $post_thumbnail_id, "full" );*/
?>
<li><img src="<?php //echo $image_arr[0]; ?>" alt="" />
<div class="ban-inner">
<div class="container">
<div class="ban-inner-inner">
</div>
</div>
</div>
</li>
<?php
/*endwhile;
wp_reset_query();*/
?>
</ul>
</div><!--banner ends-->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
$title=get_post_meta(get_the_ID(), 'alternate_title', true);
if($title=="")
$title=get_the_title();
?>
<?php the_content(); ?>
<?php endwhile; else: ?>
<p><?php //_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<div class="home-content" style="padding: 40px 0 20px 0;">
<div class="container">
<div class="homecontainer-top">
    <div class="hc-2">
    	<h4><a href="<?php echo site_url().'/blog/';?>">BLOG</a></h4>
<?php
global $post;
$args = array( 'posts_per_page' => 2, 'category' => 28, 'order' => 'DESC');
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : 
setup_postdata( $post ); 
?>
<div class="post">
<div class="thumb">
<?php $thumbfront=wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumb-front'); ?>
<img src="<?php echo $thumbfront[0]; ?>" alt="<?php the_title(); ?>" />
</div>    
<div class="meta">
<div class="blogdescription">
<h2><a href="<?php the_permalink(); ?>">
<?php
$limitpbl=40; // Define how many character you want to display.
$messagepbl=get_the_title();
$msglnthbl=strlen($messagepbl);
if($msglnthbl>40){
$postpbl = substr($messagepbl, 0, $limitpbl);
echo $postpbl."...";
}
else{
echo $messagepbl;
}
?>
</a></h2>
<div class="bloginfo">
<?php
$slug= basename(get_permalink());
?>
<?php 
$postcomment=site_url().'/'.$slug.'/#respond';
?>
<ul>
<!--<li><a href="<?php //the_permalink(); ?>" class="author"><?php //the_author(); ?></a></li>-->
<li><a href="<?php the_permalink(); ?>" class="dt"><?php the_time('F j, Y'); ?></a></li>
<!--<li><a href="<?php //echo $postcomment; ?>" class="lcmnt">Leave a comment</a></li>-->
</ul>
<?php
$limitp=250; // Define how many character you want to display.
$messagep=get_the_content();
$postp = substr($messagep, 0, $limitp);
echo "<p>".$postp."...</p>";
?>
<a href="<?php the_permalink(); ?>" class="vwmore" style="padding-top: 8px;">View More</a>
</div><!--bloginfo ends-->
</div>
</div><!--meta ends-->
<div class="clear"></div>
</div>	
<?php 
endforeach;
wp_reset_postdata(); 
?>
<div style="text-align: right;"><a href="<?php echo site_url().'/blog/'; ?>" class="button">View More Blog</a></div>
<div class="clear"></div>		       
    </div>
    <div class="hc-1">
    	<div class="fronthomediv" >
        <?php
        global $wpdb;
        $table = NCL_TABLE_PREFIX."nri_fqcat";
        $table2 = NCL_TABLE_PREFIX."nri_fqsubcat";
        $table3 = NCL_TABLE_PREFIX."nri_ques";
        ?>
        <?php
        //$upload_dir = wp_upload_dir();
        //$file_path=$upload_dir['baseurl']."/faq/";
        //$sql = "SELECT * FROM $table, $table2 WHERE $table.nri_fqcat_id = $table2.nri_fqcat_id ORDER BY $table.nri_fqcat_position ASC";
        $sql = "SELECT * FROM $table WHERE nri_fqcat_id=1";
        $results = $wpdb->get_results($sql);
        $pathurl2= site_url().'/parentfaq?page=&prntcatid=';
        foreach($results as $result)
        {
        $catfaqid = $result->nri_fqcat_id;
        ?>
        <h2><a href="<?php echo $pathurl2.$catfaqid; ?>"><?php echo $result->nri_fqcat_name; ?></a></h2>
		<ul>
		<?php
        $sql2 = "SELECT * FROM $table2 WHERE nri_fqcat_id = '$catfaqid' AND home_subcat_position > 0 ORDER BY home_subcat_position ASC LIMIT 2";
        $results2 = $wpdb->get_results($sql2);
		$pathurl= site_url().'/faq-on-personal-investment-and-finance?page=&subcatid=';
        foreach($results2 as $result2)
        {
		$subcatid=$result2->nri_fqsubcat_id;
        ?>
      	<li><a href="<?php echo $pathurl.$result2->nri_fqsubcat_id.'&parentfaqid=1'; ?>"><?php echo $result2->nri_fqsubcat_name; ?></a>
       <ul>
		<?php 
  $sql3 = "SELECT * FROM $table3 WHERE nri_fqsubcat_id = '$subcatid' AND home_ques_position > 0 ORDER BY $table3.home_ques_position ASC LIMIT 3";
        $results3 = $wpdb->get_results($sql3);
       foreach($results3 as $result3)
        {
        ?>
 <li><a href="<?php echo $pathurl.$result3->nri_fqsubcat_id.'&quesid='.$result3->nri_ques_id.'&parentfaqid=1'.'#'.$result3->nri_ques_id; ?>">
		 <?php
	$messagep=$result3->ques_name;
		$msglnth=strlen($messagep);
	if($msglnth > 62){
		$limitp=62; // Define how many character you want to display.
		$postp = substr($messagep, 0, $limitp)." ... ?";
		}
	else{
		$postp=$messagep;
		}
		?>
		<?php echo $postp;?></a></li>
        <?php 
		}
?>
       </ul>
        <a href="<?php echo $pathurl.$result2->nri_fqsubcat_id.'&parentfaqid=1'; ?>" class="vwmore ddtop">View More</a>
        </li>
        <?php 
		}
		?>
        </ul>
        <?php 
		}
		?>
        </div>
        <div style="text-align: right;"><a href="<?php echo site_url().'/parentfaq?page=&prntcatid=1'; ?>" class="button">Read More FAQ</a></div>
        <div class="clear"></div>
    </div>
    <div class="hc-3">
        <div class="fronthomediv" >
        <?php
        global $wpdb;
        $table = NCL_TABLE_PREFIX."nri_fqcat";
        $table2 = NCL_TABLE_PREFIX."nri_fqsubcat";
        $table3 = NCL_TABLE_PREFIX."nri_ques";
        ?>
        <?php
        //$upload_dir = wp_upload_dir();
        //$file_path=$upload_dir['baseurl']."/faq/";
        //$sql = "SELECT * FROM $table, $table2 WHERE $table.nri_fqcat_id = $table2.nri_fqcat_id ORDER BY $table.nri_fqcat_position ASC";
       $sql = "SELECT * FROM $table WHERE nri_fqcat_id=2";
       $results = $wpdb->get_results($sql);
       $pathurl2= site_url().'/parentfaq?page=&prntcatid=';
        foreach($results as $result)
        {
        $catfaqid = $result->nri_fqcat_id;
        ?>
        <h2><a href="<?php echo $pathurl2.$catfaqid; ?>"><?php echo $result->nri_fqcat_name; ?></a></h2>
		<ul>
		<?php
        //$sql2 = "SELECT * FROM $table2 WHERE nri_fqcat_id = '$catfaqid' ORDER BY sub_position ASC LIMIT 2";
		$sql2 = "SELECT * FROM $table2 WHERE nri_fqcat_id = '$catfaqid' AND home_subcat_position > 0 ORDER BY home_subcat_position ASC LIMIT 2";
        $results2 = $wpdb->get_results($sql2);
		$pathurl= site_url().'/faq-on-personal-investment-and-finance?page=&subcatid=';
        foreach($results2 as $result2)
        {
		$subcatid=$result2->nri_fqsubcat_id;
        ?>
      	<li><a href="<?php echo $pathurl.$result2->nri_fqsubcat_id.'&parentfaqid=2'; ?>"><?php echo $result2->nri_fqsubcat_name; ?></a>
        <ul>
		<?php 
        //$sql3 = "SELECT * FROM $table3 WHERE nri_fqsubcat_id = '$subcatid' ORDER BY $table3.ques_position ASC LIMIT 3";
		$sql3 = "SELECT * FROM $table3 WHERE nri_fqsubcat_id = '$subcatid' AND home_ques_position > 0 ORDER BY $table3.home_ques_position ASC LIMIT 3";
        $results3 = $wpdb->get_results($sql3);
        foreach($results3 as $result3)
        {
        ?>
        <li><a href="<?php echo $pathurl.$result3->nri_fqsubcat_id.'&quesid='.$result3->nri_ques_id.'&parentfaqid=2'.'#'.$result3->nri_ques_id; ?>">
		 <?php
		$messagep=$result3->ques_name;
		$msglnth=strlen($messagep);
		if($msglnth > 62){
		$limitp=62; // Define how many character you want to display.
		$postp = substr($messagep, 0, $limitp)." ... ?";
		}
		else{
		$postp=$messagep;
		}
		?>
		<?php echo $postp;?></a></li>
        <?php 
		}
		?>
    </ul>
        <a href="<?php echo $pathurl.$result2->nri_fqsubcat_id.'&parentfaqid=2'; ?>" class="vwmore ddtop">View More</a>
        </li>
        <?php 
		}
		?>
        </ul>
        <?php 
		}
		?>
     </div>
        <div style="text-align: right;"><a href="<?php echo site_url().'/parentfaq?page=&prntcatid=2'; ?>" class="button">Read More FAQ</a></div>
        <div class="clear"></div>
    </div>
	<div class="clear"></div>
    </div><!--homecontainer-top ends-->
    <img src="<?php bloginfo('template_directory'); ?>/images/bar2.png" alt="" style="display:block;text-align:center;padding-top:50px;padding-bottom:10px;" />

    <div class="homecontainer-bottom">
    <div class="hc-2 fbimg" style="max-width:100%; overflow:hidden;">
<?php
$args = array( 'post_type' => 'page', 'meta_key' => 'fbuppersec', 'orderby' => 'meta_value_num', 'order'=>'ASC' );
$loop = new WP_Query( $args );
$count=$loop->post_count;
while ( $loop->have_posts() ) : $loop->the_post(); 
?>
<div class='fbupper'>
<?php $fbtopsec=wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
<img src="<?php echo $fbtopsec[0]; ?>" alt="img" />
</div>
<?php
endwhile;
wp_reset_query();
?>
<br><br>
<?php dynamic_sidebar("fb_code"); ?> 
</div>
    <div class="hc-1">
    	<?php
		$args = array( 'post_type' => 'page', 'meta_key' => 'calculatortxt', 'orderby' => 'meta_value_num', 'order'=>'ASC' );
		$loop = new WP_Query( $args );
		$count=$loop->post_count;
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <h4>Calculators</h4>
        <?php the_excerpt(); ?>
        <div class="prbtndiv mrbtn"><a class="prasunbutton" href="<?php the_permalink(); ?>">View More</a></div>
        <?php
		endwhile;
		wp_reset_query();
	    ?>
        <?php
		$args = array( 'post_type' => 'page', 'meta_key' => 'newsbrdtxt', 'orderby' => 'meta_value_num', 'order'=>'ASC' );
		$loop = new WP_Query( $args );
		$count=$loop->post_count;
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
         <h4><?php the_title(); ?></h4>
        <?php the_excerpt(); ?>
        <div class="prbtndiv"><a class="prasunbutton" href="<?php the_permalink(); ?>">View More</a></div>
		<?php
        endwhile;
        wp_reset_query();
        ?>
    </div>
    <div class="hc-3">
       <div class="form-wrapper">
        <div class="formbox">
        <h3>Have a Query</h3>
        <!--<h3>GET IN TOUCH</h3>-->
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
        <?php echo do_shortcode('[contact-form-7 id="7" title="Home page contact form"]') ?>
      </div>
        </div>
    </div>
	<div class="clear"></div>
    </div><!--homecontainer-bottom ends-->
</div><!--container ends-->
</div><!--home-content ends-->
<!--<div class="home-testimonial" style="display:none;">
<div class="container">
	<div class="testi-cont">
    <ul id="testimonials">
<?php
/*$args = array( 'post_type' => 'page', 'meta_key' => 'testimonial', 'orderby' => 'meta_value_num', 'order'=>'ASC' );
$loop = new WP_Query( $args );
$count=$loop->post_count;
while ( $loop->have_posts() ) : $loop->the_post(); */
?>
<li>
    <div class="testi-inner">
    <?php  
   /* $post_thumbnail_id = get_post_thumbnail_id( $post_id );
    $image_arr = wp_get_attachment_image_src( $post_thumbnail_id, "full" );*/
    ?>
    <img src="<?php //echo $image_arr[0]; ?>" alt="" />
   <?php //the_content(); ?>
    </div>
</li>        
<?php
/*endwhile;
wp_reset_query();*/
?>
    </ul>
    </div>
	<div class="clear"></div>
</div>
</div>--><!--home-testimonial ends-->
<?php get_footer(); ?>