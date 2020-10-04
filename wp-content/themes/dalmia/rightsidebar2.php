<style>
.topqueries{
background: #f7f7f7;
border: 1px solid #dadada;
border-top: none;
}

.topqueries h2{
font-family: "myriad Pro";
font-weight:normal;
display:block;
background:url(<?php bloginfo('template_directory'); ?>/images/rightheadbg.png) repeat-x;
padding-top:8px;
padding-bottom:8px;
padding-left:6px;
color:#FFF;
/*font-size:20px;*/
font-size:18px;
border-radius:5px 5px 0 0;
background-color: #8F0909;
margin-bottom:0px;
}

.topqueries-info{
background:#f7f7f7;
/*border:1px solid #dadada;
border-top:none;*/
}

.topqueries-info ul{
list-style:none;
padding-bottom: 0px;

}

.topqueries-info ul li{
padding:0;
margin:0;
padding-left:6px;
padding-right:5px;
transition:500ms all ease;
line-height:125%;
}

.topqueries-info ul li a{
display:block;
font-family: "Lato-Reg";
font-size:15px;
font-size:14px;
color:#343434;
/*padding-top:12px;
padding-bottom:12px;*/
padding-top: 2px;
padding-bottom: 2px;
text-decoration:none;
border-bottom:1px dashed #d1d1d1;
transition:500ms all ease;
text-transform: capitalize;
}

.topqueries-info ul li:hover{
background:#dedddd;
background:#8B0909;
background:#630707;
}

.topqueries-info ul li a:hover{
color: #FFFFFF;
}

.topqueries-info ul li:hover span.vwsfaq{
color: #FFFFFF;
}

.mr{
font-family: "Lato-Reg";
font-size:15px;
color:#FFF!important;
background:#9a0808;
width:130px;
padding-top:12px;
padding-bottom:12px;
text-align:center;
text-decoration:none;
display:block;
position:relative;
float:left;
margin-left:5px;
margin-top:20px;
margin-top:10px;
margin-bottom:10px;
transition:500ms all ease;
}

.mr:hover{
background:#620d0d;
}
</style>



<div class="recentpost">

<h2>Most Viewed Blogs</h2>



<div class="postlist">



<?php if ( is_active_sidebar('popular_post') ) : dynamic_sidebar('popular_post'); ?>

<?php endif; ?>



<div class="clear"></div>

</div><!--postlist ends-->

<div class="clear"></div>

</div><!--recentpost ends-->



<div class="topqueries">
<?php 
$prntcatid='1';
global $wpdb;
$table = NCL_TABLE_PREFIX."nri_fqcat";
$table2 = NCL_TABLE_PREFIX."nri_fqsubcat";
$table3 = NCL_TABLE_PREFIX."nri_ques";

$sql5 = "SELECT * FROM $table WHERE $table.nri_fqcat_id='$prntcatid'";
$results5 = $wpdb->get_results($sql5);
foreach($results5 as $result5)
{
?>
<h2>Top <?php echo $result5->nri_fqcat_name; ?></h2>
<?php 
}
?>

<div class="topqueries-info" id="rl">
<ul>
<?php
global $wpdb;
$table = NCL_TABLE_PREFIX."nri_fqcat";
$table2 = NCL_TABLE_PREFIX."nri_fqsubcat";
$table3 = NCL_TABLE_PREFIX."nri_ques";

$sql2 = "SELECT * FROM $table,$table2,$table3 WHERE $table2.nri_fqsubcat_id = $table3.nri_fqsubcat_id AND $table2.nri_fqcat_id = $table.nri_fqcat_id AND $table.nri_fqcat_id = '$prntcatid' ORDER BY $table3.ques_views DESC LIMIT 5 ";

$results2 = $wpdb->get_results($sql2);

foreach($results2 as $result2)
{
$pathurl= site_url().'/faq-on-personal-investment-and-finance?page=&subcatid=';
?>

<li><a href="<?php echo $pathurl.$result2->nri_fqsubcat_id.'&parentfaqid='.$result2->nri_fqcat_id.'&quesid='.$result2->nri_ques_id.'#'.$result2->nri_ques_id; ?>"><?php echo $result2->ques_name; ?>
<?php echo "<span class='vwsfaq'>".$result2->ques_views." Views"."</span>"; ?></a>
</li>

<?php
}
?>
</ul>

<div class="clear"></div>
<a href="<?php echo site_url().'/more-queries/'.'?page=&parentfaqid='.$prntcatid ;?>" class="mr">View More</a>
</div>

<div class="clear"></div>
</div>
<br /><br />
<div class="stayconnectdiv">

<h2>Stay Connected</h2>

<div class="s-social">

<span><a href="https://www.facebook.com/dalmiaadvisoryservices" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/sfbico.png" alt="" /></a></span>

<span><a href="http://www.twitter.com/dalmiaadvisory" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/stwtico.png" alt="" /></a></span>

<span><a href="https://plus.google.com/u/0/b/116902029643420814662/116902029643420814662/about/p/pub" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/sglpusico.png" alt="" /></a></span>

<span><a href="http://www.linkedin.com/company/dalmia-advisory-services-pvt-ltd" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="" /></a></span>

</div><!--s-social ends-->

</div><!--stayconnectdiv ends-->