<?php
	$servername = "localhost";
	$username = "mysql";
	$password = "mysql";
	$db = "mainbase";

	$conn = mysqli_connect($servername, $username, $password, $db);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>