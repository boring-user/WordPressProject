<?php
include_once("config.php");
include_once("functions.php");
include_once("constants.php");
 
 
  //$result = mysqli_query($con, $sql);
//while ($row = mysqli_fetch_assoc($result))

       


$channels = array("","Request Portfolio Report", "Request Account Statements", "Request Collection","Request Call Back","Fresh Investment","Others");
$output = array(); 
 
    $senderId = $_GET["senderId"];
	$channelId = $_GET["channelId"];
	$receiverId = $_GET["receiverId"];
	$text = $_GET["text"];
 
 
    $mainArr = array();
    $createdAt = serverDateTime();
 
 	$sql1="INSERT INTO messages ( senderId , receiverId , channelId , text , createdAt )
	VALUES ( '".$senderId."' , '".$receiverId."' , '".$channelId."','".$text."' , '".$createdAt."' )";
	
	$result1 = mysqli_query($con ,$sql1);
	
	
	
	$sql = "SELECT * FROM messages where (( senderId = '".$senderId."' AND receiverId = '".$receiverId."'  ) OR ( receiverId = '".$senderId."' AND senderId = '".$receiverId."' ))   ORDER BY id DESC LIMIT 5";
$result =  mysqli_query($con, $sql);
 
while ($row =  mysqli_fetch_assoc($result)){
	
$channelId2 = $row["channelId"];
$senderId2 = $row["senderId"];

		   $senderName2 = masterGet($con ,  'name'  , 'users' , 'id' , $senderId2 );
		   $senderUserType = masterGet($con ,  'userType'  , 'users' , 'id' , $senderId2 );
		   $row["senderName"] = $senderName2;
		   $row["senderUserType"] = $senderUserType;

 
if($channelId2 == $channelId)
{	
$output[]=$row;
}
$id=$row["id"];
}
 
 
 
 
	
	if($result1)
	{
		                  
						   $senderName = masterGet($con ,  'name'  , 'users' , 'id' , $senderId );
						   $notificationToken = masterGet($con ,  'notificationToken'  , 'users' , 'id' , $_GET["receiverId"] );
						   $channelName = $channels[$channelId];
		                
						   
		                   sendMessageNotification( $con , $notificationToken , $senderId , $senderName , $channelId , $channelName );
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
