<?php
	/*$db = mysqli_connect('localhost','mysql','');
	mysqli_select_db('mainbase',$db);
	mysqli_query("set_client='utf8'");
	mysqli_query("set_character_set_results='utf8'");
	mysqli_query("set collator_connection='utf8_general_ci'");
	mysqli_query("SET NAMES utf8");*/
?>

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