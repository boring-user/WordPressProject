

<div class="recentpost">
<h2>Most Viewed Posts</h2>

<div class="postlist">

<?php
	/*$i=1;
	query_posts('cat=#&posts_per_page=3');
	while (have_posts()) : the_post();
	if($i=='3'){
	$cls='nborder';
	}
	else{
	$cls='';
	}*/
?>

<!--<div class="r-content <?php //echo $cls; ?>">
<div class="r-postpic">
<a href="<?php //echo get_permalink(); ?>">
<?php //the_post_thumbnail('thumbsmall-front'); ?>
</a>
</div>

<div class="r-postinfo">
<h2><a href="<?php //echo get_permalink(); ?>"><?php //the_title(); ?></a></h2>
<div class="r-dtinfo"><?php //the_time('F j, Y'); ?></div>
</div>
<div class="clear"></div>
</div> -->

<?php 
/*$i++; 
endwhile; 
wp_reset_query();*/
?>

<?php if ( is_active_sidebar('popular_post') ) : dynamic_sidebar('popular_post'); ?>
<?php endif; ?>

<div class="clear"></div>
</div><!--postlist ends-->
<div class="clear"></div>
</div><!--recentpost ends-->

<div class="stayconnectdiv">
<h2>Stay Connected</h2>
<div class="s-social">
<span><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sfbico.png" alt="" /></a></span>
<span><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/stwtico.png" alt="" /></a></span>
<span><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sglpusico.png" alt="" /></a></span>
<span><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="" /></a></span>
</div><!--s-social ends-->
</div><!--stayconnectdiv ends-->