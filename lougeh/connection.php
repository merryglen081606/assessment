<?php
	//connection ni sya sa database
	$conn = new mysqli('localhost', 'root', '', 'lougehdatabase');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}
	
?>
