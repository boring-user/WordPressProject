<?php get_header(); ?>



<?php

global $wpdb;

$table = NCL_TABLE_PREFIX."nri_fqcat";

$table2 = NCL_TABLE_PREFIX."nri_fqsubcat";

$table3 = NCL_TABLE_PREFIX."nri_ques";

$s=strtolower($s);

if($s=='mf'){
$srchq=str_replace("mf","mutual fund",$s);
}
elseif($s=='public provident fund'){
$srchq=str_replace("public provident fund","ppf",$s);
}
elseif($s=='provident fund'){
$srchq=str_replace("provident fund","ppf",$s);
}
elseif($s=='provident funds'){
$srchq=str_replace("provident funds","ppf",$s);
}
elseif($s=='public provident funds'){
$srchq=str_replace("public provident funds","ppf",$s);
}
elseif($s=='national pension scheme'){
$srchq=str_replace("national pension scheme","nps",$s);
}
elseif($s=='national pension system'){
$srchq=str_replace("national pension system","nps",$s);
}
elseif($s=='new pension system'){
$srchq=str_replace("new pension system","nps",$s);
}
elseif($s=='new pension scheme'){
$srchq=str_replace("new pension scheme","nps",$s);
}
elseif($s=='systematic investment'){
$srchq=str_replace("systematic investment","sip",$s);
}
elseif($s=='systemeatic investment plan'){
$srchq=str_replace("systemeatic investment plan","sip",$s);
}
elseif($s=='systemeatic investment scheme'){
$srchq=str_replace("systemeatic investment scheme","sip",$s);
}
elseif($s=='nomination'){
$srchq=str_replace("nomination","nominee",$s);
}

else{
$srchq=$s;
}
$pathurl= site_url().'/faq-on-personal-investment-and-finance?page=&subcatid=';

?>

       

    <div class="content">

    <div class="container">

    	

        <div class="content-left" style="width:100%;">

        

        <h2>Search result: <?php echo get_search_query() ?></h2>

        

              <div class="faq">

		<?php

        //$sql = "SELECT * FROM $table2,$table3 WHERE $table2.nri_fqsubcat_id=$table3.nri_fqsubcat_id AND `ques_name` LIKE '%$srchq%' OR `ques_ans` LIKE '%$srchq%'";

        //$sql = "SELECT * FROM $table3 WHERE `ques_name` LIKE '%$srchq%' OR `ques_ans` LIKE '%$srchq%' ";

		//$sql="SELECT *  FROM $table3 WHERE `ques_name` LIKE '%$srchq%' OR `ques_ans` LIKE '%$srchq%'";

		

		$sql="SELECT * FROM $table,$table2 WHERE $table.nri_fqcat_id = $table2.nri_fqcat_id ";

		$results = $wpdb->get_results($sql);

		foreach($results as $result)

        {

		$subfaqcatsrch='';

		$subfaqcatsrch=$result->nri_fqsubcat_id;

		?>

     

        <?php 

		$sql5="SELECT * FROM $table3 WHERE nri_fqsubcat_id = '$subfaqcatsrch' AND (`ques_name` LIKE '%$srchq%' OR `ques_ans` LIKE '%$srchq%')";

		$result2=mysql_query($sql5);

		$count=mysql_num_rows($result2);

		$results5 = $wpdb->get_results($sql5);

		if(!empty($count))

		{?>

           <h6><a href="<?php echo $pathurl.$result->nri_fqsubcat_id.'&parentfaqid='.$result->nri_fqcat_id; ?>"><?php echo $result->nri_fqsubcat_name; ?></a></h6>

        <?php

		}

		

		foreach($results5 as $result5)

        {

		 //echo $subfaqcatsrch=$result->nri_fqsubcat_id;

        ?>

        

        <h4 id="<?php echo $result5->nri_ques_id; ?>" class="q"><?php echo $result5->ques_name; ?></h4>

        <h5><?php echo $result5->ques_ans; ?></h5>

        <?php

		 }

		}

        ?>

<br />

		</div><!--faq ends-->

       

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php

		$title=get_post_meta(get_the_ID(), 'alternate_title', true);

		if($title=="")

			$title=get_the_title();

			

			if($title!='More Queries' && $title!='Search Queries' && $title!='ParentFaq' &&  $title!='Countqueries' &&  $title!='faq on mutual fund sip'  &&  $title!='Top Queries'  &&  $title!='NRI' &&  $title!='Banner Image 3' &&  $title!='Banner Image 2' &&  $title!='Banner Image 1' &&  $title!='Banner Image 4' &&  $title!='Scheme Performance' &&  $title!='ajaxsearchdisplay' &&  $title!='SIP Performance' &&  $title!='Home' &&  $title!='Blog' &&  $title!='Testimonial 1' &&  $title!='Testimonial 2' &&  $title!='Testimonial 3' &&  $title!='SIP Performance Search Result' &&  $title!='Scheme Performance Search Result'){

		?>

        

        <div class="post-block">

        

        <h3><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h3>


        <?php if(get_post_type()=="post") { ?>

        

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

        

        <?php } ?>

        

        

        <?php 

		if ( has_post_thumbnail() ) {

			$thumb=wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');

			echo "<div class='post-thumb' style='display:none;'><img src='".$thumb[0]."' /></div>";

		}	

		 ?>

      

                    <?php //echo esc_attr( get_the_time() )." ".get_the_date()." author: ".get_the_author(); ?>

                    

                    <?php //echo esc_attr( get_the_time() )." ".get_the_date(); ?>



            		<?php //the_content(); ?>

                    

                    <?php the_excerpt(); ?>

                    <div style="text-align: right;"><a href="<?php the_permalink(); ?>" class="button">Read more</a></div>

                    

                    <?php //echo get_post_type_archive_link( 'event' ); ?>

                    

         </div>

              <?php 

			  }

			  ?>      

        

    <?php endwhile; else: ?>

    <p><?php //_e('Sorry, no posts matched your criteria.'); ?></p>

    <?php endif; ?>

        

        <div class="clear"></div>

        

        <?php pagination(); ?>

    

    	<div class="clear"></div>

        

        </div><!--content-left ends-->

        

        <!--<div class="content-right">

        	

            <?php //get_sidebar(); ?>

            

            

        </div>--><!--content-right ends-->

        

        <div class="clear"></div>

    

    </div>    

    </div><!--content ends-->

    



<?php get_footer(); ?>