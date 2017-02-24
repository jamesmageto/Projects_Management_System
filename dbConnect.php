<?php 
$conn 	= mysql_connect("localhost","root","") or die(mysql_error()); 
$dbName = 'projects';

$db_connect = mysql_select_db($dbName, $conn);

?>
