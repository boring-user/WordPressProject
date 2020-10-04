<?php
include_once("config.php");
include_once("functions.php");
include_once("constants.php");
 
 error_reporting(E_ALL); ini_set('display_errors', 0);  
 
 
 
 
  //$result = mysqli_query($con, $sql);
//while ($row = mysqli_fetch_assoc($result))
 
 
 
 
//check how many records are in database
$sql0 = "SELECT COUNT(*) FROM notifications where seen = 'NO'";
$result0 = mysqli_query($con, $sql0);
$r = mysqli_fetch_array($result0);
$numrows = $r[0];
 
 
$rowsperpage = 10;
$totalpages = ceil($numrows / $rowsperpage);
 
// get the current page or set a default
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
$currentpage = (int) $_GET['currentpage'];
} else {
$currentpage = 1;  // default page number
}
 
// if current page is greater than total pages
if ($currentpage > $totalpages) {
// set current page to last page
$currentpage = $totalpages;
}
// if current page is less than first page
if ($currentpage < 1) {
// set current page to first page
$currentpage = 1;
}
 
// the offset of the list, based on current page
$offset = ($currentpage - 1) * $rowsperpage;
 
// get the info from the MySQL database
$sql = "SELECT * FROM notifications where seen = 'NO'  ORDER BY id DESC LIMIT $offset, $rowsperpage";
$result = mysqli_query($con, $sql);
 
while ($row = mysqli_fetch_assoc($result)){
	
 
$output[]=$row;
 
$id=$row["id"];
}
 
 

// check more records starts

$sql2 = "SELECT count(*) as more FROM notifications where  seen = 'NO' AND  id < '".$id."'";
$result2 = mysqli_query($con, $sql2);
while ($row2 = mysqli_fetch_assoc($result2)){
$count=$row2["more"];
}


 

	if(mysqli_num_rows($result)>0   )   
	{
		                   $mainArr["result"] = 'success';
			               $mainArr["data"] = $output ;
			               $mainArr["message"] = 'operation success';
                           $mainArr["moreRecords"] = $count;						   
	}
    else
	{
			               $mainArr["result"] = 'failed';
			               $mainArr["data"] = [] ;
			               $mainArr["message"] = 'No User Found';	
                           $mainArr["moreRecords"] = $count;							   
	}
	
	

 

print(json_encode($mainArr));


//http://localhost/chat/get-messages.php?currentpage=6


   ?>	
