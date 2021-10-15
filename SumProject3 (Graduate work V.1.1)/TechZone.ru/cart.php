<?php 
	require_once ("functions.php");
	
	if(isset($_GET['delete_id']) && isset($_SESSION['cart_list']) && $_GET['delete_id']!='all') {
		foreach($_SESSION['cart_list'] as $key => $value) {
			if($value['ID'] == $_GET['delete_id']) {
				unset($_SESSION['cart_list'][$key]);
			}
		}
	} elseif(isset($_GET['delete_id']) && isset($_SESSION['cart_list']) && $_GET['delete_id']='all') {
		unset($_SESSION['cart_list']);
	}
	
	if(isset($_GET['course_id']) && !empty($_GET['course_id'])) {
		$current_added_course = get_course_by_id($_GET['course_id']);
		
		if(!empty($current_added_course)) {
			if(!isset($_SESSION['cart_list'])) {
				$_SESSION['cart_list'][] = $current_added_course;
			}
			
			$course_check = false;
			
			if(isset($_SESSION['cart_list'])) {
				foreach($_SESSION['cart_list'] as $value) {
					if($value['ID'] == $current_added_course['ID']) {
						$course_check = true;
					}
				}
			}
			
			if(!$course_check) {
				$_SESSION['cart_list'][] = $current_added_course;
			}
		} else {
			print("404");
		}
	}
?>