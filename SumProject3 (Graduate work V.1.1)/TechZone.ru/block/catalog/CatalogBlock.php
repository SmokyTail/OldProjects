<?php		
	if(isset($_GET['Manufacturer'])){
		$Manu=$_GET['Manufacturer'];
	}
	
	if(isset($_GET['Count'])){
		$countView=$_GET['Count'];
	}
	
	require_once ("block/catalog/CatalogUpPanel.php");

	if(!isset($_GET['Count'])){
		$countView = 12;
	}else{
		$countView=$_GET['Count'];
	}

	if(isset($_GET['page'])){
		$pageNum = (int)$_GET['page'];
	}else{
		$pageNum = 1;
	}
	$startIndex = ($pageNum-1)*$countView;
	
	if(isset($_GET['Type'])){
		$sql = $conn->query("SELECT SQL_CALC_FOUND_ROWS * FROM `products` INNER JOIN `$T` ON products.productID = $T.ID WHERE products.Type='$T' LIMIT $startIndex, $countView") or die(mysqli_error());
	}elseif(isset($_GET['Manufacturer'])){
		$sql = $conn->query("SELECT SQL_CALC_FOUND_ROWS * FROM `products` INNER JOIN `$T` ON products.productID = $T.ID WHERE `Manufacturer`='$Manu' LIMIT $startIndex, $countView") or die(mysqli_error());
	}
	$productData = array();
	while($result = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
		$productData[] = $result;
	}

	$sql2 = $conn->query("SELECT FOUND_ROWS()");
	$result2 = mysqli_fetch_array($sql2, MYSQLI_ASSOC);
	$countAllNews = $result2["FOUND_ROWS()"];

	$lastPage = ceil($countAllNews/$countView);

	if ($pageNum < 1) { 
	$pageNum = 1;
	} 
	elseif ($pageNum > $lastPage) { 
	$pageNum = $lastPage; 
	} 
	$neighbours = 5; 
	$left_neighbour = $pageNum - $neighbours; 
	if ($left_neighbour < 1) $left_neighbour = 1; 

	$right_neighbour = $pageNum + $neighbours; 
	if ($right_neighbour > $lastPage) $right_neighbour = $lastPage;
	
	require ("block/catalog/CatalogPaginator.php");			
	require_once ("block/catalog/CatalogProduct.php");						
	require ("block/catalog/CatalogPaginator.php");						
	require_once ("block/catalog/CatalogDownPanel.php");			
?>