<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="CSS/Sources/Reset.css">
		<link rel="stylesheet" href="CSS/Sources/TextBase.css">
  		<link rel="stylesheet" href="CSS/Catalog_Product.css">
	  	<link rel="stylesheet" href="CSS/Product.css">
 	</head>
	<body>
	
		<?php
		
			require_once ("db.php");

			$name=$_GET['Name'];
			$country=$_GET['Country'];
			$countView=$_GET['Count'];			

			require_once ("block/catalog/Search/CatalogSearchUpPanel.php");


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
			$sql = mysql_query("SELECT SQL_CALC_FOUND_ROWS * FROM StrikeGun WHERE `Name`='$name' and `Country`='$country' LIMIT $startIndex, $countView") or die(mysql_error());
			$productData = array();
			while($result = mysql_fetch_array($sql, MYSQL_ASSOC)){
			$productData[] = $result;
			}
			
			// получение полного количества товаров
			$sql2 = mysql_query("SELECT FOUND_ROWS()");
			$result2 = mysql_fetch_array($sql2, MYSQL_ASSOC);
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

			
			require_once ("block/catalog/CatalogProduct.php");

			require_once ("block/catalog/Search/CatalogSearchDownPanel.php");
			
		?>

	</body>
</html>