<?php /*Template Name: SIP Performance Search Result*/ ?>

<?php 
global $wpdb;
$table = NCL_TABLE_PREFIX."sip_performance"; 
?>



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
        
        <div class="srchcat">
        <?php
		$path= site_url()."/sip-performance-search-result";
		echo "<form name='' action='$path' method='post'>";
		$sqlmain = "SELECT DISTINCT sip_cat FROM $table WHERE sip_performance_id >1";
		$resultmain = $wpdb->get_results($sqlmain); 
		
		echo "<select name='srchcat' onchange='this.form.submit()'>"; 
		echo "<option value='0'>"."Search Category Wise</option>";
		foreach($resultmain as $resultmains)
		{
		echo '<option value="'. $resultmains->sip_cat.'">'. $resultmains->sip_cat.'</option>';
		}
		echo '</select>';
		echo '</form>';
		?>
        <?php 
		$srch=$_POST['srchcat'];
		?>
       
       
       </div>
       		<div style="clear:both"></div>
            
            <div class="headingrecord">
            <?php
			$sql = "SELECT sip_title,as_on_date FROM $table WHERE sip_performance_id=2";
			$results = $wpdb->get_results($sql);
			foreach($results as $result)
			{
            echo "<h1>".$result->sip_title."</h1>";
			echo "<h2>As on ".$result->as_on_date."</h2>";
			}
			?>
        </div><!--headingrecord ends-->
            
        <div style="clear:both"></div>
        
         	<div class='performanceTotal' style="margin-top:0px;">
            <!--<div class='per-smdiv'>
            <div class='onediv slno'>Sl. No.</div>
            <?php
			$sql = "SELECT *FROM $table WHERE sip_performance_id>1 AND sip_cat='$srch'";
			$results = $wpdb->get_results($sql);
            $i=1;
            foreach($results as $result)
			{
			echo "<div class='onediv2 slno2'>".$i."</div>";
			echo "<div style='clear:both'></div>";
			$i++;
			}
			?>
            </div>--><!--per-smdiv ends-->
            
            <!--<div class='per-bigdiv'>
            <div class='snddiv'>Scheme Category</div>
            <?php
			$sql = "SELECT *FROM $table WHERE sip_performance_id>1 AND sip_cat='$srch'";
			$results = $wpdb->get_results($sql);
            $i=1;
            foreach($results as $result)
			{
			echo "<div class='onediv2'>".$result->sip_cat."</div>";
			echo "<div style='clear:both'></div>";
			$i++;
			}
			?>
            
            </div>--><!--per-bigdiv ends-->
            
            <div class='per-bigdiv'>
            <div class='snddiv'>Scheme Name</div>
            <?php
			$sql = "SELECT *FROM $table WHERE sip_performance_id>1 AND sip_cat='$srch'";
			$results = $wpdb->get_results($sql);
            $i=1;
            foreach($results as $result)
			{
			echo "<div class='onediv2'>".$result->sip_name."</div>";
			echo "<div style='clear:both'></div>";
			$i++;
			}
			?>
            </div><!--per-bigdiv ends-->
            
            <div class='per-smdiv'>
            <div class='onediv'>1st Year</div>
            <?php
			$sql = "SELECT *FROM $table WHERE sip_performance_id>1  AND sip_cat='$srch'";
			$results = $wpdb->get_results($sql);
            $i=1;
            foreach($results as $result)
			{
			echo "<div class='onediv2'>".$result->one_yr."</div>";
			echo "<div style='clear:both'></div>";
			$i++;
			}
			?>
            </div><!--per-smdiv ends-->
            
            <div class='per-smdiv'>
            <div class='onediv'>3rd Year</div>
            <?php
			$sql = "SELECT *FROM $table WHERE sip_performance_id>1 AND sip_cat='$srch'";
			$results = $wpdb->get_results($sql);
            $i=1;
            foreach($results as $result)
			{
			echo "<div class='onediv2'>".$result->three_yr."</div>";
			echo "<div style='clear:both'></div>";
			$i++;
			}
			?>
            </div><!--per-smdiv ends-->
            
            
            <div class='per-smdiv'>
            <div class='onediv'>5th Year</div>
            <?php
			$sql = "SELECT *FROM $table WHERE sip_performance_id>1 AND sip_cat='$srch'";
			$results = $wpdb->get_results($sql);
            $i=1;
            foreach($results as $result)
			{
			echo "<div class='onediv2'>".$result->five_yr."</div>";
			echo "<div style='clear:both'></div>";
			$i++;
			}
			?>
            </div><!--per-smdiv ends-->
            
            <div class='per-smdiv'>
            <div class='onediv'>10th Year</div>
            <?php
			$sql = "SELECT *FROM $table WHERE sip_performance_id>1 AND sip_cat='$srch'";
			$results = $wpdb->get_results($sql);
            $i=1;
            foreach($results as $result)
			{
			echo "<div class='onediv2'>".$result->ten_yr."</div>";
			echo "<div style='clear:both'></div>";
			$i++;
			}
			?>
            </div><!--per-smdiv ends-->
            
            <div class='per-smdiv'>
            <div class='onediv last'>15th Year</div>
            <?php
			$sql = "SELECT *FROM $table WHERE sip_performance_id>1 AND sip_cat='$srch'";
			$results = $wpdb->get_results($sql);
            $i=1;
            foreach($results as $result)
			{
			echo "<div class='onediv2'>".$result->fifteen_yr."</div>";
			echo "<div style='clear:both'></div>";
			$i++;
			}
			?>
            </div><!--per-smdiv ends-->
            	
            </div><!--performanceTotal ends-->
            
        </div><!--content-left-prasun ends-->
        
        <div class="content-right-prasun">
        <h2>MUTUAL FUNDS</h2>
        <?php dynamic_sidebar("mtfund_tb"); ?> 
        </div><!--content-right-prasun ends-->
        
        <div class="clear"></div>

       <?php endwhile; else: ?>
       <p><?php //_e('Sorry, no posts matched your criteria.'); ?></p>
    	<?php endif; ?>
    
   
        
    </div>    
    </div><!--content ends-->
    

<?php get_footer(); ?>