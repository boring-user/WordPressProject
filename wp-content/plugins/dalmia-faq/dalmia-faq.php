<?php
/*
Plugin Name: Dalmia FAQ
Description: Managing FAQ.
Author: Prasun
Version: 1.0.1
Author URI: http://www.webphics.com
*/
ob_start();
$siteurl = get_option('siteurl');
define('NCL_FOLDER', dirname(plugin_basename(__FILE__)));
define('NCL_URL', $siteurl.'/wp-content/plugins/' . NCL_FOLDER);
define('NCL_FILE_PATH', dirname(__FILE__));
define('NCL_DIR_NAME', basename(NCL_FILE_PATH));
// this is the table prefix
global $wpdb;
$ncl_table_prefix=$wpdb->prefix.'ncl_';
define('NCL_TABLE_PREFIX', $ncl_table_prefix);
register_activation_hook(__FILE__,'ncl_faq_install');
register_deactivation_hook(__FILE__ , 'ncl_faq_uninstall' );
function ncl_faq_install()
{
	global $wpdb;
	//My jewellery category Table code
	$table = NCL_TABLE_PREFIX."nri_fqcat";
	$structure = "CREATE TABLE $table (
	`nri_fqcat_id` int(200) NOT NULL auto_increment,
	`nri_fqcat_name` varchar(2000) default NULL,
	`nri_fqcat_position` varchar(2000) default NULL,
	`nri_fqcat_img` varchar(2000) default NULL,
	`nri_fqcat_date` date default NULL,
	
	PRIMARY KEY  (`nri_fqcat_id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
	$wpdb->query($structure);
	
	$table = NCL_TABLE_PREFIX."nri_fqsubcat";
	$structure = "CREATE TABLE $table (
	`nri_fqsubcat_id` int(200) NOT NULL auto_increment,
	`nri_fqsubcat_name` varchar(2000) default NULL,
	`nri_fqcat_id` varchar(2000) default NULL,
	`nri_fqsubcat_date` date default NULL,
	
	PRIMARY KEY  (`nri_fqsubcat_id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
	$wpdb->query($structure);
	
	
	$table = NCL_TABLE_PREFIX."nri_ques";
	$structure = "CREATE TABLE $table (
	`nri_ques_id` int(200) NOT NULL auto_increment,
	`ques_name` varchar(2000) default NULL,
	`ques_ans` varchar(2000) default NULL,
	`ques_views` int(200) default NULL,
	`nri_fqsubcat_id` varchar(2000) default NULL,
	`ques_position` int(200) default NULL,
	`nri_faq_date` date default NULL,
	
	PRIMARY KEY  (`nri_ques_id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
	$wpdb->query($structure);
	
	wp_mkdir_p("../wp-content/uploads/faq");
}

function ncl_faq_uninstall()
{
    global $wpdb;
	
	$table = NCL_TABLE_PREFIX."nri_fqcat";
    $structure = "drop table if exists $table";
    $wpdb->query($structure);
	
	$table = NCL_TABLE_PREFIX."nri_fqsubcat";
    $structure = "drop table if exists $table";
    $wpdb->query($structure);
	
	$table = NCL_TABLE_PREFIX."nri_ques";
    $structure = "drop table if exists $table";
    $wpdb->query($structure);
	
	rmdir('../wp-content/uploads/faq');
}

add_action('admin_menu','ncl_admin_faq_menu');
function ncl_admin_faq_menu() { 
	add_menu_page(
		"Dalmia faq",
		"Dalmia faq",
		4,
		__FILE__,
		"ncl_faq_admin"
	); 
	
	add_submenu_page(__FILE__,'Add Faq Category','Add Faq Category','4','ncl_faq_cat','ncl_faq_cat');
	add_submenu_page(__FILE__,'Add Faq Subcategory','Add Faq Subcategory','4','ncl_faq_subcat','ncl_faq_subcat');
	add_submenu_page(__FILE__,'Add Q&A','Add Q&A','4','ncl_ques_ans','ncl_ques_ans');
	add_submenu_page(__FILE__,'Set Homepage Subcategory','Set Homepage Subcategory','4','ncl_hm_subcat','ncl_hm_subcat');
	add_submenu_page(__FILE__,'Set Homepage Q&A','Set Homepage Q&A','4','ncl_hm_quesans','ncl_hm_quesans');
}

function ncl_faq_admin()
{
	wp_enqueue_script('jquery');
	//echo "Now i know how to create a plugin in wordpress!";
	global $wpdb;
	
?>

<?php //include("show_gold_products.php"); ?> 

<?php		
		}

		function ncl_faq_cat()
		{
		wp_enqueue_script('jquery');
		//echo "Now i know how to create a plugin in wordpress!";
		global $wpdb;
		
?>
        
   <div style="background:#FFF;padding:10px; display:none;" class="prfaq1">
	

	<script type="text/javascript">
        function faqcatVal()
        {
            var faqtitleVald=document.forms["faqcat"]["ncl_faq_title"].value;
			var faqposVald=document.forms["faqcat"]["ncl_faq_pos"].value;
			var faqcatlogoVald=document.forms["faqcat"]["faqcatlogo"].value;
        
                if (faqtitleVald == "")
                {
                alert("Please Add FAQ Category Title");
                return false;
                }
				
				if (faqposVald == "")
                {
                alert("Please Add FAQ Position");
                return false;
                }
				
				if (faqcatlogoVald == "")
                {
                alert("Upload FAQ Category Images");
                return false;
                }
                
                return true;
        }
            
    </script>

    <h3 style="padding-left:8px;color:#212121;display:block;font-family:Candara;font-size:22px;font-weight:normal;">Add FAQ Category Details</h3>
    
    <form name="faqcat" method="post" enctype="multipart/form-data" onSubmit="return faqcatVal()">
    <table width='100%' cellpadding='5' cellspacing='5' background='#FFF' style="text-align:left;" border="0">
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Add FAQ Category Name :</td>
    <td ><input type="text" name="ncl_faq_title" value="" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" required/>    
    </td>
    </tr>
    
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Add FAQ Category Position :</td>
    <td >
    <input type="text" name="ncl_faq_pos" value="" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" required/>    
    </td>
    </tr>
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Upload Category Images :</td>
    <td >
     <!--<input type="file" name="file" value="" />-->
     <input type="file" name="faqcatlogo" value="" placeholder="Upload Category Images" style="width: 250px;height:35px;background:#FFFFFF;border:0px solid #999999;border-radius:3px;" required/>
    </td>
    </tr>
    
    <tr>
    <td >&nbsp;</td>
    <td style='text-align:left;'><input type="submit" value="Add Details" style="cursor:pointer;background:#212121;text-align:center;color:#FFFFFF;font-family:calibri;padding:10px 20px;outline:none;font-size:16px;text-transform:capitalize;border:none;border-radius:3px;"/></td>
    </tr>
    
    </table>
</form>
     <?php
	 
	  if(isset($_POST['ncl_faq_title']))
   		{	
				$faqcatlogo = $_FILES ['faqcatlogo'];
				$teamf1 = $faqcatlogo ['name'];
				$teamf2 =  date("d-m-y-").rand()."--".$teamf1;
				$teamf3 = mysql_real_escape_string(stripslashes($teamf2));
				$type1 = $faqcatlogo ['type'];
				$size1 = $faqcatlogo ['size']/1048576;
				$tmppathfront1 = $faqcatlogo ['tmp_name'];
		
				if(move_uploaded_file ($tmppathfront1, '../wp-content/uploads/faq/'.$teamf1))//image is a folder in which you will save image
					{
					rename('../wp-content/uploads/faq/'.$teamf1,'../wp-content/uploads/faq/'.$teamf3);
					
					$ncl_faq_title= mysql_real_escape_string(stripslashes($_POST['ncl_faq_title']));
					$ncl_faq_pos= mysql_real_escape_string(stripslashes($_POST['ncl_faq_pos']));
					
					$table = NCL_TABLE_PREFIX."nri_fqcat";
					
					mysql_query("insert into `$table` (`nri_fqcat_name`,`nri_fqcat_position`,`nri_fqcat_img`,`nri_fqcat_date`) values('$ncl_faq_title','$ncl_faq_pos','$teamf3',CURDATE())");
				
					//$lastId= mysql_insert_id();
					
					$pathres= "?page=ncl_faq_cat";
					header("location:".$pathres);
					
					}	
		}
		?>
          
    </div>
    
     <?php include("show_faq_cat.php"); ?> 
   
<?php
		
		}
		
		function ncl_faq_subcat()
		{
		wp_enqueue_script('jquery');
		//echo "Now i know how to create a plugin in wordpress!";
		global $wpdb;
		
?>


<div style="background:#FFF;padding:10px;" class="prfaq12">
	<script type="text/javascript">
        function subfaqcatVal()
        {
            var subfaqtitleVald=document.forms["subfaqcat"]["ncl_subfaq_title"].value;
			var parentfqcatVald=document.forms["subfaqcat"]["parentfqcat"].value;
		
                if (subfaqtitleVald == "")
                {
                alert("Please Add FAQ Category Title");
                return false;
                }
				
				if (parentfqcatVald == "")
                {
                alert("Please Choose FAQ Category");
                return false;
                }
				
				if (parentfqcatVald == '0')
                {
                alert("Please Choose FAQ Category");
                return false;
                }
                
                return true;
        }
            
    </script>
    
    <h3 style="padding-left:8px;color:#212121;display:block;font-family:Candara;font-size:22px;font-weight:normal;">Add FAQ Sub-Category Details</h3>
    
    <form name="subfaqcat" method="post" onSubmit="return subfaqcatVal()">
    <table width='100%' cellpadding='5' cellspacing='5' background='#FFF' style="text-align:left;" border="0">
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Add FAQ Sub Category Name :</td>
    <td ><input type="text" name="ncl_subfaq_title" value="" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" required/>    
    </td>
    </tr>
      
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Choose FAQ Category :</td>
    <td >
    <?php 
    $table=NCL_TABLE_PREFIX."nri_fqcat";
    $query = mysql_query("SELECT * FROM $table");
	echo "<select name='parentfqcat' style='width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;'>";
	echo "<option value='0'>"."Please Choose FAQ Category</option>";	
	while ($row = mysql_fetch_array($query)) 
	{
	 echo '<option value="'.$row['nri_fqcat_id'].'">'.$row['nri_fqcat_name'].'</option>';
	}	
	?>
    </td>
    </tr>
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Add FAQ Sub Category Position :</td>
    <td ><input type="text" name="ncl_subfaqp_pos" value="" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" required/>
    </td>
    </tr>

    <tr>
    <td >&nbsp;</td>
    <td style='text-align:left;'><input type="submit" value="Add Details" style="cursor:pointer;background:#212121;text-align:center;color:#FFFFFF;font-family:calibri;padding:10px 20px;outline:none;font-size:16px;text-transform:capitalize;border:none;border-radius:3px;"/></td>
    </tr>
    
    </table>
</form>


 <?php
	 
	  if(isset($_POST['ncl_subfaq_title']))
   		{	
					$ncl_subfaq_title= mysql_real_escape_string(stripslashes($_POST['ncl_subfaq_title']));
					$parentfqcat= mysql_real_escape_string(stripslashes($_POST['parentfqcat']));
					$ncl_subfaqp_pos= mysql_real_escape_string(stripslashes($_POST['ncl_subfaqp_pos']));
					
					$table = NCL_TABLE_PREFIX."nri_fqsubcat";
					
					mysql_query("insert into `$table` (`nri_fqsubcat_name`,`nri_fqcat_id`,`sub_position`,`home_subcat_position`,`nri_fqsubcat_date`) values('$ncl_subfaq_title','$parentfqcat','$ncl_subfaqp_pos','0',CURDATE())");
				
					$pathres= "?page=ncl_faq_subcat";
					header("location:".$pathres);
					
		}
?>

    </div>
    
<?php include("show_subfaq_cat.php"); ?> 


<?php
	
	}
	
	function ncl_ques_ans()
	{
	wp_enqueue_script('jquery');
	
	//echo "Now i know how to create a plugin in wordpress!";
	global $wpdb;
	
?>
     
   <div style="background:#FFF;padding:10px;" class="prfaq13">
   


	<script type="text/javascript">
        function quesVal()
        {
            var questitleVald=document.forms["ques"]["ncl_ques_title"].value;
			var ansVald=document.forms["ques"]["ncl_ans"].value;
			var childfqcatVald=document.forms["ques"]["childfqcat"].value;
		
			if (questitleVald == "")
			{
			alert("Please Add Question");
			return false;
			}
			
			if (ansVald == "")
			{
			alert("Please Add Answer");
			return false;
			}
			
			if (childfqcatVald == '0')
			{
			alert("Please Choose Sub Category");
			return false;
			}
			
			return true;
        }   
    </script>  
    <h3 style="padding-left:8px;color:#212121;display:block;font-family:Candara;font-size:22px;font-weight:normal;">Add Question Answer Details</h3>
    
    <form name="ques" method="post" onSubmit="return quesVal()">
    <table width='100%' cellpadding='5' cellspacing='5' background='#FFF' style="text-align:left;" border="0">
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Add Questions :</td>
    <td ><input type="text" name="ncl_ques_title" value="" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" required/>    
    </td>
    </tr>
      
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Add Answer :</td>
    <td >
    <textarea name="ncl_ans" style="width: 280px;height:100px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;"></textarea>
    </td>
    </tr>
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Choose Sub Category :</td>
    <td >
    <?php 
    $table=NCL_TABLE_PREFIX."nri_fqsubcat";
    $query = mysql_query("SELECT * FROM $table");
	echo "<select name='childfqcat' style='width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;'>";
	echo "<option value='0'>"."Please Choose Sub Category</option>";	
	while ($row = mysql_fetch_array($query)) 
	{
	 echo '<option value="'.$row['nri_fqsubcat_id'].'">'.$row['nri_fqsubcat_name'].'</option>';
	}	
	?>
    </td>
    </tr>
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Add Position :</td>
    <td >
    <input type="text" name="ncl_ques_pos" value="" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" required/>
    </td>
    </tr>

    <tr>
    <td >&nbsp;</td>
    <td style='text-align:left;'><input type="submit" value="Add Details" style="cursor:pointer;background:#212121;text-align:center;color:#FFFFFF;font-family:calibri;padding:10px 20px;outline:none;font-size:16px;text-transform:capitalize;border:none;border-radius:3px;"/></td>
    </tr>
    
    </table>
</form>


 <?php
	 
	  if(isset($_POST['ncl_ques_title']))
   		{	
					$ncl_ques_title= mysql_real_escape_string(stripslashes($_POST['ncl_ques_title']));
					$ncl_ans= mysql_real_escape_string(stripslashes($_POST['ncl_ans']));
					$childfqcat= mysql_real_escape_string(stripslashes($_POST['childfqcat']));
					$qsfqpos= mysql_real_escape_string(stripslashes($_POST['ncl_ques_pos']));
					
					$table = NCL_TABLE_PREFIX."nri_ques";
					
					mysql_query("insert into `$table` (`ques_name`,`ques_ans`,`ques_views`,`nri_fqsubcat_id`,`ques_position`,`home_ques_position`,`nri_faq_date`) values('$ncl_ques_title','$ncl_ans','0','$childfqcat','$qsfqpos','0',CURDATE())");
				
					$pathres= "?page=ncl_ques_ans";
					header("location:".$pathres);	
		}
?>

    </div>
    
<?php include("show_question.php"); ?> 
    
        
<?php
	}
	
		function ncl_hm_subcat()
		{
		wp_enqueue_script('jquery');
		
		//echo "Now i know how to create a plugin in wordpress!";
		global $wpdb;
?>

<?php include("homepage_subcat_pos.php"); ?> 

<?php	
	}
	
	function ncl_hm_quesans()
	{
	wp_enqueue_script('jquery');
	//echo "Now i know how to create a plugin in wordpress!";
	global $wpdb;
	?>
    
	<?php include("homepage_show_question.php"); ?> 
	
	<?php
	}
	
	add_filter('widget_text', 'do_shortcode');
	add_shortcode("ncl_logout_display","ncl_logout_faq_function");
	function ncl_logout_faq_function($atts) 
	{
	session_start();
	$pl=get_site_url();
	unset($_SESSION['userEmail']);
	unset($_SESSION['userName']);
	session_unset();
	session_destroy();
	wp_redirect($pl,301); 
	exit;
	}
?>




