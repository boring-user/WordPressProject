<?php
include_once("config.php");
include_once("functions.php");
include_once("constants.php");
 
$output = array(); 
$id = $_GET["id"];
 
 if(masterDelete($con , 'messages' , 'id' , $id ))
 {
		                   $mainArr["result"] = 'success';
			               $mainArr["data"] = $output ;
			               $mainArr["message"] = 'operation success';		
 }
 else
 {
			               $mainArr["result"] = 'failed';
			               $mainArr["data"] = [] ;
			               $mainArr["message"] = 'operation failed';		
 }
		
 echo json_encode($mainArr);
		
	 
 
   
   
// http://localhost/chat/send-message.php?senderId=1&receiverId=2&channelId=1&text=hi this is custom message in chat application
 
 
   ?>	
