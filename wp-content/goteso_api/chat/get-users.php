<?php
include_once("config.php");
include_once("functions.php");
include_once("constants.php");
 
 error_reporting(E_ALL); ini_set('display_errors', 0);  
 
 
// get the info from the MySQL database
$sql = "SELECT * FROM users ORDER BY name ASC";
$result = mysqli_query($con, $sql);
 
while ($row = mysqli_fetch_assoc($result)){
$output[]=$row;
$userId=$row["id"];
}
 
 
 

	if(mysqli_num_rows($result)>0   )   
	{
		                   $mainArr["result"] = 'success';
			               $mainArr["data"] = $output ;
			               $mainArr["message"] = 'operation success';
                           $mainArr["moreRecords"] = '0';						   
	}
    else
	{
			               $mainArr["result"] = 'failed';
			               $mainArr["data"] = [] ;
			               $mainArr["message"] = 'No User Found';	
                           $mainArr["moreRecords"] = '0';						   
	}
	
	

 

print(json_encode($mainArr));


 //http://localhost/chat/get-users.php?currentpage=2
   ?>	
