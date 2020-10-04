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
$category = get_the_category(); 
echo $category[0]->cat_ID;
?>

<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts( 'cat=15&posts_per_page=1&paged=' . $paged); 
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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

<!--<div class="blogshare">
<span class="shr">Share</span>
<span class='st_facebook_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
<span st_via='@ranjanp87602468' st_username='ranjanp87602468' class='st_twitter_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
<span class='st_google_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
<span class='st_google_reader_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
<span class='st_instapaper_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
</div>-->

</div><!--blogdescription ends-->

<div class="clear"></div>
</div><!--blogcontent ends-->


<?php 
endwhile; 
else: ?>



<?php 
endif; 
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