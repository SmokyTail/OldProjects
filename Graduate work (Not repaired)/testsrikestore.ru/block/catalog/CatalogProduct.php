<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="CSS/Sources/Reset.css">
		<link rel="stylesheet" href="CSS/Sources/TextBase.css">
  		<link rel="stylesheet" href="CSS/Catalog_Product.css">
	  	<link rel="stylesheet" href="CSS/Product.css">
		<script src="JS/js.js"></script>
 	</head>
	<body>

		<div class="CatalogDiv">

			<?php 
				function search ($query) { 
				$query = trim($query); 
				$query = $conn->real_escape_string($query);
				$query = htmlspecialchars($query);

				if (!empty($query)){ 
					if (strlen($query) < 3)  {
						$text = '<div class="FloatTwo"><p class="TProductInfo">Слишком короткий поисковый запрос.</p></div>';
					} else if (strlen($query) > 128) {
						$text = '<div class="FloatTwo"><p class="TProductInfo">Слишком длинный поисковый запрос.</p></div>';
					} else { 
						$q = "SELECT * FROM `StrikeGun` WHERE `Name` LIKE '%$query%' OR `Country` LIKE '%$query%'";
							  
						$result = $conn->query($q);

						if ($conn->affected_rows() > 0) { 
							$oneProduct = mysqli_fetch_assoc($result); 
							$num = mysqli_num_rows($result);

							$text = '<div class="FloatTwo"><p class="TProductInfo">По запросу "'.$query.'" найдено '.$num.' совпадений.</p></div>';

							do {
								
								$text.='
									<div class="Tovar" id="Tovar">

										<div class="Status">
											<p class="TProductStatus">'.$oneProduct['Status'].'</p>
										</div>

										<div class="Discount">
											'.$oneProduct['ImageDiscount'].'
										</div>

										<a href="ProductViewer.php?ID='.$oneProduct['ID'].'&Type='.$oneProduct['Type'].'"><div class="ProductPhoto">
											<img src="'.$oneProduct['Image'].'" alt="'.$oneProduct['Name'].'">
										</div></a>

										<a href="ProductViewer.php?ID='.$oneProduct['ID'].'&Type='.$oneProduct['Type'].'"><div class="ProductName">
											<p class="TProductName">'.$oneProduct['Name'].'</p>
										</div></a>
							
										<div class="ProductInfo">
											<p class="TProductInfo">Артикул: '.$oneProduct['VendorCode'].'</p>
											<p class="TProductInfo">Производитель: '.$oneProduct['Manufacturer'].', '.$oneProduct['Country'].'</p>
										</div>
						
										<div class="ProductCostDisc">
											<p class="TProductCostDisc">'.$oneProduct['DiscountCost'].'</p>
										</div>

										<div class="ProductCost">
											<p class="TProductCost">'.$oneProduct['Cost'].' Р</p>
										</div>

										<a href=""><div class="Buy">
											<p class="TButtonBuy">Добавить в корзину</p>
										</div></a>

									</div>';

								} while ($oneProduct = mysqli_fetch_assoc($result)); 
							} else {
								$text = '<p class="TProductInfo">По вашему запросу ничего не найдено.</p>';
							}
						} 
					} else {
						$text = '<p class="TProductInfo">Задан пустой поисковый запрос.</p>';
					}

					return $text; 
				} 
				
				if (!empty($_POST['query'])) { 
					$search_result = search ($_POST['query']); 
					echo $search_result; 
				}

				foreach($productData as $oneProduct){ 
			?>
				<form  action="<?=$_SERVER[REQUEST_URI];?>" method="POST" enctype="multipart/form-data">
				<div class="Tovar" id="Tovar">
				<input type="hidden" name="tid" value="<?=$oneProduct[ID];?>">
					<div class="Status">
						<p class="TProductStatus"><?=$oneProduct[Status];?></p>
					</div>

					<div class="Discount">
						<?=$oneProduct[ImageDiscount];?>
					</div>

					<a href="ProductViewer.php?ID=<?=$oneProduct[ID];?>&Type=<?=$oneProduct[Type];?>"><div class="ProductPhoto">
						<img src="<?=$oneProduct[Image];?>" alt="<?=$oneProduct[Name];?>">
					</div></a>

					<a href="ProductViewer.php?ID=<?=$oneProduct[ID];?>&Type=<?=$oneProduct[Type];?>"><div class="ProductName">
						<p class="TProductName"><?=$oneProduct[Name];?></p>
					</div></a>
	
					<div class="ProductInfo">
						<p class="TProductInfo">Артикул: <?=$oneProduct[VendorCode];?></p>
						<p class="TProductInfo">Производитель: <?=$oneProduct[Manufacturer];?>, <?=$oneProduct[Country];?></p>
					</div>

					<div class="ProductCostDisc">
						<p class="TProductCostDisc"><?=$oneProduct[DiscountCost];?></p>
					</div>

					<div class="ProductCost">
						<p class="TProductCost"><?=$oneProduct[Cost];?> Р</p>
					</div>
					   <input type="text" value="0" name="kol" class="kol"/>
							<i class="fa fa-plus-square plus" aria-hidden="true"></i>
							<i class="fa fa-minus-square-o minus" aria-hidden="true"></i>
					<a href=""><div class="Buy">
						<p class="TButtonBuy">Добавить в корзину</p>
					<!--<input type="submit" name="korzina" value="Купить">-->
					</div></a>

				</div>
				</form>
			<?php } ?>

		</div>

	</body>
</html>