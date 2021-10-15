<?php
	require_once "db.php";
	
	function get_course_by_id($id){
		global $conn;
		
		$query = "SELECT * FROM products WHERE `productID`=" . $id;
		$req = mysqli_query($conn, $query);
		$resp = $req->fetch_array();
		
		$TofProd = $resp['Type'];
		$prodID = $resp['productID'];
		$sql = $conn->query("SELECT * FROM `products` INNER JOIN `$TofProd` WHERE products.productID='$prodID' and $TofProd.ID='$prodID'") or die(mysqli_error());	
		$result = $sql->fetch_array();
		
		return $result;
	}
	
	function pluralForm($n, $form1, $form2, $form5) {
		$n = abs($n) % 100;
		$n1 = $n % 10;
		if ($n > 10 && $n < 20) return $form5;
		if ($n1 > 1 && $n1 < 5) return $form2;
		if ($n1 == 1) return $form1;
		return $form5;
	}
?>