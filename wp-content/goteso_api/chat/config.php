<?php
$db_username = 'dalmiaadvisory_app';
$db_password = 'app@goteso.com';
$db_name = 'dalmiaadvisory_app';
$db_host = 'localhost';
//error_reporting(E_ALL); ini_set('display_errors', 0);					
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
 
define("DB_HOST", $db_host);
define("DB_NAME", $db_name);
define("DB_USER", $db_username);
define("DB_PASS", $db_password);

$con=mysqli_connect($db_host,$db_username,$db_password,$db_name);// Check connection
 
 
?>