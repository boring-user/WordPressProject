<?php global $themename, $shortname, $options; ?>



<div class="footer">

<div class="container">

	

    <div class="ft-1">

    	<a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_option($shortname."_footer_logo"); ?>" alt="" /></a>

        <p><!--@ 2015 Dalmia Advisory--><?php echo get_option($shortname."_copyright"); ?> | <a href="<?php echo get_option($shortname."_privacy"); ?>">PRIVACY POLICY</a></p><p>Design and Development By <a href="http://webphics.com/" target="_blank">Webphics.com</a></p>

    </div><!--ft-1 ends-->

    

    <div class="ft-2">

    	<h4>Quick Links</h4>

       <!--<ul>

       <li><a href="#">Home</a></li>

        <li><a href="#">Home</a></li>

         <li><a href="#">Home</a></li>

          <li><a href="#">Home</a></li>

           <li><a href="#">Home</a></li>

       </ul>-->

      <?php dynamic_sidebar("bot_navigation"); ?> 

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



<?php 
$pathcount=site_url().'/countqueries';
$pathsrchcount=site_url().'/ajaxsearchdisplay';
?>

<!-- bxSlider Javascript file -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/dnmJS.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-69198185-1', 'auto');
  ga('send', 'pageview');
</script>

<script type="text/javascript">
	$("#cssmenu1").menumaker({
		title: "Menu",
		format: "multitoggle",
		breakpoint: 960
	});
</script>  

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
	/if txt not send
   error : function(xhr, textStatus, errorThrown){
   }
  });
 });
});
</script>        

<script>
$(document).ready(function(){
		$("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "<?php echo $pathsrchcount; ?>",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
		$("#search-box").css("background","#FFF url(<?php bloginfo('template_directory'); ?>/images/LoaderIcon.gif) no-repeat 165px");
		 },
		success: function(data){
		$("#suggesstion-box").show();
		$("#suggesstion-box").html(data);
		$("#search-box").css("background","#FFF");
		 }
	    });
	});
});

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>

<script>
$(document).ready(function(){
	$("#search-box2").keyup(function(){
		$.ajax({
		type: "POST",
		url: "<?php echo $pathsrchcount; ?>",
		data:'keyword2='+$(this).val(),
		beforeSend: function(){
			$("#search-box2").css("background","#FFF url(<?php bloginfo('template_directory'); ?>/images/LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box2").show();
			$("#suggesstion-box2").html(data);
			$("#search-box2").css("background","#FFF");
		}
		});
	});
});

function selectCountry(val) {
$("#search-box2").val(val);
$("#suggesstion-box2").hide();
}
</script>

<script>
$(document).ready(function() {
  // place this within dom ready function
  function showpanel() {     
   $(".branding-container").hide();
   $(".branding-container .mailmunch-branding").hide();
//alert("test");
 }
 // use setTimeout() to execute
 setTimeout(showpanel, 18000)
});
</script>

<?php wp_footer(); ?>

</body>
</html>