<?php
	$servername = "localhost";
	$username = "mysql";
	$password = "mysql";
	$db = "mainbase";

	$conn = new mysqli($servername, $username, $password, $db);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>