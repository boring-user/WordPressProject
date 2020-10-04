<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ).bloginfo('name'); ?></title>
<!--<link rel="icon" type="image/png" sizes="96x96" href="http://dalmiaadvisory.com/wp-content/uploads/2015/10/favicon-96x96.png">-->
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/menumaker.js"></script>
<!-- bxSlider CSS file -->
<link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet" />
<link href="<?php bloginfo('template_directory'); ?>/css/menumaker.css" rel="stylesheet" />

<style>
img._1p6f._1p6g.img { max-height: 300px!important;}
._2l7q img {max-height: 300px!important;overflow: hidden!important;}
._1p6g{max-height: 300px!important;}
</style>

<script type="text/javascript" charset="utf-8">
//SyntaxHighlighter.all();
$(document).ready(function() {  //============
$(function(){
$('.banner #slider').bxSlider({
	mode: 'fade',
	auto: true,
	auto_controls: true,
	pager: false,
	controls: true,
	pause: 5000,
	speed: 1500,
	autoHover: true
});
$('#testimonials').bxSlider({
	mode: 'horizontal',
	auto: true,
	auto_controls: true,
	pager: true,
	controls: false,
	pause: 5000,
	speed: 1500,
	autoHover: true
	});
  });
}); //=========

$(window).load(function(){
$('#blog').bxSlider({
	mode: 'fade',
	auto: true,
	auto_controls: true,
	pager: true,
	controls: false,
	pause: 5000,
	speed: 1500,
	autoHover: true,
	pagerCustom: '#blog-pager'
  });
});
</script>

<script type="text/javascript">
function gal_img(container,element,padding) {
var hh2=0;
$(container+" "+element).removeAttr("style");
$(container).each(function(){
if($(this).find(element).outerHeight()>hh2)
hh2=$(this).find(element).outerHeight();
 });
hh2=hh2-padding;
$(container+" "+element).height(hh2+"px");
 }
$(window).load(function(){
gal_img(".hhblock-wrapper .hh-block","h3",10);
gal_img(".hhblock-wrapper .hh-block","p",0);
if($(document).width()>560) {
//gal_img(".home-highlight .col","p");
 }
$(window).resize(function(){
gal_img(".hhblock-wrapper .hh-block","h3",10);
gal_img(".hhblock-wrapper .hh-block","p",0);
if($(document).width()>560) {
//gal_img(".home-highlight .col","p");
} else {
//$(".home-highlight .col p").removeAttr("style");
  }
 });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
$(".nav ul li a").hover(function(){
$(this).parent().next().addClass("beside");
},function(){
if(!$(this).parent().hasClass("current-menu-item"))
$(this).parent().next().removeClass("beside");
 });
$(".nav ul li.current-menu-item").next().addClass("beside");
 });
</script>

<script type="text/javascript">
function ban_control() {
var b=$(".banner").width();
var c=$(".header .container").width();
var adj=(b-c)/2;
$(".banner .bx-wrapper .bx-prev").css("left",adj+"px");
$(".banner .bx-wrapper .bx-next").css("right",adj+"px");
}

$(window).load(function(){
ban_control();
$(window).resize(function(){
ban_control();
});
});
</script>

<script type="text/javascript">
$(document).ready(function(){
	$("a.gotop").click(function(){
		$('html, body').animate({
			//scrollTop: $(".home-highlight").offset().top
			scrollTop: 0
		}, 600);
		return false;
	});
});
</script>

<script type="text/javascript">
			$(document).ready(function(){ 
			$(".faq h4").click(function(){
				if($(this).hasClass('active')) {
					$(this).removeClass('active');
				} else {
					$(this).addClass('active');
					$(".faq h4").not($(this)).removeClass('active'); 
					}
				$(".faq h5").not($(this).next("h5")).hide(200);
				$(this).next("h5").stop("true","true").slideToggle(200);
			   });			
		    });
		</script>
        
<?php wp_head(); ?>

</head>
<body>
<?php global $themename, $shortname, $options; ?>
<div class="header">
<div class="container">
    <div class="logo"><a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_option($shortname."_logo"); ?>" alt="" /></a></div>
    
<div class="middle-text">
One Stop Website for all your Queries on Investment.
</div>

    <div class="hd-right">
      <div class="ht-lf">
        <?php dynamic_sidebar("top_navigation"); ?> 
    </div><!--ht-lf ends-->
    <div class="ht-rh">
    	<p><!--Call <span>(123) 5050-0070</span>--><?php //echo get_option($shortname."_phone"); ?></p>
        <div class="social">
        <a href="<?php echo get_option($shortname."_facebook"); ?>" class="facebook" target="_blank"></a>
        <a href="<?php echo get_option($shortname."_twitter"); ?>" class="twitter"  target="_blank"></a>
        <a href="<?php echo get_option($shortname."_googleplus"); ?>" class="googleplus"  target="_blank"></a>
        <a href="<?php echo get_option($shortname."_instagram"); ?>" class="instagram"  target="_blank"></a>
        <!--<a href="<?php echo get_option($shortname."_rss"); ?>" class="rss"></a>-->
     </div>
    </div><!--ht-rh ends-->
    <div class="clear"></div>
 </div><!--hd-right ends-->
	<div class="clear"></div>
</div><!--container ends-->
</div><!--header ends-->

<div class="nav">
<div class="container">
    <div id="cssmenu1" class="navwidth">
    <?php dynamic_sidebar("main_navigation"); ?> 
    </div>
    
     <div class="search2">
    	<form method="get" action="<?php echo home_url( '/' ); ?>" autocomplete="off">
        	<input type="text" name="s" value="<?php echo get_search_query() ?>" placeholder="Search Website ..." />
            <input type="submit" value="" />
        </form>
    </div>                                             

	<div class="clear"></div>
</div><!--container ends-->
</div><!--nav ends-->