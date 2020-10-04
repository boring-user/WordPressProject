<?php
include_once("config.php");
include_once("functions.php");
include_once("constants.php");
date_default_timezone_set("Asia/calcutta"); 
set_time_limit(1000000);
 
 
$mediaType = $_POST["mediaType"]; 
$photoType = $_POST["photoType"];

if($photoType == 'user' )
{
	$userId = $_GET["userId"];
	$photoPath = $usersImagePath;
}
if($photoType == 'problem')
{
$photoPath = '/images/';
}

if($photoType == 'message')
{
$photoPath = $messageImagePath;
}

$t=time();
 
if(isset($_FILES["file"]["name"]))
{
	 if($mediaType == 'video')
	 {
	   $new_image_name1 = $_FILES["file"]["name"];
	    move_uploaded_file($_FILES["file"]["tmp_name"], getcwd()."".$photoPath."".$t.".mp4");
        $result = array();
        $result['path'] = $photoPath."".$t.'.mp4';
        echo json_encode($result);
	 }
	 
	  if($mediaType == 'image')
	 {
		 
	 if($photoType == 'user')
	 {		 
	   $new_image_name1 = $_FILES["file"]["name"];
	    move_uploaded_file($_FILES["file"]["tmp_name"], getcwd()."".$photoPath."".$userId.".jpg");
        $result = array();
        $result['path'] = $photoPath."".$userId.'.jpg';
        echo json_encode($result);
	 }
	 else
	 {
		 $new_image_name1 = $_FILES["file"]["name"];
	    move_uploaded_file($_FILES["file"]["tmp_name"], getcwd()."".$photoPath."".$t.".jpg");
        $result = array();
        $result['path'] = $photoPath."".$t.'.jpg';
        echo json_encode($result);
	 }
	 }
} 
 
else
{
	        echo '[{ "success" : "0" , "message" : "failed"}]';
	
}


mysqli_close($con); ?>