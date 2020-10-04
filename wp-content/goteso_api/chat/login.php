<?php
include_once("config.php");
 
 include_once("functions.php");
 
date_default_timezone_set($serverTimeZone); 
 
 
 
 
$notificationToken = $_GET["notificationToken"];


$sql22=" select * from users where notificationToken ='".$notificationToken."'";
$result22 = mysqli_query($con ,$sql22);
while($row22 = mysqli_fetch_assoc($result22))
      { 
         $userId22 = $row22["incId"];
         
          $sql00="update users  SET notificationToken ='' where incId ='".$userId22."'";
         $result00 = mysqli_query($con,$sql00);	   
	  }
 
  
  

	 $sql=" select * from users where userName ='".$_GET["userName"]."' AND  password ='".$_GET["password"]."'";
$result = mysqli_query($con ,$sql);
 $user = array();
while($row = mysqli_fetch_assoc($result))
      { 
   
		 
       
         $id = $row["id"];
         unset($row["password"]);
        $userDetailsArr[] = $row;
	  }
if(mysqli_num_rows($result)>0)
  {
	        masterUpdate($con , 'users' , 'notificationToken' , $notificationToken , 'userName' , $_GET["userName"] );
	         $mainArr["result"] = 'success';
			                         $mainArr["data"] = $userDetailsArr ;
			                         $mainArr["message"] = 'Login Successfull';
  }
else 
  {
   		  $mainArr["result"] = 'failed';
			                         $mainArr["data"] = []; 
			                         $mainArr["message"] = 'login Failed';      
  }
  
  

 

echo json_encode($mainArr);
			 
			 
			 
  
  // http://localhost/bike/login.php?userName=8195046027&password=pass
?>
