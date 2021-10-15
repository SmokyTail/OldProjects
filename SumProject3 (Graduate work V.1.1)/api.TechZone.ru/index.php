<?php
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Headers: *');
	header('Access-Control-Allow-Methods: *');
	header('Access-Control-Allow-Credentials: true');
	header('Content-Type: json/application');
	
	require ('db.php');
	require ('functions.php');
	
	$method = $_SERVER['REQUEST_METHOD'];
	
	$q = $_GET['q'];
	$params = explode('/', $q);
	
	$type = $params[0];
	$id = $params[1];
	
	if($method === 'GET'){
		if($type === 'cases'){
			if(isset($id)){
				getCase($conn, $id);
			} else {
				getCases($conn);
			}		
		}
	} elseif ($method === 'POST') {
		if($type === 'cases'){
			addCase($conn, $_POST);
		}
	} elseif ($method === 'PATCH') {
		if($type === 'cases'){
			if(isset($id)){
				$data = file_get_contents('php://input');
				$data = json_decode($data, true);
				updateCase($conn, $id, $data);
			}	
		}
	} elseif ($method === 'DELETE') {
		if($type === 'cases'){
			if(isset($id)){
				deleteCase($conn, $id);
			}
		}
	}
?>