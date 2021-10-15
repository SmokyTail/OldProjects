<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="CSS/Reset.css">
		<link rel="stylesheet" href="CSS/TextBase.css">
  	<link rel="stylesheet" href="CSS/PopProduct.css">
 	</head>
	<body>

		<div class="PopProductsDiv">

			<div class="PopProducts">

				<div class="PopProdText">
					<p class="TTopic">НОВЫЕ ПОСТУПЛЕНИЯ</p>
				</div>
				
				<?php
					$sql = $conn->query("SELECT * FROM strikegun ORDER BY `ID` DESC LIMIT 4") or die(mysqli_error());
					$productData = array();
					while($result = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
						$productData[] = $result;
					}
					
					arsort($productData);

					include ("Product.php");
				?>

			</div>

		</div>

	</body>
</html>
