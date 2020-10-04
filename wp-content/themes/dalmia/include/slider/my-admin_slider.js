/*jQuery(document).ready(function($){*/
 
 
    /*var custom_uploader5;
 
 
    $('#upload_image_button5').click(function(e) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader5) {
            custom_uploader5.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader5 = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader5.on('select', function() {
            attachment = custom_uploader5.state().get('selection').first().toJSON();
            $('.awqsl_1').val(attachment.url);
        });
 
        //Open the uploader dialog
        custom_uploader5.open();*/
		
	
 
 
/*});*/
	
	
	
	
	
	var image_field2;
jQuery(function($){
  $(document).on('click', 'input#upload_image_button6', function(evt){
	image_field2 = $('.awqsl_2');
    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=false');
    return false;
  });
  window.send_to_editor = function(html) {
    imgurl = $('img', html).attr('src');
    image_field2.val(imgurl);
   tb_remove();
  }
});
