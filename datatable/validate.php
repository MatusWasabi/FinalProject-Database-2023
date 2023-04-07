<?php

include_once('connect.php');


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    unset($_SESSION['loggedin']);
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM adminlogin");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		if(($user['username'] == $username) &&
			($user['password'] == $password)) {
                $_SESSION['loggedin'] = true;
				header('location: admin.php');
		}
		else {
			header('location: index.php');   
		}
	}
}


?>