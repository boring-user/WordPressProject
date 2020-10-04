<?php /*Template Name: NRI Below Post*/ ?>
<?php get_header(); ?>
<link href="<?php bloginfo('template_directory'); ?>/stylenri.css" rel="stylesheet" />
<link href="<?php bloginfo('template_directory'); ?>/styleblog.css" rel="stylesheet" />
<?php
$cat = get_the_category($post->ID);
$cat_parent = $cat[0]->category_parent;
$cat = get_category($cat_parent);
$cat = $cat->slug;
if($cat=='nri'){
?>

<link href="<?php bloginfo('template_directory'); ?>/stylenri.css" rel="stylesheet" />
<link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslidernri.css" rel="stylesheet" />

<style>
.blogleft{
    width: 73.8%!important;
    margin-right: 0px!important;
}


</style>

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

<?php 
}
?>
<div class="content">
<div class="container">

<div class="blogleft">

<?php
$i=1;
global $post;
$args = array( 'posts_per_page' => -1, 'category' => 22, 'order' => 'DESC');
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : 
setup_postdata( $post ); 
?>
<div class="blogcontent" style="padding: 5px 28px;">
<div class="blogdescription" style="width:auto;padding-left:0px;">
<h2><a href="<?php the_permalink(); ?>" style="padding-top:15px;"><?php the_title(); ?></a></h2>
<div class="bloginfo" style="padding-top: 0px; min-height: 20px;">
<?php
$slug= basename(get_permalink());
?>

<?php
$limitp=200; // Define how many character you want to display.
$messagep=get_the_content();
$postp = substr($messagep, 0, $limitp);
echo "<p>".$postp."...</p>";
?>
                                        
<a href="<?php the_permalink(); ?>" class="continuereading">Continue Reading</a>
</div><!--bloginfo ends-->
</div><!--blogdescription ends-->

<div class="clear"></div>
</div><!--blogcontent ends-->


<?php
endforeach;
wp_reset_postdata(); 
?> 

<div class="pagination">
<?php pagination(); ?>
</div><!--pagination ends-->

<div class="clear"></div>
</div><!--blogleft ends-->

<?php 
/*$cat = get_the_category($post->ID);
$cat_parent = $cat[0]->category_parent;
$cat = get_category($cat_parent);
$cat = $cat->slug;
if($cat=='nri'){ */

?>

<?php
$categories = get_the_category();
$category_id = $categories[0]->cat_ID;
if($category_id=='22'){
?>

<style>
.blogleft {
float: left;
min-height: 20px;
width: 73%;
margin-right: 1%;
}
</style>

<div class="content-Area-right">
<?php include 'sidebar2.php'; ?>
<div class="clear"></div>
</div><!--content-Area-right ends-->

<?php 
}
else{
?>
<div class="blogright">
<?php include 'rightsidebar.php'; ?>
<div class="clear"></div>
</div><!--blogright ends-->
<?php
}
?>

<div class="clear"></div>
</div><!--content-Area ends-->
</div><!--wrapper ends-->
<?php get_footer(); ?>