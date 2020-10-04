<?php /*Template Name: News Board*/ ?>



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
query_posts( 'cat=33&posts_per_page=10&paged=' . $paged); 
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="blogcontent">
<div class="blogdescription" style="width:100%;">
<h2><?php the_title(); ?></h2>

<div class="bloginfo">
<ul>

<li><a href="#" class="dt">Posted On &nbsp;<?php the_time('F j, Y'); ?></a></li>
</ul>

<?php the_content(); ?>
</div><!--bloginfo ends-->


<div class="blogshare">

<span class="shr">Share</span>

<a href='https://www.facebook.com/dialog/feed?app_id=1693253324241969&link=<?php echo urlencode(get_permalink()); ?>&name=<?php echo urlencode(get_the_title()); ?>&description=<?php echo urlencode(get_the_excerpt()); ?>&picture=<?php echo urlencode($thumbfront[0]); ?>&redirect_uri=<?php echo urlencode(get_permalink()); ?>' target='_blank'><img src='<?php bloginfo('template_directory'); ?>/images/fbicon1.png' alt='Facebook' class='fbiconew'/></a>

<span st_via='@ranjanp87602468' st_username='ranjanp87602468' class='st_twitter_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'><img src="<?php bloginfo('template_directory'); ?>/images/twticon.png" alt="" class="twtimg"/></span>

<!--<span class='st_google_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'><img src="<?php bloginfo('template_directory'); ?>/images/gplusicon.png" alt="" class="gplusimg"/></span>-->

<a id="ref_gp" href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink());?>"

onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');return false" style='display: inline-block;position: absolute;vertical-align: middle;margin-top: 7px;margin-left: 12px;'><img src='<?php bloginfo('template_directory'); ?>/images/gplusicon.png' alt='googleplus'/></a>

</div>
</div><!--blogdescription ends-->

<div class="clear"></div>
</div><!--blogcontent ends-->

<?php 
endwhile; 
else: 
?>
<?php 
endif; 
?>

<div class="pagination">
<?php pagination2(); ?>
</div><!--pagination ends-->

<div class="clear"></div>
</div><!--blogleft ends-->

<div class="blogright">
<?php include 'rightsidebar2.php'; ?>
<div class="clear"></div>
</div><!--blogright ends-->

<div class="clear"></div>
</div><!--content-Area ends-->
</div><!--wrapper ends-->



<?php get_footer(); ?>