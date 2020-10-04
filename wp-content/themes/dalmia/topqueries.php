<?php /*Template Name: Queries*/ ?>

<?php get_header(); ?>


<link href="<?php bloginfo('template_directory'); ?>/stylenri.css" rel="stylesheet" />
<link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslidernri.css" rel="stylesheet" />

<script type="text/javascript" charset="utf-8">	
$(document).ready(function(){
  $('.slidercar').bxSlider({
	mode: 'vertical',
	pager: false,
	auto: true,
	speed: 2800,
	auto_controls: true,
	controls: true,
	slideWidth: 270,
	minSlides: 3,
	maxSlides:3,
	moveSlides: 3
  });
});
</script>

<style>
.hbc ul{
margin-left: 0px;
}
</style>

<div class="content">
<div class="container">
<div class="content-Area-left">
<div class="home-block-content">
<h4><?php the_title(); ?></h4>

<div class="hbc">
<?php 
if (have_posts()) : while (have_posts()) : the_post();
?>

<?php
$args=array(
  'category__not_in' => array(7,6,22),
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' =>3000,
  'caller_get_posts'=> 1
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>

<div class="bloginfo">
<h6><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h6>
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

<?php the_excerpt(); ?>
                                        
<a href="<?php the_permalink(); ?>" class="continuereading">Continue Reading</a>
</div><!--bloginfo ends-->

<?php
endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>


<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>   

<div class="clear"></div>
</div><!--hbc ends-->



<div class='clear'></div> 
</div><!--home-block-content ends-->
 
<div class='clear'></div>    
</div><!--content-Area-left ends-->

<div class="content-Area-right">
<?php include 'sidebar2.php'; ?>
<div class="clear"></div>
</div><!--content-Area-right ends-->


<div class="clear"></div>
</div><!--content-Area ends-->
</div><!--wrapper ends-->

<?php get_footer(); ?>