<?php

include('../connect.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);

	echo("SQL Select");
	$sql = "SELECT * FROM tbl_admin WHERE username = '$username' AND password='$password'";

	echo("Query");
	$result = $conn->prepare($sql); 
	echo("Execute");
	$result->execute(); 
	echo("FetchColumn");
	$count = $result->fetchColumn();  

	if($count == 1){  
		header("location: admin.php");
		$_SESSION['username'] = $username;
	}  
	else{  
		header('location: login.php');
	}  
  
}

?>
