<?php
	//include("../connect.php");
	$s789 = "localhost";
	$u789 = "root";
	$p789 = '';
	$d789 = "myonsite_hms";
	
	
	$db7 = new PDO("mysql:host=$s789;dbname=$d789", $u789, $p789);	
	/*$conn = new mysqli($servername, $username, $password,$db);

	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	
	*/
?>