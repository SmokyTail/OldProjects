<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="CSS/Reset.css">
		<link rel="stylesheet" href="CSS/TextBase.css">
		<link rel="stylesheet" href="CSS/Product.css">
	</head>
	<body>

		<?php
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

				<a href=""><div class="Buy">
					<p class="TButtonBuy">Добавить в корзину</p>
					<!--<input type="submit" name="korzina" value="Купить">-->
				</div></a>

			</div>
		</form>
		<?php } ?>

	</body>
</html>
