<?php

/*add_action( 'admin_enqueue_scripts', 'wptuts_add_color_picker' );
function wptuts_add_color_picker( $hook ) {
 
    if( is_admin() ) { 
     
        //wp_enqueue_script('jQuery');
		wp_enqueue_script('wp-color-picker');
    	wp_enqueue_style( 'wp-color-picker' );
          
    }
}

function pw_loading_scripts_wrong() {
	echo '<script type="text/javascript">
    jQuery(document).ready(function($) {   
        $(".color-field").wpColorPicker();
    });             
    </script>';
}
add_action('admin_head', 'pw_loading_scripts_wrong');*/


add_action('admin_enqueue_scripts', 'my_admin_scripts');

function my_admin_scripts() {
	if (isset($_GET['page']) && $_GET['page'] == 'dalmia_theme_option') {
		wp_enqueue_media();
		wp_register_script('my-admin-js', '/wp-content/themes/dalmia/include/my-admin.js', array('jquery'));
		wp_enqueue_script('my-admin-js');
	}
}




$themename = "Dalmia Theme";
$shortname = "dalmia";
/*$options = array (
    array( "name" => $themename." Options",
           "type" => "title"),
    array( "type" => "open"),
    array( "name" => "Color Scheme",
           "desc" => "Select the color scheme for the theme",
           "id" => $shortname."_color_scheme",
           "type" => "select",
           "options" => array("blue", "red", "green"),
           "std" => "blue"),
    array( "name" => "Logo URL",
           "desc" => "Enter the link to your logo image",
           "id" => $shortname."_logo",
           "type" => "text",
           "std" => ""),
    array( "name" => "Homepage header image",
           "desc" => "Enter the link to an image used for the homepage header.",
           "id" => $shortname."_header_img",
           "type" => "text",
           "std" => ""),
    array( "name" => "Footer copyright text",
           "desc" => "Enter text used in the right side of the footer. It can be HTML",
           "id" => $shortname."_footer_text",
           "type" => "text",
           "std" => ""),
    array( "name" => "Google Analytics Code",
           "desc" => "Paste your Google Analytics or other tracking code in this box.",
           "id" => $shortname."_ga_code",
           "type" => "textarea",
           "std" => ""),
    array( "name" => "Feedburner URL",
           "desc" => "Paste your Feedburner URL here to let readers see it in your website",
           "id" => $shortname."_feedburner",
           "type" => "text",
           "std" => get_blognesto('rss2_url')),
    array( "type" => "close"));*/
	
	/*$select=array();
   $prefix = $wpdb->prefix;
	$r=mysql_query("select * from `".$prefix."posts` where `post_type`='post' or `post_type`='page'");

	while($rs=mysql_fetch_array($r))
	{

	
		<option value="<?php echo get_permalink($rs['ID']); ?>"> echo $rs['post_title'];</option>

	}*/


	
$options = array (
    array( "name" => $themename." Options",
           "type" => "title"),
		   
    array( "type" => "open"),
	
	array( "name" => "Phone no.",
           "desc" => "",
           "id" => $shortname."_phone",
           "type" => "text",
           "std" => ""),
	
	array( "name" => "Logo url",
           "desc" => "",
           "id" => $shortname."_logo",
           "type" => "upload_image",
           "std" => ""),
	
	array( "name" => "Facebook url",
           "desc" => "",
           "id" => $shortname."_facebook",
           "type" => "text",
           "std" => ""),
		   
	array( "name" => "Twitter url",
           "desc" => "",
           "id" => $shortname."_twitter",
           "type" => "text",
           "std" => ""),
	
	array( "name" => "Google plus url",
           "desc" => "",
           "id" => $shortname."_googleplus",
           "type" => "text",
           "std" => ""),
	
	array( "name" => "Instagram url",
           "desc" => "",
           "id" => $shortname."_instagram",
           "type" => "text",
           "std" => ""),	   
		   
	array( "name" => "RSS url",
           "desc" => "",
           "id" => $shortname."_rss",
           "type" => "text",
           "std" => ""),	   
	
	array( "name" => "Footer logo url",
           "desc" => "",
           "id" => $shortname."_footer_logo",
           "type" => "upload_image",
           "std" => ""),   	   
	
	/*array( "name" => "Footer contact us",
           "desc" => "",
           "id" => $shortname."_footer_contact",
           "type" => "textarea",
           "std" => ""),*/
	
	array( "name" => "Dalmia image url",
           "desc" => "for footer external blog",
           "id" => $shortname."_footer_blog_image",
           "type" => "upload_image",
           "std" => ""), 
	
	/*array( "name" => "Video files",
           "desc" => "put details in following way. mp4:mp4 file url,webm:webm url,ogg:ogg url|poster image|overlay text",
           "id" => $shortname."_videos",
           "type" => "textarea",
           "std" => ""),*/
		   
	/*array( "name" => "Footer top image url",
           "desc" => "",
           "id" => $shortname."_footer_top_image",
           "type" => "upload_image",
           "std" => ""),*/	   	        
	
	array( "name" => "Privacy policy page",
           "desc" => "",
           "id" => $shortname."_privacy",
           "type" => "select_page"),
	
	array( "name" => "Copyright",
           "desc" => "",
           "id" => $shortname."_copyright",
           "type" => "text",
           "std" => ""),
		   
	/*array( "name" => "Terms of use page",
           "desc" => "",
           "id" => $shortname."_terms",
           "type" => "select_page"),*/
	
	/*array( "name" => "Upload image 1",
           "desc" => "",
           "id" => $shortname."_img1",
           "type" => "upload_image"),
	array( "name" => "Upload image 2",
           "desc" => "",
           "id" => $shortname."_img2",
           "type" => "upload_image"),*/
    
	array( "type" => "close"));	
	
function dalmia_add_admin() {
 
global $themename, $shortname, $options;

//update_option( $shortname."_twitter_username", "nflinlondon|5"  );
//update_option( $shortname."_copyright", "NFL in London © 2014"  );
 
//if ( $_GET['page'] == basename(__FILE__) ) {
if ( $_GET['page'] == "dalmia_theme_option" ) {
 
if ( 'save' == $_REQUEST['action'] ) {
 
foreach ($options as $value) {
update_option( $value['id'], stripslashes($_REQUEST[ $value['id'] ] )); }
 
/*foreach ($options as $value) {
if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }*/
 
//header("Location: admin.php?page=functions.php&saved=true");
header("Location: admin.php?page=dalmia_theme_option&saved=true");
die;
 
} else if( 'reset' == $_REQUEST['action'] ) {
 
foreach ($options as $value) {
delete_option( $value['id'] ); }
 
//header("Location: admin.php?page=functions.php&reset=true");
header("Location: admin.php?page=dalmia_theme_option&reset=true");
die;
 
}
}
 
//add_menu_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');
add_menu_page($themename." Options", "".$themename." Options", 'edit_themes', 'dalmia_theme_option', 'dalmia_admin');
 
}
function dalmia_add_init() {  
$file_dir=get_bloginfo('template_directory');  
//wp_enqueue_style("functions", $file_dir."/functions/functions.css", false, "1.0", "all");  
} 

function dalmia_admin() {
 
global $themename, $shortname, $options;
 
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
 
?>
<div class="wrap">
<h2><?php echo $themename; ?> Settings</h2>
 
<form method="post">
 
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
 
case "open":
?>
<table width="100%" border="0" style="background-color:#cdcdcd; padding:10px;">
 
<?php break;
 
case "close":
?>
 
</table><br />
 
<?php break;
 
case "title":
?>
<table width="100%" border="0" style="background-color:#868686; padding:5px 10px;"><tr>
<td colspan="2"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
</tr>
 
<?php break;
 
case 'text':
?>
 
<tr>
<td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
<td width="80%"><input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo htmlspecialchars(get_settings( $value['id'] )); } else { echo $value['std']; } ?>" class="color-field" /></td>
</tr>
 
<tr>
<td><small><?php echo $value['desc']; ?></small></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
 
<?php
break;
 
case 'textarea':
?>
 
<tr>
<td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
<td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:400px; height:200px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?></textarea></td>
 
</tr>
 
<tr>
<td><small><?php echo $value['desc']; ?></small></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
 
<?php
break;
 
case 'select':
?>
<tr>
<td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
<td width="80%"><select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?><option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?></select></td>
</tr>
 
<tr>
<td><small><?php echo $value['desc']; ?></small></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
 
<?php
break;


case 'select_post':
?>
<tr>
<td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
<td width="80%"><select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><option value="">---  select ---</option>
<?php 
global $wpdb;
$prefix = $wpdb->prefix;
$r=mysql_query("select * from `".$prefix."posts` where `post_type`='post' or `post_type`='page' order by `post_title`");
while($rs=mysql_fetch_array($r))
{ ?>
    
	<option <?php if ( get_settings( $value['id'] ) == get_permalink($rs['ID'])) { echo ' selected="selected"'; } ?> value="<?php echo get_permalink($rs['ID']); ?>"><?php echo $rs['post_title']; ?></option>

<?php } ?>
</select></td>
</tr>
 
<tr>
<td><small><?php echo $value['desc']; ?></small></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
 
<?php
break;


case 'select_page':
?>
<tr>
<td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
<td width="80%"><select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><option value="">---  select ---</option>
<?php 
global $wpdb;
$prefix = $wpdb->prefix;
$r=mysql_query("select * from `".$prefix."posts` where `post_type`='page' order by `post_title`");
while($rs=mysql_fetch_array($r))
{ ?>
    
	<option <?php if ( get_settings( $value['id'] ) == get_permalink($rs['ID'])) { echo ' selected="selected"'; } ?> value="<?php echo get_permalink($rs['ID']); ?>"><?php echo $rs['post_title']; ?></option>

<?php } ?>
</select></td>
</tr>
 
<tr>
<td><small><?php echo $value['desc']; ?></small></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
 
<?php
break;



case 'upload_image':
?>
<tr>
<td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
<td width="80%">
<input id="<?php echo $value['id']; ?>" type="text" size="36" name="<?php echo $value['id']; ?>" value="<?php echo get_settings( $value['id'] ); ?>" /> 
	<input input_id="<?php echo $value['id']; ?>" class="button upload_image_button" type="button" value="Upload Image" />
    <br /><?php if(get_settings( $value['id'] )!="") { echo "<img src='".get_settings( $value['id'] )."' alt='' style='max-width:500px; max-height:100px;' class='img_".$value['id']."' />"; } ?>
</td>
</tr>
 
<tr>
<td><small><?php echo $value['desc']; ?></small></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
 
<?php
break;


 
case "checkbox":
?>
<tr>
<td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
<td width="80%"><?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
</td>
</tr>
 
<tr>
<td><small><?php echo $value['desc']; ?></small></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
 
<?php break;
 
}
}
?>
 
<p class="submit">
<input name="save" type="submit" value="Save changes" />
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
</div>
<?php
}add_action('admin_menu', 'dalmia_add_admin');
add_action('admin_init', 'dalmia_add_init');
?>