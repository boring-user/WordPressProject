<?php global $themename, $shortname, $options; ?>

<div class="footer">
<div class="container">
	
    <div class="ft-1">
    	<a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_option($shortname."_footer_logo"); ?>" alt="" /></a>
        <p><!--@ 2015 Dalmia Advisory--><?php echo get_option($shortname."_copyright"); ?> | <a href="<?php echo get_option($shortname."_privacy"); ?>">PRIVACY POLICY</a></p><p>Design and Development By Webphics.com  </p>
    </div><!--ft-1 ends-->
    
    <div class="ft-2">
    	
        <div class="external">
        	<h3>From Dalmia Blog</h3>
            
            <!--<div id="blog-pager">
              <a data-slide-index="0" href=""></a>
              <a data-slide-index="1" href=""></a>
              <a data-slide-index="2" href=""></a>
            </div>
            
            <ul id="blog">
            	
                <li>
                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/images/img-4.jpg" alt="" /></div>
                <div class="meta">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco......</p>
                <span class="date">15 days ago</span> | <span class="author">By, Brijesh Dalmia</span>
                </div>
                <div class="clear"></div>
                </li>
                
                <li>
                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/images/img-4.jpg" alt="" /></div>
                <div class="meta">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco......</p>
                <span class="date">15 days ago</span> | <span class="author">By, Brijesh Dalmia</span>
                </div>
                <div class="clear"></div>
                </li>
                
                <li>
                <div class="thumb"><img src="<?php bloginfo('template_directory'); ?>/images/img-4.jpg" alt="" /></div>
                <div class="meta">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco......</p>
                <span class="date">15 days ago</span> | <span class="author">By, Brijesh Dalmia</span>
                </div>
                <div class="clear"></div>
                </li>
                
            </ul>-->
            
            <?php $external_blog_image= get_option($shortname."_footer_blog_image"); ?>
            
            <?php 
//$rss = fetch_feed('http://www.worldoweb.co.uk/feed');
//$rss = fetch_feed('https://brijeshdalmia.wordpress.com/feed/');
$rss = fetch_feed('http://brijeshdalmia.com/feed/');
 
 
if (!is_wp_error( $rss ) ) : 
 
    $maxitems = $rss->get_item_quantity(3); 
    $rss_items = $rss->get_items(0, $maxitems); 
endif;
?>
<?php function get_first_image_url($html)
 {
 if (preg_match('/<img.+?src="(.+?)"/', $html, $matches)) {
 return $matches[1];
 }
 }
?> 
 <?php
function shorten($string, $length)
{
    $suffix = '&hellip;';
 
$short_desc = trim(str_replace(array("/r", "/n", "/t"), ' ', strip_tags($string)));
    $desc = trim(substr($short_desc, 0, $length));
    $lastchar = substr($desc, -1, 1);
     if ($lastchar == '.' || $lastchar == '!' || $lastchar == '?') $suffix='';
 $desc .= $suffix;
 return $desc;
}
?>

<div id="blog-pager">
  <a data-slide-index="0" href=""></a>
  <a data-slide-index="1" href=""></a>
  <a data-slide-index="2" href=""></a>
</div>

<ul id="blog">
    <?php 
     if ($maxitems == 0) echo '<li>No items.</li>';
     else 
     foreach ( $rss_items as $item ) : ?>
    
    <li>
    <div class="thumb"><img src="<?php echo $external_blog_image; ?>" alt="" /></div>
    <div class="meta">
    <p><?php echo shorten($item-> get_description(),'150');?></p>
    <span class="date"><?php echo human_time_diff( $item->get_date('U'), current_time('timestamp') ) . ' ago'; ?></span> | <span class="author">By, <?php $authors= $item->get_authors(); echo $authors[0]->name; ?></span>
    </div>
    <div class="clear"></div>
    </li>
    
    <?php //print_r($item); ?>
    
    
    <?php endforeach; ?>
</ul>
            
            
        </div><!--external ends-->
        
    </div><!--ft-2 ends-->
    
    <div class="ft-3">
    	<h4>Contact Us</h4>
        <!--<p>4578 MARMORA ROAD, GLASGOW D04 89GR<br />
        Phone :	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;800-2345-6788<br />
        Fax : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;800-2345-6789<br />
        EMAIL: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INFO@DEMOLINK.ORG
        <?php //echo get_option($shortname."_footer_contact"); ?></p>-->
        <?php dynamic_sidebar("footer_contact"); ?>
        
        <div class="social">
        <h4>Follow Us</h4>
        <!--<a href="#" class="instagram"></a>-->
        <a href="<?php echo get_option($shortname."_rss"); ?>" class="rss"></a>
        <a href="<?php echo get_option($shortname."_googleplus"); ?>" class="googleplus"></a>
        <a href="<?php echo get_option($shortname."_twitter"); ?>" class="twitter"></a>
        <a href="<?php echo get_option($shortname."_facebook"); ?>" class="facebook"></a>
        <div class="clear"></div>
        </div>
        
    </div><!--ft-3 ends-->
    
    <a href="#" class="gotop">TOP</a>
    
	<div class="clear"></div>
</div><!--container ends-->
</div><!--footer ends-->
 

<script type="text/javascript">
	$("#cssmenu1").menumaker({
		title: "Menu",
		format: "multitoggle",
		breakpoint: 960
	});
</script>  

<?php 
$pathcount=site_url().'/countqueries';
?> 

 <script type="text/javascript">
        	$(document).ready(function(){
        		$('body').on('click','.q',function(e) {

        			var id = $(this).attr('id');

        			$.ajax({
						url:  '<?php echo $pathcount; ?>',
						type: 'POST',
						data: ({id : id}),
						//return the time
						success : function(data){
							//alert(data);
						},
						//if txt not send
						error : function(xhr, textStatus, errorThrown){
						}
		            });
        		});
        	});
        </script>
        


<?php wp_footer(); ?>

</body>
</html>