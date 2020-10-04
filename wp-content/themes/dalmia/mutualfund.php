<?php /*Template Name: Mutual Funds*/ ?>

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
        <h2>MUTUAL FUNDS</h2>
        
        <!--<ul>
        <li><a href="#">About Mutual Fund</a></li>
        <li><a href="#">Scheme Performance</a></li>
        <li><a href="#">Advantages of SIP</a></li>
        <li><a href="#">SIP Performance</a></li>
        <li><a href="#">Tax Implication</a></li>
        <li><a href="#">Mutual Fund FAQ</a></li>
        </ul>-->
        <?php dynamic_sidebar("mtfund_tb"); ?> 
        </div><!--content-right-prasun ends-->
        

        
        <div class="clear"></div>

       <?php endwhile; else: ?>
       <p><?php //_e('Sorry, no posts matched your criteria.'); ?></p>
    	<?php endif; ?>
    
   
        
    </div>    
    </div><!--content ends-->
    
   
   
<script>
$(document).ready(function(){
	$("#typclick").click(function(){
		$(".typfullcon").slideDown('slow');
		$(".typclickcls").hide();
		$(".typclickcls2").show();
	});
	
	$("#typclick2").click(function(){
		$(".typfullcon").slideUp('slow');
		$(".typclickcls2").hide();
		$(".typclickcls").show();
	});
});
</script>


<script>
$(document).ready(function(){
	$("#typclick3").click(function(){
		$(".typfullcon2").slideDown('slow');
		$(".typclickcls3").hide();
		$(".typclickcls4").show();
	});
	
	$("#typclick4").click(function(){
		$(".typfullcon2").slideUp('slow');
		$(".typclickcls4").hide();
		$(".typclickcls3").show();
	});
});
</script>

<script>
$(document).ready(function(){
	$("#typclick5").click(function(){
		$(".typfullcon3").slideDown('slow');
		$(".typclickcls5").hide();
		$(".typclickcls6").show();
	});
	
	$("#typclick6").click(function(){
		$(".typfullcon3").slideUp('slow');
		$(".typclickcls6").hide();
		$(".typclickcls5").show();
	});
});
</script>    

<?php get_footer(); ?>