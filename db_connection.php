<?php
function OpenCon()
 {
 
 $dbhost = "localhost:3306";
 $dbuser = "motion_eurocup";
 $dbpass = "Em3ed19^2";
 $db = "motion_eurocup";
 
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
  
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>