<?php get_header(); ?>
<link href="<?php bloginfo('template_directory'); ?>/stylenri.css" rel="stylesheet" />
<link href="<?php bloginfo('template_directory'); ?>/styleblog.css" rel="stylesheet" />
<script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
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
<?php 
if (have_posts()) : while (have_posts()) : the_post(); 
?>

<?php 
$cat = get_the_category($post->ID);
$cat_parent = $cat[0]->category_parent;
$cat = get_category($cat_parent);
$cat = $cat->slug;
if($cat=='nri'){
setPostViews(get_the_ID());
}
?>
<div class="container">
<div class="blogleft">
<div class="home-block-content">

<h2 style="font-size:16px;"><a href="<?php echo site_url().'/blog';?>" class='hmln2'>Blog &nbsp;&nbsp; > &nbsp;&nbsp;</a><?php the_title(); ?></h2>

<div class="hbc">
<?php $thumbsingle=wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
<?php 
if($thumbsingle!=''){ 
?>
<div class="singlepicdiv">
<img src="<?php echo $thumbsingle[0]; ?>" />
</div><!--singlepicdiv ends-->
<?php 
}
?>
<?php the_content(); ?>
<div class="clear"></div>
<?php
$categories = get_the_category();
$category_id = $categories[0]->cat_ID;
if($category_id!='22'){
?>

<div class="blogshare">
<span class="shr">Share</span>
<a href='https://www.facebook.com/dialog/feed?app_id=1693253324241969&link=<?php echo urlencode(get_permalink()); ?>&name=<?php echo urlencode(get_the_title()); ?>&description=<?php echo urlencode(get_the_excerpt()); ?>&picture=<?php echo urlencode($thumbfront[0]); ?>&redirect_uri=<?php echo urlencode(get_permalink()); ?>' target='_blank'><img src='<?php bloginfo('template_directory'); ?>/images/fbicon1.png' alt='Facebook' class='fbiconew'/></a>
<span st_via='@ranjanp87602468' st_username='ranjanp87602468' class='st_twitter_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'><img src="<?php bloginfo('template_directory'); ?>/images/twticon.png" alt="" class="twtimg"/></span>
<!--<span class='st_google_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'><img src="<?php bloginfo('template_directory'); ?>/images/gplusicon.png" alt="" class="gplusimg"/></span>-->
<a id="ref_gp" href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink());?>"
onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');return false" style='display: inline-block;position: absolute;vertical-align: middle;margin-top: 7px;margin-left: 12px;'><img src='<?php bloginfo('template_directory'); ?>/images/gplusicon.png' alt='googleplus'/></a>
</div>

<br />
<div class="comnt-section">
<?php comments_template( '', true ); ?>
<div class="clear"></div>
</div><!--comnt-section ends-->
<?php
}
?> 
<div class="clear"></div>
</div><!--hbc ends--> 
<div class='clear'></div> 
</div><!--home-block-content ends-->   
<div class='clear'></div> 
</div><!--blogleft ends-->

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
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div><!--wrapper ends-->

<?php get_footer(); ?>