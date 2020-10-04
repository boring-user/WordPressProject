<?php /*Template Name: NRI Corner*/ ?>
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
        <h2>NRI CORNER</h2>
        
        <!--<ul>
        <li><a href="#">Who is an NRI</a></li>
        <li><a href="#">NRI Services</a></li>
        <li><a href="#">Investment Options</a></li>
        <li><a href="#">NRI FAQ</a></li>
        <li><a href="#">Online Investment</a></li>
        <li><a href="#">Post a Query</a></li>
        </ul>-->
        
         <?php dynamic_sidebar("nri_tb"); ?> 
        </div><!--content-right-prasun ends-->
        
        <div class="clear"></div>

       <?php endwhile; else: ?>
       <p><?php //_e('Sorry, no posts matched your criteria.'); ?></p>
    	<?php endif; ?>
    
   
        
    </div>    
    </div><!--content ends-->
    

<?php get_footer(); ?>