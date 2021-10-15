<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="CSS/Reset.css">
		<link rel="stylesheet" href="CSS/TextBase.css">
  	<link rel="stylesheet" href="CSS/DiscProduct.css">
 	</head>
	<body>

		<div class="DiscProductsDiv">

			<div class="DiscProducts">

				<div class="DiscProdText">
					<p class="TTopic">СКИДКА 10% НА АВТОМАТЫ И ВИНТОВКИ ОТ CYMA!</p>
				</div>

				<?php
					$a='<img src="images/DISCOUNT.PNG" alt="">';
					
					$sql = $conn->query("SELECT * FROM strikegun WHERE `ImageDiscount`='$a' LIMIT 4") or die(mysqli_error());
					$productData = array();
					while($result = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
					  $productData[] = $result;
					}
					
					include ("Product.php");
				?>
				
			</div>

		</div>

	</body>
</html>
