<?php get_header(); ?>

<link href="<?php bloginfo('template_directory'); ?>/styleblog.css" rel="stylesheet" />
<script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>

<?php //if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="content">
    <div class="container">

<div class="blogleft">

<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
//query_posts('posts_per_page=4&paged=' . $paged);
query_posts( 'cat=28&posts_per_page=4&paged=' . $paged); 
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
	/*global $post;
	$args = array( 'posts_per_page' => -1, 'category' => 7, 'order' => 'DESC');
	$myposts = get_posts( $args );
	foreach ( $myposts as $post ) : 
  	setup_postdata( $post ); */
  	?>

<div class="blogcontent">

<div class="picdiv">

<?php $thumbfront=wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumb-front'); ?>

<a href="<?php the_permalink(); ?>">

<?php 

if($thumbfront!='')

{

?>

<img src="<?php echo $thumbfront[0]; ?>" alt="<?php the_title(); ?>" />

<?php

}

else{

?>

<img src="<?php bloginfo('template_directory'); ?>/images/noimageico2.jpg" alt="<?php the_title(); ?>" />

<?php

}

?>

</a>

</div><!--picdiv ends-->



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

$limitp=200; // Define how many character you want to display.

$messagep=get_the_content();

$postp = substr($messagep, 0, $limitp);

echo "<p>".$postp."...</p>";

?>

                                        

<a href="<?php the_permalink(); ?>" class="continuereading">Continue Reading</a>

</div><!--bloginfo ends-->



<div class="blogshare">

<span class="shr">Share</span>

<a href='https://www.facebook.com/dialog/feed?app_id=881949731891747&link=<?php echo urlencode(get_permalink()); ?>&name=<?php echo urlencode(get_the_title()); ?>&description=<?php echo urlencode(get_the_excerpt()); ?>&picture=<?php echo urlencode($thumbfront[0]); ?>&redirect_uri=<?php echo urlencode(get_permalink()); ?>' target='_blank'><img src='<?php bloginfo('template_directory'); ?>/images/fbicon1.png' alt='Facebook' class='fbiconew'/></a>

<span st_via='@ranjanp87602468' st_username='ranjanp87602468' class='st_twitter_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>

<span class='st_google_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>

<!--<span class='st_google_reader_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>-->

<span class='st_instapaper_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>

</div>

</div><!--blogdescription ends-->



<div class="clear"></div>

</div><!--blogcontent ends-->


<?php 
/*endforeach;
wp_reset_postdata(); */
?>


<?php 
endwhile; 
else: ?>

<?php 
endif; 
?>


<div class="pagination">
<?php pagination2(); ?>
</div><!--pagination ends-->

<div class="clear"></div>
</div><!--blogleft ends-->



<div class="blogright">
<?php include 'rightsidebar.php'; ?>
<div class="clear"></div>
</div><!--blogright ends-->
<div class="clear"></div>
</div><!--content-Area ends-->
</div><!--wrapper ends-->

<?php //endwhile; else: ?>
    <p><?php //_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php //endif; ?>


<?php get_footer(); ?>