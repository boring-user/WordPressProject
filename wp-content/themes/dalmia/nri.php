<?php /*Template Name: NRI*/ ?>
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

<div class="content">
<div class="container">

<div class="content-Area-left">

<h2 style="margin-bottom:10px;"> NRI FAQ's</h2>

<?php
global $wpdb;
$table = NCL_TABLE_PREFIX."nri_fqcat";
$table2 = NCL_TABLE_PREFIX."nri_fqsubcat";
$table3 = NCL_TABLE_PREFIX."nri_ques";
?>

<div class="content-box-info2p">
<ul>
<?php 
$sql = "SELECT * FROM $table2 WHERE nri_fqcat_id = 1 ORDER BY sub_position ASC";
$results = $wpdb->get_results($sql);
$pathurl= site_url().'/faq-on-personal-investment-and-finance?page=&subcatid=';
foreach($results as $result)
{
$subcatid=$result->nri_fqsubcat_id;
?>
<li><a href="<?php echo $pathurl.$result->nri_fqsubcat_id; ?>"><?php echo $result->nri_fqsubcat_name; ?></a></li>
<?php
}
?>
</ul>

<ul>
<?php 
$sql = "SELECT * FROM $table2 WHERE nri_fqcat_id = 2 ORDER BY sub_position ASC";
$results = $wpdb->get_results($sql);
$pathurl= site_url().'/faq-on-personal-investment-and-finance?page=&subcatid=';
foreach($results as $result)
{
$subcatid=$result->nri_fqsubcat_id;
?>
<li><a href="<?php echo $pathurl.$result->nri_fqsubcat_id; ?>"><?php echo $result->nri_fqsubcat_name; ?></a></li>
<?php
}
?>
</ul>
<div class="clear"></div>
</div><!--content-box-info2p ends-->







<div class="clear"></div>

<div class="mfund-past">
<h2>Past Performance of Mutual Fund</h2>

<div class="mfund-past-cont">

<?php
$i=1;
global $post;
$args = array( 'posts_per_page' => 6, 'category' => 22, 'order' => 'DESC');
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : 
setup_postdata( $post ); 
$cls ='';
if($i%3==0){
$cls ='mfpnobrder';
}
?>

<div class="mfp-left <?php echo $cls; ?>">
<h6 ><a href="<?php the_permalink() ?>" style="display: block;font-family: 'Abel-Regular';font-size: 17px;padding: 0px;margin: 0px;border: none;color: #7f1312;font-weight: normal;margin-bottom:8px;"><?php the_title(); ?></a></h6>
<div class="tfund-cont">
<a href="<?php the_permalink() ?>">
<div class="mpic">
<?php $thumbmfund=wp_get_attachment_image_src( get_post_thumbnail_id(), 'mfundthumb'); ?> 
<img src="<?php echo $thumbmfund[0]; ?>" alt="" />
</div><!--mpic ends-->
</a>
<div class="mfund-des">
<!--<h6><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h6>-->
<?php
$limitp=150; // Define how many character you want to display.
$messagep=get_the_content();
$postp = substr($messagep, 0, $limitp);
echo "<p>".$postp."...</p>";
?>

<a href="<?php the_permalink(); ?>" class="mufud-rdmr" style="text-align:right;display:block;padding-right:10px;">Read More</a>
</div><!--mfund-des ends-->
<div class="clear"></div>
</div><!--tfund-cont ends-->

<div class="clear"></div>
</div><!--mfp-left ends-->

<?php
$i++; 
endforeach;
wp_reset_postdata(); 
?> 
     
<div class="clear"></div>
</div><!--mfund-past-cont ends-->

</div><!--mund-past ends-->


<?php
$pastlink=site_url().'/nri-below-post/';

?>
<a href="<?php echo $pastlink; ?>" class="vmcat">View More</a>


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