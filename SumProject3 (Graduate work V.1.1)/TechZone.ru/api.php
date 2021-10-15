<?php
	session_start();
	
	require_once ("db.php");
	require_once ("functions.php");
	
	if(isset($_POST['course_id'])){
		$current_added_course = get_course_by_id($_POST['course_id']);
		$current_cart_value = 0;		
		
		if(!isset($_SESSION['cart_list'])) {
			$_SESSION['cart_list'][] = $current_added_course;
			$current_cart_value = count($_SESSION['cart_list']);
		}
		
		$course_check = false;
		
		if(isset($_SESSION['cart_list'])) {
			foreach($_SESSION['cart_list'] as $value) {
				if($value['ID'] == $current_added_course['ID']) {
					$course_check = true;					
				}
			}
			if(!$course_check) {
				$_SESSION['cart_list'][] = $current_added_course;
				$current_cart_value = count($_SESSION['cart_list']);			
			}
			$current_cart_value = count($_SESSION['cart_list']);
		}
	}
	
	echo $current_cart_value;	
?>