<div class="recentpost">

<h2>Most Viewed Blogs</h2>



<div class="postlist">



<?php if ( is_active_sidebar('popular_post') ) : dynamic_sidebar('popular_post'); ?>

<?php endif; ?>



<div class="clear"></div>

</div><!--postlist ends-->

<div class="clear"></div>

</div><!--recentpost ends-->



<!--<div class="archivesdiv">

<h2>Archives</h2>

<ul>

 <?php //wp_get_archives('exclude=6'); ?>



</ul>



</div>--><!--archivesdiv ends-->





<div class="categorydiv">

<h2>Categories</h2>

<ul>

<?php

$args = array(

  'orderby' => 'name',

  'order' => 'ASC'

  );

$subcategories = get_categories('&child_of=28&hide_empty'); 

foreach ($subcategories as $subcategory) {

$catIdNew= $subcategory->term_id;

    echo '<li><a href="' . get_category_link( $subcategory->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $subcategory->name ) . '" ' . '>' . $subcategory->name.'('.$subcategory->count.')'.'</a> </li> ';	

	}

?>

</ul>

</div><!--categorydiv ends-->



<div class="stayconnectdiv">

<h2>Stay Connected</h2>

<div class="s-social">

<span><a href="https://www.facebook.com/dalmiaadvisoryservices" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/sfbico.png" alt="" /></a></span>

<span><a href="http://www.twitter.com/dalmiaadvisory" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/stwtico.png" alt="" /></a></span>

<span><a href="https://plus.google.com/u/0/b/116902029643420814662/116902029643420814662/about/p/pub" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/sglpusico.png" alt="" /></a></span>

<span><a href="http://www.linkedin.com/company/dalmia-advisory-services-pvt-ltd" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="" /></a></span>

</div><!--s-social ends-->

</div><!--stayconnectdiv ends-->