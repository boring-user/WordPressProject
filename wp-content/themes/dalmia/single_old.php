<?php get_header(); ?>
       
    <div class="content">
    <div class="container">
    	
        <div class="content-left">
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php
		$title=get_post_meta(get_the_ID(), 'alternate_title', true);
		if($title=="")
			$title=get_the_title();
		?>
        
        <div class="post-block">
        
        <h2><?php echo $title; ?></h2>
        
        <div class="meta">
        	
            <span class="date"><?php echo get_the_time( "j M, Y - g:ia" ); ?></span> | <span class="author">By <?php echo get_the_author_meta( 'display_name'); ?></span> | 
            
            <div class="comment-count">
            <?php
			$num_comments = get_comments_number(); // get_comments_number returns only a numeric value

			if ( comments_open() ) {
				if ( $num_comments == 0 ) {
					$comments = __('No Comments');
				} elseif ( $num_comments > 1 ) {
					$comments = $num_comments . __(' Comments');
				} else {
					$comments = __('1 Comment');
				}
				$write_comments = '<a href="' . get_comments_link() .'">'. $comments.'</a>';
			} else {
				$write_comments =  __('Comments off.');
			}
			echo $write_comments;
			?>
            </div>
            
        </div><!--meta ends-->
        
        
        
        <?php 
		if ( has_post_thumbnail() ) {
			$thumb=wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
			echo "<div class='post-thumb'><img src='".$thumb[0]."' /></div>";
		}	
		 ?>
      
                    <?php //echo esc_attr( get_the_time() )." ".get_the_date()." author: ".get_the_author(); ?>
                    
                    <?php //echo esc_attr( get_the_time() )." ".get_the_date(); ?>

            		<?php the_content(); ?>
                    
                    <?php //echo get_post_type_archive_link( 'event' ); ?>
                    
         </div>
         
         
         <?php comments_template( '', true ); ?>
                    
        
    <?php endwhile; else: ?>
    <p><?php //_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
        
        <div class="clear"></div>
        
        
        </div><!--content-left ends-->
        
        <div class="content-right">
        	
            <?php get_sidebar(); ?>
            
            
        </div><!--content-right ends-->
        
        <div class="clear"></div>
    
    </div>    
    </div><!--content ends-->
    

<?php get_footer(); ?>