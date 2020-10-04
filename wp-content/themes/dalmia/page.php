<?php get_header(); ?>
       
    <div class="content">
    <div class="container">
    	
        <div class="content-left">
        </div><!--content-left ends-->
        
        <div class="content-right">
        </div><!--content-right ends-->
        
        <div class="clear"></div>
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php
		$title=get_post_meta(get_the_ID(), 'alternate_title', true);
		if($title=="")
			$title=get_the_title();
		
		/*$post_thumbnail_id = get_post_thumbnail_id( $post_id );
		$image_arr = wp_get_attachment_image_src( $post_thumbnail_id, "full" );*/
		 ?>
         
         <h2><?php echo $title; ?></h2>
         
         <?php the_content(); ?>
         
         <?php endwhile; else: ?>
    <p><?php //_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    
    <div class="clear"></div>
    
    
    <?php /*$rss = fetch_feed('http://brijeshdalmia.com/feed/');
	print_r($rss);*/ ?>
    
    
    <?php
/*function download_page($path){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$path);
	curl_setopt($ch, CURLOPT_FAILONERROR,1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	$retValue = curl_exec($ch);			 
	curl_close($ch);
	return $retValue;
}

$sXML = download_page('http://localhost/sudipta/projects/dalmia_wp/feed/');
$oXML = new SimpleXMLElement($sXML);

foreach($oXML->channel->item as $it) {
echo $it->description."<br><br>";
echo $it->children('content', true)->encoded."<br><br>";
}*/
?>
    
    
    
    </div>    
    </div><!--content ends-->
    

<?php get_footer(); ?>