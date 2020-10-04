<?php
/*
Plugin Name: Upload Excel
Description: Managing Excel.
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
register_activation_hook(__FILE__,'ncl_install');
register_deactivation_hook(__FILE__ , 'ncl_uninstall' );
function ncl_install()
{
	global $wpdb;
	//My jewellery category Table code
	$table = NCL_TABLE_PREFIX."scheme_performance";
	$structure = "CREATE TABLE $table (
	`scheme_performance_id` int(200) NOT NULL auto_increment,
	`scheme_title` varchar(2000) default NULL,
	`as_on_date` varchar(2000) default NULL,
	`scheme_cat` varchar(2000) default NULL,
	`scheme_name` varchar(2000) default NULL,
	`one_yr` varchar(2000) default NULL,
	`three_yr` varchar(2000) default NULL,
	`five_yr` varchar(2000) default NULL,
	`ten_yr` varchar(2000) default NULL,
	`fifteen_yr` varchar(2000) default NULL,
	
	PRIMARY KEY  (`scheme_performance_id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
	$wpdb->query($structure);
	
	$table = NCL_TABLE_PREFIX."scheme_intial_cat";
	$structure = "CREATE TABLE $table (
	`scheme_cat_id` int(200) NOT NULL auto_increment,
	`scheme_cat_name` varchar(2000) default NULL,
	PRIMARY KEY  (`scheme_cat_id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
	$wpdb->query($structure);
	
	
	$table = NCL_TABLE_PREFIX."sip_performance";
	$structure = "CREATE TABLE $table (
	`sip_performance_id` int(200) NOT NULL auto_increment,
	`sip_title` varchar(2000) default NULL,
	`as_on_date` varchar(2000) default NULL,
	`sip_cat` varchar(2000) default NULL,
	`sip_name` varchar(2000) default NULL,
	`one_yr` varchar(2000) default NULL,
	`three_yr` varchar(2000) default NULL,
	`five_yr` varchar(2000) default NULL,
	`ten_yr` varchar(2000) default NULL,
	`fifteen_yr` varchar(2000) default NULL,
	
	PRIMARY KEY  (`sip_performance_id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
	$wpdb->query($structure);
	
	
	$table = NCL_TABLE_PREFIX."sip_intial_cat";
	$structure = "CREATE TABLE $table (
	`sip_cat_id` int(200) NOT NULL auto_increment,
	`sip_cat_name` varchar(2000) default NULL,
	PRIMARY KEY  (`sip_cat_id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
	$wpdb->query($structure);

	wp_mkdir_p("../wp-content/uploads/excel_file");
}
function ncl_uninstall()
{
    global $wpdb;
	
	$table = NCL_TABLE_PREFIX."scheme_performance";
    $structure = "drop table if exists $table";
    $wpdb->query($structure);
	
	$table = NCL_TABLE_PREFIX."sip_performance";
    $structure = "drop table if exists $table";
    $wpdb->query($structure);
	
	$table = NCL_TABLE_PREFIX."scheme_intial_cat";
    $structure = "drop table if exists $table";
    $wpdb->query($structure);
	
	$table = NCL_TABLE_PREFIX."sip_intial_cat";
    $structure = "drop table if exists $table";
    $wpdb->query($structure);
	
	rmdir('../wp-content/uploads/excel_file');
}
add_action('admin_menu','ncl_admin_menu');
function ncl_admin_menu() { 
	add_menu_page(
		"Dalmia Excel Upload",
		"Dalmia Excel Upload",
		4,
		__FILE__,
		"ncl_admin"
	); 
	
	add_submenu_page(__FILE__,'Scheme Performance','Scheme Performance','4','ncl_scheme_performance','ncl_scheme_performance');
	add_submenu_page(__FILE__,'SIP Performance','SIP Performance','4','ncl_sip_performance','ncl_sip_performance');
}

function ncl_admin()
{
	wp_enqueue_script('jquery');
	//echo "Now i know how to create a plugin in wordpress!";
	global $wpdb;
	
?>

<!--<h3 style="text-transform:uppercase;font-family:'Trebuchet MS';color:#212121;font-size:25px;font-weight:normal;">Choose Initial Category :</h3>-->

<?php //include("show_gold_products.php"); ?> 

<?php		
		}

		function ncl_scheme_performance()
		{
		wp_enqueue_script('jquery');
		//echo "Now i know how to create a plugin in wordpress!";
		global $wpdb;
		
?>
        
   <div style="background:#FFF;padding:10px;">
	

	<script type="text/javascript">
        function scpVal()
        {
            var scptitleVald=document.forms["schemeperformance"]["ncl_scp_title"].value;
			var scpdtVald=document.forms["schemeperformance"]["ncl_scp_dt"].value;
			var scpfileVald=document.forms["schemeperformance"]["file"].value;
        
                if (scptitleVald == "")
                {
                alert("Please Add Scheme Performance Title");
                
                return false;
                }
				
				if (scpdtVald == "")
                {
                alert("Please Add As on Date");
                
                return false;
                }
				
				if (scpfileVald == "")
                {
                alert("Upload Scheme Performance Csv File");
                return false;
                }
                
                return true;	
                
        }
            
    </script>
    
	<?php     
	$table = NCL_TABLE_PREFIX."scheme_performance";
	$sql = "SELECT *FROM $table";
	
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	//echo $count;
	if(empty($count)){
	?>
    <h3 style="padding-left:8px;color:#212121;display:block;font-family:Candara;font-size:22px;font-weight:normal;">Upload Scheme Performance Excel Sheet</h3>
    <form name="schemeperformance" method="post" enctype="multipart/form-data" onSubmit="return scpVal()">
    <table width='100%' cellpadding='5' cellspacing='5' background='#FFF' style="text-align:left;" border="0">
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Add Scheme Performance Title :</td>
    <td ><input type="text" name="ncl_scp_title" value="" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" />    
    </td>
    </tr>
    
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Add As on Date :</td>
    <td >
    <input type="text" name="ncl_scp_dt" value="" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" />    
    </td>
    </tr>
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Upload CSV File :</td>
    <td >
     <input type="file" name="file" value="" />
    </td>
    </tr>
    
    <tr>
    <td >&nbsp;</td>
    <td style='text-align:left;'><input type="submit" value="Import SCheme Excel Sheet" style="cursor:pointer;background:#212121;text-align:center;color:#FFFFFF;font-family:calibri;padding:10px 20px;outline:none;font-size:16px;text-transform:capitalize;border:none;border-radius:3px;"/></td>
    </tr>
    
    </table>
</form>

	<?php 
    }
	else{
	echo "<span class='dsgn' style='padding-left:8px;color:#FFF;display:block;font-family:Candara;font-size:18px;font-weight:normal;text-align:center;padding:10px 0;background:#212121'>"."If You Want To Upload New Record Please Delete Previous Record First"."</span>";
	}
    
    ?>
    
     <?php
	 
	  if(isset($_POST['ncl_scp_title']))
   		{
				$ncl_scp_title= mysql_real_escape_string(stripslashes($_POST['ncl_scp_title']));
				$ncl_scp_dt= mysql_real_escape_string(stripslashes($_POST['ncl_scp_dt']));
				
	 			$table = NCL_TABLE_PREFIX."scheme_performance";
				if(is_uploaded_file($_FILES['file']['tmp_name'])) {

	if($_FILES['file']['type']=="application/vnd.ms-excel") {
		//$f_name=$folder.time().$_FILES['file']['name'];
		$f_name="../wp-content/uploads/excel_file/".time().$_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'],$f_name);
		
		if (($handle = fopen($f_name, "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$num = count($data);
			for ($c=0; $c < $num; $c++) {
				//$query="INSERT INTO dtls(name,email)VALUES('".$data[0]."','".$data[1]."')";
				//$query="INSERT INTO dtls(name,email)VALUES('5','s')";
				//mysql_query($query,$link) or die('Error4: '.mysql_error($link));
				//echo $data[$c] . " | ";
			}
		mysql_query("insert into `$table`(scheme_title,as_on_date,scheme_cat,scheme_name,one_yr,three_yr,five_yr,ten_yr,fifteen_yr) values('$ncl_scp_title','$ncl_scp_dt','".mysql_real_escape_string(stripslashes($data[0]))."','".mysql_real_escape_string(stripslashes($data[1]))."','".mysql_real_escape_string(stripslashes($data[2]))."','".mysql_real_escape_string(stripslashes($data[3]))."','".mysql_real_escape_string(stripslashes($data[4]))."','".mysql_real_escape_string(stripslashes($data[5]))."','".mysql_real_escape_string(stripslashes($data[6]))."')");		
		}
		fclose($handle);
		echo "Successfully imported.";
		
		 $pathref= $_SERVER['PHP_SELF']."?page=ncl_scheme_performance";
   	     header( 'refresh: 0.1; url='.$pathref);
		//echo $num;
		}
	
	} else {
		echo "Not supported file format.";
	}
	}		
		}
		?>
          
    </div>
    
     <?php include("show_scheme_performence.php"); ?> 
   
<?php
		
		}
		
		function ncl_sip_performance()
		{
		wp_enqueue_script('jquery');
		//echo "Now i know how to create a plugin in wordpress!";
		global $wpdb;
		
?>


<div style="background:#FFF;padding:10px;">
	

	<script type="text/javascript">
        function sipVal()
        {
            var siptitleVald=document.forms["sipperformance"]["ncl_sip_title"].value;
			var sipdtVald=document.forms["sipperformance"]["ncl_sip_dt"].value;
			var sipfileVald=document.forms["sipperformance"]["file"].value;
        
                if (siptitleVald == "")
                {
                alert("Please Add SIP Performance Title");
                
                return false;
                }
				
				if (sipdtVald == "")
                {
                alert("Please Add As on Date");
                
                return false;
                }
				
				if (sipfileVald == "")
                {
                alert("Upload SIP Performance Csv File");
                return false;
                }
                
                return true;	
                
        }
            
    </script>
    
	<?php     
	$table = NCL_TABLE_PREFIX."sip_performance";
	$sql = "SELECT *FROM $table";
	
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	//echo $count;
	if(empty($count)){
	?>
    <h3 style="padding-left:8px;color:#212121;display:block;font-family:Candara;font-size:22px;font-weight:normal;">Upload SIP Performance Excel Sheet</h3>
    <form name="sipperformance" method="post" enctype="multipart/form-data" onSubmit="return sipVal()">
    <table width='100%' cellpadding='5' cellspacing='5' background='#FFF' style="text-align:left;" border="0">
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Add SIP Performance Title :</td>
    <td ><input type="text" name="ncl_sip_title" value="" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" />    
    </td>
    </tr>
    
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Add As on Date :</td>
    <td >
    <input type="text" name="ncl_sip_dt" value="" style="width: 280px;height:30px;background:#FFFFFF;border:1px solid #999999;border-radius:3px;" />    
    </td>
    </tr>
    
    <tr>
    <td style='text-align:left;font-size:17px;color:#000000;'>Upload CSV File :</td>
    <td >
     <input type="file" name="file" value="" />
    </td>
    </tr>
    
    <tr>
    <td >&nbsp;</td>
    <td style='text-align:left;'><input type="submit" value="Import SIP Excel Sheet" style="cursor:pointer;background:#212121;text-align:center;color:#FFFFFF;font-family:calibri;padding:10px 20px;outline:none;font-size:16px;text-transform:capitalize;border:none;border-radius:3px;"/></td>
    </tr>
    
    </table>
</form>

	<?php 
    }
	else{
		echo "<span class='dsgn' style='padding-left:8px;color:#FFF;display:block;font-family:Candara;font-size:18px;font-weight:normal;text-align:center;padding:10px 0;background:#212121'>"."If You Want To Upload New Record Please Delete Previous Record First"."</span>";
	}
    
    ?>
    
     <?php
	 
	  if(isset($_POST['ncl_sip_title']))
   		{
				$ncl_sip_title= mysql_real_escape_string(stripslashes($_POST['ncl_sip_title']));
				$ncl_sip_dt= mysql_real_escape_string(stripslashes($_POST['ncl_sip_dt']));
				
	 			$table = NCL_TABLE_PREFIX."sip_performance";
				if(is_uploaded_file($_FILES['file']['tmp_name'])) {

	if($_FILES['file']['type']=="application/vnd.ms-excel") {
		//$f_name=$folder.time().$_FILES['file']['name'];
		$f_name="../wp-content/uploads/excel_file/".time().$_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'],$f_name);
		
		if (($handle = fopen($f_name, "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$num = count($data);
			for ($c=0; $c < $num; $c++) {
				//$query="INSERT INTO dtls(name,email)VALUES('".$data[0]."','".$data[1]."')";
				//$query="INSERT INTO dtls(name,email)VALUES('5','s')";
				//mysql_query($query,$link) or die('Error4: '.mysql_error($link));
				//echo $data[$c] . " | ";
			}
		mysql_query("insert into `$table`(sip_title,as_on_date,sip_cat,sip_name,one_yr,three_yr,five_yr,ten_yr,fifteen_yr) values('$ncl_sip_title','$ncl_sip_dt','".mysql_real_escape_string(stripslashes($data[0]))."','".mysql_real_escape_string(stripslashes($data[1]))."','".mysql_real_escape_string(stripslashes($data[2]))."','".mysql_real_escape_string(stripslashes($data[3]))."','".mysql_real_escape_string(stripslashes($data[4]))."','".mysql_real_escape_string(stripslashes($data[5]))."','".mysql_real_escape_string(stripslashes($data[6]))."')");		
		}
		fclose($handle);
		echo "Successfully imported.";
		
		 $pathref= $_SERVER['PHP_SELF']."?page=ncl_sip_performance";
   	     header( 'refresh: 0.1; url='.$pathref);
		//echo $num;
		}
	
	} else {
		echo "Not supported file format.";
	}
	}		
		}
		?>
          
    </div>
    
     <?php include("show_sip_performence.php"); ?> 


<?php
		}
		
		add_filter('widget_text', 'do_shortcode');
		
	
		
		add_shortcode("ncl_logout_display","ncl_logout_function");
		
		function ncl_logout_function($atts) 
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




