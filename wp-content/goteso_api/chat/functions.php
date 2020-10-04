<?php
include_once("config.php");
include_once("constants.php");
 error_reporting(0);
  ini_set('display_errors', 0); 
 date_default_timezone_set("Asia/calcutta"); 
 
 

 
//****MASTER UPDATE
function masterUpdate($con , $tableName , $setVar , $setVarValue , $whereVar , $whereVarValue )
{
	 $sql="update ".$tableName."  SET ".$setVar." ='".$setVarValue."' where ".$whereVar." ='".$whereVarValue."'";
         $result = mysqli_query($con,$sql);	   
		 if(mysqli_affected_rows($con) > 0 )
		 { return 1; } else { return null;}
}	  

//****MASTER DELETE
function masterDelete($con , $tableName , $whereVar , $whereVarValue )
{
	 $sql="DELETE from ".$tableName." where ".$whereVar." ='".$whereVarValue."'";
         $result = mysqli_query($con,$sql);
		 if(mysqli_affected_rows($con) > 0 )
		 { return 1; } else { return null;}
}

 
 
//****MASTER GET
function masterGet($con ,  $getVar  , $tableName , $whereVar , $whereVarValue )
{
	$sql="SELECT ".$getVar." FROM ".$tableName." WHERE ".$whereVar." ='".$whereVarValue."'";
    $result = mysqli_query($con,$sql);
      
                     while($row = mysqli_fetch_array($result))
	                {
                      $value=$row[$getVar];
                     }
					 
					 
					  if(mysqli_num_rows($result)>0   ) { return $value; }
 else { return ''; }
	
}

 

//uses - postsList.php , postsListUserImages.php , postsListUser.php
function maxUserId($con)
{
$users = array();
$sql = "select max(id) as maxId from users";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($result))
	{
       $maxId = $row["maxId"];
	}
	
  if(mysqli_num_rows($result)>0)
                       { return $maxId; } else { return null; }
}

function daysDifference($startDate , $endDate)
{
$datetime1 = new DateTime($startDate);
$datetime2 = new DateTime($endDate);
$interval = $datetime1->diff($datetime2);
return $interval->format('%R%a days');
}



  
 
//function to return present datetime in microseconds
function serverDateTime()
{
	$time =microtime(true);
    $micro_time=sprintf("%06d",($time - floor($time)) * 1000000);
    $date=new DateTime( date('Y-m-d H:i:s.'.$micro_time,$time) );
return $date->format("Y-m-d H:i:s.u");
}

//******************************************************************signup.php ends***********************************************************************************//
 


//******************************************************************login.php starts***********************************************************************************//
 //uses - login.php
function login($con  , $email  , $password )
{
$sql=" select * from dealerinfo where dealer ='".$email."' AND password= '".$password."'";
$result = mysqli_query($con ,$sql);
$user = array();

while($row = mysqli_fetch_assoc($result))
      { 
       $row["message"] = 'login successfull';
       $user[]= $row; }
 
 
if(mysqli_num_rows($result)>0)
  {
	  
$user_detail = json_encode($user);
	  
return $user_detail;} else { return null;}
 }
 
 
 
 
 function placeOrder($con  , $details , $type , $date , $dealerEmail , $ro , $special_instructions )
 {
	$sql="INSERT INTO orders ( details , type , date , ro , special_instructions )
	VALUES ( '".$details."' , '".$type."' , '".$date."' , '".$ro."'  , '".$special_instructions."' )";
	
	$result = mysqli_query($con ,$sql);
	
	if($result)
	{
		


		return 1;
	}
	else
	{
		return null;
	}
 }
  
 
 
 
 
   
  function sendMessageNotification( $con , $notificationToken , $senderId , $senderName , $channelId , $channelName ){
 
	//$authToken = 'b4777979-ecfb-48d4-9207-1f191cf537f8';
	// $authToken = masterGet($con ,  'authToken'  , 'users' , 'id' , $userId );
	//$firstName = masterGet($con ,  'firstName'  , 'users' , 'id' , $userId );
 
 
 if($senderId == '1') { 
     
    
  //  echo '-hi1-';
     $senderName = 'DASPL';
 
 }
 
 
 if($senderId != '1')
 {
      // echo '-hi2-';
         $notificationTokenArr = array();
   
     
$sql=" select notificationToken from users where id ='1'";
$result = mysqli_query($con ,$sql);
$user = array();

while($row = mysqli_fetch_assoc($result))
      {  
       $notificationTokenArr[]= $row["notificationToken"]; } 
 
 }
     
 
	$text = 'You Got a New Response from '.$senderName.' in '.$channelName.' channel';
		$sql1="INSERT INTO notifications ( text , sender_id , channel_id , seen )
	VALUES ( '".$text."' , '".$senderId."' , '".$channelId."','NO')";
	
	$result1 = mysqli_query($con ,$sql1);
	
	
	//$data = array( 'message' => 'event reminder', 'body' => 'hi' , 'sound'=>'','badge'=>1,"aps" => '{"alert"=>"You got your Notification","badge"=>1,"sound"=>"default"}');
    //$registration_ids = $tokenArr;
	
	  	$data = array( 'title' => 'travel', 'subtitle' => 'Hi' , 'ios_sound'=>'' , 'channelId'=>$channelId , 'senderId'=> $senderId );
	  	
	  	
	  	
	  	
	 	if($senderId != '1')	
	{ 	
	    //	    echo '----to admin-----';
    $registration_ids = $notificationTokenArr; //
	}
	else
	{
	    	 //   echo '----to user-----';
	    
	 $registration_ids = $notificationToken; //
	}
	
	$content = array(
	"en" => 'You Got a New Response from '.$senderName.' in '.$channelName.' channel'
		
			);
	$title = array(
			"en" => ''
			);
	$subTitle = array(
				"en" => '' 
			);
			
	
	
	
///	echo $notificationToken;
	if($senderId != '1')	
	{
	    
	  //  echo '----to admin-----';
	  //  
	  //  echo json_encode($notificationTokenArr);
	    
	  //  echo '*******************************';
    	$fields = array(
			//'app_id' => "2898b157-f468-44ae-8756-fde887ac95ea",
			
		//'app_id' =>	"a33cb1d8-b0cf-410d-a96e-379953ea53a7",
		'app_id' =>	"f7618b79-21d7-43b4-9edc-102b9c7a07e8",
		
			'include_player_ids' => $notificationTokenArr,
			'data' => $data,
			'contents' => $content,
			'headings' => $title,
			'logout' => '1',
			'subtitle' => $subTitle,
			'ios_badgeCount'=>1,
			'ios_badgeType'=>'Increase',
			'channelId' => $channelId,
				'senderId' => $senderId
 
		);
	}
 else
 {
     
    // echo '----to user-----';
     	$fields = array(
			//'app_id' => "2898b157-f468-44ae-8756-fde887ac95ea",
			
		//'app_id' =>	"a33cb1d8-b0cf-410d-a96e-379953ea53a7",
		'app_id' =>	"f7618b79-21d7-43b4-9edc-102b9c7a07e8",
		
			'include_player_ids' => array($notificationToken),
			'data' => $data,
			'contents' => $content,
			'headings' => $title,
			'logout' => '1',
			'subtitle' => $subTitle,
			'ios_badgeCount'=>1,
			'ios_badgeType'=>'Increase',
			'channelId' => $channelId,
				'senderId' => $senderId
 
		);
 }
		
		
	//	echo "----".$senderId."----";
	$fields = json_encode($fields);
 //   	print("\nJSON sent:\n");
  //   	print($fields);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
												   'Authorization: Basic NGEwMGZmMjItY2NkNy0xMWUzLTk5ZDUtMDAwYzI5NDBlNjJj'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 
 		$response = curl_exec($ch);
		curl_close($ch);
//		$return["allresponses"] = $response;
	    
 //		$return = json_encode( $return);
	
// print("\n\nJSON received:\n");
// print($return);
// print("\n");

//print("---".$authToken."---");

// print("---".$authToken."---");
}





 
 
//******************************************************************login.php ends***********************************************************************************//
 
 
?>