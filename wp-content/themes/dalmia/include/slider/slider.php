<?php
/**
 * Plugin Name: Slider
 * Description: A widget that takes any url like page url, image url etc with short details.
 * Version: 0.1
 * Author: webphics.com
 * Author URI: http://webphics.com
 */


add_action( 'widgets_init', 'my_widget_slider' );


function my_widget_slider() {
	register_widget( 'MY_Widget_slider' );
}

/*add_action('admin_enqueue_scripts', 'my_admin_scripts2');
 
function my_admin_scripts2() {
    
        wp_enqueue_media();
        wp_register_script('my-admin2-js', WP_PLUGIN_URL.'/gallery-image/my-admin2.js', array('jquery'));
        wp_enqueue_script('my-admin2-js');

}*/



/*if(basename($_SERVER['PHP_SELF'])=="widgets.php")
  {
function hrw_enqueue_slider()
{
  
	  wp_enqueue_style('thickbox');
	  wp_enqueue_script('media-upload');
	  wp_enqueue_script('thickbox');

	  wp_enqueue_script('hrw_slider', '/wp-content/themes/nflinlondon/include/slider/my-admin_slider.js', null, null, true);
  
}
add_action('admin_enqueue_scripts', 'hrw_enqueue_slider');
}*/


class MY_Widget_slider extends WP_Widget {

	function MY_Widget_slider() {
		$widget_ops = array( 'classname' => 'example3', 'description' => __('Slider Details Input ', 'example3') );
		
		$control_ops = array( 'width' => 300, 'height' => 150, 'id_base' => 'example-widget3' );
		
		$this->WP_Widget( 'example-widget3', __('Slider', 'example3'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance2 ) {
		extract( $args );

		//Our variables from the widget settings.
		$title2 = apply_filters('widget_title', $instance2['title'] );
		//$description1 = $instance2['description1'];
		//$description2 = "<br />".$instance2['description2'];
		//$description3 = $instance2['description3'];
		$link2 = $instance2['link'];
		$image = $instance2['image'];
		//$chlink = isset( $instance2['chlink'] ) ? $instance2['chlink'] : false;
		//$name = $instance['name'];
		//$show_info = isset( $instance['show_info'] ) ? $instance['show_info'] : false;
		
		
		/*global $wpdb;
	$prefix = $wpdb->prefix;
	$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM " . $prefix . "posts" . " WHERE guid='%s';", $title2 ));
		$image2 = wp_get_attachment_image_src( $attachment[0], 'gallery-thumb' );*/
		

		echo $before_widget;

		
			
				
				//echo $before_title . $title2 . $after_title;
				//echo "<li><a target='_blank' href='".$link2."' title='".$title2."'><img src='".$image."' alt='".$title2."'/><h5>".$title2."</h5></a></li>";
				echo "<img src='".$image."' alt='' />
                <div class='slider-cont'>
                <span>";
				if($link2!="")
					echo "<a href='".$link2."'></a>";
				echo "</span><br />
                <p>".$title2."</p>
                </div>";

		
		
		echo $after_widget;
	}

	//Update the widget 
	 
	function update( $new_instance, $old_instance ) {
		$instance2 = $old_instance;

		//Strip tags from title and name to remove HTML 
		$instance2['title'] = strip_tags( $new_instance['title'] );
		//$instance2['description1'] = strip_tags( $new_instance['description1'] );
		//$instance2['description2'] = strip_tags( $new_instance['description2'] );
		//$instance2['description3'] = strip_tags( $new_instance['description3'] );
		$instance2['link'] = strip_tags( $new_instance['link'] );
		$instance2['image'] = strip_tags( $new_instance['image'] );
		//$instance2['chlink'] = $new_instance['chlink'];
		//$instance['name'] = strip_tags( $new_instance['name'] );
		//$instance['show_info'] = $new_instance['show_info'];

		return $instance2;
	}
	
	
	

	
	function form( $instance2 ) {
	
	

		//Set up some default widget settings.
		$defaults = array( 'title' => __('Lorem ipsum', 'example3'), 'image' => __('http://example.com/abc/pqrs/abc.jpg', 'example3'), 'link' => __('http://example.com/', 'example3') , 'example3');
		$instance2 = wp_parse_args( (array) $instance2, $defaults ); 

		//Widget Title: Text Input.?>
        <p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'example3'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance2['title']; ?>" style="width:100%;" />
		</p>
        <p>
			<label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e('Image Url:', 'example3'); ?></label>
			<input id="<?php echo $this->get_field_id( 'image' ); ?>" class='awqsl_2' name="<?php echo $this->get_field_name( 'image' ); ?>" value="<?php echo $instance2['image']; ?>" style="width:100%;" /> <!--<input id="upload_image_button6" class="button" type="button" value="Add Image" />-->
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e('Video Link:', 'example3'); ?></label>
			<input id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo $instance2['link']; ?>" style="width:100%;" />
		</p>
        
      

	<?php
	}
}

?>