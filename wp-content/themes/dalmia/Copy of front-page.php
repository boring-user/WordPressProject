<?php get_header(); ?>
    
<div class="banner">

	<div class="ban-shadow"><img src="<?php bloginfo('template_directory'); ?>/images/shadow-1.png" alt="" /></div>
	
    <ul id="slider">
    
    	<!--<li><img src="<?php bloginfo('template_directory'); ?>/images/ban-1.jpg" alt="" />
        	<div class="ban-inner">
            <div class="container">
            <div class="ban-inner-inner">
            	<h2>Professional Financial <span>Skill</span></h2>
                <p>lorem ipsum sit dolor lorem ipsum sit dolor amet lorem ipsum sit dolor amet lorem ipsum sit dolor amet lorem ipsum sit dolor amet </p>
                <a href="#" class="button">Read More</a>
            </div>
            </div>
            </div>
        </li>-->
        
        <?php
		$args = array( 'post_type' => 'page', 'meta_key' => 'slider', 'orderby' => 'meta_value_num', 'order'=>'ASC' );
		$loop = new WP_Query( $args );
		$count=$loop->post_count;
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
                <?php  $post_thumbnail_id = get_post_thumbnail_id( $post_id );
					$image_arr = wp_get_attachment_image_src( $post_thumbnail_id, "full" );
				 ?>
                 
                 <?php
				/*$title=get_post_meta(get_the_ID(), 'alternate_title', true);
				if($title=="")
					$title=get_the_title();*/
				?>
            
            <?php /*$title=explode(" ",$title);
					$temp_t="<span>".$title[count($title)-1]."</span>";
					$title[count($title)-1]=$temp_t;
					$title=implode(" ",$title);*/
			 ?>
            
            <li><img src="<?php echo $image_arr[0]; ?>" alt="" />
        	<div class="ban-inner">
            <div class="container">
            <div class="ban-inner-inner">
            	<!--Professional Financial <span>Skill</span>--><?php //the_content(); ?>
                <?php //the_excerpt(); ?>
                <!--<a href="<?php //the_permalink(); ?>" class="button">Read More</a>-->
            </div>
            </div>
            </div>
        </li>
                      
		   <?php
		endwhile;
		
		wp_reset_query();
			?>
        
    </ul>
    
</div><!--banner ends-->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php
		$title=get_post_meta(get_the_ID(), 'alternate_title', true);
		if($title=="")
			$title=get_the_title();
		
		/*$post_thumbnail_id = get_post_thumbnail_id( $post_id );
		$image_arr = wp_get_attachment_image_src( $post_thumbnail_id, "full" );*/
		 ?>
         
         <?php the_content(); ?>
         
         <?php endwhile; else: ?>
    <p><?php //_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>




<div class="home-content">
<div class="container">

<div class="homecontainer-top">
    <div class="hc-2">
    	<h4><span>OUR</span> BLOG</h4>
        <!--<p>Sed utper spicquia voluptas sit aspernatur autodit aut fugit, sed quia consequuntur magni dolores eosqui ratione voluptatem sequi nesciunt.</p>-->
<?php
	global $post;
	$args = array( 'posts_per_page' => 2, 'category' => 7, 'order' => 'DESC');
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
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div class="bloginfo">
<?php
$slug= basename(get_permalink());
?>

<?php 
$postcomment=site_url().'/'.$slug.'/#respond';
?>

<ul>
<li><a href="<?php the_permalink(); ?>" class="author"><?php the_author(); ?></a></li>
<li><a href="<?php the_permalink(); ?>" class="dt"><?php the_time('F j, Y'); ?></a></li>
<li><a href="<?php echo $postcomment; ?>" class="lcmnt">Leave a comment</a></li>
</ul>

<?php
$limitp=150; // Define how many character you want to display.
$messagep=get_the_content();
$postp = substr($messagep, 0, $limitp);
echo "<p>".$postp."...</p>";
?>
                                        
<a href="<?php the_permalink(); ?>" class="continuereading">Continue Reading</a>
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
        $sql2 = "SELECT * FROM $table2 WHERE nri_fqcat_id = '$catfaqid' ORDER BY sub_position ASC LIMIT 2";
        $results2 = $wpdb->get_results($sql2);
		$pathurl= site_url().'/all-faq?page=&subcatid=';
        foreach($results2 as $result2)
        {
		$subcatid=$result2->nri_fqsubcat_id;
        ?>
      	<li><a href="<?php echo $pathurl.$result2->nri_fqsubcat_id; ?>"><?php echo $result2->nri_fqsubcat_name; ?></a>
        <ul>
		<?php 
        $sql3 = "SELECT * FROM $table3 WHERE nri_fqsubcat_id = '$subcatid' ORDER BY $table3.ques_position ASC LIMIT 3";
        $results3 = $wpdb->get_results($sql3);
        foreach($results3 as $result3)
        {
        ?>
        <li><a href="<?php echo $pathurl.$result3->nri_fqsubcat_id.'&quesid='.$result3->nri_ques_id; ?>">
		 <?php
		$limitp=21; // Define how many character you want to display.
		$messagep=$result3->ques_name;
		$postp = substr($messagep, 0, $limitp);
		?>
		<?php echo $postp." ... ?";?></a></li>
        <?php 
		}
		?>
        </ul>
        <a href="<?php echo $pathurl.$result2->nri_fqsubcat_id; ?>" class="vwmore">View More</a>
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
        $sql2 = "SELECT * FROM $table2 WHERE nri_fqcat_id = '$catfaqid' ORDER BY sub_position ASC LIMIT 2";
        $results2 = $wpdb->get_results($sql2);
		$pathurl= site_url().'/all-faq?page=&subcatid=';
        foreach($results2 as $result2)
        {
		$subcatid=$result2->nri_fqsubcat_id;
        ?>
      	<li><a href="<?php echo $pathurl.$result2->nri_fqsubcat_id; ?>"><?php echo $result2->nri_fqsubcat_name; ?></a>
        <ul>
		<?php 
        $sql3 = "SELECT * FROM $table3 WHERE nri_fqsubcat_id = '$subcatid' ORDER BY $table3.ques_position ASC LIMIT 3";
        $results3 = $wpdb->get_results($sql3);
        foreach($results3 as $result3)
        {
        ?>
        <li><a href="<?php echo $pathurl.$result3->nri_fqsubcat_id.'&quesid='.$result3->nri_ques_id; ?>">
		 <?php
		$limitp=21; // Define how many character you want to display.
		$messagep=$result3->ques_name;
		$postp = substr($messagep, 0, $limitp);
		?>
		<?php echo $postp." ... ?";?></a></li>
        <?php 
		}
		?>
        </ul>
        <a href="<?php echo $pathurl.$result2->nri_fqsubcat_id; ?>" class="vwmore">View More</a>
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
    
    <div class="hc-2" style="max-width:100%; overflow:hidden;">
          <!--<div id="fb-root"></div><script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><div class="fb-post" data-href="https://www.facebook.com/dalmiaadvisoryservices/posts/1698518173717331:0" data-width="400"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/dalmiaadvisoryservices/posts/1698518173717331:0">Posted by <a href="https://www.facebook.com/dalmiaadvisoryservices">Dalmia Advisory Services Pvt Ltd</a> on&nbsp;<a href="https://www.facebook.com/dalmiaadvisoryservices/posts/1698518173717331:0">Thursday, September 17, 2015</a></blockquote></div></div>-->
          
          <?php dynamic_sidebar("fb_code"); ?> 
    
    </div>

    <div class="hc-1">
    	<?php
		$args = array( 'post_type' => 'page', 'meta_key' => 'abt', 'orderby' => 'meta_value_num', 'order'=>'ASC' );
		$loop = new WP_Query( $args );
		$count=$loop->post_count;
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
        <h4><span>About</span> Dalmia Advisory</h4>
        <?php the_excerpt(); ?>
        <div class="prbtndiv mrbtn"><a class="prasunbutton" href="<?php the_permalink(); ?>">Read More</a></div>
        
        <?php
		endwhile;
		wp_reset_query();
	    ?>
        
        <?php
		$args = array( 'post_type' => 'page', 'meta_key' => 'whychoose', 'orderby' => 'meta_value_num', 'order'=>'ASC' );
		$loop = new WP_Query( $args );
		$count=$loop->post_count;
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
        <h4><span>Why</span> Choose Us</h4>
        <?php the_excerpt(); ?>
        <div class="prbtndiv"><a class="prasunbutton" href="<?php the_permalink(); ?>">Read More</a></div>
		
		<?php
        endwhile;
        wp_reset_query();
        ?>
        
    </div>
    
    
    
    <div class="hc-3">
    	
       <div class="form-wrapper">
        <div class="formbox">
        <h3>GET IN TOUCH</h3>
        
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



<div class="clear"></div>




<div class="home-testimonial">
<div class="container">&nbsp;

	<div class="testi-cont">
    <ul id="testimonials">
    
<?php
$args = array( 'post_type' => 'page', 'meta_key' => 'testimonial', 'orderby' => 'meta_value_num', 'order'=>'ASC' );
$loop = new WP_Query( $args );
$count=$loop->post_count;
while ( $loop->have_posts() ) : $loop->the_post(); 
?>
<li>
    <div class="testi-inner">
    <?php  
    $post_thumbnail_id = get_post_thumbnail_id( $post_id );
    $image_arr = wp_get_attachment_image_src( $post_thumbnail_id, "full" );
    ?>
    <img src="<?php echo $image_arr[0]; ?>" alt="" />
    <?php the_content(); ?>
    </div>
</li>        
<?php
endwhile;
wp_reset_query();
?>
    </ul>
    </div>
	
	<div class="clear"></div>
</div>
</div><!--home-testimonial ends-->  <?php get_footer(); ?>