<?php /*Template Name: Financial Planning*/ ?>

<?php get_header(); ?>
       
    <div class="content">
    <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   
    <?php
		$title=get_post_meta(get_the_ID(), 'alternate_title', true);
		if($title=="")
		$title=get_the_title();
	?>
    
    <h2><?php echo $title; ?></h2>
           
        <div class="content-left-prasun">
        <?php the_content(); ?>
        </div><!--content-left-prasun ends-->
        
        <div class="content-right-prasun">
        <h2>Financial Planing</h2>
        
        <!--<ul>
        <li><a href="#">About Mutual Fund</a></li>
        <li><a href="#">Scheme Performance</a></li>
        <li><a href="#">Advantages of SIP</a></li>
        <li><a href="#">SIP Performance</a></li>
        <li><a href="#">Tax Implication</a></li>
        <li><a href="#">Mutual Fund FAQ</a></li>
        </ul>-->
        <?php dynamic_sidebar("fpaln_tb"); ?> 
        </div><!--content-right-prasun ends-->
        
        <div class="clear"></div>

       <?php endwhile; else: ?>
       <p><?php //_e('Sorry, no posts matched your criteria.'); ?></p>
    	<?php endif; ?>
    
   
        
    </div>    
    </div><!--content ends-->
    

<?php get_footer(); ?>