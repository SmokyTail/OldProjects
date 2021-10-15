<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  		<link rel="stylesheet" href="CSS/Catalog_Product.css">
	  	<link rel="stylesheet" href="CSS/Product.css">
 	</head>
	<body>
	
		<?php
		
			$Manu=$_GET['Manufacturer'];
			$countView=$_GET['Count'];
			
			require_once ("block/catalog/CatalogUpPanel.php");

			if(!isset($_GET['Count'])){
				$countView = 12;
			}else{
				$countView=$_GET['Count'];
			}
			
			// номер страницы
			if(isset($_GET['page'])){
				$pageNum = (int)$_GET['page'];
			}else{
				$pageNum = 1;
			}
			$startIndex = ($pageNum-1)*$countView; // с какой записи начать выборку
			
			// запрос к бд		
			if(isset($_GET['MainType'])){
				$sql = $conn->query("SELECT SQL_CALC_FOUND_ROWS * FROM strikegun WHERE `MainType`='$MT' LIMIT $startIndex, $countView") or die(mysqli_error());
			}elseif(isset($_GET['Type'])){
				$sql = $conn->query("SELECT SQL_CALC_FOUND_ROWS * FROM strikegun WHERE `Type`='$T' LIMIT $startIndex, $countView") or die(mysqli_error());
			}elseif(isset($_GET['ExtraType'])){
				$sql = $conn->query("SELECT SQL_CALC_FOUND_ROWS * FROM strikegun WHERE `ExtraType`='$ET' LIMIT $startIndex, $countView") or die(mysqli_error());
			}elseif(isset($_GET['ImageDiscount'])){
				$sql = $conn->query("SELECT SQL_CALC_FOUND_ROWS * FROM strikegun WHERE `ImageDiscount`!='$Disc' LIMIT $startIndex, $countView") or die(mysqli_error());
			}elseif(isset($_GET['Recomendated'])){
				$sql = $conn->query("SELECT SQL_CALC_FOUND_ROWS * FROM strikegun WHERE `Recomendated`='$Recom' LIMIT $startIndex, $countView") or die(mysqli_error());
			}elseif(isset($_GET['Manufacturer'])){
				$sql = $conn->query("SELECT SQL_CALC_FOUND_ROWS * FROM strikegun WHERE `Manufacturer`='$Manu' LIMIT $startIndex, $countView") or die(mysqli_error());
			}
			$productData = array();
			while($result = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
				$productData[] = $result;
			}
			
			// получение полного количества товаров
			$sql2 = $conn->query("SELECT FOUND_ROWS()");
			$result2 = mysqli_fetch_array($sql2, MYSQLI_ASSOC);
			$countAllNews = $result2["FOUND_ROWS()"];
			
			// номер последней страницы
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

	</body>
</html>